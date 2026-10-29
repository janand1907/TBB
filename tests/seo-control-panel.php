<?php
declare(strict_types=1);
require_once __DIR__.'/../admin/seo/import.php';
require_once __DIR__.'/../admin/seo/google.php';

$file=tempnam(sys_get_temp_dir(),'dbt-seo-');
try{
    $db=new PDO('sqlite:'.$file);$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $db->exec(file_get_contents(__DIR__.'/../database/local-schema.sql'));
    $db->exec(file_get_contents(__DIR__.'/../database/seo-001-sqlite.sql'));
    $db->exec("INSERT INTO users(name,email,password_hash,role,status) VALUES('Test','test@example.invalid','x','administrator','active')");
    $user=['id'=>1,'role'=>'administrator'];
    $preview=seo_import_preview($db);
    assert($preview['keyword-master-tracker.csv']['rows']===556);
    assert($preview['gsc-export/Queries.csv']['rows']===538);
    $first=seo_import_historical($db,$user);
    assert($first['keyword-master-tracker.csv']['rows_added']===556);
    assert($first['keyword-to-page-map.csv']['rows_added']===25);
    assert((int)$db->query('SELECT COUNT(*) FROM seo_keywords')->fetchColumn()===556);
    assert((int)$db->query('SELECT COUNT(*) FROM seo_keywords WHERE is_primary=1')->fetchColumn()===25);
    assert((int)$db->query("SELECT COUNT(*) FROM seo_keywords WHERE mapped_page<>''")->fetchColumn()===25);
    assert((int)$db->query("SELECT COUNT(*) FROM seo_observations WHERE grain='property'")->fetchColumn()===52);
    assert((int)$db->query("SELECT COUNT(*) FROM seo_observations WHERE grain='query' AND data_date IS NULL")->fetchColumn()===538);
    assert((int)$db->query('SELECT COUNT(*) FROM seo_tasks')->fetchColumn()===7);
    assert((int)$db->query("SELECT COUNT(*) FROM seo_tasks WHERE status='Blocked'")->fetchColumn()===2);
    assert((int)$db->query("SELECT COUNT(*) FROM seo_tasks WHERE status='In Progress'")->fetchColumn()===1);
    $count=(int)$db->query('SELECT COUNT(*) FROM seo_observations')->fetchColumn();
    $second=seo_import_historical($db,$user);
    assert($second['keyword-master-tracker.csv']==='already imported');
    assert((int)$db->query('SELECT COUNT(*) FROM seo_observations')->fetchColumn()===$count);
    assert((int)$db->query('SELECT COUNT(*) FROM seo_tasks')->fetchColumn()===7);
    $k=['keyword'=>'Chennai to Tirupati tour packages','country'=>'India','device'=>'All'];
    assert(seo_keyword_performance($db,$k)['latest']===null);
    $date='2026-10-20';
    foreach([['2026-10-19',65.0],['2026-10-20',45.0]] as [$d,$pos]){
        $o=['property_id'=>'sc-domain:divinebalajitravels.com','data_date'=>$d,'period_start'=>$d,'period_end'=>$d,'search_type'=>'web','grain'=>'query','query_text'=>$k['keyword'],'page_url'=>'','country'=>'ind','device'=>'mobile','clicks'=>1,'impressions'=>10,'ctr'=>.1,'position'=>$pos,'source'=>'gsc_api','source_batch'=>null];
        assert(seo_store_observation($db,$o)==='added');
        $db->prepare("INSERT INTO seo_refresh_runs(user_id,property_id,status,data_date) VALUES(1,'sc-domain:divinebalajitravels.com','success',?)")->execute([$d]);
    }
    $p=seo_keyword_performance($db,$k);assert(abs($p['movement']-20.0)<.001);
    assert(seo_csv_cell('=HYPERLINK("x")')==="'=HYPERLINK(\"x\")");
    $key='abc';$_SESSION['seo_oauth']=['state'=>$key,'verifier'=>'code','created'=>time()];
    assert(seo_oauth_validate($key)==='code');
    try{seo_oauth_validate($key);throw new RuntimeException('State replay accepted.');}catch(RuntimeException $e){assert(str_contains($e->getMessage(),'state'));}
    seo_cache($db,'test',300,static fn()=>['value'=>1]);
    assert(seo_cache_clear($db)===1);
    assert(seo_setting($db,'default_period','last7')==='last7');
    $db->exec("INSERT INTO seo_settings(setting_key,setting_value) VALUES('default_period','last28')");
    assert(seo_setting($db,'default_period','last7')==='last28');
    assert((int)$db->query('SELECT COUNT(*) FROM seo_observations')->fetchColumn()===$count+2);
    assert(admin_can(['role'=>'seo_manager'],'seo_refresh'));
    assert(!admin_can(['role'=>'seo_manager'],'seo_connect'));
    assert(!admin_can(['role'=>'author'],'seo_export'));
    assert(admin_can(['role'=>'editor'],'seo_task_assigned'));
    assert(seo_country_code('UK')==='gbr');
    assert(seo_country_code('India')==='ind');
    assert(seo_country_code('International')===null);
    $fixtureKey=random_bytes(32);$sealed=seo_encrypt_with_key('fixture-refresh-token',$fixtureKey);
    assert($sealed!=='fixture-refresh-token');assert(seo_decrypt_with_key($sealed,$fixtureKey)==='fixture-refresh-token');
    try{seo_decrypt_with_key($sealed,random_bytes(32));throw new RuntimeException('Wrong key accepted.');}catch(RuntimeException $e){assert(str_contains($e->getMessage(),'could not be read'));}
    $fake=static function(string $url,string $method,?array $payload,?string $token):array {
        assert($token==='fixture-token');
        assert(str_contains($url,rawurlencode('sc-domain:divinebalajitravels.com')));
        if(($payload['rowLimit']??0)===40)return ['rows'=>[['keys'=>['2026-10-21'],'clicks'=>2,'impressions'=>20,'ctr'=>.1,'position'=>10]]];
        $map=['date'=>'2026-10-21','query'=>'fixture test query','page'=>'https://www.divinebalajitravels.com/','country'=>'ind','device'=>'MOBILE'];
        return ['rows'=>[['keys'=>array_map(static fn($dim)=>$map[$dim],$payload['dimensions']),'clicks'=>2,'impressions'=>20,'ctr'=>.1,'position'=>10]]];
    };
    $db->exec("UPDATE seo_refresh_runs SET started_at='2026-01-01 00:00:00'");
    $auth=['sc-domain:divinebalajitravels.com','fixture-token'];
    $r=seo_refresh($db,$user,$fake,$auth);assert($r['status']==='partial'&&$r['processed']===1);
    try{seo_refresh($db,$user,$fake,$auth);throw new RuntimeException('Refresh cooldown failed.');}catch(RuntimeException $e){assert(str_contains($e->getMessage(),'30 seconds'));}
    for($i=0;$i<5;$i++){$db->exec("UPDATE seo_refresh_runs SET started_at='2026-01-01 00:00:00' WHERE id=(SELECT MAX(id) FROM seo_refresh_runs)");$r=seo_refresh($db,$user,$fake,$auth);}
    assert($r['status']==='success');
    assert((int)$db->query("SELECT COUNT(*) FROM seo_observations WHERE data_date='2026-10-21' AND source='gsc_api'")->fetchColumn()===6);
    $before=(int)$db->query('SELECT COUNT(*) FROM seo_observations')->fetchColumn();
    $bad=static function():array{throw new RuntimeException('fixture API unavailable');};
    $db->exec("UPDATE seo_refresh_runs SET started_at='2026-01-01 00:00:00' WHERE id=(SELECT MAX(id) FROM seo_refresh_runs)");
    try{seo_refresh($db,$user,$bad,$auth);throw new RuntimeException('API failure was hidden.');}catch(RuntimeException $e){assert(str_contains($e->getMessage(),'fixture API unavailable'));}
    assert((int)$db->query('SELECT COUNT(*) FROM seo_observations')->fetchColumn()===$before);
    echo "SEO panel local tests passed: 556 keywords, 25 primary, 52 property days, 538 historical queries, 7 tasks; idempotency, movement, OAuth state, cache, roles, mocked paged refresh, cooldown, API failure.\n";
}finally{if(is_file($file))unlink($file);}
