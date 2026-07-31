# Changelog — Modernization Phases 1–13B

This project has been modernized incrementally, phase by phase, each one scoped narrowly and requiring explicit approval before the next began. This changelog summarizes what each phase covered. For the full narrative (before/after statistics, verification methodology, remaining debt per phase), see `MODERNIZATION_REPORT.md`.

**A note on completeness**: detailed, file-level records for Phases 1–6 predate this documentation set and this level of session detail wasn't retained from that point forward in a form this changelog could draw on precisely — the summaries below for those phases are necessarily higher-level. Phases 7 onward are documented in full detail, verified directly against the current codebase while writing this.

---

## Phase 1–6 — Initial audit and stabilization (early modernization work)

General legacy-PHP-site audit and early cleanup work, predating the detailed phase-by-phase record kept from Phase 7 onward. One specific, known outcome: **Phase 6.1** flagged that an old phone number (`+91-90438-00129`) was still the dominant, actively-displayed number across most of the site's body content, ambiguous enough that it was deliberately deferred rather than replaced outright — setting up the explicit resolution in Phase 7.

## Phase 7 — Phone number standardization + mail system consolidation

- Replaced every occurrence of the old, invalid phone number (`90438-00129` / `9043800129`, 147 occurrences across 40 files, verified as exactly two substring patterns with no gaps) with the newly-declared official number, `+91-99947-51079` — including the Google Ads conversion tracking config.
- Consolidated `con_enq.php` and `enquiry-submit.php`'s duplicated PHPMailer/SMTP setup and validation helpers into one new shared file, `mail-config.php` — while deliberately preserving each endpoint's real behavioral differences (different mobile-length bounds, `con_enq.php`'s `mhc` mode, the honeypot field that only `enquiry-submit.php` had, and each endpoint's distinct response/redirect handling).
- Fixed a quoted-printable encoding artifact (`lang=3D"en"`) in `con_enq.php`'s email template as a byproduct of building the shared HTML wrapper.

## Phase 8 — CSS architecture cleanup

- Audited and cleaned up the project's CSS architecture. Caught a real visual regression during verification (an `.h4-mail`/`.h4-reg` styling issue) via the same before/after Playwright screenshot methodology used in every phase since.
- Left roughly 308 candidate dead CSS selectors unaddressed at the time (flagged as remaining debt, since folded into `docs/TECHNICAL_DEBT.md`'s scope going forward, not repeated as a live item here since Phase 8's own report is the authoritative source).

## Phase 9 — JavaScript architecture cleanup & standardization

- Audited the entire JS architecture: external files, inline `<script>` blocks, plugin initialization, and vendor libraries.
- Found and removed the root cause of an inconsistent-scrolling bug reported on the home page: a sitewide, auto-activating legacy mousewheel-hijack library bundled inside `js/own-menu.js`, stacked with a second, independently-duplicated inline wheel-hijack script present on 11 pages including the homepage. Removed both; confirmed via Playwright that native browser scrolling was restored with zero new console errors.
- Deleted 5 fully-proven-dead files: `js/own-menu.js` (which, besides the scroll hijack, also bundled several entirely unused plugins — sticky-kit, FlexSlider, Stellar.js parallax, a legacy contact-form handler, a quantity-spinner widget), `js/xpedia_II.js`, `js/srivani.js`, `js/jquery.countTo.js`, `js/jquery.inview.min.js`.
- Extracted a byte-identical, 8.7KB hero-form/enquiry-form validation script — previously duplicated verbatim inline across 11 pages — into one new shared file, `js/enquiry-forms.js`.
- Removed a dead code block in `js/xpedia.js` and 9 broken `scrollTopBtn` script blocks (referencing a button ID that existed in zero pages' HTML, throwing a `TypeError` on every load of those 9 pages).
- Net result: 16 → 12 JS files.

## Phase 10 — Forms, validation & user experience standardization

- Audited every form on the site (5 distinct implementations across 74 form instances) and found the 24-page "legacy" booking widget had **zero** client-side validation.
- Built a new shared validation script, `js/legacy-enquiry-forms.js`, giving those 24 pages the same validation rules, wording, and error presentation as the modern forms — without changing their underlying full-page-POST-and-redirect submission mechanism.
- Added double-submit prevention (disable-on-valid-submit), focus management on the first invalid field, and accessibility improvements (`aria-label` sourced from existing placeholder text, `autocomplete` attributes, `role="alert"` error region) across both the legacy and modern form sets.
- Deleted 3 dead `<script>` includes on 2 pages that had no form at all to target.
- Flagged, but explicitly did not fix (per that phase's "stop and report" boundary): missing CSRF protection, the honeypot gap on `con_enq.php`, and the silently-dropped `pickup` field.

## Phase 11 — SEO, structured data & discoverability

- Found and fixed the single largest metadata issue on the site: 24 of 40 pages (60%) shared one byte-identical, malformed `<title>`/meta description, regardless of topic. Wrote unique, accurate metadata for all 24.
- Added Open Graph and Twitter Card tags site-wide via `header.php` — previously present on 0 of 40 pages in any complete, correct form (1 page had a partial, broken set with a nonexistent image reference).
- Found and fixed 2 invalid JSON-LD structured-data blocks (unescaped raw newlines inside JSON string values, silently breaking Google's ability to parse that page's FAQ schema).
- Fixed `robots.txt`'s `Sitemap:` directive, which pointed at the homepage instead of the sitemap file, and added 8 real, live pages that were missing from `sitemap.xml` (including 2 pages with zero internal links pointing to them anywhere on the site).
- Fixed a missing `<h1>` on `about-us.php` (an `<h2>` was promoted to `<h1>`, with its CSS selector updated in lockstep to preserve the exact visual design — caught via pixel-diff screenshot comparison during verification).
- Flagged, but explicitly did not fix: the site's Google Analytics tag runs on a Universal Analytics property (dead since mid-2023), and a `www`-vs-non-`www` inconsistency in the default schema.org block.

## Phase 12 — Code quality, documentation & developer experience (this phase)

- Audited the codebase for code-quality issues (naming/style inconsistency, magic numbers, dead comments) and fixed the one issue that was unquestionably safe: a stale, inaccurate comment in `error-log-config.php` describing a configuration state that no longer matched reality.
- Produced this full documentation set: `README.md`, `ARCHITECTURE.md`, `MAINTENANCE_GUIDE.md`, `DEPLOYMENT_GUIDE.md`, `CHANGELOG.md` (this file), `MODERNIZATION_REPORT.md`, plus supporting `CONFIGURATION.md`, `PROJECT_INVENTORY.md`, `DEPENDENCIES.md`, `TECHNICAL_DEBT.md`, and `RESTRUCTURE_PLAN.md`.
- Discovered, in the course of building the configuration inventory, several previously-undocumented inconsistencies: three different email addresses in active use, four different business-name strings, and a macOS-vs-Linux case-sensitivity gap between the (identical, on this machine) `images/`/`Images/` folders.
- Confirmed production PHP version (8.1) and hosting platform (cPanel) directly from `.htaccess`'s auto-generated handler block, rather than assuming.
- Did not restructure folders, optimize performance, or change any business logic, SEO, or enquiry workflow — all explicitly out of scope for this phase.

## Phase 13A — Final folder structure review & migration planning

- Reviewed the Phase 12 restructuring proposal against the current codebase and against a new hard constraint: no `public/` document root, no framework routing, no virtual hosts, no environment variables — the site had to keep working exactly as-is on standard Hostinger/cPanel shared hosting. Fully rewrote `docs/RESTRUCTURE_PLAN.md` around this: the core design decision became "anything a browser/crawler can directly request today stays exactly where it is" (all 40 pages, `con_enq.php`, `enquiry-submit.php`, `robots.txt`, `sitemap.xml`, `.htaccess`, verification files) — only includes, the mail library, and static assets move.
- Identified a real coupling risk the original plan missed: several CSS files reference fonts/images via paths relative to the CSS file's own location, so moving CSS without also fixing those references (or moving everything in lockstep) would break fonts/images even before the fonts/images folders themselves moved.
- Produced a 6-batch execution plan (includes → mail library → CSS → fonts → images → JavaScript), each independently testable, plus a regression checklist and rollback strategy. No files were moved in this phase — planning only.

## Phase 13B — Folder restructuring execution

- Executed all 6 batches from the Phase 13A plan. Initialized git for the project (previously no version control at all) and made a baseline commit before any changes, then one commit per batch — 7 commits total, each independently `php -l`-checked and Playwright-verified (render + console-error sweep, pixel-diff against the prior batch's screenshots) before moving to the next.
- Moved `header.php`, `footer.php`, `error-log-config.php`, `script.php` into `includes/`; `mail-config.php` and `PHPMailer-master/` (renamed `phpmailer/`) into `includes/mail/`; `css/` and `assets/css/` into `assets/css/legacy/` and `assets/css/modern/`; `fonts/` into `assets/fonts/legacy/` and `assets/fonts/modern/`; `images/` into `assets/images/`; `js/` into `assets/js/`. All 40 pages and the two form-POST endpoints (`con_enq.php`, `enquiry-submit.php`) deliberately stayed at the document root — no page URLs or form action URLs changed.
- Updated every Open Graph, Twitter Card, and schema.org image URL sitewide as part of the image move, per instruction — not just `<img>` tags.
- Fixed the one broken asset reference that survived Phase 13A's review (12 dead CSS rules in `reset.css` referencing a nonexistent `img/` folder, on a class never used in any page's markup). Corrected a Phase 13A planning error along the way: the *other* "broken" reference flagged in that plan turned out to be a false positive from a directory-depth mistake, not a real bug.
- Found and fixed, as basic hygiene during the CSS batch: `assets/css/fonts/` (5 files) turned out to be Apache 403-error-page HTML mistakenly saved with a `.html` extension, not fonts at all — deleted after confirming zero references anywhere.
- Found, during the fonts batch, that `assets/fonts/` already existed with unrelated content the Phase 13A plan hadn't accounted for (8 files for the modern template) — reconciled by reorganizing it into the same `legacy/`/`modern/` split used for CSS.
- Found and documented (not fixed — out of scope, unrelated to the migration) two more pre-existing issues: a dead `.captcha-input` CSS rule referencing a nonexistent PHP file, and a second occurrence of a broken `Images/hero.png` schema reference that Phase 11 had fixed on one page but missed on another.
- Updated the entire `docs/` set to reference the new post-migration paths.

---

## What's next

See `docs/TECHNICAL_DEBT.md` for everything still outstanding, including several new items found during Phase 13B's execution.
