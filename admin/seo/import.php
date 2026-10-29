<?php
declare(strict_types=1);
require_once __DIR__ . '/core.php';

function seo_import_dir(): string {
    $private=dirname(__DIR__,3).'/tbb-seo-import/2026-10-24';
    $local=dirname(__DIR__,3).'/TBB-SEO-Reporting/2026-10-24';
    return is_dir($private)?$private:$local;
}
function seo_import_files(): array { return ['keyword-master-tracker.csv','keyword-to-page-map.csv','daily-ranking-history.csv','weekly-seo-performance-summary.csv','gsc-export/Queries.csv','gsc-export/Pages.csv','gsc-export/Countries.csv','gsc-export/Devices.csv','seo-action-log.csv']; }
function seo_csv_rows(string $file): Generator {
    $f=fopen($file,'rb'); if(!$f)throw new RuntimeException('Private report unavailable.');
    try {
        $head=fgetcsv($f,0,',','"',''); if(!$head)throw new RuntimeException('CSV header missing.');
        $head[0]=preg_replace('/^\xEF\xBB\xBF/','',$head[0]);
        while(($row=fgetcsv($f,0,',','"',''))!==false){if(count($row)===1 && $row[0]===null)continue; if(count($row)!==count($head))throw new RuntimeException('CSV row has a different number of columns.');yield array_combine($head,$row);}
    } finally {fclose($f);}
}
function seo_import_preview(PDO $db): array {
    $base=seo_import_dir();$result=[];
    foreach(seo_import_files() as $name){$path=$base.'/'.$name; if(!is_file($path)){$result[$name]=['available'=>false];continue;}
        $hash=hash_file('sha256',$path);$q=$db->prepare('SELECT rows_seen,rows_added,imported_at FROM seo_import_batches WHERE source_name=? AND file_hash=?');$q->execute([$name,$hash]);
        $n=0;foreach(seo_csv_rows($path) as $_)$n++;
        $result[$name]=['available'=>true,'rows'=>$n,'hash'=>$hash,'imported'=>$q->fetch()?:null];
    }
    return $result;
}
function seo_float(string $v): ?float { $v=trim(str_replace(',','',$v));if($v===''||!is_numeric($v))return null;return (float)$v; }
function seo_pct(string $v): ?float { $v=trim($v);if($v==='')return null;return str_ends_with($v,'%')?((float)rtrim($v,'%'))/100:seo_float($v); }
function seo_import_observation(PDO $db,array $o,string $hash): bool {
    $o['source_batch']=$hash;
    return seo_store_observation($db,$o)==='added';
}
function seo_import_historical(PDO $db,array $user): array {
    $base=seo_import_dir();$result=[];
    if(!is_file($base.'/keyword-master-tracker.csv'))throw new RuntimeException('Private keyword master is unavailable. Upload the private report copies outside public_html first.');
    // Each file is committed separately so an individual import can be retried safely.
    foreach(seo_import_files() as $name){$path=$base.'/'.$name;if(!is_file($path)){$result[$name]='missing';continue;}
        $hash=hash_file('sha256',$path);$q=$db->prepare('SELECT id FROM seo_import_batches WHERE source_name=? AND file_hash=?');$q->execute([$name,$hash]);if($q->fetchColumn()){$result[$name]='already imported';continue;}
        $seen=0;$added=0;$db->beginTransaction();
        try {
            foreach(seo_csv_rows($path) as $r){$seen++; $source='gsc_export_2026-10-24';$periodStart='2026-07-23';$periodEnd='2026-10-20';
                if($name==='keyword-master-tracker.csv'){
                    $key=trim($r['Keyword']);if($key==='')continue;
                    $primary=$seen<=25?1:0;
                    $row=['keyword'=>$key,'category'=>mb_substr($r['Keyword category'],0,120),'intent'=>mb_substr($r['Search intent'],0,80),'priority'=>seo_enum($r['Priority'],['High','Medium','Low'],'Low'),'is_primary'=>$primary,'country'=>mb_substr($r['Target country'],0,80),'target_city'=>mb_substr($r['Target city'],0,120),'device'=>mb_substr($r['Device'],0,30),'target_page'=>seo_safe_page($r['Target landing page']),'recommended_action'=>$r['Recommended action'],'source'=>'2026-10-24 master','source_detail'=>mb_substr($r['Data source'],0,255),'source_notes'=>$r['Notes'],'original_assignee'=>mb_substr($r['Assigned employee'],0,120),'original_latest_date'=>seo_date($r['Latest data date']),'source_snapshot_json'=>json_encode($r,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_THROW_ON_ERROR),'source_row_hash'=>hash('sha256',$key)];
                    if(seo_insert_ignore($db,'seo_keywords',$row))$added++;
                    continue;
                }
                if($name==='keyword-to-page-map.csv'){
                    $q=$db->prepare('UPDATE seo_keywords SET mapped_page=?,mapping_intent=?,mapping_market=?,mapping_confidence=?,mapping_notes=? WHERE keyword=?');
                    $q->execute([seo_safe_page($r['Primary landing page']),mb_substr($r['Intent'],0,80),mb_substr($r['Target market'],0,80),mb_substr($r['Mapping confidence'],0,255),$r['Notes'],$r['Keyword']]);
                    $added+=$q->rowCount();continue;
                }
                if($name==='daily-ranking-history.csv'){
                    // Only observed sitewide chart rows are historical daily observations.
                    if($r['Data source']!=='GSC Performance chart'||$r['Keyword']!=='All queries (sitewide)'||!seo_date($r['Measurement date']))continue;
                    $date=$r['Measurement date'];$imps=seo_float($r['GSC impressions'])??0;$o=['property_id'=>'sc-domain:divinebalajitravels.com','data_date'=>$date,'period_start'=>$date,'period_end'=>$date,'search_type'=>'web','grain'=>'property','query_text'=>'','page_url'=>'','country'=>'all','device'=>'all','clicks'=>seo_float($r['GSC clicks'])??0,'impressions'=>$imps,'ctr'=>$imps>0?seo_float($r['GSC CTR']):null,'position'=>$imps>0?seo_float($r['GSC average position']):null,'source'=>'gsc_chart_export'];
                    if(seo_import_observation($db,$o,$hash))$added++;continue;
                }
                if($name==='weekly-seo-performance-summary.csv'){
                    if(!seo_date($r['Week start (PT)'])||!seo_date($r['Last included date']))continue;
                    $row=['source_key'=>hash('sha256',$name.'|'.$r['Week start (PT)']),'week_start'=>$r['Week start (PT)'],'period_end'=>$r['Last included date'],'clicks'=>seo_float($r['Organic clicks']),'impressions'=>seo_float($r['Impressions']),'ctr'=>seo_pct($r['CTR']),'position'=>seo_float($r['Impression-weighted daily avg position (derived)']),'source'=>'2026-10-24 weekly report'];
                    if(seo_insert_ignore($db,'seo_weekly_summaries',$row))$added++;continue;
                }
                if($name==='seo-action-log.csv'){
                    $title=mb_substr($r['Workstream'].' — '.$r['Page/area'],0,200);
                    $description=$r['Evidence']."\n".$r['Recommended action']."\nOriginal assignee: ".$r['Assigned employee']."; source status: ".$r['Status'];
                    // Existing users are not guessed from free-text team names. Imported tasks remain unassigned.
                    $key=hash('sha256',$name.'|'.$seen.'|'.$title);
                    $q=$db->prepare('SELECT id FROM seo_tasks WHERE title=? AND description=?');$q->execute([$title,$description]);if($q->fetchColumn())continue;
                    $status=match($r['Status']){'Blocked'=>'Blocked','In Progress'=>'In Progress','Review'=>'Review','Completed'=>'Completed',default=>'To Do'};
                    $db->prepare('INSERT INTO seo_tasks(title,description,priority,status,created_by) VALUES(?,?,?,?,?)')->execute([$title,$description,'Medium',$status,(int)$user['id']]);$added++;continue;
                }
                $map=['gsc-export/Queries.csv'=>['grain'=>'query','field'=>'Top queries'],'gsc-export/Pages.csv'=>['grain'=>'page','field'=>'Top pages'],'gsc-export/Countries.csv'=>['grain'=>'country','field'=>'Country'],'gsc-export/Devices.csv'=>['grain'=>'device','field'=>'Device']];
                if(isset($map[$name])){
                    $m=$map[$name];$value=trim($r[$m['field']]);if($value==='')continue;
                    $o=['property_id'=>'sc-domain:divinebalajitravels.com','data_date'=>null,'period_start'=>$periodStart,'period_end'=>$periodEnd,'search_type'=>'web','grain'=>$m['grain'],'query_text'=>$m['grain']==='query'?$value:'','page_url'=>$m['grain']==='page'?$value:'','country'=>$m['grain']==='country'?strtolower($value):'all','device'=>$m['grain']==='device'?strtolower($value):'all','clicks'=>seo_float($r['Clicks'])??0,'impressions'=>seo_float($r['Impressions'])??0,'ctr'=>seo_pct($r['CTR']),'position'=>seo_float($r['Position']),'source'=>$source];
                    if(seo_import_observation($db,$o,$hash))$added++;
                }
            }
            $db->prepare('INSERT INTO seo_import_batches(source_name,file_hash,rows_seen,rows_added,imported_by) VALUES(?,?,?,?,?)')->execute([$name,$hash,$seen,$added,(int)$user['id']]);
            $db->commit();$result[$name]=['rows_seen'=>$seen,'rows_added'=>$added];
        } catch(Throwable $e){$db->rollBack();throw $e;}
    }
    seo_cache_clear($db);seo_audit($db,$user,'seo_import','seo_import',0,['files'=>array_keys($result)]);return $result;
}
