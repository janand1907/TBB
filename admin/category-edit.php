<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/admin-ui.php';
require_once __DIR__ . '/blog-lib.php';

$user = require_admin();
require_capability($user, 'categories');
$db = blog_db();
$id = (int)($_GET['id'] ?? 0);
$error = '';
$category = ['name'=>'','slug'=>'','description'=>'','meta_title'=>'','meta_description'=>'','status'=>'active'];

if ($id) {
    $query = $db->prepare('SELECT * FROM categories WHERE id=?');
    $query->execute([$id]);
    $category = $query->fetch() ?: $category;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf($_POST['csrf'] ?? null);
    $category = [
        'name'=>clean_text($_POST['name'] ?? '',120),
        'slug'=>admin_slug($_POST['slug'] ?: $_POST['name'] ?? ''),
        'description'=>clean_text($_POST['description'] ?? '',5000),
        'meta_title'=>clean_text($_POST['meta_title'] ?? '',255),
        'meta_description'=>clean_text($_POST['meta_description'] ?? '',320),
        'status'=>in_array($_POST['status'] ?? '', ['active','inactive'], true) ? $_POST['status'] : 'active',
    ];
    if (!$category['name']) $error = 'Category name is required.';
    $query = $db->prepare('SELECT id FROM categories WHERE slug=? AND id!=?');
    $query->execute([$category['slug'], $id]);
    if (!$error && $query->fetch()) $error = 'That slug is already in use.';
    if (!$error) {
        if ($id) {
            $db->prepare('UPDATE categories SET name=?,slug=?,description=?,meta_title=?,meta_description=?,status=?,updated_at=CURRENT_TIMESTAMP WHERE id=?')
                ->execute([...array_values($category), $id]);
            audit($db, $user, 'update', 'category', $id, ['slug'=>$category['slug']]);
        } else {
            $db->prepare('INSERT INTO categories(name,slug,description,meta_title,meta_description,status) VALUES(?,?,?,?,?,?)')
                ->execute(array_values($category));
            $id = (int)$db->lastInsertId();
            audit($db, $user, 'create', 'category', $id, ['slug'=>$category['slug']]);
        }
        header('Location: /admin/categories.php');
        exit;
    }
}

admin_layout_start($id ? 'Edit category' : 'Add category', 'categories', $user);
?>
<div class="bar">
    <div>
        <h1><?=$id ? 'Edit category' : 'Add category'?></h1>
        <p>Inactive categories remain attached to existing posts but cannot be selected for new posts.</p>
    </div>
    <a class="btn alt" href="/admin/categories.php">Back to categories</a>
</div>
<?php if ($error): ?><p class="notice" style="background:#fff0f0;color:#8b1e1e"><?=htmlspecialchars($error, ENT_QUOTES, 'UTF-8')?></p><?php endif ?>
<form method="post" class="grid">
    <section class="card" aria-labelledby="category-details-heading">
        <input type="hidden" name="csrf" value="<?=csrf_token()?>">
        <h2 id="category-details-heading">Category Details</h2>
        <div class="form-group"><label for="category-name">Name</label><input id="category-name" name="name" type="text" maxlength="120" required value="<?=htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8')?>"></div>
        <div class="form-group"><label for="category-slug">Slug</label><input id="category-slug" name="slug" type="text" maxlength="160" value="<?=htmlspecialchars($category['slug'], ENT_QUOTES, 'UTF-8')?>"></div>
        <div class="form-group"><label for="category-description">Description</label><textarea id="category-description" name="description"><?=htmlspecialchars($category['description'], ENT_QUOTES, 'UTF-8')?></textarea></div>
    </section>
    <aside class="card" aria-labelledby="category-seo-heading">
        <h2 id="category-seo-heading">SEO</h2>
        <div class="form-group"><label for="category-meta-title">Meta Title</label><input id="category-meta-title" name="meta_title" type="text" maxlength="255" value="<?=htmlspecialchars($category['meta_title'], ENT_QUOTES, 'UTF-8')?>"></div>
        <div class="form-group"><label for="category-meta-description">Meta Description</label><textarea id="category-meta-description" name="meta_description" maxlength="320" style="min-height:100px"><?=htmlspecialchars($category['meta_description'], ENT_QUOTES, 'UTF-8')?></textarea></div>
        <div class="form-group"><label for="category-status">Status</label><select id="category-status" name="status"><option value="active" <?=$category['status']==='active'?'selected':''?>>Active</option><option value="inactive" <?=$category['status']==='inactive'?'selected':''?>>Inactive</option></select></div>
        <button class="btn" type="submit">Save category</button>
    </aside>
</form>
<?php admin_layout_end(); ?>
