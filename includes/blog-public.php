<?php
declare(strict_types=1);
require_once __DIR__ . '/blog-content.php';

require_once __DIR__ . '/blog-config.php';

function public_blog_escape(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function public_blog_url(string $path): string
{
    return '/' . ltrim($path, '/');
}

function public_blog_article_path(string $slug): string
{
    return rawurlencode($slug);
}

function public_blog_image(?string $path): ?string
{
    $path = trim((string) $path);
    if ($path === '') {
        return null;
    }
    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }
    return public_blog_url($path);
}

/**
 * Return intrinsic dimensions for a local blog image when available.
 * External image URLs are left alone because fetching them during page
 * rendering would add latency and cannot be relied on for layout metadata.
 */
function public_blog_image_dimensions(?string $path): array
{
    $path = trim((string) $path);
    if ($path === '' || preg_match('#^https?://#i', $path)) {
        return [];
    }

    $relativePath = parse_url($path, PHP_URL_PATH);
    $relativePath = ltrim((string) ($relativePath ?: $path), '/');
    $projectRoot = realpath(__DIR__ . '/..');
    $filePath = realpath(__DIR__ . '/../' . $relativePath);
    if ($projectRoot === false || $filePath === false ||
        strpos($filePath, $projectRoot . DIRECTORY_SEPARATOR) !== 0 || !is_file($filePath)) {
        return [];
    }

    $size = @getimagesize($filePath);
    if (!$size || empty($size[0]) || empty($size[1])) {
        return [];
    }
    return ['width' => (int) $size[0], 'height' => (int) $size[1]];
}

function public_blog_absolute_url(string $path): string
{
    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }
    return 'https://www.divinebalajitravels.com' . public_blog_url($path);
}

function public_blog_robots(?string $robots): string
{
    $allowed = ['index,follow', 'noindex,follow', 'index,nofollow', 'noindex,nofollow'];
    return in_array($robots, $allowed, true) ? (string) $robots : 'index,follow';
}

function public_blog_schema_script(array $schema): string
{
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '</script>';
}

function public_blog_redirect(string $slug): ?string
{
    try {
        $query = blog_db()->prepare('SELECT to_path FROM redirects WHERE from_path IN (?, ?) LIMIT 1');
        $query->execute(['blog/' . $slug . '/', '/blog/' . $slug . '/']);
        $redirect = $query->fetchColumn();
        if (!$redirect) {
            return null;
        }
        $redirect = '/' . ltrim((string) $redirect, '/');
        // Redirects created before the root-article migration may still point
        // to /blog/{slug}/. Preserve the redirect record but send visitors to
        // the current canonical root article URL.
        if (preg_match('#^/blog/([a-z0-9-]+)/?$#i', $redirect, $matches)) {
            return public_blog_url(public_blog_article_path($matches[1]));
        }
        return $redirect;
    } catch (Throwable $exception) {
        // Older local databases may not have the optional redirects table yet.
        return null;
    }
}

function public_blog_excerpt(array $post): string
{
    $excerpt = trim((string) ($post['excerpt'] ?? ''));
    if ($excerpt !== '') {
        return $excerpt;
    }
    $plain = trim((string) preg_replace('/\s+/', ' ', strip_tags((string) ($post['content'] ?? ''))));
    return strlen($plain) > 160 ? substr($plain, 0, 157) . '...' : $plain;
}

function public_blog_date(?string $date): string
{
    if (!$date) {
        return '';
    }
    $timestamp = strtotime($date);
    return $timestamp ? date('F j, Y', $timestamp) : '';
}

function public_blog_card(array $post): void
{
    $image = public_blog_image($post['featured_image'] ?? null);
    $imageDimensions = public_blog_image_dimensions($post['featured_image'] ?? null);
    $postUrl = public_blog_url(public_blog_article_path((string) $post['slug']));
    ?>
    <article class="dbt-blog-card">
        <?php if ($image): ?>
            <a class="dbt-blog-card__image" href="<?= public_blog_escape($postUrl) ?>">
                <img src="<?= public_blog_escape($image) ?>" alt="<?= public_blog_escape($post['featured_image_alt'] ?: $post['title']) ?>" loading="lazy"<?php if ($imageDimensions): ?> width="<?= $imageDimensions['width'] ?>" height="<?= $imageDimensions['height'] ?>"<?php endif; ?>>
            </a>
        <?php else: ?>
            <a class="dbt-blog-card__image dbt-blog-card__image--fallback" href="<?= public_blog_escape($postUrl) ?>" aria-label="Read <?= public_blog_escape($post['title']) ?>">
                <span>Divine Balaji Travels</span>
            </a>
        <?php endif; ?>
        <div class="dbt-blog-card__body">
            <?php if (!empty($post['category_slug'])): ?>
                <a class="dbt-blog-card__category" href="<?= public_blog_escape(public_blog_url('blog/' . rawurlencode((string) $post['category_slug']) . '/')) ?>"><?= public_blog_escape($post['category_name'] ?? '') ?></a>
            <?php endif; ?>
            <h2><a href="<?= public_blog_escape($postUrl) ?>"><?= public_blog_escape($post['title']) ?></a></h2>
            <p><?= public_blog_escape(public_blog_excerpt($post)) ?></p>
            <div class="dbt-blog-card__meta">
                <span><?= public_blog_escape(public_blog_date($post['published_at'] ?? null)) ?></span>
                <a href="<?= public_blog_escape($postUrl) ?>">Read More <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </article>
    <?php
}

function public_blog_layout_start(string $title, string $description, string $canonical, ?string $ogImage = null, string $robots = 'index,follow', ?string $ogTitle = null, ?string $ogDescription = null, array $schemas = []): void
{
    $pageTitle = $title;
    $pageDescription = $description;
    $pageCanonical = public_blog_absolute_url($canonical);
    $pageOgImage = $ogImage ? public_blog_absolute_url($ogImage) : 'https://www.divinebalajitravels.com/assets/images/logo/logo_main.png';
    $pageRobots = str_replace(',', ', ', public_blog_robots($robots));
    $pageOgTitle = $ogTitle ?: $pageTitle;
    $pageOgDescription = $ogDescription ?: $pageDescription;
    // Emit the single canonical TravelAgency entity from the shared header.
    // Article and breadcrumb schemas reference it by @id, so this does not
    // create a second business entity on blog pages.
    $includeDefaultSchema = true;
    $loadLegacyWidgets = false;
    $extraHeadLinks = "<base href=\"/\">\n<link rel=\"stylesheet\" href=\"/assets/css/blog.css\">\n<link rel=\"stylesheet\" href=\"/assets/css/blog-content.css\">";
    foreach ($schemas as $schema) {
        $extraHeadLinks .= public_blog_schema_script($schema);
    }
    include __DIR__ . '/header.php';
}

function public_blog_layout_end(): void
{
    // The shared footer reads these flags from its include scope.
    $showLeadPopup = false;
    $loadLegacyWidgets = false;
    include __DIR__ . '/footer.php';
}

function public_blog_not_found(string $message = 'The requested blog page could not be found.'): never
{
    http_response_code(404);
    public_blog_layout_start('Page not found | Divine Balaji Travels Blog', $message, 'blog/', null, 'noindex,follow');
    ?>
    <main class="dbt-blog-page"><div class="dbt-blog-wrap dbt-blog-empty"><p class="dbt-blog-eyebrow">Divine Balaji Travels Blog</p><h1>We could not find that page</h1><p><?= public_blog_escape($message) ?></p><a class="dbt-blog-button" href="/blog/">Back to the blog</a></div></main>
    <?php
    public_blog_layout_end();
    exit;
}
