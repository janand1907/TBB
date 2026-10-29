<?php
declare(strict_types=1);
$path = __DIR__ . '/../database/blog-test.sqlite';
@unlink($path);
$db = new PDO('sqlite:' . $path, null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$db->exec(file_get_contents(__DIR__ . '/../database/local-schema.sql'));
$hash = password_hash('LocalTestPassword!2026', PASSWORD_DEFAULT);
$db->prepare("INSERT INTO users(name,email,password_hash,role) VALUES(?,?,?,?)")->execute(['Local Administrator','admin@example.test',$hash,'administrator']);
$db->exec("INSERT INTO categories(name,slug,description,status) VALUES ('Tirupati Travel Guide','tirupati-travel-guide','Local sample category','active')");
$db->exec("INSERT INTO posts(author_id,category_id,title,slug,excerpt,content,status,published_at) VALUES (1,1,'Local Tirupati Guide','local-tirupati-guide','Sample excerpt','<p>Sample local post.</p>','published',CURRENT_TIMESTAMP)");
echo $path, PHP_EOL;
