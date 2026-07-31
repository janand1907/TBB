# Architecture

## Page lifecycle

Every page follows the same three-part shape: set some PHP variables, include the shared header, write page content, include the shared footer.

```
<?php
  // 1. Set per-page metadata BEFORE including header.php
  $pageTitle = "...";
  $pageDescription = "...";
  $pageCanonical = "...";        // optional — defaults to the current filename
  $activeMenu = "...";           // optional — highlights a nav item
  $extraHeadLinks = "...";       // optional — page-specific <link>/<script>/schema
  $includeDefaultSchema = false; // optional — set false if $extraHeadLinks provides its own schema

  include './header.php';        // 2. Opens <head>, prints nav, opens <body>
?>

  <!-- 3. Page-specific HTML content lives here -->

<?php include './footer.php'; ?> <!-- 4. Footer, all vendor <script> tags -->
```

`header.php` and `footer.php` are the only two files every single page includes. There is no templating engine — variables are just plain PHP set before the `include`, read via PHP's normal variable scope (an `include`d file shares the including script's variable scope, so `header.php` can see `$pageTitle` etc. without them being passed explicitly).

```
                     ┌─────────────────────────────┐
                     │   any-page.php               │
                     │   sets $pageTitle, etc.       │
                     └──────────────┬────────────────┘
                                    │ include
                     ┌──────────────▼────────────────┐
                     │   header.php                   │
                     │   <head>, meta tags, nav,       │
                     │   <body> opens                  │
                     └──────────────┬────────────────┘
                     ┌──────────────▼────────────────┐
                     │   (page content, inline in      │
                     │    any-page.php)                │
                     └──────────────┬────────────────┘
                     ┌──────────────▼────────────────┐
                     │   footer.php                   │
                     │   footer markup + every         │
                     │   <script src> tag              │
                     └─────────────────────────────────┘
```

## Include hierarchy

```
any-page.php
├── header.php
│   └── (conditionally) default schema.org JSON-LD block, unless
│       $includeDefaultSchema === false
├── error-log-config.php     (only on 13 pages — see MAINTENANCE_GUIDE.md)
├── script.php                (only on 15 pages — Microsoft Clarity snippet)
└── footer.php
    └── loads every <script src> (jQuery, Bootstrap, Owl Carousel, xpedia.js,
        enquiry-forms.js / legacy-enquiry-forms.js, GA/Ads/Statcounter/Artibot)
```

Two other PHP files are never `include`d by a page — they're standalone endpoints a `<form action="...">` POSTs to directly:

```
con_enq.php            ← most forms post here
enquiry-submit.php     ← only srivani-vip-break-darshan-from-chennai.php posts here
       │
       └── require 'mail-config.php'
              └── require 'PHPMailer-master/PHPMailerAutoload.php'
```

## Mail architecture

Two independent PHP scripts receive form POSTs directly (a plain HTML `<form action="...">`, not routed through `header.php`/`footer.php` at all):

```
Browser (form submit)
   │
   ├──► con_enq.php ─────────┐
   │                          │
   └──► enquiry-submit.php ──┤
                              ▼
                     mail-config.php
                     ├── post_string()        (safe $_POST reader)
                     ├── escape_html()        (output escaping)
                     ├── validate_mobile()    (digit-count bounds check)
                     ├── validate_captcha()   (session-based, fail-closed)
                     ├── build_enquiry_email_html()
                     └── send_enquiry_mail()  (configures + calls PHPMailer)
                              │
                              ▼
                     PHPMailer-master/ (SMTP via smtp.gmail.com)
                              │
                              ▼
                     ttdpackages@gmail.com receives the lead
```

**Why two endpoints instead of one:** `con_enq.php` is the general-purpose handler — it accepts the "legacy" booking widget (24 pages), the modern `.hero-form`/`.enquiry-form` (11 pages via `js/enquiry-forms.js`), and the `.mhc-form` mini-form, distinguishing between them via which POST fields are present (a `form_source=mhc` hidden field switches off date/peoples/captcha validation). `enquiry-submit.php` is a separate, simpler, JSON-only endpoint used by exactly one page, with its own honeypot field and shorter field set — it was never merged into `con_enq.php` because its validation bounds and response shape are intentionally different (see `mail-config.php`'s shared `validate_mobile()` being called with different min/max arguments from each endpoint).

**Response shape differs by request type.** `con_enq.php` detects whether the request came from JavaScript (an `ajax=1` field, an `X-Requested-With` header, or an `Accept: application/json` header) and responds with JSON for AJAX callers, or a `303` redirect to `thanks.php` for a plain browser form POST. `enquiry-submit.php` is always JSON.

**Captcha is not reCAPTCHA.** Both endpoints validate a session-stored math question (`$_SESSION['answer']`, set in `header.php` on every page load) against the submitted answer. The Google reCAPTCHA script that loads on every page (`footer.php`) is not wired to either endpoint — see `DEPENDENCIES.md`.

## Header/footer architecture

`header.php` and `footer.php` are the site's only two "shared" PHP files (there's no broader templating system — see `RESTRUCTURE_PLAN.md` for what a real includes/ hierarchy could look like).

- **`header.php`** owns: `<!DOCTYPE>`/`<html>`/`<head>`, all meta tags (title, description, canonical, Open Graph, Twitter Card, viewport, robots), the default `TravelAgency` schema.org block, the CSS `<link>` chain, Google Analytics, and the full site navigation (desktop dropdown menu + mobile slide-out menu). It also starts the PHP session and generates the captcha question for the page.
- **`footer.php`** owns: the visible footer markup, the "return to top" button, and — critically — **every `<script src>` tag for the whole site**. There is no per-page control over which vendor libraries load; every page gets every script, whether it uses jQuery UI's datepicker or not.

Both files read optional variables (`$pageTitle`, `$activeMenu`, `$extraHeadLinks`, etc.) that each page sets before including them — see the Page Lifecycle section above and `MAINTENANCE_GUIDE.md` for the full list.

## Shared JavaScript

```
footer.php loads, in this order, on every page:
  jquery-3.3.1.min.js
  bootstrap.min.js
  modernizr.js
  select2.min.js
  jquery.menu-aim.js
  jquery-ui.js
  jquery.nice-select.min.js
  owl.carousel.js
  jquery.bxslider.min.js
  jquery.magnific-popup.js
  xpedia.js                    ← project-authored, site-wide behavior
  legacy-enquiry-forms.js       ← project-authored, validates the "legacy" widget
  (Google reCAPTCHA, Artibot, Google Ads, Statcounter — third-party embeds)
```

- **`xpedia.js`** is the site-wide behavior script: preloader, `select2`/`nice-select` init, sticky header + return-to-top (rAF-throttled scroll handling), all `owl.carousel` slider instances, the `.datepicker` init, and Magnific Popup init. Every block is guarded with a `.length` check so it's a no-op on pages that don't have the relevant markup.
- **`legacy-enquiry-forms.js`** (added Phase 10) validates the unclassed booking-widget forms that appear on 24 pages — client-side only, mirrors the server's validation rules and wording exactly, and does **not** intercept a valid submission (the browser still POSTs to `con_enq.php` normally, preserving the original full-page-reload + redirect flow).
- **`enquiry-forms.js`** (added Phase 9) is loaded *per-page*, not from `footer.php`, on the 11 pages that share the modern `.hero-form`/`.enquiry-form` markup — it wires up `intl-tel-input`, client-side validation, and a `fetch`-based AJAX submit.
- Three pages (`shirdi-tour-package-from-chennai-by-direct-flight.php`, `srivani-vip-break-darshan-tour-package-from-chennai.php`, `srivani-vip-break-darshan-from-chennai.php`) have their own independent, page-specific inline `<script>` blocks that duplicate most of `enquiry-forms.js`'s logic with small intentional differences (different field IDs, different mobile-number handling) — deliberately not merged into the shared file (see `TECHNICAL_DEBT.md` item on this).

## Shared CSS

Two parallel stylesheet chains exist, and which one a page uses depends entirely on which template it was originally built from:

```
"Legacy" template (24+ pages)          "Modern" template (11+ pages with
                                         .hero-form/.enquiry-form)
──────────────────────────              ──────────────────────────────
css/animate.css                         (same css/ chain, PLUS:)
css/bootstrap.min.css                   assets/css/style.css
css/style.css                           assets/css/bootstrap-icons.css
css/responsive.css
css/custom.css      ← project overrides
...(14 more vendor files)
```

Every page loads the full `css/` chain regardless of template (it's in `header.php`, unconditional). Pages using the modern hero-form layout additionally load `assets/css/style.css` via their own `$extraHeadLinks`. **These are two separate, large stylesheets — `css/style.css` and `assets/css/style.css` are not the same file and should not be assumed interchangeable.** `css/custom.css` is where Phase 8's CSS cleanup and Phase 10's new `.form-error`/`input.error` rules live — it's the project's own override layer, loaded last in the `css/` chain so it can win the cascade against the vendor files before it.
