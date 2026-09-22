<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/blog-public.php';

$db = blog_db();
$slug = trim((string) ($_GET['slug'] ?? ''));

if ($slug !== '') {
    $redirectPath = public_blog_redirect($slug);
    if ($redirectPath) {
        header('Location: ' . (str_starts_with($redirectPath, '/') ? $redirectPath : '/' . ltrim($redirectPath, '/')), true, 301);
        exit;
    }
    $postQuery = $db->prepare('SELECT p.*, c.name AS category_name, c.slug AS category_slug, u.name AS author_name FROM posts p INNER JOIN categories c ON c.id = p.category_id AND c.status = "active" LEFT JOIN users u ON u.id = p.author_id WHERE p.slug = ? AND p.status = "published" LIMIT 1');
    $postQuery->execute([$slug]);
    $post = $postQuery->fetch();
    if ($post) {
        $description = trim((string) ($post['meta_description'] ?: public_blog_excerpt($post)));
        $canonical = $post['canonical_url'] ?: 'blog/' . rawurlencode($post['slug']) . '/';
        $image = public_blog_image($post['og_image'] ?: $post['featured_image']);
        $articleUrl = public_blog_absolute_url($canonical);
        $categoryUrl = !empty($post['category_slug']) ? public_blog_absolute_url('blog/' . rawurlencode((string) $post['category_slug']) . '/') : null;
        $breadcrumbItems = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.divinebalajitravels.com/'], ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://www.divinebalajitravels.com/blog/']];
        if ($categoryUrl) {
            $breadcrumbItems[] = ['@type' => 'ListItem', 'position' => 3, 'name' => (string) $post['category_name'], 'item' => $categoryUrl];
        }
        $breadcrumbItems[] = ['@type' => 'ListItem', 'position' => count($breadcrumbItems) + 1, 'name' => (string) $post['title'], 'item' => $articleUrl];
        $articleSchema = ['@context' => 'https://schema.org', '@type' => 'Article', 'headline' => (string) $post['title'], 'description' => $description, 'datePublished' => date(DATE_ATOM, strtotime((string) $post['published_at'])), 'dateModified' => date(DATE_ATOM, strtotime((string) ($post['updated_at'] ?: $post['published_at']))), 'author' => ['@type' => 'Person', 'name' => $post['author_name'] ?: 'Divine Balaji Travels'], 'publisher' => ['@type' => 'Organization', 'name' => 'Divine Balaji Travels'], 'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $articleUrl]];
        if ($image) {
            $articleSchema['image'] = [public_blog_absolute_url($image)];
        }
        $breadcrumbSchema = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $breadcrumbItems];
        public_blog_layout_start((string) ($post['meta_title'] ?: $post['title']), $description, $canonical, $post['og_image'] ?: $post['featured_image'], public_blog_robots($post['robots'] ?? null), (string) ($post['og_title'] ?: $post['meta_title'] ?: $post['title']), (string) ($post['og_description'] ?: $description), [$articleSchema, $breadcrumbSchema]);
        ?>
        <main class="dbt-blog-page dbt-blog-article-page">
            <div class="dbt-blog-wrap">
                <nav class="dbt-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/blog/">Blog</a><?php if (!empty($post['category_name'])): ?><span>›</span><a href="<?= public_blog_escape(public_blog_url('blog/' . rawurlencode((string) $post['category_slug']) . '/')) ?>"><?= public_blog_escape($post['category_name']) ?></a><?php endif; ?><span>›</span><span><?= public_blog_escape($post['title']) ?></span></nav>
                <article class="dbt-blog-article">
                    <p class="dbt-blog-eyebrow"><?= public_blog_escape($post['category_name'] ?: 'Travel guidance') ?></p>
                    <h1><?= public_blog_escape($post['title']) ?></h1>
                    <div class="dbt-blog-article__dates">Published <?= public_blog_escape(public_blog_date($post['published_at'])) ?><?php if (!empty($post['updated_at']) && $post['updated_at'] !== $post['published_at']): ?> · Updated <?= public_blog_escape(public_blog_date($post['updated_at'])) ?><?php endif; ?></div>
                    <?php $featuredImage = public_blog_image($post['featured_image']); if ($featuredImage): ?><img class="dbt-blog-article__hero" src="<?= public_blog_escape($featuredImage) ?>" alt="<?= public_blog_escape($post['featured_image_alt'] ?: $post['title']) ?>"><?php endif; ?>
                    <div class="dbt-blog-article__content"><?= (string) $post['content'] ?></div>
                </article>
                <aside class="dbt-blog-whatsapp"><div><p class="dbt-blog-eyebrow">Travel support</p><h2>Need help planning your Tirupati trip?</h2><p>Chat with Divine Balaji Travels on WhatsApp and get package details.</p></div><a class="dbt-blog-button dbt-blog-button--whatsapp" href="https://wa.me/919994751079?text=I%20need%20help%20planning%20my%20Tirupati%20trip" target="_blank" rel="noopener">Chat on WhatsApp</a></aside>
                <?php $relatedQuery = $db->prepare('SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM posts p INNER JOIN categories c ON c.id = p.category_id AND c.status = "active" WHERE p.status = "published" AND p.id != ? AND p.category_id = ? ORDER BY p.published_at DESC LIMIT 3'); $relatedQuery->execute([(int) $post['id'], (int) $post['category_id']]); $related = $relatedQuery->fetchAll(); if ($related): ?>
                    <section class="dbt-blog-related"><div class="dbt-blog-section-heading"><p class="dbt-blog-eyebrow">Keep exploring</p><h2>Related travel guides</h2></div><div class="dbt-blog-grid"><?php foreach ($related as $relatedPost) { public_blog_card($relatedPost); } ?></div></section>
                <?php endif; ?>
            </div>
        </main>
        <?php
        public_blog_layout_end();
        exit;
    }

    $categoryQuery = $db->prepare('SELECT * FROM categories WHERE slug = ? AND status = "active" LIMIT 1');
    $categoryQuery->execute([$slug]);
    $category = $categoryQuery->fetch();
    if (!$category) {
        public_blog_not_found();
    }
    $postsQuery = $db->prepare('SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM posts p LEFT JOIN categories c ON c.id = p.category_id WHERE p.status = "published" AND p.category_id = ? ORDER BY p.published_at DESC, p.id DESC');
    $postsQuery->execute([(int) $category['id']]);
    $posts = $postsQuery->fetchAll();
    $categoryUrl = public_blog_absolute_url('blog/' . rawurlencode((string) $category['slug']) . '/');
    $categoryBreadcrumb = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.divinebalajitravels.com/'], ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://www.divinebalajitravels.com/blog/'], ['@type' => 'ListItem', 'position' => 3, 'name' => (string) $category['name'], 'item' => $categoryUrl]]];
    public_blog_layout_start($category['name'] . ' | Divine Balaji Travels Blog', $category['description'] ?: 'Travel guidance and Tirupati darshan tips from Divine Balaji Travels.', 'blog/' . rawurlencode($category['slug']) . '/', '','index,follow',null,null,[$categoryBreadcrumb]);
    ?>
    <main class="dbt-blog-page"><div class="dbt-blog-wrap"><nav class="dbt-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/blog/">Blog</a><span>›</span><span><?= public_blog_escape($category['name']) ?></span></nav><header class="dbt-blog-hero"><p class="dbt-blog-eyebrow">Travel guide category</p><h1><?= public_blog_escape($category['name']) ?></h1><p><?= public_blog_escape($category['description'] ?: 'Helpful guidance for planning a smooth pilgrimage journey.') ?></p></header><?php if ($posts): ?><div class="dbt-blog-grid"><?php foreach ($posts as $post) { public_blog_card($post); } ?></div><?php else: ?><div class="dbt-blog-empty"><h2>More guides are coming soon</h2><p>Explore the main blog for more Tirupati travel guidance.</p><a class="dbt-blog-button" href="/blog/">View all guides</a></div><?php endif; ?></div></main>
    <?php
    public_blog_layout_end();
    exit;
}

$posts = $db->query('SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM posts p INNER JOIN categories c ON c.id = p.category_id AND c.status = "active" WHERE p.status = "published" ORDER BY p.published_at DESC, p.id DESC')->fetchAll();
$categories = $db->query('SELECT c.*, COUNT(p.id) AS published_count FROM categories c LEFT JOIN posts p ON p.category_id = c.id AND p.status = "published" WHERE c.status = "active" GROUP BY c.id ORDER BY c.name')->fetchAll();
$blogBreadcrumb = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.divinebalajitravels.com/'], ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://www.divinebalajitravels.com/blog/']]];
public_blog_layout_start('Divine Balaji Travels Blog', 'Travel guides, Tirupati darshan guidance, NRI travel guidance and South India pilgrimage travel tips from Divine Balaji Travels.', 'blog/','', 'index,follow', null, null, [$blogBreadcrumb]);
?>
<main class="dbt-blog-page"><div class="dbt-blog-wrap"><header class="dbt-blog-hero"><p class="dbt-blog-eyebrow">Plan your pilgrimage with confidence</p><h1>Divine Balaji Travels Blog</h1><p>Practical travel guides, Tirupati darshan guidance, NRI travel guidance and South India pilgrimage travel tips for a smoother journey.</p></header><?php if ($categories): ?><nav class="dbt-blog-categories" aria-label="Blog categories"><a class="is-active" href="/blog/">All guides</a><?php foreach ($categories as $category): ?><a href="<?= public_blog_escape(public_blog_url('blog/' . rawurlencode((string) $category['slug']) . '/')) ?>"><?= public_blog_escape($category['name']) ?></a><?php endforeach; ?></nav><?php endif; ?><?php if ($posts): ?><div class="dbt-blog-grid"><?php foreach ($posts as $post) { public_blog_card($post); } ?></div><?php else: ?><div class="dbt-blog-empty"><h2>Our travel guides are coming soon</h2><p>Check back soon for helpful Tirupati and pilgrimage travel guidance.</p></div><?php endif; ?></div></main>
<?php public_blog_layout_end();
