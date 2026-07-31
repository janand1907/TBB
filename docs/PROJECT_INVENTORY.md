# Project File Inventory

A categorized listing of every file/folder in the project root as of Phase 12. Counts were taken directly from the filesystem, not estimated.

## PHP — Pages (40)

User-facing pages, each `include`-ing `header.php` and `footer.php`:

```
about-us.php                                                       nri-tirupati-darshan-booking.php
best-tirupati-tour-operators.php                                   pallikondeswara-swamy-temple-surutapalli.php
contact-us.php                                                     privacy-and-cookies-policy.php
famous-temples-near-by-tirupati.php                                refund-policy.php
faq.php                                                             shirdi-tour-package-from-chennai-by-direct-flight.php
index.php                                                           sri-govindaraja-swamy-temple.php
iskon-temple.php                                                    sri-kalyana-venkateshwara-swamy-temple-narayanavanam-temple.php
kalyana-venkateswara-temple-srinivasa-mangapuram.php                sri-kapileswara-swamy-temple.php
srivani-vip-break-darshan-from-chennai.php                          sri-padmavathi-amman-temple.php
srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php     sri-prasanna-venkateswara-temple.php
srivani-vip-break-darshan-from-hyderabad.php                        sri-varasiddhi-vinayaka-temple-kanipakam.php
srivani-vip-break-darshan-tour-package-from-chennai.php             sri-vedanarayana-temple-nagalapuram.php
srivani-vip-darshan-from-chennai-for-nri.php                        tirumala-darshan-timings.php
thanks.php                                                          tirupati-balaji-vip-darshan-tour-packages-from-chennai.php
tirupati-darshan-booking-guide.php                                  tirupati-hotel-accommodation-services-booking-online.php
tirupati-nri-darshan-booking-guide.php                               tirupati-nri-darshan-package-from-chennai.php
tirupati-nri-darshan-package-from-hyderabad-by-flight.php           tirupati-senior-citizens-booking.php
tirupati-seva-darshan-tickets-booking-online.php                    tirupati-special-darshan-tickets-online.php
tirupati-srivani-vip-darshan-malaysia-chennai.php                   tirupati-srivani-vip-darshan-malaysia-hyderabad.php
tirupati-tour-packages-from-tirupati.php                            vakula-matha-temple.php
```

## PHP — Includes / shared partials (2)

| File | Role |
|---|---|
| `header.php` | Opening `<head>`/`<body>` chrome, per-page metadata defaults, navigation, default schema.org block. Included at the top of every page. |
| `footer.php` | Footer markup, all vendor `<script>` tags, GA/Ads/Statcounter/Artibot embeds. Included at the bottom of every page. |

## PHP — Mail / form-handling (4)

| File | Role |
|---|---|
| `con_enq.php` | Submission endpoint for the "legacy" booking widget and the modern `.hero-form`/`.enquiry-form`/`.mhc-form` on most pages |
| `enquiry-submit.php` | Submission endpoint used by exactly one page (`srivani-vip-break-darshan-from-chennai.php`) — has its own honeypot and a shorter field set |
| `mail-config.php` | Shared SMTP config + validation/HTML-building/send helpers used by both endpoints above |
| `PHPMailer-master/` | Vendored third-party mail library (see `DEPENDENCIES.md`) |

## PHP — Config / utility (2)

| File | Role |
|---|---|
| `error-log-config.php` | Shared error-logging setup, included by 13 pages |
| `script.php` | Not a page — a bare Microsoft Clarity `<script>` snippet, `include`-d by 15 pages |

## CSS (20 files)

**`css/`** (18 files) — the "legacy" template's stylesheet chain, loaded by every page via `header.php`:
`animate.css`, `bootstrap.min.css`, `custom.css`, `flaticon.css`, `font-awesome.css`, `fonts.css`, `magnific-popup.css`, `nice-select.css`, `owl.carousel.css`, `owl.theme.default.css`, `reset.css`, `responsive.css`, `select2.min.css`, `shared-enquiry-form.css`, `shared-topbar.css`, `shirdi.css`, `srivani.css`, `style.css`

**`assets/css/`** (2 files + a `fonts/` subfolder) — the newer "modern" template stylesheet used by pages with a `.hero-form`/`.enquiry-form`:
`bootstrap-icons.css`, `style.css`

## JavaScript (13 files, all in `js/`)

Vendor (8): `bootstrap.min.js`, `jquery-3.3.1.min.js`, `jquery-ui.js`, `jquery.bxslider.min.js`, `jquery.magnific-popup.js`, `jquery.menu-aim.js`, `jquery.nice-select.min.js`, `modernizr.js`, `owl.carousel.js`, `select2.min.js`

Project-authored (3): `xpedia.js` (site-wide behavior — sliders, sticky header, datepicker; loaded on every page), `enquiry-forms.js` (shared modern hero-form/enquiry-form validation, Phase 9), `legacy-enquiry-forms.js` (shared legacy-widget validation, Phase 10)

## Images

- `images/` — 133 files, including `images/logo/`, `images/choose-icons/`, `images/hero-icons/` subfolders
- `Images/` — same directory as `images/` on this (case-insensitive) macOS filesystem; **will be two separate directories on the production Linux server**. Only one broken reference to `Images/hero.png` was found (Phase 11 — the file doesn't exist under any casing) and no other case mismatches were found project-wide. Worth keeping in mind if adding new image references locally: what looks fine on a Mac may 404 in production if the casing doesn't match exactly.

## Fonts (15 files, `fonts/`)

Flaticon and Font Awesome webfont files (`.eot`/`.ttf`/`.woff`/`.woff2`/`.svg`) plus one `.scss` source file for the Flaticon set.

## Third-party library (vendored, not authored here)

`PHPMailer-master/` — full PHPMailer 5.x source tree, including `class.phpmailer.php`, `class.smtp.php`, OAuth variants, and a `language/` folder. See `DEPENDENCIES.md`.

## Root-level config / misc files

| File | Purpose |
|---|---|
| `.htaccess` | HTTPS/www redirect, one legacy page-rename redirect, cPanel PHP handler declaration |
| `robots.txt` | Crawler rules + sitemap pointer (fixed in Phase 11) |
| `sitemap.xml` | 39 URLs (fixed/expanded in Phase 11) |
| `googledac465f9fa585a7f.html`, `i3s1ni8OEgD61Gg4JYkc2NlszrwRvWyYogJzsx3RgdA`, `yQ6XR2ReUAlJ-ZLYu08u5Dd289ffjZDdd1g494hh9Xc` | Search-engine site-verification files — do not remove |
| `.ftpquota` | Hosting-generated FTP quota tracking file, not part of the site |
| `.DS_Store` | macOS Finder metadata, local-machine artifact only |
| `logs/` | `php-errors.log` destination + `logs/.htaccess` blocking direct web access |

## Not part of the live site

`/Users/anand/Projects/tbb-archive/` — a sibling directory outside this project root, kept as a pre-modernization snapshot. Never read or modified by any phase of this work.
