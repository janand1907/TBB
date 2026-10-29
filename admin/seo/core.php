<?php
declare(strict_types=1);
require_once dirname(__DIR__) . '/bootstrap.php';
require_once dirname(__DIR__) . '/blog-lib.php';

function seo_headers(): void {
    header('Cache-Control: no-store, max-age=0');
    header('Pragma: no-cache');
    header('X-Robots-Tag: noindex, nofollow, noarchive');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: same-origin');
}
function seo_h(mixed $text): string { return htmlspecialchars(is_scalar($text)?(string)$text:'', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function seo_db(): PDO { return blog_db(); }
function seo_user(PDO $db): array {
    $session = require_admin();
    $requestHost=parse_url('http://'.($_SERVER['HTTP_HOST']??''),PHP_URL_HOST);
    if (PHP_SAPI !== 'cli' && (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') && !in_array($requestHost, ['localhost','127.0.0.1'], true)) {
        http_response_code(403); exit('HTTPS is required.');
    }
    $q=$db->prepare('SELECT id,name,email,role,status FROM users WHERE id=?');
    $q->execute([(int)($session['id']??0)]);
    $user=$q->fetch();
    if (!$user || $user['status']!=='active') { http_response_code(403); exit('Account unavailable.'); }
    return $user;
}
function seo_access(array $user,string $cap): void { require_capability($user,$cap); }
function seo_date(mixed $v): ?string { return is_string($v) && preg_match('/^\d{4}-\d{2}-\d{2}$/D',$v) && checkdate((int)substr($v,5,2),(int)substr($v,8,2),(int)substr($v,0,4)) ? $v : null; }
function seo_enum(string $v,array $allowed,string $fallback): string { return in_array($v,$allowed,true)?$v:$fallback; }
function seo_safe_page(string $v): string {
    $v=trim($v);
    if ($v==='') return '';
    $p=parse_url($v);
    if (!$p || ($p['scheme']??'')!=='https' || strtolower($p['host']??'')!=='www.divinebalajitravels.com' || isset($p['user']) || isset($p['pass']) || isset($p['port']) || isset($p['fragment']) || strlen($v)>500) throw new InvalidArgumentException('Choose a canonical website URL.');
    return $v;
}
function seo_flash(string $message,bool $error=false): void { $_SESSION['seo_flash']=['text'=>$message,'error'=>$error]; }
function seo_go(string $section='overview'): never { header('Location: /admin/seo/?section='.rawurlencode($section),true,303); exit; }
function seo_audit(PDO $db,array $user,string $action,string $type,int $id,array $details=[]): void { audit($db,$user,$action,$type,$id,$details); }
function seo_insert_ignore(PDO $db,string $table,array $row): bool {
    if(!in_array($table,['seo_keywords','seo_observations','seo_weekly_summaries'],true))throw new InvalidArgumentException('Unsupported SEO table.');
    $cols=array_keys($row); $ph=implode(',',array_fill(0,count($cols),'?'));
    $driver=$db->getAttribute(PDO::ATTR_DRIVER_NAME);
    $sql=($driver==='sqlite'?'INSERT OR IGNORE INTO ':'INSERT IGNORE INTO ').$table.' ('.implode(',',$cols).') VALUES ('.$ph.')';
    $s=$db->prepare($sql); $s->execute(array_values($row)); return $s->rowCount()>0;
}
function seo_observation_key(array $o): string {
    return hash('sha256',json_encode([$o['property_id'],$o['period_start'],$o['period_end'],$o['data_date'],$o['search_type'],$o['grain'],$o['query_text'],$o['page_url'],$o['country'],$o['device'],$o['source']],JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
}
function seo_store_observation(PDO $db,array $o): string {
    $o['observation_key']=seo_observation_key($o);
    $q=$db->prepare('SELECT clicks,impressions,ctr,position FROM seo_observations WHERE observation_key=?'); $q->execute([$o['observation_key']]); $old=$q->fetch();
    if (!$old) {
        return seo_insert_ignore($db,'seo_observations',$o)?'added':'unchanged';
    }
    if ((float)$old['clicks']===(float)$o['clicks'] && (float)$old['impressions']===(float)$o['impressions'] && ($old['ctr']===null?$o['ctr']===null:(float)$old['ctr']===(float)$o['ctr']) && ($old['position']===null?$o['position']===null:(float)$old['position']===(float)$o['position'])) return 'unchanged';
    $s=$db->prepare('UPDATE seo_observations SET clicks=?,impressions=?,ctr=?,position=?,imported_at=CURRENT_TIMESTAMP WHERE observation_key=?');
    $s->execute([$o['clicks'],$o['impressions'],$o['ctr'],$o['position'],$o['observation_key']]); return 'updated';
}
function seo_cache_clear(PDO $db): int { $n=$db->exec('DELETE FROM seo_dashboard_cache'); return (int)$n; }
function seo_setting(PDO $db,string $key,string $fallback): string { $q=$db->prepare('SELECT setting_value FROM seo_settings WHERE setting_key=?');$q->execute([$key]);$v=$q->fetchColumn();return is_string($v)?$v:$fallback; }
function seo_cache(PDO $db,string $key,int $seconds,callable $create): array {
    $q=$db->prepare('SELECT payload_json FROM seo_dashboard_cache WHERE cache_key=? AND expires_at>?'); $q->execute([$key,gmdate('Y-m-d H:i:s')]); $v=$q->fetchColumn();
    if (is_string($v)) { $d=json_decode($v,true); if(is_array($d))return $d; }
    $d=$create(); $expires=gmdate('Y-m-d H:i:s',time()+$seconds); $json=json_encode($d,JSON_THROW_ON_ERROR);
    $db->prepare('REPLACE INTO seo_dashboard_cache(cache_key,payload_json,expires_at) VALUES(?,?,?)')->execute([$key,$json,$expires]); return $d;
}
function seo_period(string $selection,?string $from=null,?string $to=null,?string $anchor=null): array {
    $conservativeEnd=(new DateTimeImmutable('yesterday',new DateTimeZone('America/Los_Angeles')))->modify('-2 days');
    $end=$anchor && seo_date($anchor)?new DateTimeImmutable($anchor,new DateTimeZone('America/Los_Angeles')):$conservativeEnd;
    if($selection==='custom') { $a=seo_date($from);$b=seo_date($to); if(!$a||!$b||$a>$b||$b>$conservativeEnd->format('Y-m-d')||strtotime($b)-strtotime($a)>366*86400)throw new InvalidArgumentException('Choose a finalized date range of at most 366 days.'); return [$a,$b]; }
    $days=match($selection){'latest'=>1,'previous7'=>7,'last28'=>28,'previous28'=>28,default=>7};
    if(str_starts_with($selection,'previous'))$end=$end->modify('-'.$days.' days');
    return [$end->modify('-'.($days-1).' days')->format('Y-m-d'),$end->format('Y-m-d')];
}
function seo_reporting_property(PDO $db): ?string {
    $p=$db->query('SELECT property_id FROM seo_google_connections WHERE id=1')->fetchColumn();
    if($p)return (string)$p;
    $p=$db->query("SELECT property_id FROM seo_observations WHERE source='gsc_api' ORDER BY imported_at DESC,id DESC LIMIT 1")->fetchColumn();
    return $p?(string)$p:null;
}
function seo_stats(PDO $db,string $from,string $to): array {
    $property=seo_reporting_property($db);if(!$property)return [];
    $q=$db->prepare("SELECT COALESCE(SUM(clicks),0) clicks,COALESCE(SUM(impressions),0) impressions,CASE WHEN SUM(impressions)>0 THEN SUM(clicks)/SUM(impressions) END ctr,CASE WHEN SUM(impressions)>0 THEN SUM(position*impressions)/SUM(impressions) END position,MAX(data_date) latest_date,COUNT(*) observed_days FROM seo_observations WHERE grain='property' AND country='all' AND device='all' AND data_date BETWEEN ? AND ? AND source='gsc_api' AND property_id=?");
    $q->execute([$from,$to,$property]);return $q->fetch()?:[];
}
function seo_keyword_rows(PDO $db,bool $primary=false): array {
    $sql='SELECT k.*,u.name assigned_name FROM seo_keywords k LEFT JOIN users u ON u.id=k.assigned_user_id'.($primary?' WHERE k.is_primary=1':'').' ORDER BY k.is_primary DESC,CASE k.priority WHEN \'High\' THEN 1 WHEN \'Medium\' THEN 2 ELSE 3 END,k.id';
    return $db->query($sql)->fetchAll();
}
function seo_country_code(string $country): ?string {
    $country=strtolower(trim($country));
    if(in_array($country,['all','all countries','gsc all countries'],true))return 'all';
    $codes=['india'=>'ind','usa'=>'usa','united states'=>'usa','united states of america'=>'usa','uk'=>'gbr','united kingdom'=>'gbr','canada'=>'can','australia'=>'aus','singapore'=>'sgp','malaysia'=>'mys','sri lanka'=>'lka','uae'=>'are','united arab emirates'=>'are','saudi arabia'=>'sau','qatar'=>'qat','kuwait'=>'kwt','oman'=>'omn','bahrain'=>'bhr'];
    return $codes[$country]??(preg_match('/^[a-z]{3}$/D',$country)?$country:null);
}
function seo_keyword_performance(PDO $db,array $keyword): array {
    // Exact-query, daily, same country/device filter and aggregation basis.
    $country=seo_country_code($keyword['country']);$device=strtolower($keyword['device']);
    if($country===null)return ['latest'=>null,'previous'=>null,'movement'=>null];
    $property=seo_reporting_property($db);if(!$property)return ['latest'=>null,'previous'=>null,'movement'=>null];
    $where="grain='query' AND query_text=? AND data_date IS NOT NULL AND search_type='web' AND source='gsc_api' AND property_id=? AND EXISTS (SELECT 1 FROM seo_refresh_runs rr WHERE rr.data_date=seo_observations.data_date AND rr.property_id=seo_observations.property_id AND rr.status='success')";
    $params=[$keyword['keyword'],$property];
    if($country!=='all'){$where.=' AND country=?';$params[]=$country;}
    if(!in_array($device,['all','all devices','gsc all devices'],true)){$where.=' AND device=?';$params[]=$device;}
    $q=$db->prepare("SELECT data_date,SUM(clicks) clicks,SUM(impressions) impressions,CASE WHEN SUM(impressions)>0 THEN SUM(position*impressions)/SUM(impressions) END position FROM seo_observations WHERE $where GROUP BY data_date ORDER BY data_date DESC LIMIT 2");
    $q->execute($params);$r=$q->fetchAll();
    if(count($r)<2)return ['latest'=>$r[0]??null,'previous'=>null,'movement'=>null];
    $gap=(strtotime($r[0]['data_date'])-strtotime($r[1]['data_date']))/86400;
    return ['latest'=>$r[0],'previous'=>$gap===1?$r[1]:null,'movement'=>$gap===1 && $r[0]['position']!==null && $r[1]['position']!==null?(float)$r[1]['position']-(float)$r[0]['position']:null];
}
function seo_page_context(PDO $db,string $page): array {
    $q=$db->prepare('SELECT keyword FROM seo_keywords WHERE target_page=? OR mapped_page=? ORDER BY is_primary DESC,priority LIMIT 4');$q->execute([$page,$page]);$targets=$q->fetchAll(PDO::FETCH_COLUMN);
    $property=seo_reporting_property($db);if(!$property)return ['targets'=>$targets,'queries'=>[],'current'=>null,'previous'=>null];
    $q=$db->prepare("SELECT query_text FROM seo_observations WHERE grain='query_page' AND source='gsc_api' AND property_id=? AND page_url=? GROUP BY query_text ORDER BY MAX(data_date) DESC,SUM(impressions) DESC LIMIT 4");$q->execute([$property,$page]);$queries=$q->fetchAll(PDO::FETCH_COLUMN);
    $q=$db->prepare("SELECT data_date,SUM(clicks) clicks,SUM(impressions) impressions,CASE WHEN SUM(impressions)>0 THEN SUM(position*impressions)/SUM(impressions) END position FROM seo_observations WHERE grain='page' AND source='gsc_api' AND property_id=? AND page_url=? AND EXISTS (SELECT 1 FROM seo_refresh_runs rr WHERE rr.data_date=seo_observations.data_date AND rr.property_id=seo_observations.property_id AND rr.status='success') GROUP BY data_date ORDER BY data_date DESC LIMIT 2");$q->execute([$property,$page]);$rows=$q->fetchAll();
    $previous=isset($rows[1])&&(strtotime($rows[0]['data_date'])-strtotime($rows[1]['data_date']))===86400?$rows[1]:null;
    return ['targets'=>$targets,'queries'=>$queries,'current'=>$rows[0]??null,'previous'=>$previous];
}
function seo_csv_cell(mixed $v): string { $s=(string)($v??''); return preg_match('/^[\s\x00-\x1F]*[=+@\-]/u',$s)?"'".$s:$s; }
