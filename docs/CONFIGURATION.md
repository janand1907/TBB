# Configuration Inventory

Every configurable value in the project, where it lives, and how many places reference it. This is a **read-only inventory** — nothing here was moved as part of Phase 12. See `RESTRUCTURE_PLAN.md` for the proposal to centralize these into one config file in a future phase.

## 1. SMTP / Mail sending

Configuration loader: **`includes/mail/mail-config.php`**. It reads values from
`MAIL_*` environment variables or a private `tbb-mail-config.php` file outside
the document root; see `HOSTINGER_DEPLOYMENT.md`.

| Constant | Value | Notes |
|---|---|---|
| `MAIL_SMTP_HOST` | provider-specific | e.g. `smtp.hostinger.com` |
| `MAIL_SMTP_PORT` | provider-specific | commonly `465` with SSL |
| `MAIL_SMTP_SECURE` | provider-specific | `ssl`, `tls`, or empty |
| `MAIL_SMTP_AUTH` | provider-specific | normally `true` |
| `MAIL_SMTP_USERNAME` | private | Mailbox/account used to send |
| `MAIL_SMTP_PASSWORD` | private | Never commit this value |
| `MAIL_FROM_ADDRESS` | private | Usually matches the sending mailbox |
| `MAIL_FROM_NAME` | private | Sender name shown on enquiry emails |
| `MAIL_TO_ADDRESS` | private | Where every enquiry form lead lands |

Consumed by `con_enq.php` and `enquiry-submit.php` (the two form-submission endpoints — see `ARCHITECTURE.md`).

## 2. Phone / WhatsApp numbers

| Value | Format(s) in use | Occurrences | Status |
|---|---|---|---|
| `+91-99947-51079` | `+91-99947-51079`, `+919994751079`, `9994751079`, `tel:9994751079`, `wa.me/919994751079` | ~160 across the site | **Official number** (declared explicitly in Phase 7) |
| `+91 7397489919` | `tel:+917397489919`, `api.whatsapp.com/send?phone=917397489919` | 2, both in `includes/footer.php` | Dead — sits inside an HTML comment (`<!--...-->`), never rendered. Flagged in `TECHNICAL_DEBT.md`. |

The official number is duplicated as a literal string in ~15+ places rather than being read from one PHP constant (header top bar, footer, Google Ads conversion tag, schema.org blocks, individual page click-to-call/WhatsApp buttons). See `RESTRUCTURE_PLAN.md` for centralizing this.

## 3. Email addresses

| Address | Role | Where used |
|---|---|---|
| `ttdpackages@gmail.com` | Enquiry lead recipient | `includes/mail/mail-config.php` (`MAIL_TO_ADDRESS`), footer/header contact links (21 occurrences) |
| `mailtoemk@gmail.com` | SMTP sending account | `includes/mail/mail-config.php` (`MAIL_SMTP_USERNAME`/`MAIL_FROM_ADDRESS`) |
| `mailtotourbooking@gmail.com` | Refund-enquiry contact | **Only** `refund-policy.php` (1 occurrence) — a third, different address never referenced anywhere else. Likely worth a business decision on whether this is intentional; flagged, not changed. |

## 4. Google Ads

- Conversion tracking tag ID: `AW-437360014` (`includes/footer.php`)
- Conversion label: `AW-437360014/yCZWCJDr1_QBEI6rxtAB`
- Phone conversion number bound to the tag: `+91-99947-51079` (correct, matches the official number — fixed in Phase 7)

## 5. Google Analytics

- Universal Analytics is no longer loaded. The shared Google tag continues to load Google Ads.
- **GA4 manual configuration required:** set `DBT_GA4_MEASUREMENT_ID` in the production PHP environment to the owner-provided value that matches `G-` followed by uppercase letters/numbers. `includes/header.php` validates that format before outputting a GA4 `gtag('config', ...)` call.
- No GA4 Measurement ID was present in this repository at the time of the approved fix. Do not invent one or place an unverified value in source control.
- After configuring it, verify one page view in GA4 DebugView and confirm Google Ads conversion tracking remains active.

## 6. Microsoft Clarity

- Project ID: `ux7ed2adtj`
- Lives in its own include, **`includes/script.php`** (a bare snippet, not a full page — see `PROJECT_INVENTORY.md`)
- Included on only **15 of 47** pages (via an explicit `include` on each — not wired into `includes/header.php`/`includes/footer.php`), so session-recording coverage is inconsistent across the site.

## 7. Statcounter

- Project ID: `13063434`, security code `6753fe53`
- Loaded site-wide via `includes/footer.php`
- A third analytics/tracking tool alongside GA and Clarity — see `DEPENDENCIES.md` for whether all three are worth keeping.

## 8. reCAPTCHA

- `https://www.google.com/recaptcha/api.js` is loaded site-wide via `includes/footer.php`
- The actual verification call (`grecaptcha.getResponse()`) is commented out in `includes/footer.php`
- **The real spam-prevention captcha on every form is a custom PHP-generated math question** (`$first_num + $second_num`, session-validated in `includes/mail/mail-config.php`'s `validate_captcha()`), not reCAPTCHA. The reCAPTCHA script is loaded but does nothing — pure dead weight on every page load.

## 9. Business name

Four different strings are used for the same business, depending on context:

| String | Occurrences | Where |
|---|---|---|
| `Divine Balaji Travels` | 56 | Most page copy, footer, about-us.php |
| `Tirupati Balaji Booking` | 13 | Page titles, schema `og:site_name` context |
| `Tirupati Balaji Travels` | 8 | `includes/header.php`'s default `$pageTitle` fallback, default schema `name` |
| `TTD Travels` | 2 | `includes/mail/mail-config.php`'s `MAIL_FROM_NAME`, `con_enq.php`'s email subject line |

Domain (the actual product/site) is `tirupatibalajibooking.com`, operated by `Divine Balaji Travels` (per the footer copyright line and `about-us.php`). `TTD Travels` in the outgoing mail sender name is the most out-of-place variant — a lead notification email currently arrives from "TTD Travels Enquiry," not matching any brand name shown on the website itself.

## 10. Canonical URL / domain

- Canonical scheme: **`https://www.tirupatibalajibooking.com`** (enforced by `.htaccess`: non-HTTPS and non-`www` requests 301-redirect to this form)
- Per-page canonical is computed in `includes/header.php` as `$pageCanonical ?? ('https://www.tirupatibalajibooking.com/' . basename($_SERVER['PHP_SELF']))`, overridable per page via `$pageCanonical`
- The default schema.org block in `includes/header.php` uses the **non-www** form (`https://tirupatibalajibooking.com`) for its `@id`/`url`/`image` — inconsistent with the canonical scheme above, though the `.htaccess` redirect means it still resolves correctly. Flagged in Phase 11 and `TECHNICAL_DEBT.md`, not changed (business-identity risk).

## 11. Social URLs

Every social icon in `includes/header.php` and `includes/footer.php` (Facebook, Twitter, Instagram, LinkedIn) links to `href="#"` — none are configured with a real URL. Either the business has no social presence yet, or these were never filled in.

## 12. Search-engine verification files

Three verification files sit in the project root (do not remove):
- `googledac465f9fa585a7f.html` — Google Search Console
- `i3s1ni8OEgD61Gg4JYkc2NlszrwRvWyYogJzsx3RgdA` — Bing Webmaster Tools (or similar; no extension, standard verification-token naming)
- `yQ6XR2ReUAlJ-ZLYu08u5Dd289ffjZDdd1g494hh9Xc` — same tool, a second verification token

## 13. Hosting / server

- Hostinger-ready deployment is documented in `HOSTINGER_DEPLOYMENT.md`; start with **PHP 8.1** selected in hPanel.
- `.htaccess` contains one legacy redirect: `/tirupati-300-darshan-package-from-chennai.php` → `/srivani-vip-break-darshan-from-chennai.php` (a renamed/retired page — preserve it).
- Error logging: `includes/error-log-config.php` writes to `logs/php-errors.log`, blocked from direct web access by `logs/.htaccess`. Only 13 of 47 pages currently include it (see `TECHNICAL_DEBT.md`).
