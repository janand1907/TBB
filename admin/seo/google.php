<?php
declare(strict_types=1);
require_once __DIR__ . '/core.php';

const SEO_SCOPE='https://www.googleapis.com/auth/webmasters.readonly';
const SEO_REDIRECT='https://www.divinebalajitravels.com/admin/seo/google-callback.php';
function seo_google_config(): array {
    $path=dirname(__DIR__,3).'/tbb-seo-config.php';
    if(!is_file($path))throw new RuntimeException('Google connection has not been configured.');
    $v=require $path;
    if(!is_array($v)||empty($v['client_id'])||empty($v['client_secret']))throw new RuntimeException('Google connection configuration is incomplete.');
    return $v;
}
function seo_secret_key(): string {
    $path=dirname(__DIR__,3).'/tbb-seo-key';
    if(!is_file($path))throw new RuntimeException('Private token key is unavailable.');
    $key=base64_decode(trim((string)file_get_contents($path)),true);
    if($key===false||strlen($key)!==32)throw new RuntimeException('Private token key is invalid.');
    return $key;
}
function seo_encrypt_with_key(string $plain,string $key): string {
    if(strlen($key)!==32)throw new InvalidArgumentException('Encryption key length is invalid.');
    $iv=random_bytes(12);$tag='';$cipher=openssl_encrypt($plain,'aes-256-gcm',$key,OPENSSL_RAW_DATA,$iv,$tag);
    if($cipher===false)throw new RuntimeException('Token encryption failed.');
    return base64_encode($iv.$tag.$cipher);
}
function seo_decrypt_with_key(string $encoded,string $key): string {
    if(strlen($key)!==32)throw new InvalidArgumentException('Encryption key length is invalid.');
    $v=base64_decode($encoded,true);if($v===false||strlen($v)<29)throw new RuntimeException('Saved token is invalid.');
    $plain=openssl_decrypt(substr($v,28),'aes-256-gcm',$key,OPENSSL_RAW_DATA,substr($v,0,12),substr($v,12,16));
    if($plain===false)throw new RuntimeException('Saved token could not be read.');return $plain;
}
function seo_encrypt(string $plain): string {return seo_encrypt_with_key($plain,seo_secret_key());}
function seo_decrypt(string $encoded): string {return seo_decrypt_with_key($encoded,seo_secret_key());}
function seo_google_http(string $url,string $method='GET',?array $payload=null,?string $token=null,?callable $transport=null): array {
    if($transport)return $transport($url,$method,$payload,$token);
    $ch=curl_init($url);if($ch===false)throw new RuntimeException('Google request could not start.');
    $headers=['Accept: application/json'];
    if($token!==null)$headers[]='Authorization: Bearer '.$token;
    if($payload!==null){$headers[]='Content-Type: application/json';curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($payload,JSON_THROW_ON_ERROR));}
    curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_CUSTOMREQUEST=>$method,CURLOPT_HTTPHEADER=>$headers,CURLOPT_CONNECTTIMEOUT=>5,CURLOPT_TIMEOUT=>18,CURLOPT_FOLLOWLOCATION=>false]);
    $raw=curl_exec($ch);$status=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE);curl_close($ch);
    if($raw===false||$status<200||$status>=300)throw new RuntimeException('Google API request failed (HTTP '.$status.').');
    $data=json_decode($raw,true);if(!is_array($data))throw new RuntimeException('Google returned invalid JSON.');return $data;
}
function seo_google_form(string $url,array $fields): array {
    $ch=curl_init($url);curl_setopt_array($ch,[CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>http_build_query($fields),CURLOPT_RETURNTRANSFER=>true,CURLOPT_CONNECTTIMEOUT=>5,CURLOPT_TIMEOUT=>18,CURLOPT_FOLLOWLOCATION=>false,CURLOPT_HTTPHEADER=>['Accept: application/json']]);
    $raw=curl_exec($ch);$status=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE);curl_close($ch);
    if($raw===false||$status<200||$status>=300)throw new RuntimeException('Google authorization failed (HTTP '.$status.').');
    $v=json_decode($raw,true);if(!is_array($v))throw new RuntimeException('Google returned invalid authorization data.');return $v;
}
function seo_oauth_url(): string {
    $config=seo_google_config();$state=bin2hex(random_bytes(32));$verifier=rtrim(strtr(base64_encode(random_bytes(48)),'+/','-_'),'=');
    $_SESSION['seo_oauth']=['state'=>$state,'verifier'=>$verifier,'created'=>time()];
    return 'https://accounts.google.com/o/oauth2/v2/auth?'.http_build_query(['client_id'=>$config['client_id'],'redirect_uri'=>SEO_REDIRECT,'response_type'=>'code','scope'=>SEO_SCOPE,'access_type'=>'offline','prompt'=>'consent','state'=>$state,'code_challenge'=>rtrim(strtr(base64_encode(hash('sha256',$verifier,true)),'+/','-_'),'='),'code_challenge_method'=>'S256'],'','&',PHP_QUERY_RFC3986);
}
function seo_oauth_validate(?string $state): string {
    $pending=$_SESSION['seo_oauth']??null;unset($_SESSION['seo_oauth']);
    if(!$pending||!is_string($state)||!hash_equals($pending['state'],$state)||time()-$pending['created']>600)throw new RuntimeException('Google authorization state expired or did not match.');
    return $pending['verifier'];
}
function seo_google_connect(PDO $db,array $user,string $code,string $verifier): string {
    $c=seo_google_config();$token=seo_google_form('https://oauth2.googleapis.com/token',['code'=>$code,'client_id'=>$c['client_id'],'client_secret'=>$c['client_secret'],'redirect_uri'=>SEO_REDIRECT,'grant_type'=>'authorization_code','code_verifier'=>$verifier]);
    if(empty($token['access_token'])||empty($token['refresh_token']))throw new RuntimeException('Google did not grant an offline connection. Reconnect and approve access.');
    $sites=seo_google_http('https://www.googleapis.com/webmasters/v3/sites','GET',null,$token['access_token']);
    $available=[];foreach($sites['siteEntry']??[] as $site){$id=$site['siteUrl']??'';if(in_array($id,['sc-domain:divinebalajitravels.com','https://www.divinebalajitravels.com/'],true)&&($site['permissionLevel']??'')!=='siteUnverifiedUser')$available[$id]=true;}
    $property=isset($available['sc-domain:divinebalajitravels.com'])?'sc-domain:divinebalajitravels.com':(isset($available['https://www.divinebalajitravels.com/'])?'https://www.divinebalajitravels.com/':'');
    if($property==='')throw new RuntimeException('This Google account does not have access to the Divine Balaji Travels Search Console property.');
    $db->beginTransaction();try{
        $db->prepare('DELETE FROM seo_google_connections WHERE id=1')->execute();
        $db->prepare('INSERT INTO seo_google_connections(id,property_id,refresh_token_enc,access_token_enc,expires_at,connected_by) VALUES(1,?,?,?,?,?)')->execute([$property,seo_encrypt($token['refresh_token']),seo_encrypt($token['access_token']),gmdate('Y-m-d H:i:s',time()+max(60,(int)($token['expires_in']??3600))-60),(int)$user['id']]);
        $db->commit();
    }catch(Throwable $e){$db->rollBack();throw $e;}
    seo_audit($db,$user,'seo_google_connect','seo_google',1,['property'=>$property]);return $property;
}
function seo_google_token(PDO $db): array {
    $row=$db->query('SELECT * FROM seo_google_connections WHERE id=1')->fetch();if(!$row)throw new RuntimeException('Connect Search Console first.');
    if($row['access_token_enc']&&$row['expires_at']>gmdate('Y-m-d H:i:s',time()+60))return [$row['property_id'],seo_decrypt($row['access_token_enc'])];
    $c=seo_google_config();$v=seo_google_form('https://oauth2.googleapis.com/token',['client_id'=>$c['client_id'],'client_secret'=>$c['client_secret'],'refresh_token'=>seo_decrypt($row['refresh_token_enc']),'grant_type'=>'refresh_token']);
    if(empty($v['access_token']))throw new RuntimeException('Google connection expired. Administrator must reconnect.');
    $db->prepare('UPDATE seo_google_connections SET access_token_enc=?,expires_at=?,updated_at=CURRENT_TIMESTAMP WHERE id=1')->execute([seo_encrypt($v['access_token']),gmdate('Y-m-d H:i:s',time()+max(60,(int)($v['expires_in']??3600))-60)]);
    return [$row['property_id'],$v['access_token']];
}
function seo_google_query(string $property,string $token,array $request,?callable $transport=null): array {
    return seo_google_http('https://www.googleapis.com/webmasters/v3/sites/'.rawurlencode($property).'/searchAnalytics/query','POST',$request,$token,$transport);
}
function seo_latest_final_date(string $property,string $token,?callable $transport=null): string {
    $end=(new DateTimeImmutable('yesterday',new DateTimeZone('America/Los_Angeles')))->format('Y-m-d');
    $start=date('Y-m-d',strtotime($end.' -30 days'));
    $v=seo_google_query($property,$token,['startDate'=>$start,'endDate'=>$end,'dimensions'=>['date'],'type'=>'web','dataState'=>'final','rowLimit'=>40],$transport);
    $dates=[];foreach($v['rows']??[] as $r){$d=$r['keys'][0]??null;if(seo_date($d))$dates[]=$d;}
    if(!$dates)throw new RuntimeException('Search Console has no finalized daily data in the last 30 days.');
    return max($dates);
}
function seo_refresh(PDO $db,array $user,?callable $transport=null,?array $testAuth=null): array {
    $last=$db->query('SELECT * FROM seo_refresh_runs ORDER BY id DESC LIMIT 1')->fetch();
    if($last && strtotime($last['started_at'].' UTC')>time()-30)throw new RuntimeException('Please wait 30 seconds between refresh requests.');
    if($last && $last['status']==='error')$last=$db->query("SELECT * FROM seo_refresh_runs WHERE status IN ('partial','success') ORDER BY id DESC LIMIT 1")->fetch();
    [$property,$token]=$testAuth??seo_google_token($db);
    if($last && $last['status']==='partial' && $last['property_id']!==$property)$last=null;
    $grains=['property'=>['date'],'query'=>['date','query','country','device'],'page'=>['date','page','country','device'],'query_page'=>['date','query','page','country','device'],'country'=>['date','country'],'device'=>['date','device']];
    $date=$last && $last['status']==='partial'?$last['data_date']:seo_latest_final_date($property,$token,$transport);
    $grain=$last && $last['status']==='partial'?$last['grain']:'property';
    $offset=$last && $last['status']==='partial'?(int)$last['start_row']:0;
    if(!isset($grains[$grain]))throw new RuntimeException('Refresh cursor is invalid.');
    $db->prepare('INSERT INTO seo_refresh_runs(user_id,property_id,started_at,data_date,grain,start_row) VALUES(?,?,?,?,?,?)')->execute([(int)$user['id'],$property,gmdate('Y-m-d H:i:s'),$date,$grain,$offset]);$run=(int)$db->lastInsertId();
    try{
        $payload=['startDate'=>$date,'endDate'=>$date,'dimensions'=>$grains[$grain],'type'=>'web','dataState'=>'final','rowLimit'=>1000,'startRow'=>$offset];
        $v=seo_google_query($property,$token,$payload,$transport);$rows=$v['rows']??[];if(!is_array($rows))throw new RuntimeException('Google response rows are invalid.');
        $added=0;$updated=0;$processed=0;$db->beginTransaction();
        foreach($rows as $r){$keys=$r['keys']??[];if(count($keys)!==count($grains[$grain]))throw new RuntimeException('Google response dimensions are invalid.');
            $dims=array_combine($grains[$grain],$keys);if(($dims['date']??'')!==$date)throw new RuntimeException('Google returned a different date.');
            foreach(['clicks','impressions','ctr','position'] as $metric){if(!isset($r[$metric])||!is_numeric($r[$metric])||!is_finite((float)$r[$metric])||(float)$r[$metric]<0)throw new RuntimeException('Google response metric is invalid.');}
            if((float)$r['ctr']>1||((float)$r['impressions']>0&&(float)$r['position']<=0))throw new RuntimeException('Google response metric is out of range.');
            if(mb_strlen((string)($dims['query']??''))>1000||mb_strlen((string)($dims['page']??''))>2048)throw new RuntimeException('Google row exceeds local storage limits.');
            $o=['property_id'=>$property,'data_date'=>$date,'period_start'=>$date,'period_end'=>$date,'search_type'=>'web','grain'=>$grain,'query_text'=>(string)($dims['query']??''),'page_url'=>(string)($dims['page']??''),'country'=>(string)($dims['country']??'all'),'device'=>strtolower((string)($dims['device']??'all')),'clicks'=>(float)($r['clicks']??0),'impressions'=>(float)($r['impressions']??0),'ctr'=>isset($r['ctr'])?(float)$r['ctr']:null,'position'=>isset($r['position'])?(float)$r['position']:null,'source'=>'gsc_api'];
            $result=seo_store_observation($db,$o);$added+=(int)($result==='added');$updated+=(int)($result==='updated');$processed++;
        }
        $names=array_keys($grains);$index=array_search($grain,$names,true);$more=count($rows)===1000;
        $nextGrain=$more?$grain:($names[$index+1]??null);$nextOffset=$more?$offset+1000:0;$status=$nextGrain===null?'success':'partial';
        $message=$status==='success'?'Finalized date imported.':'Continue refresh for '.($nextGrain==='query_page'?'query + page':$nextGrain).' data.';
        $db->prepare('UPDATE seo_refresh_runs SET finished_at=?,status=?,grain=?,start_row=?,rows_processed=?,rows_added=?,rows_updated=?,message=? WHERE id=?')->execute([gmdate('Y-m-d H:i:s'),$status,$nextGrain??$grain,$nextOffset,$processed,$added,$updated,$message,$run]);
        $db->commit();seo_cache_clear($db);seo_audit($db,$user,'seo_refresh','seo_refresh',$run,['date'=>$date,'grain'=>$grain,'processed'=>$processed,'added'=>$added,'updated'=>$updated,'status'=>$status]);
        return ['date'=>$date,'grain'=>$grain,'processed'=>$processed,'added'=>$added,'updated'=>$updated,'status'=>$status,'message'=>$message,'omitted'=>'Unknown: Search Console does not report anonymized/omitted rows'];
    }catch(Throwable $e){if($db->inTransaction())$db->rollBack();$db->prepare("UPDATE seo_refresh_runs SET finished_at=?,status='error',message=? WHERE id=?")->execute([gmdate('Y-m-d H:i:s'),mb_substr($e->getMessage(),0,500),$run]);throw $e;}
}
