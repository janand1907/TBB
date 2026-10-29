<?php
declare(strict_types=1);

/**
 * Local regression check for the category-wise sitemap controller.
 *
 * It creates an isolated SQLite database, so it never uses production blog
 * data or credentials. Run with: php tests/check-sitemap-structure.php
 */

$databasePath = sys_get_temp_dir() . '/dbt-sitemap-' . bin2hex(random_bytes(8)) . '.sqlite';
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
$db->exec("INSERT INTO users(name,email,password_hash,role) VALUES ('Sitemap Test','sitemap@example.test','unused','administrator')");
$db->exec("INSERT INTO categories(name,slug,status) VALUES ('Active Populated','active-populated','active')");
$db->exec("INSERT INTO categories(name,slug,status) VALUES ('Active Empty','active-empty','active')");
$db->exec("INSERT INTO categories(name,slug,status) VALUES ('Inactive Populated','inactive-populated','inactive')");

$insertPost = $db->prepare(
    'INSERT INTO posts(author_id,category_id,title,slug,content,robots,status,published_at,updated_at)
     VALUES (1,:category_id,:title,:slug,"<p>Test content</p>",:robots,:status,:published_at,:updated_at)'
);
$posts = [
    ['category_id' => 1, 'title' => 'Published article', 'slug' => 'published-article', 'robots' => 'index,follow', 'status' => 'published'],
    ['category_id' => 1, 'title' => 'Noindex article', 'slug' => 'noindex-article', 'robots' => 'noindex,follow', 'status' => 'published'],
    ['category_id' => 1, 'title' => 'Draft article', 'slug' => 'draft-article', 'robots' => 'index,follow', 'status' => 'draft'],
    ['category_id' => 1, 'title' => 'Archived article', 'slug' => 'archived-article', 'robots' => 'index,follow', 'status' => 'archived'],
    ['category_id' => 3, 'title' => 'Inactive category article', 'slug' => 'inactive-category-article', 'robots' => 'index,follow', 'status' => 'published'],
    ['category_id' => null, 'title' => 'Uncategorised article', 'slug' => 'uncategorised-article', 'robots' => 'index,follow', 'status' => 'published'],
];
foreach ($posts as $post) {
    $insertPost->execute($post + ['published_at' => '2026-10-20 10:00:00', 'updated_at' => '2026-10-21 11:00:00']);
}

putenv('BLOG_DB_DRIVER=sqlite');
putenv('BLOG_DB_NAME=' . $databasePath);
define('DBT_SITEMAP_LIBRARY_ONLY', true);
require __DIR__ . '/../sitemap.php';

$assertions = [];
$check = static function (bool $condition, string $message) use (&$assertions): void {
    if (!$condition) {
        throw new RuntimeException('FAIL: ' . $message);
    }
    $assertions[] = 'PASS: ' . $message;
};

$inventory = sitemap_inventory();
$check(count(sitemap_static_urls()) === 44, 'the maintained static inventory contains 44 URLs');
$check(count($inventory['pages']) === 27, 'pages sitemap contains 26 static non-package URLs plus the blog index');
$check(count($inventory['packages']) === 18, 'packages sitemap contains the 18 reviewed commercial package URLs');
$check(count($inventory['blog']) === 2, 'blog sitemap contains only published, indexable and publicly routable articles');
$check(count($inventory['categories']) === 1, 'categories sitemap contains only populated active categories');

$blogLocations = array_keys($inventory['blog']);
foreach (['published-article', 'uncategorised-article'] as $slug) {
    $check(in_array(DBT_SITE_ORIGIN . '/' . $slug, $blogLocations, true), $slug . ' is included in the article sitemap');
}
foreach (['noindex-article', 'draft-article', 'archived-article', 'inactive-category-article'] as $slug) {
    $check(!in_array(DBT_SITE_ORIGIN . '/' . $slug, $blogLocations, true), $slug . ' is excluded from the article sitemap');
}
$check(isset($inventory['categories'][DBT_SITE_ORIGIN . '/blog/active-populated/']), 'the populated active category is included');
$check(!isset($inventory['categories'][DBT_SITE_ORIGIN . '/blog/active-empty/']), 'the empty active category is excluded');
$check(!isset($inventory['categories'][DBT_SITE_ORIGIN . '/blog/inactive-populated/']), 'the inactive category is excluded');

$allLocations = [];
foreach ($inventory as $childUrls) {
    foreach ($childUrls as $loc => $entry) {
        $check(!isset($allLocations[$loc]), 'no duplicate URL across child sitemaps: ' . $loc);
        $allLocations[$loc] = true;
        $parts = parse_url($loc);
        $check(($parts['scheme'] ?? '') === 'https' && ($parts['host'] ?? '') === 'www.divinebalajitravels.com' && !isset($parts['query']) && !isset($parts['fragment']), 'canonical HTTPS www URL: ' . $loc);
    }
}
$check(count($allLocations) === 48, 'the child sitemap union contains every eligible test URL exactly once');

$render = static function (callable $renderer): SimpleXMLElement {
    ob_start();
    $renderer();
    $xmlOutput = (string) ob_get_clean();
    $previous = libxml_use_internal_errors(true);
    $xml = simplexml_load_string($xmlOutput, SimpleXMLElement::class, LIBXML_NONET);
    $errors = libxml_get_errors();
    libxml_clear_errors();
    libxml_use_internal_errors($previous);
    if (!$xml instanceof SimpleXMLElement || $errors) {
        throw new RuntimeException('Generated sitemap XML is invalid.');
    }
    return $xml;
};

$index = $render(static fn() => sitemap_render_index($inventory));
$check($index->getName() === 'sitemapindex', 'master sitemap uses sitemapindex XML');
$indexNamespace = $index->getDocNamespaces(true)[''] ?? '';
$check($indexNamespace === DBT_SITEMAP_NAMESPACE, 'master sitemap uses the official namespace');
$check(count($index->children(DBT_SITEMAP_NAMESPACE)->sitemap) === 4, 'master sitemap references each non-empty child sitemap');
$inventoryWithNoCategories = $inventory;
$inventoryWithNoCategories['categories'] = [];
$indexWithoutEmptyCategories = $render(static fn() => sitemap_render_index($inventoryWithNoCategories));
$check(count($indexWithoutEmptyCategories->children(DBT_SITEMAP_NAMESPACE)->sitemap) === 3, 'master sitemap omits an empty child sitemap');

foreach ($inventory as $type => $urls) {
    $child = $render(static fn() => sitemap_render_urlset($urls));
    $check($child->getName() === 'urlset', $type . ' child sitemap uses urlset XML');
    $check(count($child->children(DBT_SITEMAP_NAMESPACE)->url) === count($urls), $type . ' child sitemap XML count matches its inventory');
}

$db->exec("UPDATE posts SET slug = 'renamed-published-article' WHERE slug = 'published-article'");
$afterRename = sitemap_inventory();
$check(isset($afterRename['blog'][DBT_SITE_ORIGIN . '/renamed-published-article']), 'a changed published slug is reflected without a hardcoded article list');
$check(!isset($afterRename['blog'][DBT_SITE_ORIGIN . '/published-article']), 'the previous article slug is removed after a slug change');

$db->exec("DELETE FROM posts WHERE slug = 'uncategorised-article'");
$afterDeletion = sitemap_inventory();
$check(!isset($afterDeletion['blog'][DBT_SITE_ORIGIN . '/uncategorised-article']), 'a deleted article is removed from the blog sitemap');

echo implode(PHP_EOL, $assertions), PHP_EOL;
