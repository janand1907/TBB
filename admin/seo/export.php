<?php
declare(strict_types=1);
require_once __DIR__.'/core.php';
seo_headers();$db=seo_db();$user=seo_user($db);seo_access($user,'seo_export');
$type=seo_enum((string)($_GET['type']??''),['priority','keywords','history','pages','weekly','tasks'],'');
if($type===''){http_response_code(400);exit('Unknown report.');}
seo_audit($db,$user,'seo_export','seo_export',0,['type'=>$type]);
$last=$db->query("SELECT finished_at FROM seo_refresh_runs WHERE status='success' ORDER BY id DESC LIMIT 1")->fetchColumn()?:'Never';
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="dbt-seo-'.$type.'-'.gmdate('Ymd').'.csv"');
$out=fopen('php://output','wb');
$write=static function(array $row)use($out):void{fputcsv($out,array_map('seo_csv_cell',$row),',','"','');};
try{
    if($type==='priority'||$type==='keywords'){
        $write(['ID','Keyword','Category','Intent','Priority','Primary','Active','Target country','Target city','Target device','Landing page','Mapped page','Mapping confidence','Assigned employee','Original assignee','Latest GSC date','Latest average position','Previous comparable position','Position improvement','Impressions','Clicks','Historical all-country average position','Historical period','Recommended action','Original action status','Original indexed status','Source','Original data source','Source notes','Mapping notes','Last successful API refresh','Data availability']);
        $rows=seo_keyword_rows($db,$type==='priority');
        $hist=$db->prepare("SELECT position,period_start,period_end FROM seo_observations WHERE grain='query' AND source='gsc_export_2026-10-24' AND query_text=? LIMIT 1");
        foreach($rows as $k){$p=seo_keyword_performance($db,$k);$hist->execute([$k['keyword']]);$h=$hist->fetch();$l=$p['latest'];$prev=$p['previous'];$original=json_decode($k['source_snapshot_json']??'',true)?:[];
            $write([$k['id'],$k['keyword'],$k['category'],$k['intent'],$k['priority'],$k['is_primary'],$k['active'],$k['country'],$k['target_city'],$k['device'],$k['target_page'],$k['mapped_page'],$k['mapping_confidence'],$k['assigned_name']??'Unassigned',$k['original_assignee'],$l['data_date']??'',$l['position']??'',$prev['position']??'',$p['movement']??'',$l['impressions']??'',$l['clicks']??'',$h['position']??'',$h?$h['period_start'].' to '.$h['period_end']:'',$k['recommended_action']??'',$original['Action status']??'',$original['Indexed status']??'',$k['source'],$k['source_detail'],$k['source_notes'],$k['mapping_notes'],$last,$l?'Dated GSC API average; scope filtered':'NO GSC DATA or NO COMPARABLE DATA']);
        }
    }elseif($type==='history'){
        $write(['Property','Date','Period start','Period end','Grain','Query','Page','Country','Device','Search type','Clicks','Impressions','CTR','Average position','Source','Last successful API refresh','Availability']);
        foreach($db->query('SELECT * FROM seo_observations ORDER BY period_end DESC,id DESC') as $r)$write([$r['property_id'],$r['data_date']??'',$r['period_start'],$r['period_end'],$r['grain'],$r['query_text'],$r['page_url'],$r['country'],$r['device'],$r['search_type'],$r['clicks'],$r['impressions'],$r['ctr']??'',$r['position']??'',$r['source'],$last,$r['data_date']===null?'Period aggregate; not a daily ranking':'Observed GSC row']);
    }elseif($type==='pages'){
        $write(['Property','Page','Period start','Period end','Date','Country','Device','Clicks','Impressions','CTR','Average position','Source','Last successful API refresh','Availability']);
        foreach($db->query("SELECT * FROM seo_observations WHERE grain='page' ORDER BY period_end DESC,impressions DESC") as $r)$write([$r['property_id'],$r['page_url'],$r['period_start'],$r['period_end'],$r['data_date']??'',$r['country'],$r['device'],$r['clicks'],$r['impressions'],$r['ctr']??'',$r['position']??'',$r['source'],$last,'Indexing status not inferred']);
    }elseif($type==='weekly'){
        $write(['Week start (PT)','Last included date','Clicks','Impressions','CTR','Derived average position','Source','Last successful API refresh','Availability']);
        foreach($db->query('SELECT * FROM seo_weekly_summaries ORDER BY week_start DESC') as $r)$write([$r['week_start'],$r['period_end'],$r['clicks']??'',$r['impressions']??'',$r['ctr']??'',$r['position']??'',$r['source'],$last,'Historical report; no fabricated keyword counts']);
        $property=seo_reporting_property($db);
        if($property){$q=$db->prepare("SELECT data_date,clicks,impressions,position FROM seo_observations WHERE property_id=? AND grain='property' AND source='gsc_api' ORDER BY data_date");$q->execute([$property]);$weeks=[];
            foreach($q as $r){$date=new DateTimeImmutable($r['data_date']);$week=$date->modify('monday this week')->format('Y-m-d');if(!isset($weeks[$week]))$weeks[$week]=['end'=>$r['data_date'],'clicks'=>0.0,'impressions'=>0.0,'weighted'=>0.0,'days'=>0];
                $weeks[$week]['end']=max($weeks[$week]['end'],$r['data_date']);$weeks[$week]['clicks']+=(float)$r['clicks'];$weeks[$week]['impressions']+=(float)$r['impressions'];$weeks[$week]['weighted']+=(float)($r['position']??0)*(float)$r['impressions'];$weeks[$week]['days']++;
            }
            foreach($weeks as $week=>$w){$ctr=$w['impressions']>0?$w['clicks']/$w['impressions']:null;$position=$w['impressions']>0?$w['weighted']/$w['impressions']:null;$write([$week,$w['end'],$w['clicks'],$w['impressions'],$ctr??'',$position??'','gsc_api_derived',$last,'Observed finalized days: '.$w['days'].'; week may be incomplete']);}
        }
    }else{
        $write(['Task ID','Title','Description','Keyword','Page','Employee','Priority','Status','Due date','Completion notes','Completed at','Created at','Last successful API refresh']);
        $sql='SELECT t.*,k.keyword,u.name employee FROM seo_tasks t LEFT JOIN seo_keywords k ON k.id=t.keyword_id LEFT JOIN users u ON u.id=t.assigned_user_id ORDER BY t.id';
        foreach($db->query($sql) as $r)$write([$r['id'],$r['title'],$r['description']??'',$r['keyword']??'',$r['page_url'],$r['employee']??'Unassigned',$r['priority'],$r['status'],$r['due_date']??'',$r['completion_notes']??'',$r['completed_at']??'',$r['created_at'],$last]);
    }
}finally{fclose($out);}
