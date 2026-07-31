# Technical Debt Register

Every known outstanding issue across the project, consolidated from Phases 6 through 12. This is a **list, not a to-do** — per Phase 12's scope, nothing here was fixed as part of producing this register. Priority is a judgment call based on user/business impact, not effort.

Legend: **P1** = actively hurting the business today · **P2** = real risk or real cost, not urgent · **P3** = minor/cosmetic

---

## P1 — Active business impact

### 1. Google Analytics is on a dead Universal Analytics property
- **Impact**: `UA-188854373-1` (in `includes/header.php`, every page) has almost certainly collected zero data since Google shut down UA processing in July 2023. The business may believe it has traffic analytics when it doesn't.
- **Recommendation**: Create a GA4 property and replace the tag, or confirm analytics is intentionally tracked elsewhere (Clarity/Statcounter) and remove the dead tag. Needs an explicit decision — this is an "analytics" change, called out across Phases 9–11 as something to stop and report rather than change unilaterally.

### 2. SMTP password stored in plaintext in a web-rooted PHP file
- **Impact**: `includes/mail/mail-config.php`'s `MAIL_SMTP_PASSWORD` constant holds a real Gmail App Password directly in a file served from the document root. If PHP execution ever misconfigures on the host (or the file is ever served as text instead of executed), the credential is exposed.
- **Recommendation**: Move to an environment variable or a file outside the web root, per standard practice. Not changed in any phase so far because it changes the mail-sending mechanism — flagged for explicit sign-off.

### 3. Two different phone numbers exist in the codebase
- **Impact**: `includes/footer.php` contains a dead (HTML-commented) call/WhatsApp block referencing `+91 7397489919` instead of the official `+91-99947-51079`. Currently harmless (never rendered) but a real risk if anyone ever uncomments that block without checking the number first.
- **Recommendation**: Delete the dead block entirely, or correct the number if the block is ever revived.

## P2 — Real cost, not urgent

### 4. Three different email addresses in use
- `ttdpackages@gmail.com` (lead recipient), `mailtoemk@gmail.com` (SMTP sender), `mailtotourbooking@gmail.com` (refund-policy page only). The third one is never referenced anywhere else in the codebase — worth confirming it's intentional and not a leftover from an earlier setup.

### 5. Four business-name variants in active use
- "Divine Balaji Travels," "Tirupati Balaji Booking," "Tirupati Balaji Travels," and "TTD Travels" (the last used only in the outgoing enquiry-email sender name and subject line) all refer to the same business. A lead notification currently arrives branded "TTD Travels Enquiry," which doesn't match any name shown on the website itself.

### 6. schema.org default block uses non-www URLs; canonical scheme is www
- `includes/header.php`'s default `TravelAgency` JSON-LD uses `https://tirupatibalajibooking.com` (no `www`) for `@id`/`url`/`image`, while every page's `<link rel="canonical">` uses `www`. `.htaccess` redirects non-www → www, so it still resolves, but it's an avoidable inconsistency in the business's structured-data identity. Flagged in Phase 11 as a "business identity" change requiring explicit approval.

### 7. Inconsistent error-reporting configuration across pages
- Only 13 of 47 pages call `error_reporting(E_ALL)` + include `includes/error-log-config.php` (writes to `logs/php-errors.log`, display off). The other 34 pages have no explicit `error_reporting()` call at all and silently inherit whatever the server's default `php.ini` setting is — unverified, and could mean PHP warnings/notices are displayed directly to visitors on those pages if the host's default has `display_errors` on.

### 8. reCAPTCHA is loaded but inert
- `recaptcha/api.js` loads on every page; the verification call is commented out in `includes/footer.php`. The real anti-spam mechanism (a custom math-question captcha) works independently. The script adds a network request and does nothing.

### 9. Three overlapping analytics/tracking tools
- Google Analytics (dead UA property), Microsoft Clarity (15/47 pages only), and Statcounter (every page) all run simultaneously. Worth a deliberate decision on which to keep rather than accumulating more over time.

### 10. Two orphan pages with no internal links
- `tirupati-nri-darshan-package-from-chennai.php` and `tirupati-nri-darshan-package-from-hyderabad-by-flight.php` are fully built (unique content, FAQ schema) but unreachable from any other page's navigation or body links. They were added to `sitemap.xml` in Phase 11, but a real visitor browsing the site would never find them.

### 11. 0/115 images have `width`/`height` or `loading="lazy"`
- Real Core Web Vitals (CLS, LCP) cost. Not fixed in Phase 11 because assigning correct dimensions to 115 images across 40 different page layouts without visually verifying each one risked violating the "do not change page layout" constraint that phase operated under. Belongs in a dedicated, visually-verified performance pass.

### 12. 24 pages skip the `<h2>` level entirely (`<h1>` → `<h3>`)
- A shared sidebar widget ("Plan Your Trip," "Choose a Package," etc.) and genuine page content are both marked up as `<h3>` with no `<h2>` anywhere on the page. The pattern isn't fully consistent (one page has a typo variant, two pages are missing the widget), so a safe mechanical fix wasn't attempted in Phase 11 — needs a manual per-page pass.

### 13. Duplicate/generic `<h1>` text across many templated pages
- E.g., "Tirumala Darshan for Seva Darshan Tour Package" appears verbatim as the H1 on the Privacy Policy and Refund Policy pages — content that has nothing to do with either policy. This is page content, not metadata, so it was explicitly out of scope for Phase 11's SEO work.

### 14. `con_enq.php` silently drops the `pickup` field
- The legacy booking widget's "Pickup Address" input is collected client-side and posted, but `con_enq.php` never reads `$_POST['pickup']` — it never appears in the outgoing enquiry email. Users filling it in believe it was sent. Flagged in Phase 10, not fixed (changes email content/mail flow).

### 15. No CSRF token on either mail endpoint; honeypot only on one
- `con_enq.php` has no CSRF token and no honeypot field. `enquiry-submit.php` has a honeypot (`website` field) but still no CSRF token. Flagged in Phase 10 as a security-model decision, not changed.

### 16. `.htaccess` has no compression or caching headers
- No `mod_deflate`/`mod_expires`/`mod_headers` rules exist yet. Purely additive, low-risk, and entirely within application-code control (cPanel/Hostinger honors per-directory `.htaccess` by default) — a good candidate for an early Phase 13/14 performance task.

## P3 — Minor / cosmetic

### 17. Mixed indentation style
- `con_enq.php` and `enquiry-submit.php` use tab indentation; effectively every other `.php` file in the project (including `includes/mail/mail-config.php`, which they both `require`) uses 4-space indentation.

### 18. Mixed PHP variable naming convention
- The large majority of variables are camelCase (`$pageTitle`, `$isAjaxRequest`, `$captchaError`), but a handful in `includes/header.php` and `con_enq.php` are snake_case (`$first_num`, `$second_num`, `$captcha_question`, `$user_answer`).

### 19. Mixed quote style for PHP string literals
- Some pages set `$pageTitle`/`$pageDescription` with single quotes, others with double quotes. Cosmetic only, no functional difference here since none of the strings need interpolation.

### 21. Favicon is a non-square banner image
- `assets/images/tirupati_package.png` is 166×83, not a square icon. Renders fine (browsers scale it) but isn't ideal. Fixing it means generating a new cropped asset, which every relevant phase so far has treated as out of scope ("do not replace images").

### 22. `.ftpquota` and `.DS_Store` sit in the project root
- Hosting-generated and local-machine artifacts respectively, not part of the actual site. Harmless but not meaningful to keep tracked long-term.

### 23. `assets/css/legacy/style.css`'s `.captcha-input` rule references a nonexistent file, and the class is never used
- `background: #FFF url(./../../captchaImageSource.php) repeat-y left center;` references a PHP endpoint that doesn't exist anywhere in the project, on a `.captcha-input` class that's never applied to any element in any page's markup (verified project-wide). Same "broken and dead" pattern as the `reset.css` nucleo-icon rules fixed in Phase 13B, found during that same review but left alone since it doesn't reference anything the restructuring moved — flagged for a future cleanup pass.

### 24. `tirupati-srivani-vip-darshan-malaysia-hyderabad.php`'s schema block still references the broken `Images/hero.png`
- Phase 11 fixed a broken `og:image` referencing `Images/hero.png` (capital I, nonexistent file) on `tirupati-srivani-vip-darshan-malaysia-chennai.php`, but a second, near-identical occurrence in a schema.org `"image"` field on the *Hyderabad* variant of that page was missed (different tag type, so Phase 11's `og:image`-focused search didn't catch it). Found during Phase 13B's image-path migration; left unfixed since it references a file that doesn't exist regardless of path, so moving `images/` to `assets/images/` doesn't affect it either way.


### 25. 6 of 8 "modern" template font files are unreferenced
- `assets/fonts/modern/Billy Ohio.otf` and all 5 `boxicons.*` files aren't referenced by any CSS in the project — only `bootstrap-icons0107.woff`/`.woff2` are actually used. Found while reconciling `assets/fonts/` during Phase 13B; kept (not deleted) since removing unreferenced-but-not-broken files wasn't part of that phase's approved scope.

### 26. `includes/mail/phpmailer/extras/htmlfilter.php` has a PHP 8.1 parse error
- Found via a project-wide `php -l` sweep during Phase 13B. Confirmed pre-existing (identical error in the Phase 13B baseline commit, before anything moved) and confirmed dead — nothing in this project `include`s or `require`s anything under `phpmailer/extras/`; only `PHPMailerAutoload.php`'s custom autoloader (which only loads `class.*.php` files) and `mail-config.php` are actually used. Harmless as long as it stays unreferenced; flagged in case anyone considers using PHPMailer's HTML-filtering extra in the future.

---

## Resolved since this register was last updated

- ~~`images/` and `Images/` are the same directory on macOS, will not be on production Linux~~ — resolved in Phase 13B: `images/` moved to `assets/images/`; `Images/` never held any distinct content to migrate (confirmed same inode as `images/` before the move).
- ~~`reset.css` references 12 nonexistent `img/nucleo-icon-*.svg` icons on a class that's never used~~ — resolved in Phase 13B: the 12 dead rules were removed.

## Not on this list

Everything already resolved in Phases 7–11 (phone number standardization, mail architecture consolidation, dead JS/CSS removal, scroll-hijack fix, duplicate form-validation logic, duplicate/malformed page titles, missing sitemap entries, broken JSON-LD, broken `og:image` on the Chennai page) and Phase 13B (see above) is **not** repeated here — see `CHANGELOG.md` and `MODERNIZATION_REPORT.md` for what was already fixed.
