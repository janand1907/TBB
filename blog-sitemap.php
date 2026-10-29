<?php
declare(strict_types=1);

// Compatibility for the historical PHP endpoint. The public XML child
// sitemap now contains only published, indexable blog articles.
header('Location: /blog-sitemap.xml', true, 301);
exit;
