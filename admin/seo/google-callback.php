<?php
declare(strict_types=1);
require_once __DIR__.'/google.php';
seo_headers();$db=seo_db();$user=seo_user($db);seo_access($user,'seo_connect');
try {
    $verifier=seo_oauth_validate($_GET['state']??null);
    if(isset($_GET['error']))throw new RuntimeException('Google authorization was not completed.');
    $code=(string)($_GET['code']??'');if($code==='')throw new RuntimeException('Google authorization code is missing.');
    $property=seo_google_connect($db,$user,$code,$verifier);seo_flash('Connected to Search Console property '.$property.'.');
}catch(Throwable $e){seo_flash($e instanceof PDOException?'Database operation failed. Please review the private server log.':$e->getMessage(),true);}
seo_go('google');
