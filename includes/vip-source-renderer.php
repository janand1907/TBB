<?php

function render_vip_source_content(string $sourceFile): void
{
    $content = file_get_contents($sourceFile);
    if ($content === false) {
        return;
    }

    // Earlier imports stored line breaks and quote marks as escaped text. This
    // restores semantic source markup; no source copy is changed or generated.
    $content = str_replace(['\\n', '\\"'], [PHP_EOL, '"'], $content);
    $sections = preg_split('/(?=<h2\b)/i', $content) ?: [];

    foreach ($sections as $index => $section) {
        $section = trim($section);
        if ($section === '') {
            continue;
        }

        if ($index === 0) {
            echo '<section class="vip-page-hero"><div class="vip-container vip-hero-content">' . $section . '</div></section>';
            continue;
        }

        $parts = preg_split('/(?=<h3\b)/i', $section) ?: [];
        $intro = array_shift($parts);
        echo '<section class="vip-section"><div class="vip-container">';
        echo $intro;

        if ($parts) {
            echo '<div class="vip-card-grid">';
            foreach ($parts as $part) {
                echo '<article class="vip-package-card">' . $part . '</article>';
            }
            echo '</div>';
        }

        echo '</div></section>';
    }
}
