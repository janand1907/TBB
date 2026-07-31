# Configuration Inventory

Every configurable value in the project, where it lives, and how many places reference it. This is a **read-only inventory** — nothing here was moved as part of Phase 12. See `RESTRUCTURE_PLAN.md` for the proposal to centralize these into one config file in a future phase.

## 1. SMTP / Mail sending

Single source of truth: **`mail-config.php`**

| Constant | Value | Notes |
|---|---|---|
| `MAIL_SMTP_HOST` | `smtp.gmail.com` | |
| `MAIL_SMTP_PORT` | `465` | SSL |
| `MAIL_SMTP_SECURE` | `ssl` | |
| `MAIL_SMTP_AUTH` | `true` | |
| `MAIL_SMTP_USERNAME` | `mailtoemk@gmail.com` | Gmail account used to send |
| `MAIL_SMTP_PASSWORD` | (Gmail App Password, in plaintext in this file) | See `TECHNICAL_DEBT.md` — this is a real secret sitting in a `.php` file in the web root |
| `MAIL_FROM_ADDRESS` | `mailtoemk@gmail.com` | |
| `MAIL_FROM_NAME` | `TTD Travels Enquiry` | Inconsistent with the business name used everywhere else — see §5 below |
| `MAIL_TO_ADDRESS` | `ttdpackages@gmail.com` | Where every enquiry form's lead lands |

Consumed by `con_enq.php` and `enquiry-submit.php` (the two form-submission endpoints — see `ARCHITECTURE.md`).

## 2. Phone / WhatsApp numbers

| Value | Format(s) in use | Occurrences | Status |
|---|---|---|---|
| `+91-99947-51079` | `+91-99947-51079`, `+919994751079`, `9994751079`, `tel:9994751079`, `wa.me/919994751079` | ~160 across the site | **Official number** (declared explicitly in Phase 7) |
| `+91 7397489919` | `tel:+917397489919`, `api.whatsapp.com/send?phone=917397489919` | 2, both in `footer.php` | Dead — sits inside an HTML comment (`<!--...-->`), never rendered. Flagged in `TECHNICAL_DEBT.md`. |

The official number is duplicated as a literal string in ~15+ places rather than being read from one PHP constant (header top bar, footer, Google Ads conversion tag, schema.org blocks, individual page click-to-call/WhatsApp buttons). See `RESTRUCTURE_PLAN.md` for centralizing this.

## 3. Email addresses

| Address | Role | Where used |
|---|---|---|
| `ttdpackages@gmail.com` | Enquiry lead recipient | `mail-config.php` (`MAIL_TO_ADDRESS`), footer/header contact links (21 occurrences) |
| `mailtoemk@gmail.com` | SMTP sending account | `mail-config.php` (`MAIL_SMTP_USERNAME`/`MAIL_FROM_ADDRESS`) |
| `mailtotourbooking@gmail.com` | Refund-enquiry contact | **Only** `refund-policy.php` (1 occurrence) — a third, different address never referenced anywhere else. Likely worth a business decision on whether this is intentional; flagged, not changed. |

## 4. Google Ads

- Conversion tracking tag ID: `AW-437360014` (`footer.php`)
- Conversion label: `AW-437360014/yCZWCJDr1_QBEI6rxtAB`
- Phone conversion number bound to the tag: `+91-99947-51079` (correct, matches the official number — fixed in Phase 7)

## 5. Google Analytics

- Property ID: **`UA-188854373-1`** (`header.php`, loaded on every page)
- This is a **Universal Analytics** property. Google stopped processing UA data in July 2023. This tag has almost certainly been sending data nowhere for roughly two years. Flagged in Phase 11 and repeated in `TECHNICAL_DEBT.md` — no GA4 measurement ID exists anywhere in the codebase.

## 6. Microsoft Clarity

- Project ID: `ux7ed2adtj`
- Lives in its own include, **`script.php`** (a bare snippet, not a full page — see `PROJECT_INVENTORY.md`)
- Included on only **15 of 47** pages (via an explicit `include` on each — not wired into `header.php`/`footer.php`), so session-recording coverage is inconsistent across the site.

## 7. Statcounter

- Project ID: `13063434`, security code `6753fe53`
- Loaded site-wide via `footer.php`
- A third analytics/tracking tool alongside GA and Clarity — see `DEPENDENCIES.md` for whether all three are worth keeping.

## 8. reCAPTCHA

- `https://www.google.com/recaptcha/api.js` is loaded site-wide via `footer.php`
- The actual verification call (`grecaptcha.getResponse()`) is commented out in `footer.php`
- **The real spam-prevention captcha on every form is a custom PHP-generated math question** (`$first_num + $second_num`, session-validated in `mail-config.php`'s `validate_captcha()`), not reCAPTCHA. The reCAPTCHA script is loaded but does nothing — pure dead weight on every page load.

## 9. Business name

Four different strings are used for the same business, depending on context:

| String | Occurrences | Where |
|---|---|---|
| `Divine Balaji Travels` | 56 | Most page copy, footer, about-us.php |
| `Tirupati Balaji Booking` | 13 | Page titles, schema `og:site_name` context |
| `Tirupati Balaji Travels` | 8 | `header.php`'s default `$pageTitle` fallback, default schema `name` |
| `TTD Travels` | 2 | `mail-config.php`'s `MAIL_FROM_NAME`, `con_enq.php`'s email subject line |

Domain (the actual product/site) is `tirupatibalajibooking.com`, operated by `Divine Balaji Travels` (per the footer copyright line and `about-us.php`). `TTD Travels` in the outgoing mail sender name is the most out-of-place variant — a lead notification email currently arrives from "TTD Travels Enquiry," not matching any brand name shown on the website itself.

## 10. Canonical URL / domain

- Canonical scheme: **`https://www.tirupatibalajibooking.com`** (enforced by `.htaccess`: non-HTTPS and non-`www` requests 301-redirect to this form)
- Per-page canonical is computed in `header.php` as `$pageCanonical ?? ('https://www.tirupatibalajibooking.com/' . basename($_SERVER['PHP_SELF']))`, overridable per page via `$pageCanonical`
- The default schema.org block in `header.php` uses the **non-www** form (`https://tirupatibalajibooking.com`) for its `@id`/`url`/`image` — inconsistent with the canonical scheme above, though the `.htaccess` redirect means it still resolves correctly. Flagged in Phase 11 and `TECHNICAL_DEBT.md`, not changed (business-identity risk).

## 11. Social URLs

Every social icon in `header.php` and `footer.php` (Facebook, Twitter, Instagram, LinkedIn) links to `href="#"` — none are configured with a real URL. Either the business has no social presence yet, or these were never filled in.

## 12. Search-engine verification files

Three verification files sit in the project root (do not remove):
- `googledac465f9fa585a7f.html` — Google Search Console
- `i3s1ni8OEgD61Gg4JYkc2NlszrwRvWyYogJzsx3RgdA` — Bing Webmaster Tools (or similar; no extension, standard verification-token naming)
- `yQ6XR2ReUAlJ-ZLYu08u5Dd289ffjZDdd1g494hh9Xc` — same tool, a second verification token

## 13. Hosting / server

- cPanel hosting, confirmed via the auto-generated block in `.htaccess`: `AddHandler application/x-httpd-ea-php81 .php .php8 .phtml` → **production PHP version is 8.1** (EasyApache).
- `.htaccess` also contains one legacy redirect: `/tirupati-300-darshan-package-from-chennai.php` → `/srivani-vip-break-darshan-from-chennai.php` (a renamed/retired page — preserve this if the folder restructure in Phase 13 touches `.htaccess`).
- Error logging: `error-log-config.php` writes to `logs/php-errors.log`, blocked from direct web access by `logs/.htaccess`. Only 13 of 47 pages currently include it (see `TECHNICAL_DEBT.md`).
