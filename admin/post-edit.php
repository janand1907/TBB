<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/admin-ui.php';
require_once __DIR__ . '/blog-lib.php';

$user = require_admin();
$db = blog_db();
$id = (int)($_GET['id'] ?? 0);
$error = '';
$post = [
    'title'=>'','slug'=>'','category_id'=>'','excerpt'=>'','content'=>'','featured_image'=>'',
    'featured_image_alt'=>'','status'=>'draft','published_at'=>'','meta_title'=>'','meta_description'=>'',
    'focus_keyword'=>'','secondary_keywords'=>'','canonical_url'=>'','robots'=>'index,follow',
    'og_title'=>'','og_description'=>'','og_image'=>'','schema_json'=>'',
];

if ($id) {
    $query = $db->prepare('SELECT * FROM posts WHERE id=?');
    $query->execute([$id]);
    $stored = $query->fetch();
    if (!$stored) { http_response_code(404); exit('Post not found.'); }
    $post = array_merge($post, array_map(static fn($value) => $value ?? '', $stored));
    if (!post_owner($user, $post)) { http_response_code(403); exit('Not permitted.'); }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf($_POST['csrf'] ?? null);
    $oldSlug = (string)$post['slug'];
    $post = array_merge($post, [
        'title'=>clean_text($_POST['title'] ?? '',255),
        'slug'=>admin_slug($_POST['slug'] ?: $_POST['title'] ?? ''),
        'category_id'=>(int)($_POST['category_id'] ?? 0),
        'excerpt'=>clean_text($_POST['excerpt'] ?? '',1000),
        'content'=>clean_blog_html($_POST['content'] ?? '',50000),
        'featured_image_alt'=>clean_text($_POST['featured_image_alt'] ?? '',255),
        'status'=>valid_post_status($_POST['status'] ?? 'draft'),
        'meta_title'=>clean_text($_POST['meta_title'] ?? '',255),
        'meta_description'=>clean_text($_POST['meta_description'] ?? '',320),
        'focus_keyword'=>clean_text($_POST['focus_keyword'] ?? '',160),
        'secondary_keywords'=>clean_text($_POST['secondary_keywords'] ?? '',500),
        'canonical_url'=>trim($_POST['canonical_url'] ?? ''),
        'robots'=>in_array($_POST['robots'] ?? '', ['index,follow','noindex,follow','index,nofollow','noindex,nofollow'], true) ? $_POST['robots'] : 'index,follow',
        'og_title'=>clean_text($_POST['og_title'] ?? '',255),
        'og_description'=>clean_text($_POST['og_description'] ?? '',320),
        'og_image'=>trim($_POST['og_image'] ?? ''),
        'schema_json'=>trim($_POST['schema_json'] ?? ''),
    ]);

    try {
        $image = safe_image_upload('featured_image');
        if ($image) $post['featured_image'] = $image;
        // Use the featured image for social sharing unless the editor supplied
        // a deliberate, separate Open Graph image URL.
        if ($post['og_image'] === '' && $post['featured_image'] !== '') {
            $post['og_image'] = $post['featured_image'];
        }
        if (!$post['title'] || trim(strip_tags($post['content'])) === '') throw new RuntimeException('Title and content are required.');
        if ($post['canonical_url'] && !filter_var($post['canonical_url'], FILTER_VALIDATE_URL)) throw new RuntimeException('Canonical URL is invalid.');
        if ($post['schema_json'] && json_decode($post['schema_json']) === null) throw new RuntimeException('Schema JSON is invalid.');

        $query = $db->prepare('SELECT id FROM posts WHERE slug=? AND id!=?');
        $query->execute([$post['slug'], $id]);
        if ($query->fetch()) throw new RuntimeException('That slug is already in use.');
        if ($conflict = public_blog_slug_conflict($post['slug'])) throw new RuntimeException($conflict);
        if (!post_publishable($user) && $post['status'] === 'published') $post['status'] = 'draft';

        $fields = ['title','slug','category_id','excerpt','content','featured_image','featured_image_alt','meta_title','meta_description','focus_keyword','secondary_keywords','canonical_url','robots','og_title','og_description','og_image','schema_json','status'];
        $values = array_map(static fn($field) => $post[$field] ?: null, $fields);
        if ($id) {
            $sets = implode(',', array_map(static fn($field) => $field.'=?', $fields));
            $db->prepare("UPDATE posts SET $sets,updated_at=CURRENT_TIMESTAMP,published_at=CASE WHEN ?='published' AND published_at IS NULL THEN CURRENT_TIMESTAMP ELSE published_at END WHERE id=?")
                ->execute([...$values, $post['status'], $id]);
            if ($oldSlug !== '' && $oldSlug !== $post['slug']) {
                try {
                    $redirect = $db->prepare('SELECT id FROM redirects WHERE from_path=?');
                    $redirect->execute(['blog/'.$oldSlug.'/']);
                    if (!$redirect->fetch()) {
                        $redirect = $db->prepare('INSERT INTO redirects(from_path,to_path) VALUES(?,?)');
                        $redirect->execute(['blog/'.$oldSlug.'/', '/'.$post['slug'].'/']);
                    }
                } catch (Throwable $ignored) {}
            }
            audit($db, $user, $post['status'] === 'published' ? 'publish' : 'update', 'post', $id);
        } else {
            $db->prepare('INSERT INTO posts('.implode(',',$fields).',author_id,published_at) VALUES('.rtrim(str_repeat('?,',count($fields)+2),',').')')
                ->execute([...$values, $user['id'], $post['status'] === 'published' ? date('Y-m-d H:i:s') : null]);
            $id = (int)$db->lastInsertId();
            audit($db, $user, $post['status'] === 'published' ? 'publish' : 'create', 'post', $id);
        }
        header('Location: /admin/post-edit.php?id='.$id.'&saved=1');
        exit;
    } catch (Throwable $exception) {
        $error = $exception->getMessage();
    }
}

$categories = $db->query('SELECT id,name FROM categories WHERE status="active" ORDER BY name')->fetchAll();
$ogImageValue = (string)($post['og_image'] ?: $post['featured_image']);
admin_layout_start($id ? 'Edit post' : 'New post', 'posts', $user);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css">
<style>
.post-form-columns{display:grid;grid-template-columns:minmax(0,2fr) minmax(300px,1fr);gap:22px;align-items:start}
.post-form-column{display:grid;gap:22px;align-content:start;min-width:0}
.blog-editor{height:520px;min-height:520px;max-height:520px;background:#fff;font:15px/1.65 Arial,sans-serif}
.ql-toolbar.ql-snow{border-color:#d7cabc;border-radius:5px 5px 0 0}
.ql-container.ql-snow{border-color:#d7cabc;border-radius:0 0 5px 5px;font:15px/1.65 Arial,sans-serif}
.blog-editor.ql-container{overflow-y:auto}
.blog-editor .ql-editor{min-height:100%;overflow-y:auto}
.blog-content-fallback{height:520px;min-height:520px;overflow-y:auto;resize:vertical}
@media(max-width:900px){.post-form-columns{grid-template-columns:1fr}}
</style>
<div class="bar"><h1><?=$id ? 'Edit post' : 'New post'?></h1><a class="btn alt" href="/admin/posts.php">Back to posts</a></div>
<?php if ($error): ?><p class="notice" style="background:#fff0f0;color:#8b1e1e"><?=htmlspecialchars($error, ENT_QUOTES, 'UTF-8')?></p><?php endif ?>
<form method="post" enctype="multipart/form-data" id="post-form">
    <input type="hidden" name="csrf" value="<?=csrf_token()?>">
    <div class="post-form-columns">
        <div class="post-form-column">
            <section class="card" aria-labelledby="main-content-heading">
                <h2 id="main-content-heading">Main Content</h2>
                <div class="form-group"><label for="post-title">Title</label><input id="post-title" name="title" type="text" required value="<?=htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-slug">Slug</label><input id="post-slug" name="slug" type="text" value="<?=htmlspecialchars($post['slug'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-category">Category</label><select id="post-category" name="category_id"><option value="">None</option><?php foreach ($categories as $category): ?><option value="<?=$category['id']?>" <?=$post['category_id']==$category['id']?'selected':''?>><?=htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8')?></option><?php endforeach ?></select></div>
                <div class="form-group"><label for="post-excerpt">Excerpt</label><textarea id="post-excerpt" name="excerpt"><?=htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8')?></textarea></div>
                <div class="form-group"><label id="blog-content-label" for="blog-content-source">Content Editor</label><textarea name="content" id="blog-content-source" class="blog-content-fallback" required><?=htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8')?></textarea><div id="blog-content-editor" class="blog-editor" aria-labelledby="blog-content-label" hidden><?=clean_blog_html((string)$post['content'])?></div></div>
            </section>

            <section class="card" aria-labelledby="image-heading">
                <h2 id="image-heading">Image</h2>
                <div class="form-group"><label for="featured-image">Featured Image <span class="field-hint">(optional; JPG, PNG, WEBP; max 5 MB)</span></label><input id="featured-image" name="featured_image" type="file" accept="image/jpeg,image/png,image/webp"></div>
                <div class="form-group"><label for="featured-image-alt">Image Alt Text <span class="field-hint">(optional)</span></label><input id="featured-image-alt" name="featured_image_alt" type="text" value="<?=htmlspecialchars($post['featured_image_alt'], ENT_QUOTES, 'UTF-8')?>"></div>
            </section>
        </div>

        <div class="post-form-column">
            <section class="card" aria-labelledby="seo-heading">
                <h2 id="seo-heading">SEO</h2>
                <div class="form-group"><label for="post-meta-title">Meta Title</label><input id="post-meta-title" name="meta_title" type="text" value="<?=htmlspecialchars($post['meta_title'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-meta-description">Meta Description</label><textarea id="post-meta-description" name="meta_description"><?=htmlspecialchars($post['meta_description'], ENT_QUOTES, 'UTF-8')?></textarea></div>
                <div class="form-group"><label for="post-focus-keyword">Focus Keyword</label><input id="post-focus-keyword" name="focus_keyword" type="text" value="<?=htmlspecialchars($post['focus_keyword'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-secondary-keywords">Secondary Keywords</label><input id="post-secondary-keywords" name="secondary_keywords" type="text" value="<?=htmlspecialchars($post['secondary_keywords'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-canonical-url">Canonical URL</label><input id="post-canonical-url" name="canonical_url" type="text" value="<?=htmlspecialchars($post['canonical_url'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-robots">Robots</label><select id="post-robots" name="robots"><?php foreach (['index,follow','noindex,follow','index,nofollow','noindex,nofollow'] as $robots): ?><option value="<?=$robots?>" <?=$post['robots']===$robots?'selected':''?>><?=$robots?></option><?php endforeach ?></select></div>
            </section>

            <section class="card" aria-labelledby="og-heading">
                <h2 id="og-heading">Open Graph</h2>
                <div class="form-group"><label for="post-og-title">OG Title</label><input id="post-og-title" name="og_title" type="text" value="<?=htmlspecialchars($post['og_title'], ENT_QUOTES, 'UTF-8')?>"></div>
                <div class="form-group"><label for="post-og-description">OG Description</label><textarea id="post-og-description" name="og_description"><?=htmlspecialchars($post['og_description'], ENT_QUOTES, 'UTF-8')?></textarea></div>
                <div class="form-group"><label for="post-og-image">OG Image URL <span class="field-hint">(uses the featured image automatically when left blank)</span></label><input id="post-og-image" name="og_image" type="text" value="<?=htmlspecialchars($ogImageValue, ENT_QUOTES, 'UTF-8')?>"></div>
            </section>

            <section class="card" aria-labelledby="schema-heading">
                <h2 id="schema-heading">Schema</h2>
                <div class="form-group"><label for="post-schema-json">Schema JSON</label><textarea id="post-schema-json" name="schema_json"><?=htmlspecialchars($post['schema_json'], ENT_QUOTES, 'UTF-8')?></textarea></div>
            </section>

            <section class="card" aria-labelledby="publish-heading">
                <h2 id="publish-heading">Publish</h2>
                <div class="form-group"><label for="post-status">Status</label><select id="post-status" name="status"><option value="draft" <?=$post['status']==='draft'?'selected':''?>>Draft</option><?php if (post_publishable($user)): ?><option value="published" <?=$post['status']==='published'?'selected':''?>>Published</option><?php endif ?></select></div>
                <div class="form-group"><label for="post-publish-date">Publish Date</label><input id="post-publish-date" type="text" readonly value="<?=htmlspecialchars((string)($post['published_at'] ?: 'Set automatically when published'), ENT_QUOTES, 'UTF-8')?>"></div>
                <button class="btn" type="submit">Save post</button>
            </section>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
(() => {
    const source = document.getElementById('blog-content-source');
    const editor = document.getElementById('blog-content-editor');
    if (!source || !editor || typeof Quill === 'undefined') return;
    editor.hidden = false;
    const quill = new Quill(editor, {
        theme: 'snow',
        placeholder: 'Write your blog article. Use headings and lists to make it easy to read.',
        modules: { toolbar: [
            [{ header: [2, 3, false] }], ['bold', 'italic', 'underline'],
            [{ list: 'ordered' }, { list: 'bullet' }], [{ align: [] }], ['blockquote', 'link'], ['clean']
        ] }
    });
    const editableContent = editor.querySelector('.ql-editor');
    if (editableContent) editableContent.setAttribute('aria-labelledby', 'blog-content-label');
    source.hidden = true;
    source.required = false;
    document.getElementById('post-form').addEventListener('submit', event => {
        source.value = quill.getSemanticHTML();
        if (!quill.getText().trim()) {
            event.preventDefault();
            alert('Please add the post content before saving.');
        }
    });
})();
</script>
<?php admin_layout_end(); ?>
