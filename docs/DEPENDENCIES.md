# Third-Party Dependency Documentation

Every third-party library, CDN script, and embedded service used in the project, what it's for, where it's loaded from, and whether it's actually required. "Required" here means "removing it breaks something a real visitor uses" — not "is it modern."

## Vendored libraries (files in the project, `js/` and `css/`)

| Library | Version clue | Purpose | Loaded on | Required? |
|---|---|---|---|---|
| jQuery | 3.3.1 (`jquery-3.3.1.min.js`) | Base library everything else in `js/` depends on | Every page (`footer.php`) | Yes |
| Bootstrap (JS) | unversioned | Carousel, dropdown, and other component behavior | Every page | Yes |
| Modernizr | unversioned | Feature detection, used by other vendor scripts | Every page | Yes — kept from the original theme; low individual risk to remove but not verified safe, so left in place |
| Select2 | unversioned (`select2.min.js`/`.css`) | Styled `<select>` dropdown (the "peoples"/travellers picker on every enquiry form) | Every page | Yes |
| jQuery UI | 1.11.4 (loaded from `code.jquery.com` CDN for the theme CSS, local `js/jquery-ui.js` for the JS) | Powers the `.datepicker` widget used by every enquiry form's date field | Every page | Yes |
| nice-select | unversioned | Custom-styled native `<select>` elements | Every page | Yes (used on pages with plain `<select>` fields outside the Select2-managed ones) |
| Owl Carousel | unversioned | All image/testimonial/partner sliders | Every page | Yes |
| bxSlider | unversioned | The horizontal "album"/ticker slider | Pages with `.album-slider` | Yes, where used |
| Magnific Popup | unversioned | Video lightbox popups | Pages with `.test-popup-link` | Yes, where used |
| jquery.menu-aim | unversioned | Predictive mobile dropdown-menu hover/tap behavior | Every page | Yes |
| PHPMailer | 5.x (`PHPMailer-master/`) | Sends enquiry emails via SMTP | `con_enq.php`, `enquiry-submit.php` via `mail-config.php` | Yes — this is how every lead actually reaches `ttdpackages@gmail.com` |
| animate.css | unversioned | CSS animation classes used on hero/slider captions | Every page | Yes |
| Font Awesome | unversioned (`fonts/fontawesome-webfont.*`) | Icon font used throughout the site | Every page | Yes |
| Flaticon | unversioned (`fonts/Flaticon.*`) | A second, separate icon font (theme-specific icons) | Every page | Yes |
| Bootstrap Icons | (`assets/css/bootstrap-icons.css`) | Icon font used only by the newer "modern" template pages | Pages using `assets/css/style.css` | Yes, on those pages |

## CDN-loaded libraries (not vendored — fetched live from a third party)

| Library | Source | Purpose | Loaded on | Required? |
|---|---|---|---|---|
| jQuery UI theme CSS | `code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css` | Visual styling for the `.datepicker` popup | Every page | Yes — removing it leaves the datepicker functional but unstyled |
| intl-tel-input | `cdnjs.cloudflare.com` (18.5.3) | International phone-number input with country-code dropdown, used by the "modern" hero-form/enquiry-form/mhc-form fields | 14 pages (the ones with `.hero-form`/`.enquiry-form`/`.mhc-form`) | Yes, on those pages |
| intl-tel-input's own `utils.min.js` | same CDN | Phone-number formatting/validation utilities intl-tel-input needs | Same 14 pages | Yes, same as above |

## Third-party embedded services

| Service | Purpose | Loaded via | Required? |
|---|---|---|---|
| Google reCAPTCHA (`recaptcha/api.js`) | Would normally provide bot-protection on forms | `footer.php`, every page | **No** — the verification call is commented out; the actual anti-spam check on every form is a custom PHP math-question captcha (see `CONFIGURATION.md` §8). This script currently does nothing and could be removed with no behavior change, though that removal wasn't made in Phase 12 (JS/behavior changes are out of scope for a documentation phase). |
| Google Analytics (gtag.js, `UA-188854373-1`) | Traffic analytics | `header.php`, every page | **Questionable** — it's a Universal Analytics property; Google stopped processing UA data in mid-2023. It's very likely collecting nothing. See `TECHNICAL_DEBT.md`. |
| Google Ads conversion tracking (`AW-437360014`) | Ad-spend conversion attribution (phone-call and form-submit conversions) | `footer.php`, every page | Yes, if Google Ads campaigns are still active — this is a separate, still-valid tag type from the GA one above |
| Microsoft Clarity (`ux7ed2adtj`) | Session recording / heatmaps | `script.php`, included on 15 of 47 pages | Partially — works where included, but coverage is inconsistent site-wide |
| Statcounter | A third, separate analytics/visit-counter tool | `footer.php`, every page | Overlaps with GA and Clarity; whether all three are wanted is a business decision, not something Phase 12 changed |
| Artibot | Website chat widget | `footer.php`, every page (loaded async) | Yes, if the chat widget is still an active support channel |
| Google Fonts / other CDN CSS | Referenced from `header.php`'s per-page `$extraHeadLinks` on some pages | Varies by page | Yes, where present |

## Summary: safe-to-remove candidates (not removed in Phase 12 — documentation only)

- **reCAPTCHA script tag** — loaded everywhere, does nothing (verification call is dead/commented out).
- **Universal Analytics tag** — very likely non-functional since mid-2023; either replace with GA4 or remove.

Both are flagged in `TECHNICAL_DEBT.md` for an explicit decision before any removal — Phase 12 is documentation-only and doesn't change JavaScript/tracking behavior.
