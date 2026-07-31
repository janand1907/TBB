# Maintenance Guide

Step-by-step instructions for the changes a maintainer is most likely to need. Each section assumes you've read `ARCHITECTURE.md`'s Page Lifecycle section first.

## Add a new page

1. Copy an existing page that's closest to what you need:
   - For a simple content page (temple guide, policy page), copy one of the "legacy" pages, e.g. `sri-govindaraja-swamy-temple.php`.
   - For a page that needs the modern hero-form/enquiry-form, copy one of the 11 pages that load `js/enquiry-forms.js` (e.g. `tirupati-nri-darshan-package-from-chennai.php`).
2. At the top of the new file, before `include './header.php'`, set:
   - `$pageTitle` — unique, describes this specific page (see `docs/TECHNICAL_DEBT.md` for what happens when this is skipped: 24 pages once shared one generic title, fixed in Phase 11).
   - `$pageDescription` — unique, ~130–160 characters.
   - `$pageCanonical` — usually not needed; it defaults to `https://www.tirupatibalajibooking.com/<this-filename>`. Only set it explicitly if the page's canonical URL should point somewhere else.
   - `$activeMenu` — one of `'home'`, `'about'`, `'services'`, `'temples'`, `'contact'`, if this page corresponds to a nav item that should show as active. Leave unset otherwise.
3. Write the page content between the `header.php` and `footer.php` includes.
4. Add the new page to `sitemap.xml` (see "Update the sitemap" below).
5. Link to the new page from somewhere real (the nav menu, a related-pages list, etc.) — a page with no internal links pointing to it is an orphan page even if it's in the sitemap (see `docs/TECHNICAL_DEBT.md` for two existing examples of this).
6. Run `php -l your-new-page.php` to check for syntax errors before deploying.

## Edit navigation (desktop + mobile menus)

Both menus live in `header.php` and must be edited **in two places** — they are two independent, hand-written `<ul>` structures, not generated from one source:

- Desktop dropdown menu: the `<nav class="hs_main_menu ...">` block.
- Mobile slide-out menu: the `<nav class="cd-dropdown">` block, further down the same file.

If you add/remove/rename a nav item, update both. Forgetting the mobile version is the easiest way to make the two menus silently diverge.

## Edit the footer

All footer markup — visible content, social links, copyright line — lives in `footer.php`, before the `<script src>` block. Note that `footer.php` also owns **every JavaScript `<script>` tag for the entire site** (see `ARCHITECTURE.md` → Shared JavaScript) — don't confuse "editing the footer" (visible content) with "editing what scripts load" (also in this file, further down).

## Edit forms

There isn't one form system — see `ARCHITECTURE.md` for the full picture. Practically:

- **The "legacy" booking widget** (appears twice per page, desktop + mobile, on 24 pages): the HTML is duplicated per-page (not a shared include), so a field/label change has to be made on every page that has it. Its validation logic is centralized in `js/legacy-enquiry-forms.js` — a rule change there applies everywhere automatically.
- **The modern `.hero-form`/`.enquiry-form`**: also duplicated HTML per page, but its validation logic is centralized in `js/enquiry-forms.js` (loaded by the 11 pages that use it).
- **Server-side validation rules** (required fields, mobile digit-length bounds, captcha check) live in `mail-config.php`'s `validate_mobile()`/`validate_captcha()`, called from `con_enq.php`/`enquiry-submit.php`. If you change a rule here, update the matching client-side rule in `js/legacy-enquiry-forms.js` or `js/enquiry-forms.js` (or the page's own inline script, for the 3 pages that have one) to keep client and server in sync — the client-side wording is written to match the server's exactly.
- **Do not** change what fields `con_enq.php`/`enquiry-submit.php` read from `$_POST` without checking `docs/TECHNICAL_DEBT.md` first — the `pickup` field is a known example of a field that's collected but silently never makes it into the email.

## Change the phone number

There is currently **no single source of truth** for the phone number (see `docs/CONFIGURATION.md` §2 and `docs/RESTRUCTURE_PLAN.md` for the plan to fix this). Until that centralization happens, changing the number means finding every occurrence:

```
grep -rn "99947" *.php header.php footer.php
grep -rn "9994751079" *.php header.php footer.php
```

This will surface the top bar (`header.php`), the footer, the Google Ads conversion tag (`footer.php`, `phone_conversion_number`), the default schema.org block (`header.php`), and every page's individual click-to-call/WhatsApp links and structured data. Update every match — do not update just one and assume the rest follow. See Phase 7 in `CHANGELOG.md` for how this was done project-wide the last time (exhaustive two-pattern substring replacement, verified with a post-change grep sweep returning zero old-number matches).

## Change the email address

Same "no single source of truth" caveat as the phone number — see `docs/CONFIGURATION.md` §3 for the three different addresses currently in use and what each one is for. To change the address enquiries are delivered to, edit `MAIL_TO_ADDRESS` in `mail-config.php` — that's the one value both form endpoints actually use to decide where a lead goes. Addresses shown as visible contact info on pages are separate, hardcoded strings and need to be changed individually.

## Change SMTP settings

All SMTP configuration is centralized in `mail-config.php` (Phase 7 consolidated this from two separate copies into one):

```php
const MAIL_SMTP_HOST = 'smtp.gmail.com';
const MAIL_SMTP_PORT = 465;
const MAIL_SMTP_SECURE = 'ssl';
const MAIL_SMTP_AUTH = true;
const MAIL_SMTP_USERNAME = 'mailtoemk@gmail.com';
const MAIL_SMTP_PASSWORD = '...';
const MAIL_FROM_ADDRESS = 'mailtoemk@gmail.com';
const MAIL_FROM_NAME = 'TTD Travels Enquiry';
const MAIL_TO_ADDRESS = 'ttdpackages@gmail.com';
```

Both `con_enq.php` and `enquiry-submit.php` read these via `require 'mail-config.php'` — changing them here changes both endpoints at once. After changing, test with a real (or the mailer-stub-style) submission before trusting it in production; an SMTP misconfiguration fails silently from the visitor's point of view unless you check `send_enquiry_mail()`'s return value (both endpoints already do this and show an error message on failure).

## Update the sitemap

`sitemap.xml` is a plain XML file, not generated automatically — nothing regenerates it when you add a page. To add an entry:

```xml
<url>
  <loc>https://www.tirupatibalajibooking.com/your-new-page.php</loc>
  <lastmod>YYYY-MM-DDT09:00:00+00:00</lastmod>
  <priority>0.80</priority>
</url>
```

Match the existing `priority` convention (`1.00` for the homepage, `0.80` for everything else). Before committing a sitemap change, sanity check it's well-formed XML and that every `<loc>` corresponds to a page that actually exists — Phase 11 found and fixed both a case where real pages were missing from the sitemap and confirmed there were no dead/duplicate entries.

## Update robots.txt

`robots.txt` is also a plain static file:

```
User-agent: *
Disallow: 

Sitemap: https://www.tirupatibalajibooking.com/sitemap.xml
```

The `Sitemap:` line must point at the actual sitemap file URL, not the homepage — this was wrong (pointed at the bare domain) until Phase 11 fixed it. If you ever need to block a page from being indexed (e.g. a future thank-you or internal utility page), add a page-specific `Disallow:` line here, or add `<meta name="robots" content="noindex">` to that page's `$extraHeadLinks` — the latter is generally the safer, more targeted option since it doesn't risk a typo in a path pattern accidentally blocking more than intended.
