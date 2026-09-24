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
    $isHyderabad = str_contains($sourceFile, 'hyderabad');
    $sections = preg_split('/(?=<h2\b)/i', $content) ?: [];

    foreach ($sections as $index => $section) {
        $section = trim($section);
        if ($section === '') {
            continue;
        }

        if ($index === 0) {
            $summary = $isHyderabad
                ? '<p>Starting reference price</p><strong>Rs. 35,229</strong><p>1 Night / 2 Days · Flight + Private Cab</p>'
                : '<p>Package Highlights</p><strong>Rs. 16,250</strong><p>4 Departure Cities · Flight &amp; Car</p>';
            echo '<section class="vip-page-hero"><div class="vip-container vip-hero-layout"><div class="vip-hero-content">' . $section . '</div><aside class="vip-hero-summary">' . $summary . '<a href="#booking-enquiry">Check Package Availability</a></aside></div></section>';
            continue;
        }

        $parts = preg_split('/(?=<h3\b)/i', $section) ?: [];
        $intro = array_shift($parts);
        $class = 'vip-section';
        if (stripos($section, 'Frequently Asked Questions') !== false || stripos($section, 'Package FAQs') !== false) {
            $class .= ' vip-faq-section';
        } elseif (stripos($section, 'Cancellation') !== false || stripos($section, 'Things to Know') !== false || stripos($section, 'Important Darshan') !== false) {
            $class .= ' vip-note-section';
        } elseif (stripos($section, 'Price') !== false || stripos($section, 'How Much') !== false) {
            $class .= ' vip-price-section';
        }
        echo '<section class="' . $class . '"><div class="vip-container">';
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

function render_vip_enquiry_panel(string $title, string $message): void
{
    global $captcha_question;
    ?>
    <section class="vip-enquiry-section" id="booking-enquiry">
        <div class="vip-container vip-enquiry-layout">
            <div class="vip-enquiry-copy">
                <h2><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
                <a class="vip-package-button" target="_blank" rel="noopener" href="https://wa.me/916381960647">WhatsApp for Booking</a>
            </div>
            <form class="vip-enquiry-form" action="con_enq.php" method="post">
                <input name="name" required placeholder="Full Name">
                <input name="mobile" required type="tel" placeholder="Phone / WhatsApp">
                <input name="date" required type="date">
                <input name="peoples" required placeholder="Number of Travellers">
                <textarea name="message" rows="4" placeholder="Additional Requirements"></textarea>
                <label><?= htmlspecialchars((string) $captcha_question, ENT_QUOTES, 'UTF-8') ?><input name="answer" required></label>
                <button type="submit">Send Booking Enquiry</button>
            </form>
        </div>
    </section>
    <?php
}
