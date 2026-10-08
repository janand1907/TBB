<?php
declare(strict_types=1);

function clean_blog_html(string $html, int $limit=50000): string
{
    $html = mb_substr($html, 0, $limit, 'UTF-8');
    // Content pasted from Word, Google Docs, or messaging apps can contain
    // non-breaking spaces between every word. Those characters prevent normal
    // paragraph wrapping on the public article page, so normalize them here.
    $html = preg_replace('/(?:\\x{00A0}|\\x{2007}|\\x{202F}|&nbsp;|&#0*160;|&#x0*a0;)/iu', ' ', $html) ?? $html;
    if (!class_exists(DOMDocument::class)) {
        return nl2br(htmlspecialchars(strip_tags($html), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));
    }

    $doc = new DOMDocument('1.0', 'UTF-8');
    $previous = libxml_use_internal_errors(true);
    $doc->loadHTML('<?xml encoding="UTF-8"><div id="blog-content-root">'.$html.'</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    libxml_use_internal_errors($previous);
    $root = $doc->getElementById('blog-content-root');
    if (!$root) return '';

    $allowed = ['p','br','strong','b','em','i','u','s','ul','ol','li','h2','h3','blockquote','a'];
    $clean = static function (DOMNode $parent) use (&$clean, $allowed): void {
        foreach (iterator_to_array($parent->childNodes) as $node) {
            if (!$node instanceof DOMElement) continue;
            $tag = strtolower($node->tagName);
            if (in_array($tag, ['script','style','iframe','object','svg','math'], true)) {
                $node->parentNode?->removeChild($node);
                continue;
            }
            $clean($node);
            if (!in_array($tag, $allowed, true)) {
                $parentNode = $node->parentNode;
                if ($parentNode) {
                    while ($node->firstChild) $parentNode->insertBefore($node->firstChild, $node);
                    $parentNode->removeChild($node);
                }
                continue;
            }
            $href = $tag === 'a' ? trim($node->getAttribute('href')) : '';
            foreach (iterator_to_array($node->attributes) as $attribute) $node->removeAttributeNode($attribute);
            if ($tag === 'a' && $href !== '') {
                $scheme = parse_url($href, PHP_URL_SCHEME);
                $safe = $scheme === null
                    ? (!str_starts_with($href, '//') && !preg_match('/[\x00-\x20\\\\]/', $href))
                    : in_array(strtolower((string)$scheme), ['http','https','mailto'], true);
                if ($safe) {
                    $node->setAttribute('href', $href);
                    $node->setAttribute('rel', 'nofollow noopener noreferrer');
                }
            }
        }
    };

    $clean($root);
    $output = '';
    foreach ($root->childNodes as $node) $output .= $doc->saveHTML($node);
    return $output;
}
