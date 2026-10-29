<?php
declare(strict_types=1);
require_once __DIR__.'/core.php';
require_once __DIR__.'/google.php';
require_once __DIR__.'/import.php';
seo_headers();$db=seo_db();$user=seo_user($db);
if(($_SERVER['REQUEST_METHOD']??'')!=='POST'){http_response_code(405);exit('POST required.');}
verify_csrf($_POST['csrf']??null);
$action=(string)($_POST['action']??'');
try {
    if($action==='google_start'){seo_access($user,'seo_connect');header('Location: '.seo_oauth_url(),true,303);exit;}
    if($action==='google_disconnect'){seo_access($user,'seo_connect');$db->prepare('DELETE FROM seo_google_connections WHERE id=1')->execute();seo_audit($db,$user,'seo_google_disconnect','seo_google',1);seo_flash('Google connection removed. Historical data remains.');seo_go('google');}
    if($action==='refresh'){seo_access($user,'seo_refresh');$r=seo_refresh($db,$user);seo_flash($r['message'].' '.$r['processed'].' rows processed; '.$r['added'].' added; '.$r['updated'].' updated. Omitted rows: unknown.');seo_go('overview');}
    if($action==='clear_cache'){seo_access($user,'seo_cache');$n=seo_cache_clear($db);seo_audit($db,$user,'seo_cache_clear','seo_cache',0,['entries'=>$n]);seo_flash($n.' temporary dashboard cache entries removed. Historical observations are intact.');seo_go('overview');}
    if($action==='settings_save'){seo_access($user,'seo_connect');$period=seo_enum((string)($_POST['default_period']??''),['latest','last7','last28'],'last7');$db->prepare("REPLACE INTO seo_settings(setting_key,setting_value) VALUES('default_period',?)")->execute([$period]);seo_audit($db,$user,'seo_settings_save','seo_settings',0,['default_period'=>$period]);seo_flash('Dashboard default period saved.');seo_go('google');}
    if($action==='import'){seo_access($user,'seo_manage');$r=seo_import_historical($db,$user);$added=0;foreach($r as $v)if(is_array($v))$added+=$v['rows_added'];seo_flash('Private reports imported. '.$added.' new records. Source files were not changed.');seo_go('google');}
    if($action==='keyword_save'){
        seo_access($user,'seo_manage');$id=(int)($_POST['id']??0);$keyword=mb_substr(trim((string)($_POST['keyword']??'')),0,300);
        if($keyword==='')throw new InvalidArgumentException('Keyword is required.');
        $category=mb_substr(trim((string)($_POST['category']??'')),0,120);$priority=seo_enum((string)($_POST['priority']??''),['High','Medium','Low'],'Low');
        $country=mb_substr(trim((string)($_POST['country']??'All')),0,80);$device=seo_enum((string)($_POST['device']??'All'),['All','Desktop','Mobile','Tablet'],'All');
        $page=seo_safe_page((string)($_POST['target_page']??''));$primary=isset($_POST['is_primary'])?1:0;$active=isset($_POST['active'])?1:0;
        $assignee=(int)($_POST['assigned_user_id']??0);if($assignee){$q=$db->prepare("SELECT id FROM users WHERE id=? AND status='active'");$q->execute([$assignee]);if(!$q->fetchColumn())throw new InvalidArgumentException('Select an active employee.');}
        if($id){$check=$db->prepare('SELECT id FROM seo_keywords WHERE id=?');$check->execute([$id]);if(!$check->fetchColumn())throw new InvalidArgumentException('Keyword not found.');$q=$db->prepare('UPDATE seo_keywords SET keyword=?,category=?,priority=?,country=?,device=?,target_page=?,is_primary=?,active=?,assigned_user_id=?,updated_at=CURRENT_TIMESTAMP WHERE id=?');$q->execute([$keyword,$category,$priority,$country,$device,$page,$primary,$active,$assignee?:null,$id]);}
        else{$q=$db->prepare('INSERT INTO seo_keywords(keyword,category,priority,country,device,target_page,is_primary,active,assigned_user_id,source) VALUES(?,?,?,?,?,?,?,?,?,?)');$q->execute([$keyword,$category,$priority,$country,$device,$page,$primary,$active,$assignee?:null,'manual']);$id=(int)$db->lastInsertId();}
        seo_cache_clear($db);seo_audit($db,$user,'seo_keyword_save','seo_keyword',$id,['priority'=>$priority,'country'=>$country,'device'=>$device,'target_page'=>$page,'assigned_user_id'=>$assignee?:null,'primary'=>$primary,'active'=>$active]);seo_flash('Keyword saved.');seo_go('keywords');
    }
    if($action==='task_create'){
        seo_access($user,'seo_assign');$title=mb_substr(trim((string)($_POST['title']??'')),0,200);if($title==='')throw new InvalidArgumentException('Task title is required.');
        $desc=mb_substr(trim((string)($_POST['description']??'')),0,10000);$priority=seo_enum((string)($_POST['priority']??''),['High','Medium','Low'],'Medium');$due=seo_date($_POST['due_date']??null);
        $page=seo_safe_page((string)($_POST['page_url']??''));$assignee=(int)($_POST['assigned_user_id']??0);$keyword=(int)($_POST['keyword_id']??0);
        if($assignee){$q=$db->prepare("SELECT id FROM users WHERE id=? AND status='active'");$q->execute([$assignee]);if(!$q->fetchColumn())throw new InvalidArgumentException('Select an active employee.');}
        if($keyword){$q=$db->prepare('SELECT id FROM seo_keywords WHERE id=?');$q->execute([$keyword]);if(!$q->fetchColumn())throw new InvalidArgumentException('Keyword not found.');}
        $db->prepare('INSERT INTO seo_tasks(title,description,keyword_id,page_url,assigned_user_id,priority,due_date,created_by) VALUES(?,?,?,?,?,?,?,?)')->execute([$title,$desc,$keyword?:null,$page,$assignee?:null,$priority,$due,(int)$user['id']]);$id=(int)$db->lastInsertId();
        seo_audit($db,$user,'seo_task_create','seo_task',$id,['assignee'=>$assignee]);seo_flash('Task created.');seo_go('tasks');
    }
    if($action==='task_status'){
        $id=(int)($_POST['id']??0);$q=$db->prepare('SELECT * FROM seo_tasks WHERE id=?');$q->execute([$id]);$task=$q->fetch();if(!$task)throw new InvalidArgumentException('Task not found.');
        if(!admin_can($user,'seo_assign') || (int)$task['assigned_user_id']!==(int)$user['id']){
            if(!admin_can($user,'seo_assign') && (!admin_can($user,'seo_task_assigned')||(int)$task['assigned_user_id']!==(int)$user['id'])){http_response_code(403);exit('Not assigned to this task.');}
        }
        $status=seo_enum((string)($_POST['status']??''),['To Do','In Progress','Review','Completed','Blocked'],$task['status']);$notes=mb_substr(trim((string)($_POST['completion_notes']??'')),0,10000);
        $db->prepare('UPDATE seo_tasks SET status=?,completion_notes=?,completed_at=?,updated_at=CURRENT_TIMESTAMP WHERE id=?')->execute([$status,$notes,$status==='Completed'?gmdate('Y-m-d H:i:s'):null,$id]);
        seo_audit($db,$user,'seo_task_status','seo_task',$id,['from'=>$task['status'],'to'=>$status]);seo_flash('Task progress saved.');seo_go('tasks');
    }
    throw new InvalidArgumentException('Unknown action.');
}catch(Throwable $e){$message=$e instanceof PDOException?'Database operation failed. Please review the private server log.':$e->getMessage();seo_flash($message,true);seo_go(in_array($action,['google_start','google_disconnect','import','settings_save'],true)?'google':($action==='task_create'||$action==='task_status'?'tasks':'overview'));}
