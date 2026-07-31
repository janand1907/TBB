# Modernization Report

The complete story of this project's modernization, from its original state through Phase 12. This is the most important document in `docs/` — everything else either supports or expands on what's summarized here.

## Project before

`tirupatibalajibooking.com` began as a typical aging PHP/jQuery template site: 47 PHP files with no shared version control, duplicated logic copy-pasted across dozens of near-identical pages, a phone number that had gone stale in most of the site's visible content, two separate mail-handling endpoints with fully duplicated SMTP setup, a JavaScript architecture that included a sitewide mousewheel-hijacking library actively making scrolling worse, and metadata (titles, descriptions, structured data) that was either missing, broken, or — on 60% of pages — identical to every other page regardless of topic. It worked, in the sense that it rendered and forms sent email, but it had accumulated a decade-plus of unaddressed drift between what the code did and what a reasonable version of this site should do.

No git repository exists for this project at any point in its modernization — every phase described below had to build its own backup-and-verify discipline from scratch (see "Verification methodology" below) rather than relying on version control's safety net.

## Every completed phase

See `CHANGELOG.md` for the detailed, phase-by-phase summary. In brief:

| Phase | Focus |
|---|---|
| 1–6 | Early audit and stabilization (detailed records predate this documentation set) |
| 7 | Phone number standardization + mail system consolidation |
| 8 | CSS architecture cleanup |
| 9 | JavaScript architecture cleanup & standardization |
| 10 | Forms, validation & user experience standardization |
| 11 | SEO, structured data & discoverability |
| 12 | Code quality, documentation & developer experience |
| 13A | Final folder structure review & migration planning |
| 13B | Folder restructuring execution (this phase) |

## Files merged

- `con_enq.php` and `enquiry-submit.php`'s duplicated SMTP configuration, array-injection guard, HTML escaper, mobile/captcha validators, and email-template builder → consolidated into **`mail-config.php`** (Phase 7), while preserving each endpoint's genuine behavioral differences.
- An 8.7KB hero-form/enquiry-form validation script, previously duplicated verbatim inline across 11 pages → consolidated into **`assets/js/enquiry-forms.js`** (Phase 9).
- A pre-existing, previously-undiscovered `assets/fonts/` directory (8 files for the modern template) → reconciled into the same `legacy/`/`modern/` split used for the rest of the CSS/font restructuring (Phase 13B).

## Files created

- `mail-config.php` (Phase 7; moved to `includes/mail/mail-config.php` in Phase 13B)
- `js/enquiry-forms.js` (Phase 9; moved to `assets/js/enquiry-forms.js` in Phase 13B)
- `js/legacy-enquiry-forms.js` (Phase 10; moved to `assets/js/legacy-enquiry-forms.js` in Phase 13B)
- `docs/` — this entire documentation set (Phase 12): `README.md`, `ARCHITECTURE.md`, `MAINTENANCE_GUIDE.md`, `DEPLOYMENT_GUIDE.md`, `CHANGELOG.md`, `MODERNIZATION_REPORT.md`, `CONFIGURATION.md`, `PROJECT_INVENTORY.md`, `DEPENDENCIES.md`, `TECHNICAL_DEBT.md`, `RESTRUCTURE_PLAN.md`
- `.git/` and `.gitignore` — the project's first version control (Phase 13B)

## Files archived

None. This project keeps a separate, untouched sibling directory (`tbb-archive/`, outside the project root) as a pre-modernization reference snapshot — no phase has read from or written to it. No file within the active project has been moved to an "archive" location; files identified as dead were deleted outright once proven safe (see below), not archived.

## Files removed

All removals required exhaustive proof of zero live references (zero HTML reference, zero execution path, zero event binding, zero plugin dependency) before deletion — see `js9`-era methodology referenced in Phase 9:

- `js/own-menu.js` — a ~2013-era bundle containing the site's mousewheel-hijack scroll bug plus several entirely unused vendor plugins (sticky-kit, FlexSlider, Stellar.js, a legacy contact-form AJAX handler, a quantity-spinner widget)
- `js/xpedia_II.js` — an older, unreferenced duplicate of `xpedia.js`
- `js/srivani.js` — an orphaned earlier draft of form-validation logic, superseded by `js/enquiry-forms.js`
- `js/jquery.countTo.js`, `js/jquery.inview.min.js` — unused vendor plugins
- A dead code block inside `js/xpedia.js` (a `.counter-section`/`.timer` handler with no matching markup anywhere)
- 9 broken inline `<script>` blocks (the `scrollTopBtn` dead-code, referencing a nonexistent element ID, throwing a `TypeError` on every page load)
- 11 duplicated inline wheel-hijack scripts (the other half of the Phase 9 scroll-speed fix)
- 3 dead `<script>` includes on 2 pages that had no form to target (Phase 10)
- `assets/css/fonts/` (5 files) — turned out to be Apache 403-error-page HTML mistakenly saved with a `.html` extension, not fonts; zero references anywhere (Phase 13B)
- 12 dead CSS rules in `reset.css` referencing a nonexistent `img/` folder, on a class never used in any page's markup (Phase 13B)

Net JS file count: 16 → 13 (12 after Phase 9's deletions, +1 for Phase 10's new `legacy-enquiry-forms.js`) → still 13 after Phase 13B's move to `assets/js/` (a relocation, not a count change).

## Architecture improvements

- One shared SMTP/mail-helper source of truth (`mail-config.php`) instead of two independently-drifting copies (Phase 7).
- One shared client-side validation script for each of the two major form patterns instead of per-page duplicated inline scripts (Phases 9–10).
- Sitewide script loading (`footer.php`) freed of a harmful, unconditionally-active scroll-hijacking library (Phase 9).
- `header.php` extended with a documented, optional-variable mechanism (`$pageOgImage`, alongside the pre-existing `$pageTitle`/`$pageDescription`/`$pageCanonical`/`$extraHeadLinks`/`$includeDefaultSchema`) so Open Graph/Twitter tags are generated correctly for every page from the same values the page already sets, rather than requiring per-page duplication (Phase 11).
- Full architectural documentation now exists (`ARCHITECTURE.md`) describing the page lifecycle, include hierarchy, and mail system — none of this was written down anywhere before Phase 12.
- **The project moved from a completely flat file structure to a real one** (Phase 13B): `includes/` for PHP includes, `includes/mail/` for the mail library, `assets/{css,js,images,fonts}/` for static assets — all without changing the document root, any page URL, or any form action URL, so the site keeps working unmodified on standard shared hosting. See `ARCHITECTURE.md` and `PROJECT_INVENTORY.md` for the current layout, `RESTRUCTURE_PLAN.md` for the full migration record.
- **The project became a git repository** (Phase 13B) — the first version control it's ever had across 13 phases of work.
- CSS files' internal references to fonts/images now use root-relative absolute paths instead of paths relative to the CSS file's own location (Phase 13B) — this was necessary to make the CSS/fonts/images folder moves independently safe, and incidentally makes the codebase more resilient to future folder reorganizations too.

## Security improvements

- Fixed a captcha-bypass-adjacent edge case: `validate_captcha()` in `mail-config.php` treats an empty session answer as a failed check rather than a skipped one, so a request with no prior session can't bypass the captcha entirely (Phase 7-era hardening, carried into the shared helper).
- `post_string()` in `mail-config.php` guards against a `$_POST` array-injection footgun (`name[]=a&name[]=b`) that would otherwise throw an uncaught `TypeError` (a 500 error) instead of being rejected as ordinary bad input.
- All outgoing email content is passed through `escape_html()` (`htmlspecialchars` with `ENT_QUOTES | ENT_SUBSTITUTE`) before being placed in the email body — verified in Phase 10's security review.
- **Explicitly not changed**, and documented instead: no CSRF token exists on either mail endpoint; `con_enq.php` has no honeypot (`enquiry-submit.php` does); the SMTP password sits in plaintext in a web-rooted file. Each of these was identified and deliberately left for an explicit decision rather than changed unilaterally, per the "stop and report" instruction that has applied since Phase 10. See `TECHNICAL_DEBT.md`.

## SEO improvements

Full detail in `CHANGELOG.md`'s Phase 11 entry and that phase's own report. Summary of the before/after:

| Metric | Before | After |
|---|---|---|
| Pages with duplicate title | 24 | 0 |
| Pages with duplicate meta description | 24 | 0 |
| Pages with valid Open Graph tags | 0 | 40 |
| Pages with valid Twitter Card tags | 0 | 40 |
| Invalid/broken JSON-LD schema blocks | 2 | 0 |
| Pages in `sitemap.xml` | 31 | 39 |
| `robots.txt` Sitemap directive | broken | correct |
| Pages missing an `<h1>` | 1 | 0 |

## Code quality improvements

- Removed the last provably-dead JavaScript and duplicated inline scripts (Phases 9–10, see above).
- Corrected a stale, actively-misleading comment in `error-log-config.php` that described a configuration state (the including pages calling `error_reporting(0)`) that no longer matched reality — it was written before those pages were switched to `error_reporting(E_ALL)`, and had gone uncorrected since (Phase 12).
- Documented, but did not mechanically rewrite (per that phase's "unquestionably safe only" constraint), a set of minor consistency issues: mixed tab/space indentation between `con_enq.php`/`enquiry-submit.php` and the rest of the project, mixed camelCase/snake_case PHP variable naming, and mixed single/double-quote string literal style. See `TECHNICAL_DEBT.md` items 17–19.
- Phase 13B found and fixed the one genuinely broken CSS reference identified during planning (dead `reset.css` rules), and found/removed 5 junk files masquerading as fonts (`assets/css/fonts/`, actually saved 403-error pages) — both squarely "unquestionably safe": neither was referenced by anything live.

## Technical debt remaining

Full register in `TECHNICAL_DEBT.md`, prioritized (now 25 items — 5 new ones found during Phase 13B; 2 resolved by the restructuring itself). Headline items:

- **P1**: Google Analytics running on a dead Universal Analytics property; SMTP password in plaintext in a web-rooted file; a dead-but-wrong phone number sitting in commented-out HTML.
- **P2**: three different email addresses and four different business-name strings in active use; a `www`/non-`www` inconsistency in the default schema.org block; inconsistent error-reporting configuration across pages; inert reCAPTCHA script; three overlapping analytics tools; two orphan pages with no internal links; zero images with `width`/`height`/`loading="lazy"`; 24 pages with no `<h2>` level in their heading structure; a silently-dropped `pickup` form field; missing CSRF protection; no HTTP compression/caching headers configured yet.
- **P3**: mixed code style (indentation, naming, quoting); a non-square favicon; stray hosting-artifact files in the project root; a dead `.captcha-input` CSS rule (found in Phase 13B); a second, missed occurrence of the broken `Images/hero.png` schema reference (found in Phase 13B); 6 unreferenced font files in `assets/fonts/modern/` (found in Phase 13B).
- **Resolved by Phase 13B**: the macOS/Linux `images/`/`Images/` case-sensitivity trap no longer applies — `images/` moved to `assets/images/` and `Images/` never held distinct content.

## Recommendations before Phase 14

1. ~~Strongly consider turning this project into a real git repository~~ — **done in Phase 13B.** Keep using it: one commit per meaningful change, going forward.
2. **Get an explicit decision on the P1 items** in `TECHNICAL_DEBT.md` (dead GA property, plaintext SMTP credential, dead-wrong phone number in commented code) — none of them are blocked by or related to anything structural, so there's no reason to keep deferring them.
3. **Verify the current HTTP/2 status and any existing compression/caching headers on the live domain** before a future performance phase — this was flagged during Phase 11 planning as something that determines how much of that work is even necessary, and it can't be checked from a local environment.
4. **Config centralization** (a `config/site-config.php`-style single source of truth for the phone number, business name, email addresses — see `docs/CONFIGURATION.md`) is now the natural next structural step, since the folder move it depended on being sequenced safely (per `RESTRUCTURE_PLAN.md`) is complete. Still worth treating as its own phase, separately verified.
5. **Fix the 4 newly-found small issues** from Phase 13B when convenient (dead `.captcha-input` rule, the missed `Images/hero.png` reference, 6 unreferenced font files) — all low-risk, low-effort, none blocking anything else.
6. **Deploy Phase 13B's changes to production and confirm live** before further phases build on top of the new structure — everything in this phase was verified locally; a production smoke test (the same checklist used after each batch) closes the loop.
