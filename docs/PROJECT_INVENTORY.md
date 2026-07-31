# Project File Inventory

A categorized listing of every file/folder in the project as of Phase 13B (post-restructuring). Counts were taken directly from the filesystem, not estimated. See `RESTRUCTURE_PLAN.md` for the migration record if you need the pre-13B (flat root) layout.

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

## PHP — Includes / shared partials (2), in `includes/`

| File | Role |
|---|---|
| `includes/header.php` | Opening `<head>`/`<body>` chrome, per-page metadata defaults, navigation, default schema.org block. Included at the top of every page. |
| `includes/footer.php` | Footer markup, all vendor `<script>` tags, GA/Ads/Statcounter/Artibot embeds. Included at the bottom of every page. |

## PHP — Mail / form-handling (4)

| File | Role |
|---|---|
| `con_enq.php` (project root) | Submission endpoint for the "legacy" booking widget and the modern `.hero-form`/`.enquiry-form`/`.mhc-form` on most pages. Stays at the root — see `ARCHITECTURE.md` for why. |
| `enquiry-submit.php` (project root) | Submission endpoint used by exactly one page (`srivani-vip-break-darshan-from-chennai.php`) — has its own honeypot and a shorter field set. Stays at the root. |
| `includes/mail/mail-config.php` | Shared SMTP config + validation/HTML-building/send helpers used by both endpoints above |
| `includes/mail/phpmailer/` | Vendored third-party mail library, renamed from `PHPMailer-master/` in Phase 13B (see `DEPENDENCIES.md`) |

## PHP — Config / utility (2), in `includes/`

| File | Role |
|---|---|
| `includes/error-log-config.php` | Shared error-logging setup, included by 13 pages |
| `includes/script.php` | Not a page — a bare Microsoft Clarity `<script>` snippet, `include`-d by 15 pages |

## CSS (20 files, under `assets/css/`)

**`assets/css/legacy/`** (18 files) — the original template's stylesheet chain, loaded by every page via `includes/header.php`:
`animate.css`, `bootstrap.min.css`, `custom.css`, `flaticon.css`, `font-awesome.css`, `fonts.css`, `magnific-popup.css`, `nice-select.css`, `owl.carousel.css`, `owl.theme.default.css`, `reset.css`, `responsive.css`, `select2.min.css`, `shared-enquiry-form.css`, `shared-topbar.css`, `shirdi.css`, `srivani.css`, `style.css`

**`assets/css/modern/`** (2 files) — the newer stylesheet used by pages with a `.hero-form`/`.enquiry-form`:
`bootstrap-icons.css`, `style.css`

(Phase 13B also removed `assets/css/fonts/` — 5 files that turned out to be Apache 403-error-page HTML mistakenly saved with a `.html` extension, not actual fonts; zero references anywhere, confirmed before deletion.)

## JavaScript (13 files, all in `assets/js/`)

Vendor (8): `bootstrap.min.js`, `jquery-3.3.1.min.js`, `jquery-ui.js`, `jquery.bxslider.min.js`, `jquery.magnific-popup.js`, `jquery.menu-aim.js`, `jquery.nice-select.min.js`, `modernizr.js`, `owl.carousel.js`, `select2.min.js`

Project-authored (3): `xpedia.js` (site-wide behavior — sliders, sticky header, datepicker; loaded on every page), `enquiry-forms.js` (shared modern hero-form/enquiry-form validation, Phase 9), `legacy-enquiry-forms.js` (shared legacy-widget validation, Phase 10)

## Images

- `assets/images/` — 133 files, including `logo/`, `choose-icons/`, `hero-icons/` subfolders. Moved from the project-root `images/` in Phase 13B.
- `assets/srivani-image/` — 11 webp files (hero backgrounds for the modern template's Srivani-related pages), a separate pre-existing folder, referenced only from `assets/css/modern/style.css`. Not part of the `images/` → `assets/images/` move; confirmed still resolving correctly after the CSS file that references it moved in Batch 3.
- The pre-migration `images/`/`Images/` case-sensitivity concern (same directory on macOS, would have been two on Linux) no longer applies — resolved by the move itself. See `TECHNICAL_DEBT.md` for the "resolved" note.

## Fonts (23 files, under `assets/fonts/`)

- **`assets/fonts/legacy/`** (15 files) — Flaticon and Font Awesome webfont files (`.eot`/`.ttf`/`.woff`/`.woff2`/`.svg`) plus one `.scss` source file for the Flaticon set. Moved from the project-root `fonts/` in Phase 13B.
- **`assets/fonts/modern/`** (8 files) — Bootstrap Icons (`bootstrap-icons0107.woff`/`.woff2` — the only 2 actually referenced by any CSS), `boxicons.*` (5 files, unreferenced), and `Billy Ohio.otf` (unreferenced). This folder already existed pre-Phase-13B; reorganized into this `modern/` subfolder alongside the `legacy/` split above rather than moved from elsewhere. See `TECHNICAL_DEBT.md` item 25 for the unreferenced files.

## Third-party library (vendored, not authored here)

`includes/mail/phpmailer/` — full PHPMailer 5.x source tree, including `class.phpmailer.php`, `class.smtp.php`, OAuth variants, and a `language/` folder. Renamed from `PHPMailer-master/` and moved in Phase 13B. See `DEPENDENCIES.md`.

## Root-level config / misc files

Deliberately unchanged by Phase 13B — see `ARCHITECTURE.md`/`RESTRUCTURE_PLAN.md` for why these specific files stay at the document root:

| File | Purpose |
|---|---|
| `.htaccess` | HTTPS/www redirect, one legacy page-rename redirect, cPanel PHP handler declaration |
| `robots.txt` | Crawler rules + sitemap pointer (fixed in Phase 11) |
| `sitemap.xml` | 39 URLs (fixed/expanded in Phase 11) |
| `googledac465f9fa585a7f.html`, `i3s1ni8OEgD61Gg4JYkc2NlszrwRvWyYogJzsx3RgdA`, `yQ6XR2ReUAlJ-ZLYu08u5Dd289ffjZDdd1g494hh9Xc` | Search-engine site-verification files — do not remove |
| `.ftpquota` | Hosting-generated FTP quota tracking file, not part of the site |
| `.DS_Store` | macOS Finder metadata, local-machine artifact only |
| `.well-known/acme-challenge/` | Empty; a pre-existing, untracked SSL-certificate (ACME/Let's Encrypt) domain-validation artifact. Must stay at the document root by protocol requirement if ever used again — noted here for completeness, not touched by any phase. |
| `logs/` | `php-errors.log` destination + `logs/.htaccess` blocking direct web access. Deliberately kept outside `assets/` and outside `includes/` — it's not a web asset and isn't meant to be reachable at all. |
| `.git/`, `.gitignore` | New in Phase 13B — the project's first version control. See `docs/DEPLOYMENT_GUIDE.md`. |

## Not part of the live site

`/Users/anand/Projects/tbb-archive/` — a sibling directory outside this project root, kept as a pre-modernization snapshot. Never read or modified by any phase of this work.
