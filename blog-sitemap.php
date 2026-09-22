<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/blog-config.php';

$db = blog_db();
$urls = [['loc' => 'https://www.divinebalajitravels.com/blog/', 'lastmod' => date('Y-m-d')]];
$categories = $db->query('SELECT c.slug, MAX(COALESCE(p.updated_at, p.published_at)) AS lastmod FROM categories c INNER JOIN posts p ON p.category_id = c.id AND p.status = "published" WHERE c.status = "active" GROUP BY c.id, c.slug ORDER BY c.slug')->fetchAll();
foreach ($categories as $category) {
    $urls[] = ['loc' => 'https://www.divinebalajitravels.com/blog/' . rawurlencode((string) $category['slug']) . '/', 'lastmod' => $category['lastmod'] ?: date('Y-m-d')];
}
$posts = $db->query('SELECT p.slug, COALESCE(p.updated_at, p.published_at) AS lastmod FROM posts p INNER JOIN categories c ON c.id = p.category_id AND c.status = "active" WHERE p.status = "published" ORDER BY p.slug')->fetchAll();
foreach ($posts as $post) {
    $urls[] = ['loc' => 'https://www.divinebalajitravels.com/blog/' . rawurlencode((string) $post['slug']) . '/', 'lastmod' => $post['lastmod'] ?: date('Y-m-d')];
}
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?><url><loc><?= htmlspecialchars($url['loc'], ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></loc><lastmod><?= htmlspecialchars(date('Y-m-d', strtotime((string) $url['lastmod'])), ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></lastmod></url>
<?php endforeach; ?></urlset>
