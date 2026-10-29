<?php
declare(strict_types=1);

/**
 * Public sitemap controller.
 *
 * Apache rewrites the public XML URLs to this file:
 *   /sitemap.xml            sitemap index
 *   /pages-sitemap.xml      indexable non-package pages and the blog index
 *   /packages-sitemap.xml   indexable commercial package pages
 *   /blog-sitemap.xml       published, indexable blog articles
 *   /categories-sitemap.xml populated, indexable blog category archives
 *
 * sitemap.xml remains the checked-in source of truth for the 44 static
 * canonical URLs. It is not served directly while the .htaccess rules are
 * active; this controller reads it from disk and publishes the grouped XML.
 */

require_once __DIR__ . '/includes/blog-public.php';

const DBT_SITE_ORIGIN = 'https://www.divinebalajitravels.com';
const DBT_SITEMAP_NAMESPACE = 'http://www.sitemaps.org/schemas/sitemap/0.9';

/**
 * This is a deliberate, content-reviewed classification of the current
 * static inventory. It is not inferred from filenames: each path was placed
 * here according to the page's commercial package intent.
 *
 * @var list<string>
 */
const DBT_PACKAGE_SITEMAP_PATHS = [
    '/tirupati-vip-darshan-packages',
    '/hyderabad-tirupati-flight-package-two-days',
    '/mumbai-tirupati-flight-package-two-days',
    '/bengaluru-tirupati-flight-package-two-days',
    '/delhi-tirupati-flight-package-two-days',
    '/shirdi-tour-package-from-chennai-by-direct-flight.php',
    '/tirupati-tour-packages-from-tirupati.php',
    '/srivani-vip-break-darshan-from-chennai.php',
    '/srivani-vip-break-darshan-from-hyderabad.php',
    '/tirupati-srivani-vip-darshan-malaysia-chennai.php',
    '/tirupati-srivani-vip-darshan-malaysia-hyderabad.php',
    '/srivani-vip-break-darshan-tour-package-from-chennai.php',
    '/srivani-vip-darshan-from-chennai-for-nri.php',
    '/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php',
    '/tirupati-balaji-vip-darshan-tour-packages-from-chennai.php',
    '/nri-tirupati-darshan-booking.php',
    '/tirupati-nri-darshan-package-from-chennai.php',
    '/tirupati-nri-darshan-package-from-hyderabad-by-flight.php',
];

/** @return array<string, array{loc:string,lastmod?:string,changefreq?:string,priority?:string}> */
function sitemap_static_urls(): array
{
    $path = __DIR__ . '/sitemap.xml';
    if (!is_file($path)) {
        return [];
    }

    $previous = libxml_use_internal_errors(true);
    $xml = simplexml_load_file($path, SimpleXMLElement::class, LIBXML_NONET);
    libxml_clear_errors();
    libxml_use_internal_errors($previous);
    if (!$xml instanceof SimpleXMLElement) {
        return [];
    }

    $entries = [];
    foreach ($xml->children(DBT_SITEMAP_NAMESPACE)->url as $url) {
        $rawLoc = trim((string) $url->children(DBT_SITEMAP_NAMESPACE)->loc);
        $loc = sitemap_normalize_static_url($rawLoc);
        if ($loc === null) {
            continue;
        }

        $entry = ['loc' => $loc];
        foreach (['lastmod', 'changefreq', 'priority'] as $field) {
            $value = trim((string) $url->children(DBT_SITEMAP_NAMESPACE)->{$field});
            if ($value !== '') {
                $entry[$field] = $value;
            }
        }
        $entries[$loc] = $entry;
    }

    return $entries;
}

function sitemap_normalize_static_url(string $url): ?string
{
    $parts = parse_url($url);
    if (!is_array($parts)
        || ($parts['scheme'] ?? '') !== 'https'
        || strtolower((string) ($parts['host'] ?? '')) !== 'www.divinebalajitravels.com'
        || isset($parts['query'])
        || isset($parts['fragment'])
        || isset($parts['user'])
        || isset($parts['pass'])) {
        return null;
    }

    $path = (string) ($parts['path'] ?? '/');
    if ($path === '' || $path[0] !== '/') {
        return null;
    }

    return DBT_SITE_ORIGIN . $path;
}

/** @return array<string, true> */
function sitemap_package_paths(): array
{
    static $paths = null;
    if ($paths === null) {
        $paths = array_fill_keys(DBT_PACKAGE_SITEMAP_PATHS, true);
    }
    return $paths;
}

/** @param array<string, array{loc:string,lastmod?:string,changefreq?:string,priority?:string}> $urls */
function sitemap_add_url(array &$urls, string $path, ?string $lastmod = null): void
{
    $loc = DBT_SITE_ORIGIN . '/' . ltrim($path, '/');
    $entry = ['loc' => $loc];
    $lastmod = sitemap_date($lastmod);
    if ($lastmod !== null) {
        $entry['lastmod'] = $lastmod;
    }
    $urls[$loc] = $entry;
}

function sitemap_date(?string $value): ?string
{
    $value = trim((string) $value);
    if ($value === '') {
        return null;
    }
    $timestamp = strtotime($value);
    return $timestamp === false ? null : date('Y-m-d', $timestamp);
}

function sitemap_post_is_indexable(?string $robots): bool
{
    // This mirrors the public renderer's default: blank or unrecognised
    // values are indexable, while every explicit noindex form is excluded.
    return !str_contains(strtolower(str_replace(' ', '', (string) $robots)), 'noindex');
}

/** @return list<array{slug:string,lastmod:?string}> */
function sitemap_published_posts(PDO $db): array
{
    $query = $db->query(
        'SELECT p.slug, p.robots, COALESCE(p.updated_at, p.published_at) AS lastmod
         FROM posts p
         LEFT JOIN categories c ON c.id = p.category_id AND c.status = "active"
         WHERE p.status = "published" AND (p.category_id IS NULL OR c.id IS NOT NULL)
         ORDER BY p.slug'
    );

    $posts = [];
    foreach ($query as $post) {
        if (!sitemap_post_is_indexable($post['robots'] ?? null)) {
            continue;
        }
        $slug = trim((string) ($post['slug'] ?? ''));
        if ($slug !== '') {
            $posts[] = ['slug' => $slug, 'lastmod' => $post['lastmod'] ?? null];
        }
    }
    return $posts;
}

/** @return list<array{slug:string,lastmod:?string}> */
function sitemap_populated_categories(PDO $db): array
{
    $query = $db->query(
        'SELECT c.slug, MAX(COALESCE(p.updated_at, p.published_at)) AS lastmod
         FROM categories c
         INNER JOIN posts p ON p.category_id = c.id AND p.status = "published"
         WHERE c.status = "active"
         GROUP BY c.id, c.slug
         ORDER BY c.slug'
    );

    $categories = [];
    foreach ($query as $category) {
        $slug = trim((string) ($category['slug'] ?? ''));
        if ($slug !== '') {
            $categories[] = ['slug' => $slug, 'lastmod' => $category['lastmod'] ?? null];
        }
    }
    return $categories;
}

/** @return array{pages:array,packages:array,blog:array,categories:array} */
function sitemap_inventory(): array
{
    $pages = [];
    $packages = [];
    $packagePaths = sitemap_package_paths();
    foreach (sitemap_static_urls() as $loc => $entry) {
        $path = (string) parse_url($loc, PHP_URL_PATH);
        if (isset($packagePaths[$path])) {
            $packages[$loc] = $entry;
        } else {
            $pages[$loc] = $entry;
        }
    }

    $blog = [];
    $categories = [];

    try {
        $db = blog_db();
        $publishedPosts = sitemap_published_posts($db);
        $populatedCategories = sitemap_populated_categories($db);

        // The blog index is a general, indexable archive. Its last modified
        // date is reliable only when it has a published article to derive it
        // from, so omit it when there are no published posts.
        $latestPostDate = null;
        foreach ($publishedPosts as $post) {
            $candidate = $post['lastmod'] ?? null;
            if ($candidate !== null && ($latestPostDate === null || strtotime($candidate) > strtotime($latestPostDate))) {
                $latestPostDate = $candidate;
            }
            sitemap_add_url($blog, public_blog_article_path($post['slug']), $candidate);
        }
        sitemap_add_url($pages, 'blog/', $latestPostDate);

        foreach ($populatedCategories as $category) {
            sitemap_add_url($categories, 'blog/' . rawurlencode($category['slug']) . '/', $category['lastmod'] ?? null);
        }
    } catch (Throwable $exception) {
        // Keep the static sitemap paths crawlable if a temporary database
        // outage occurs. Dynamic sitemap URLs are deliberately omitted rather
        // than returning stale or unsafe data.
        error_log('Unable to build dynamic sitemap entries: ' . $exception->getMessage());
    }

    ksort($pages, SORT_STRING);
    ksort($packages, SORT_STRING);
    ksort($blog, SORT_STRING);
    ksort($categories, SORT_STRING);

    return [
        'pages' => $pages,
        'packages' => $packages,
        'blog' => $blog,
        'categories' => $categories,
    ];
}

function sitemap_xml_escape(string $value): string
{
    return htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

/** @param array<string, array{loc:string,lastmod?:string,changefreq?:string,priority?:string}> $urls */
function sitemap_render_urlset(array $urls): void
{
    header('Content-Type: application/xml; charset=UTF-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
    echo '<urlset xmlns="', DBT_SITEMAP_NAMESPACE, '">', "\n";
    foreach ($urls as $url) {
        echo "  <url>\n";
        echo '    <loc>', sitemap_xml_escape($url['loc']), "</loc>\n";
        foreach (['lastmod', 'changefreq', 'priority'] as $field) {
            if (!empty($url[$field])) {
                echo '    <', $field, '>', sitemap_xml_escape($url[$field]), '</', $field, ">\n";
            }
        }
        echo "  </url>\n";
    }
    echo "</urlset>\n";
}

/** @param array{pages:array,packages:array,blog:array,categories:array} $inventory */
function sitemap_render_index(array $inventory): void
{
    header('Content-Type: application/xml; charset=UTF-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
    echo '<sitemapindex xmlns="', DBT_SITEMAP_NAMESPACE, '">', "\n";
    foreach (['pages', 'packages', 'blog', 'categories'] as $type) {
        if (empty($inventory[$type])) {
            continue;
        }
        echo "  <sitemap>\n";
        echo '    <loc>', DBT_SITE_ORIGIN, '/', $type, "-sitemap.xml</loc>\n";
        echo "  </sitemap>\n";
    }
    echo "</sitemapindex>\n";
}

/** @param array{pages:array,packages:array,blog:array,categories:array} $inventory */
function sitemap_dispatch(array $inventory): void
{
    $type = strtolower(trim((string) ($_GET['sitemap'] ?? 'index')));
    if ($type === 'index') {
        sitemap_render_index($inventory);
        return;
    }

    if (!array_key_exists($type, $inventory) || empty($inventory[$type])) {
        http_response_code(404);
        header('Content-Type: text/plain; charset=UTF-8');
        echo 'Sitemap not found.';
        return;
    }

    sitemap_render_urlset($inventory[$type]);
}

if (!defined('DBT_SITEMAP_LIBRARY_ONLY')) {
    sitemap_dispatch(sitemap_inventory());
}
