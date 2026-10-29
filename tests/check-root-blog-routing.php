<?php
declare(strict_types=1);

$databasePath = tempnam(sys_get_temp_dir(), 'dbt-root-blog-');
if ($databasePath === false) {
    throw new RuntimeException('Could not create the isolated blog-routing database.');
}
register_shutdown_function(static function () use ($databasePath): void {
    if (is_file($databasePath)) {
        unlink($databasePath);
    }
});

$db = new PDO('sqlite:' . $databasePath, null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$schema = file_get_contents(__DIR__ . '/../database/local-schema.sql');
if ($schema === false) {
    throw new RuntimeException('The local blog schema could not be read.');
}
$db->exec($schema);
$db->exec("INSERT INTO users(name,email,password_hash,role) VALUES('Routing Test','routing@example.test','unused','administrator')");
$db->exec("INSERT INTO categories(name,slug,status) VALUES('Active','active','active'),('Inactive','inactive','inactive')");
$db->exec("INSERT INTO posts(author_id,category_id,title,slug,content,status,robots,published_at) VALUES
    (1,1,'Published test','final-local-review-post','<p>Test</p>','published','index,follow',CURRENT_TIMESTAMP),
    (1,1,'Draft test','local-draft-seo-test','<p>Test</p>','draft','index,follow',CURRENT_TIMESTAMP),
    (1,1,'Archived test','local-archived-seo-test','<p>Test</p>','archived','index,follow',CURRENT_TIMESTAMP),
    (1,2,'Inactive test','inactive-published-seo-test','<p>Test</p>','published','index,follow',CURRENT_TIMESTAMP)");
$db->exec("INSERT INTO redirects(from_path,to_path,status_code) VALUES('blog/old-local-guide/','/blog/local-tirupati-guide/',301)");
$db = null;
putenv('BLOG_DB_DRIVER=sqlite');
putenv('BLOG_DB_NAME=' . $databasePath);

require_once __DIR__ . '/../admin/admin-ui.php';
require_once __DIR__ . '/../admin/blog-lib.php';
require_once __DIR__ . '/../includes/blog-public.php';

ob_start();

function check(bool $condition, string $message): void
{
    if (!$condition) {
        fwrite(STDERR, "FAIL: {$message}\n");
        exit(1);
    }
    echo "PASS: {$message}\n";
}

check(public_blog_article_path('sample-post') === 'sample-post', 'root article path is canonical');
check(public_blog_url(public_blog_article_path('sample-post')) === '/sample-post', 'article URL is root-level');
check(public_blog_slug_conflict('about-us') !== null, 'static page slug is reserved');
check(public_blog_slug_conflict('tirupati-vip-darshan-packages') !== null, 'package slug is reserved');
check(public_blog_slug_conflict('admin') !== null, 'system path is reserved');
check(public_blog_slug_conflict('a-new-travel-guide') === null, 'unused article slug remains available');
check(public_blog_redirect('old-local-guide') === '/local-tirupati-guide', 'legacy redirect target is normalized to root URL');

define('DBT_SITEMAP_LIBRARY_ONLY', true);
require __DIR__ . '/../sitemap.php';
$inventory = sitemap_inventory();
ob_start();
sitemap_render_index($inventory);
$sitemapIndex = (string) ob_get_clean();
check(str_contains($sitemapIndex, 'https://www.divinebalajitravels.com/packages-sitemap.xml'), 'master sitemap references the packages child');
check(str_contains($sitemapIndex, 'https://www.divinebalajitravels.com/blog-sitemap.xml'), 'master sitemap references the blog child');
ob_start();
sitemap_render_urlset($inventory['packages']);
$packageSitemap = (string) ob_get_clean();
check(str_contains($packageSitemap, 'https://www.divinebalajitravels.com/tirupati-vip-darshan-packages'), 'static package URL stays in the packages sitemap');
ob_start();
sitemap_render_urlset($inventory['blog']);
$blogSitemap = (string) ob_get_clean();
check(str_contains($blogSitemap, 'https://www.divinebalajitravels.com/final-local-review-post'), 'published indexable article uses its root canonical URL in the blog sitemap');
check(!str_contains($blogSitemap, 'https://www.divinebalajitravels.com/blog/final-local-review-post'), 'legacy blog article URL is absent from the blog sitemap');
foreach (['local-tirupati-guide', 'local-draft-seo-test', 'local-archived-seo-test', 'inactive-published-seo-test'] as $excludedSlug) {
    check(!str_contains($blogSitemap, $excludedSlug), "excluded post is absent from the blog sitemap: {$excludedSlug}");
}

echo "Root blog routing checks passed.\n";
ob_end_flush();
