<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/admin-ui.php';
require_once __DIR__ . '/blog-lib.php';

$user = require_admin();
$db = blog_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf($_POST['csrf'] ?? null);
    $id = (int) ($_POST['id'] ?? 0);
    $action = (string) ($_POST['action'] ?? '');
    $query = $db->prepare('SELECT * FROM posts WHERE id = ?');
    $query->execute([$id]);
    $post = $query->fetch();

    if (!$post || !post_owner($user, $post)) {
        http_response_code(403);
        exit('Not permitted.');
    }

    $nextStatus = [
        'publish' => 'published',
        'unpublish' => 'draft',
        'archive' => 'archived',
        'restore' => 'draft',
    ][$action] ?? null;

    if ($nextStatus && ($action !== 'publish' || post_publishable($user)) && ($action !== 'unpublish' || post_publishable($user))) {
        if ($nextStatus === 'published') {
            $db->prepare('UPDATE posts SET status = ?, published_at = COALESCE(published_at, CURRENT_TIMESTAMP), updated_at = CURRENT_TIMESTAMP WHERE id = ?')
                ->execute([$nextStatus, $id]);
        } else {
            $db->prepare('UPDATE posts SET status = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?')
                ->execute([$nextStatus, $id]);
        }
        audit($db, $user, $action, 'post', $id, ['status' => $nextStatus]);
    }
}

$where = [];
$arguments = [];
$search = trim((string) ($_GET['q'] ?? ''));
$status = (string) ($_GET['status'] ?? '');
$categoryId = (int) ($_GET['category'] ?? 0);

if ($search !== '') {
    $where[] = '(p.title LIKE ? OR p.slug LIKE ?)';
    $arguments[] = '%' . $search . '%';
    $arguments[] = '%' . $search . '%';
}
if (in_array($status, ['draft', 'published', 'archived'], true)) {
    $where[] = 'p.status = ?';
    $arguments[] = $status;
}
if ($categoryId > 0) {
    $where[] = 'p.category_id = ?';
    $arguments[] = $categoryId;
}
if (($user['role'] ?? '') === 'author') {
    $where[] = 'p.author_id = ?';
    $arguments[] = (int) $user['id'];
}

$sql = 'SELECT p.*, c.name AS category, u.name AS author
        FROM posts p
        LEFT JOIN categories c ON c.id = p.category_id
        LEFT JOIN users u ON u.id = p.author_id'
    . ($where ? ' WHERE ' . implode(' AND ', $where) : '')
    . ' ORDER BY p.updated_at DESC';
$postQuery = $db->prepare($sql);
$postQuery->execute($arguments);
$posts = $postQuery->fetchAll();

$categoryQuery = $db->prepare('SELECT id, name FROM categories WHERE status = ? ORDER BY name');
$categoryQuery->execute(['active']);
$categories = $categoryQuery->fetchAll();

admin_layout_start('Posts', 'posts', $user);
?>
<div class="bar">
    <div class="form-group">
        <h1>Blog posts</h1>
        <p>Search, review, and manage your blog content.</p>
    </div>
    <a class="btn" href="/admin/post-edit.php">New post</a>
</div>

<form class="card posts-filter" method="get">
    <div class="form-group">
        <label for="post-search">Search</label>
        <input id="post-search" name="q" value="<?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8') ?>" placeholder="Title or slug">
    </div>
    <div class="posts-filter__side">
        <div class="form-group">
            <label for="post-status">Status</label>
            <select id="post-status" name="status">
                <option value="">All statuses</option>
                <?php foreach (['draft', 'published', 'archived'] as $option): ?>
                    <option value="<?= $option ?>" <?= $status === $option ? 'selected' : '' ?>><?= ucfirst($option) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="post-category">Category</label>
            <select id="post-category" name="category">
                <option value="">All categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= (int) $category['id'] ?>" <?= $categoryId === (int) $category['id'] ? 'selected' : '' ?>><?= htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8') ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button class="btn" type="submit">Apply filters</button>
    </div>
</form>

<section class="card posts-table-wrap" aria-label="Blog post list">
    <table class="posts-table">
        <thead>
            <tr><th>Title</th><th>Slug</th><th>Category</th><th>Author</th><th>Status</th><th>Published</th><th>Updated</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><strong><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></strong></td>
                    <td><code><?= htmlspecialchars($post['slug'], ENT_QUOTES, 'UTF-8') ?></code></td>
                    <td><?= htmlspecialchars($post['category'] ?: 'Uncategorized', ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($post['author'] ?: '—', ENT_QUOTES, 'UTF-8') ?></td>
                    <td><span class="status-pill status-pill--<?= htmlspecialchars($post['status'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($post['status'], ENT_QUOTES, 'UTF-8') ?></span></td>
                    <td><?= htmlspecialchars($post['published_at'] ?: '—', ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($post['updated_at'] ?: '—', ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                        <?php if (post_owner($user, $post)): ?>
                            <div class="post-actions">
                                <a href="/admin/post-edit.php?id=<?= (int) $post['id'] ?>">Edit</a>
                                <form method="post">
                                    <input type="hidden" name="csrf" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
                                    <input type="hidden" name="id" value="<?= (int) $post['id'] ?>">
                                    <?php if ($post['status'] === 'draft' && post_publishable($user)): ?>
                                        <button name="action" value="publish" class="btn" type="submit">Publish</button>
                                    <?php elseif ($post['status'] === 'published' && post_publishable($user)): ?>
                                        <button name="action" value="unpublish" class="btn alt" type="submit">Unpublish</button>
                                    <?php elseif ($post['status'] === 'archived'): ?>
                                        <button name="action" value="restore" class="btn" type="submit">Restore</button>
                                    <?php endif; ?>
                                    <?php if ($post['status'] !== 'archived'): ?>
                                        <button name="action" value="archive" class="btn alt" type="submit">Archive</button>
                                    <?php endif; ?>
                                </form>
                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (!$posts): ?>
                <tr><td colspan="8">No posts match these filters.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
<?php admin_layout_end(); ?>
