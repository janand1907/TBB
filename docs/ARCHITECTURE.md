# Architecture

*Reflects the folder structure as of Phase 13B (executed restructuring). See `RESTRUCTURE_PLAN.md` for the migration record if you need the pre-13B layout for historical context.*

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

  include './includes/header.php';  // 2. Opens <head>, prints nav, opens <body>
?>

  <!-- 3. Page-specific HTML content lives here -->

<?php include './includes/footer.php'; ?> <!-- 4. Footer, all vendor <script> tags -->
```

`header.php` and `footer.php` (both in `includes/`) are the only two files every single page includes. There is no templating engine — variables are just plain PHP set before the `include`, read via PHP's normal variable scope (an `include`d file shares the including script's variable scope, so `header.php` can see `$pageTitle` etc. without them being passed explicitly).

```
                     ┌─────────────────────────────┐
                     │   any-page.php (project root)│
                     │   sets $pageTitle, etc.       │
                     └──────────────┬────────────────┘
                                    │ include
                     ┌──────────────▼────────────────┐
                     │   includes/header.php          │
                     │   <head>, meta tags, nav,       │
                     │   <body> opens                  │
                     └──────────────┬────────────────┘
                     ┌──────────────▼────────────────┐
                     │   (page content, inline in      │
                     │    any-page.php)                │
                     └──────────────┬────────────────┘
                     ┌──────────────▼────────────────┐
                     │   includes/footer.php          │
                     │   footer markup + every         │
                     │   <script src> tag              │
                     └─────────────────────────────────┘
```

## Include hierarchy

```
any-page.php (project root)
├── includes/header.php
│   └── (conditionally) default schema.org JSON-LD block, unless
│       $includeDefaultSchema === false
├── includes/error-log-config.php  (only on 13 pages — see MAINTENANCE_GUIDE.md)
├── includes/script.php             (only on 15 pages — Microsoft Clarity snippet)
└── includes/footer.php
    └── loads every <script src> (jQuery, Bootstrap, Owl Carousel, xpedia.js,
        enquiry-forms.js / legacy-enquiry-forms.js, GA/Ads/Statcounter/Artibot)
        - all from assets/js/
```

Two other PHP files are never `include`d by a page — they're standalone endpoints a `<form action="...">` POSTs to directly, and deliberately **stay at the project root** rather than moving into `includes/`, since a form `action` is effectively a public URL, not an internal include (see `RESTRUCTURE_PLAN.md` for why this was the one thing Phase 13B's migration explicitly did not move):

```
con_enq.php            ← most forms post here (project root)
enquiry-submit.php     ← only srivani-vip-break-darshan-from-chennai.php posts here (project root)
       │
       └── require 'includes/mail/mail-config.php'
              └── require 'includes/mail/phpmailer/PHPMailerAutoload.php'
```

## Mail architecture

Two independent PHP scripts receive form POSTs directly (a plain HTML `<form action="...">`, not routed through `includes/header.php`/`includes/footer.php` at all):

```
Browser (form submit)
   │
   ├──► con_enq.php ─────────┐          (both at project root)
   │                          │
   └──► enquiry-submit.php ──┤
                              ▼
                     includes/mail/mail-config.php
                     ├── post_string()        (safe $_POST reader)
                     ├── escape_html()        (output escaping)
                     ├── validate_mobile()    (digit-count bounds check)
                     ├── validate_captcha()   (session-based, fail-closed)
                     ├── build_enquiry_email_html()
                     └── send_enquiry_mail()  (configures + calls PHPMailer)
                              │
                              ▼
                     includes/mail/phpmailer/ (SMTP via smtp.gmail.com)
                              │
                              ▼
                     ttdpackages@gmail.com receives the lead
```

**Why two endpoints instead of one:** `con_enq.php` is the general-purpose handler — it accepts the "legacy" booking widget (24 pages), the modern `.hero-form`/`.enquiry-form` (11 pages via `assets/js/enquiry-forms.js`), and the `.mhc-form` mini-form, distinguishing between them via which POST fields are present (a `form_source=mhc` hidden field switches off date/peoples/captcha validation). `enquiry-submit.php` is a separate, simpler, JSON-only endpoint used by exactly one page, with its own honeypot field and shorter field set — it was never merged into `con_enq.php` because its validation bounds and response shape are intentionally different (see `mail-config.php`'s shared `validate_mobile()` being called with different min/max arguments from each endpoint).

**Response shape differs by request type.** `con_enq.php` detects whether the request came from JavaScript (an `ajax=1` field, an `X-Requested-With` header, or an `Accept: application/json` header) and responds with JSON for AJAX callers, or a `303` redirect to `thanks.php` for a plain browser form POST. `enquiry-submit.php` is always JSON.

**Captcha is not reCAPTCHA.** Both endpoints validate a session-stored math question (`$_SESSION['answer']`, set in `includes/header.php` on every page load) against the submitted answer. The Google reCAPTCHA script that loads on every page (`includes/footer.php`) is not wired to either endpoint — see `DEPENDENCIES.md`.

## Header/footer architecture

`includes/header.php` and `includes/footer.php` are the site's two shared PHP includes (there's still no broader templating system beyond this — `includes/` just groups the files that were already conceptually "shared," it doesn't add a framework).

- **`includes/header.php`** owns: `<!DOCTYPE>`/`<html>`/`<head>`, all meta tags (title, description, canonical, Open Graph, Twitter Card, viewport, robots), the default `TravelAgency` schema.org block, the CSS `<link>` chain (from `assets/css/legacy/`), Google Analytics, and the full site navigation (desktop dropdown menu + mobile slide-out menu). It also starts the PHP session and generates the captcha question for the page.
- **`includes/footer.php`** owns: the visible footer markup, the "return to top" button, and — critically — **every `<script src>` tag for the whole site** (from `assets/js/`). There is no per-page control over which vendor libraries load; every page gets every script, whether it uses jQuery UI's datepicker or not.

Both files read optional variables (`$pageTitle`, `$activeMenu`, `$extraHeadLinks`, `$pageOgImage`, etc.) that each page sets before including them — see the Page Lifecycle section above and `MAINTENANCE_GUIDE.md` for the full list.

## Shared JavaScript

```
includes/footer.php loads, in this order, on every page (all from assets/js/):
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
- **`enquiry-forms.js`** (added Phase 9) is loaded *per-page*, not from `includes/footer.php`, on the 9 pages that share the modern `.hero-form`/`.enquiry-form` markup — it wires up `intl-tel-input`, client-side validation, and a `fetch`-based AJAX submit.
- Three pages (`shirdi-tour-package-from-chennai-by-direct-flight.php`, `srivani-vip-break-darshan-tour-package-from-chennai.php`, `srivani-vip-break-darshan-from-chennai.php`) have their own independent, page-specific inline `<script>` blocks that duplicate most of `enquiry-forms.js`'s logic with small intentional differences (different field IDs, different mobile-number handling) — deliberately not merged into the shared file (see `TECHNICAL_DEBT.md` item on this).

## Shared CSS

Two parallel stylesheet chains exist, and which one a page uses depends entirely on which template it was originally built from:

```
"Legacy" template (24+ pages)          "Modern" template (9+ pages with
                                         .hero-form/.enquiry-form)
──────────────────────────              ──────────────────────────────
assets/css/legacy/animate.css           (same legacy/ chain, PLUS:)
assets/css/legacy/bootstrap.min.css     assets/css/modern/style.css
assets/css/legacy/style.css             assets/css/modern/bootstrap-icons.css
assets/css/legacy/responsive.css
assets/css/legacy/custom.css  ← project overrides
...(14 more vendor files)
```

Every page loads the full `assets/css/legacy/` chain regardless of template (it's in `includes/header.php`, unconditional). Pages using the modern hero-form layout additionally load `assets/css/modern/style.css` via their own `$extraHeadLinks`. **These are two separate, large stylesheets — `assets/css/legacy/style.css` and `assets/css/modern/style.css` are not the same file and should not be assumed interchangeable.** `assets/css/legacy/custom.css` is where Phase 8's CSS cleanup and Phase 10's new `.form-error`/`input.error` rules live — it's the project's own override layer, loaded last in the legacy chain so it can win the cascade against the vendor files before it.

Both CSS folders reference `assets/fonts/legacy/` and `assets/fonts/modern/` respectively, and `assets/images/`, using root-relative absolute paths (e.g. `/assets/fonts/legacy/Flaticon.woff`) rather than paths relative to the CSS file's own location — this was a deliberate choice made during Phase 13B's restructuring specifically so moving any one of CSS/fonts/images independently, in the future, doesn't silently break the others (see `RESTRUCTURE_PLAN.md` for the coupling risk this avoids).

`assets/srivani-image/` is a separate, pre-existing image folder (webp hero backgrounds for the modern template's Srivani-related pages) referenced only from `assets/css/modern/style.css` — it predates Phase 13B and wasn't restructured further, just confirmed to still resolve correctly after `assets/css/modern/style.css` moved.
