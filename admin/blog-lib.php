<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/blog-content.php';
function admin_can(array $user, string $capability): bool { $map=['administrator'=>['*'],'seo_manager'=>['posts','publish','categories','seo_view','seo_refresh','seo_manage','seo_assign','seo_export'],'editor'=>['posts','seo_view','seo_task_assigned'],'author'=>['own_posts','seo_task_assigned']]; return in_array('*',$map[$user['role']]??[],true)||in_array($capability,$map[$user['role']]??[],true); }
function require_capability(array $user,string $capability): void { if(!admin_can($user,$capability)){http_response_code(403);exit('You do not have permission for this action.');} }
function clean_text(string $value,int $limit=10000): string { return mb_substr(trim(strip_tags($value,'<p><br><strong><em><ul><ol><li><h2><h3><a>')) ,0,$limit); }
function audit(PDO $db,array $user,string $action,string $type,int $id,array $details=[]): void { $db->prepare('INSERT INTO audit_logs(user_id,action,entity_type,entity_id,details,ip_address,user_agent) VALUES(?,?,?,?,?,?,?)')->execute([$user['id'],$action,$type,$id,json_encode($details),$_SERVER['REMOTE_ADDR']??null,mb_substr($_SERVER['HTTP_USER_AGENT']??'',0,500)]); }
function post_owner(array $user,array $post): bool { return admin_can($user,'posts') || ((int)$post['author_id']===(int)$user['id'] && $post['status']==='draft'); }
function post_publishable(array $user): bool { return admin_can($user,'publish'); }
function valid_post_status(string $value): string { return in_array($value,['draft','published','archived'],true)?$value:'draft'; }

/**
 * Root-level blog articles share the same URL space as the existing website.
 * Build the reserved list from the real public files/directories so a new blog
 * post can never take over a static or system route.
 */
function reserved_public_blog_slugs(): array
{
    static $slugs = null;
    if ($slugs !== null) {
        return $slugs;
    }

    $publicRoot = dirname(__DIR__);
    $slugs = [
        'admin', 'assets', 'images', 'uploads', 'includes', 'database', 'docs', 'logs', 'tests',
        'blog', 'blog-sitemap', 'sitemap', 'sitemap-xml', 'robots', 'robots-txt',
        'privacy-policy', 'contact-us', 'about-us', 'index',
        'tirupati-300-darshan-package-from-chennai',
    ];

    foreach (glob($publicRoot . '/*.{php,html,htm}', GLOB_BRACE) ?: [] as $file) {
        $slugs[] = pathinfo($file, PATHINFO_FILENAME);
    }
    foreach (glob($publicRoot . '/*', GLOB_ONLYDIR) ?: [] as $directory) {
        $slugs[] = basename($directory);
    }

    $slugs = array_values(array_unique(array_filter(array_map(
        static fn(string $slug): string => admin_slug($slug),
        $slugs
    ))));
    sort($slugs);
    return $slugs;
}

function public_blog_slug_conflict(string $slug): ?string
{
    return in_array($slug, reserved_public_blog_slugs(), true)
        ? 'That slug is reserved by an existing public page or system route.'
        : null;
}

function safe_image_upload(string $key): ?string { if(empty($_FILES[$key]['tmp_name'])||$_FILES[$key]['error']===UPLOAD_ERR_NO_FILE)return null; $f=$_FILES[$key];$allowed=['image/jpeg'=>'jpg','image/png'=>'png','image/webp'=>'webp'];if($f['error']!==UPLOAD_ERR_OK||$f['size']>5*1024*1024)throw new RuntimeException('Image upload failed or exceeds 5 MB.');$mime=(new finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name']);$ext=strtolower(pathinfo($f['name'],PATHINFO_EXTENSION));if(!isset($allowed[$mime])||!in_array($ext,['jpg','jpeg','png','webp'],true))throw new RuntimeException('Only JPG, PNG, and WEBP images are allowed.');$dir=__DIR__.'/../assets/uploads/blog';if(!is_dir($dir)&&!mkdir($dir,0755,true))throw new RuntimeException('Upload folder is unavailable.');$name=bin2hex(random_bytes(16)).'.'.$allowed[$mime];if(!move_uploaded_file($f['tmp_name'],$dir.'/'.$name))throw new RuntimeException('Image could not be stored.');return '/assets/uploads/blog/'.$name; }
