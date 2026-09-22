# Blog admin setup — Phase 1

1. Create a MySQL database and database user in Hostinger/cPanel.
2. Import `schema.sql` into that database.
3. Create a private file outside `public_html` named `tbb-blog-config.php`:

```php
<?php
return [
    'host' => 'localhost',
    'name' => 'database_name',
    'user' => 'database_user',
    'password' => 'database_password',
    'charset' => 'utf8mb4',
];
```

4. Generate an administrator password hash from the server:

```bash
php -r 'echo password_hash("REPLACE_WITH_A_LONG_PASSWORD", PASSWORD_DEFAULT), PHP_EOL;'
```

5. Insert the first administrator, replacing the email and hash:

```sql
INSERT INTO users (name, email, password_hash, role)
VALUES ('SEO Administrator', 'seo@example.com', 'PASTE_HASH_HERE', 'administrator');
```

6. Open `/admin/login.php` and sign in. Do not store database credentials or plain-text passwords in the repository.

Phase 1 intentionally contains only the secure foundation. Post creation, media uploads, SEO controls, and publishing are added in later phases.
