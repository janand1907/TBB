# Folder Restructuring Plan (Final — Phase 13A)

**Nothing in this document has been executed.** Phase 13A is planning-only: no files moved, no files renamed, no include paths modified, no URLs changed. This document is what Phase 13B will execute, batch by batch, once approved.

## Revision note (Phase 13A)

This plan replaces the version written at the end of Phase 12. That earlier version proposed a `public/` document root with pages moved into it. **That proposal is invalidated** by Phase 13A's explicit constraints: no `public/`, no framework routing, no virtual hosts, no environment variables, and the site must keep working exactly as-is on standard Hostinger/cPanel shared hosting. Changing the document root is a hosting-panel operation, not a file move, and doing it in lockstep with a bulk upload on shared hosting was already flagged as the highest risk in the old plan — this revision removes that risk entirely by not requiring a document-root change at all.

The core design decision in this revision: **anything that is a URL a browser or crawler can directly request today stays exactly where it is.** Only files that are never directly requested — PHP includes, the mail library, and static assets referenced from within our own HTML/CSS — move. This satisfies "DO NOT change URLs" as a property of the *target* structure, not just of this planning phase's own inaction.

## Task 1 — Review of the existing plan

| Item from the old plan | Still valid? | Disposition |
|---|---|---|
| `public/` as new document root | **No** | Removed. Forbidden by Phase 13A's constraints; also the single highest-risk step in the old plan (atomic document-root cutover on shared hosting). |
| Move `header.php`/`footer.php` into `includes/` | Yes | Kept, detailed in Task 2/4 below. |
| Move `mail-config.php`/`con_enq.php`/`enquiry-submit.php`/PHPMailer into `lib/` | Partially | **Revised**: `mail-config.php` and PHPMailer move; `con_enq.php`/`enquiry-submit.php` now **stay in root** (see Task 2 — they're POST targets referenced by 72 + 2 = 74 form `action` attributes across every page; moving them buys no URL-cleanliness benefit since they're not indexed content, only cost and risk). |
| Move `css/`, `assets/css/`, `js/`, `images/`, `fonts/` into `public/assets/...` | Partially | Kept the consolidation idea, dropped the `public/` prefix — target is now `assets/...` at the existing document root. |
| `config/site-config.php` as a separate future step | Yes | Unchanged — still explicitly out of scope for the file-move itself. |
| Migration order / staged batches | Yes, revised | See Task 6 — batch boundaries changed based on a coupling risk discovered during this review (see below). |
| New risk found during this review | — | CSS files reference fonts and images via **relative** paths (`../fonts/...`, `../images/...`). Moving CSS to a different nesting depth than fonts/images breaks these unless handled together — not identified in the original plan. Full detail in Task 5. |
| Two more pre-existing broken asset references found during this review | — | `assets/css/style.css` references a `srivani-image/landing-page/hero.webp` background image that doesn't exist anywhere in the project, and `css/reset.css` references 12 `../img/nucleo-icon-*.svg` icons in a `img/` folder that also doesn't exist. Both predate Phase 13A, are unrelated to the restructuring, and are **not fixed here** — added to `docs/TECHNICAL_DEBT.md`'s scope for a future phase. Flagged so Phase 13B doesn't mistake them for something the migration broke. |

## Task 2 — Final folder structure

Document root is **unchanged** — still the project root, still flat PHP pages at the top level, still standard Apache/cPanel `.htaccess`-driven behavior. No `public/`, no Composer autoloading, no framework router, no virtual host changes, no environment variables.

```
/TBB/                                          (document root — unchanged)
│
├── about-us.php                               ┐
├── index.php                                  │  all 40 pages, unchanged
├── ... (38 more page files)                   │  filenames, unchanged URLs
├── vakula-matha-temple.php                     ┘
│
├── con_enq.php                                 form POST target — stays (see Task 1)
├── enquiry-submit.php                          form POST target — stays (see Task 1)
│
├── robots.txt                                  must stay at domain root (spec requirement)
├── sitemap.xml                                 stays — moving it would change its indexed URL
├── .htaccess                                   stays — this IS the document root's config
├── googledac465f9fa585a7f.html                 search-engine verification — must stay at root
├── i3s1ni8OEgD61Gg4JYkc2NlszrwRvWyYogJzsx3RgdA  search-engine verification — must stay at root
├── yQ6XR2ReUAlJ-ZLYu08u5Dd289ffjZDdd1g494hh9Xc  search-engine verification — must stay at root
│
├── includes/                                   NEW — never directly requested by a browser
│   ├── header.php                              ← moved from root
│   ├── footer.php                              ← moved from root
│   ├── error-log-config.php                    ← moved from root
│   ├── script.php                              ← moved from root (Clarity snippet)
│   └── mail/
│       ├── mail-config.php                     ← moved from root
│       └── phpmailer/                          ← moved + renamed from PHPMailer-master/
│
├── assets/                                      NEW consolidated static-asset tree
│   ├── css/
│   │   ├── legacy/                             ← moved from css/ (18 files) — the original template
│   │   └── modern/                             ← moved from assets/css/ (2 files) — hero-form template
│   ├── js/                                      ← moved from js/ (13 files)
│   ├── images/                                  ← moved from images/ (133 files + logo/, choose-icons/,
│   │                                                hero-icons/ subfolders). Images/ is NOT separately
│   │                                                migrated — it's the same directory as images/ on this
│   │                                                (case-insensitive) dev machine; nothing distinct exists
│   │                                                under that name to move.
│   └── fonts/                                   ← moved from fonts/ (15 files)
│
├── docs/                                        unchanged (Phase 12)
├── logs/                                        unchanged — already isolated behind its own logs/.htaccess
├── .DS_Store, .ftpquota                         local/hosting artifacts, not part of the site — left alone
```

## Task 3 — File classification

| Category | Files | Moves in Phase 13B? |
|---|---|---|
| **Pages** | 40 `.php` content pages | No — stay at document root, unchanged URLs |
| **Mail (POST targets)** | `con_enq.php`, `enquiry-submit.php` | No — stay at root (see Task 1); only their internal `require` paths change |
| **PHP Includes** | `header.php`, `footer.php`, `error-log-config.php`, `script.php` | Yes → `includes/` |
| **Mail (library)** | `mail-config.php`, `PHPMailer-master/` | Yes → `includes/mail/` |
| **CSS** | `css/` (18 files), `assets/css/` (2 files) | Yes → `assets/css/legacy/`, `assets/css/modern/` |
| **JavaScript** | `js/` (13 files) | Yes → `assets/js/` |
| **Images** | `images/` (133 files + 3 subfolders) | Yes → `assets/images/` |
| **Fonts** | `fonts/` (15 files) | Yes → `assets/fonts/` |
| **Configuration** | `.htaccess`, `robots.txt` | No — required at document root by spec/convention |
| **Verification files** | `googledac465f9fa585a7f.html`, `i3s1ni8...`, `yQ6XR2...` | No — required at document root by the verifying services |
| **Documentation** | `docs/` (11 files) | No — already in its own folder since Phase 12 |
| **Third-party libraries** | `PHPMailer-master/` (see Mail/library above) | Yes, as part of the mail-library move |
| **Logs** | `logs/` | No — already isolated, no reason to touch |
| **Archive** | — | **None identified.** Every file proven dead in Phases 9–10 was deleted outright at the time, not archived — there is nothing currently sitting in the project in an "unused but kept for reference" state. |
| **Local/hosting artifacts** | `.DS_Store`, `.ftpquota` | No — not part of the deployed site, not meaningfully "classified" as project files at all |

## Task 4 — Migration map

### Includes (non-mail) — 4 files move

| Current | Target |
|---|---|
| `header.php` | `includes/header.php` |
| `footer.php` | `includes/footer.php` |
| `error-log-config.php` | `includes/error-log-config.php` |
| `script.php` | `includes/script.php` |

**Include updates required:**
- All 40 pages' `include './header.php';` → `include './includes/header.php';` (or equivalent — exact current syntax varies slightly page to page and will be re-verified per file at execution time, not assumed from memory).
- All 40 pages' `include './footer.php';` (or `include 'footer.php';`) → `includes/footer.php`.
- The 13 pages currently including `error-log-config.php` → `includes/error-log-config.php`.
- The 15 pages currently including `script.php` → `includes/script.php`.
- `header.php` itself does not need to change where it looks for anything internally as a result of this particular move (its own asset `<link>`/`<script>` paths change separately — see below).

### Mail (library) — 2 items move

| Current | Target |
|---|---|
| `mail-config.php` | `includes/mail/mail-config.php` |
| `PHPMailer-master/` | `includes/mail/phpmailer/` |

**Include updates required:**
- `con_enq.php`'s `require 'mail-config.php';` → `require 'includes/mail/mail-config.php';`
- `con_enq.php`'s `require 'PHPMailer-master/PHPMailerAutoload.php';` → `require 'includes/mail/phpmailer/PHPMailerAutoload.php';`
- `enquiry-submit.php`'s same two `require` lines, same change.
- That's it — only 2 files, 4 lines total. `con_enq.php`/`enquiry-submit.php` themselves do not move (see Task 1/2).

**Form action updates required: none.** `con_enq.php` and `enquiry-submit.php` are deliberately staying at their current root-level paths, so none of the 72 + 2 = 74 `<form action="...">` attributes across the 40 pages need to change. This is the single biggest risk-reduction decision in this revised plan compared to the Phase 12 draft.

### CSS — 20 files move, plus one required content change

| Current | Target |
|---|---|
| `css/*.css` (18 files) | `assets/css/legacy/*.css` |
| `assets/css/*.css` (2 files) | `assets/css/modern/*.css` |

**CSS path updates required:**
- `header.php`: 15 `<link rel="stylesheet" href="css/...">` tags → `assets/css/legacy/...`.
- The 14 pages that load `assets/css/style.css` via their own `$extraHeadLinks` → `assets/css/modern/style.css`.
- The 2 pages with their own page-specific stylesheet (`css/shirdi.css`, `css/srivani.css`) → `assets/css/legacy/shirdi.css` / `assets/css/legacy/srivani.css`.
- Any page referencing `css/shared-topbar.css` or a `shared-enquiry-form.css`-style page-specific sheet → same `assets/css/legacy/` prefix.

**Required content change inside the CSS files themselves** (this is the coupling risk found during this review — see Task 5): several stylesheets reference fonts and images using paths **relative to the CSS file's own location** (e.g. `css/font-awesome.css` has `url('../fonts/fontawesome-webfont.woff2')`; `css/style.css` has `url('../images/counter.jpg')`). Moving `css/` one level deeper (into `assets/css/legacy/`) without also fixing these references breaks every font and background-image they point to, *even if* `fonts/`/`images/` move to the correspondingly-consistent new location — because the relative distance changes for both endpoints at once. Recommended fix, done as part of this same batch: convert these `url(...)` references from relative (`../fonts/...`) to root-relative absolute paths (`/assets/fonts/...`), which makes the CSS batch and the fonts/images batches independently movable and independently testable, exactly as Task 6 requires. The alternative — leaving them relative and moving CSS+fonts+images together as one inseparable batch — is documented as a fallback in Task 6 but not the recommended approach.

### JavaScript — 13 files move

| Current | Target |
|---|---|
| `js/*.js` (13 files) | `assets/js/*.js` |

**JS path updates required:**
- `footer.php`: 12 `<script src="js/...">` tags → `assets/js/...`.
- The 9 pages that load `<script src="js/enquiry-forms.js">` individually (outside `footer.php`) → `assets/js/enquiry-forms.js`.

### Images — 133 files (+ subfolders) move

| Current | Target |
|---|---|
| `images/*` (133 files, incl. `logo/`, `choose-icons/`, `hero-icons/`) | `assets/images/*` |

**Image path updates required:**
- `header.php`: 2 `<img src="images/logo/logo_main.png">` references, plus the favicon `<link rel="shortcut icon" href="images/tirupati_package.png">`.
- Every page's own inline `<img src="images/...">` references — exact count will be enumerated by an automated scan at execution time (this plan doesn't assume a precise number without re-verifying it as part of the actual migration script, per this project's established verify-before-trust discipline).
- `header.php`'s Open Graph / Twitter / schema.org default image (`$pageOgImage`, added in Phase 11) currently resolves to `https://www.tirupatibalajibooking.com/images/logo/logo_main.png` — **this is a full absolute URL, not a relative path, and it changes to `.../assets/images/logo/logo_main.png`.** This is the one place where an "internal asset path" change has external, SEO-visible consequences: search engines and social platforms that have already crawled the old image URL will need to recrawl it. Not a page-URL change (Phase 11's canonical/sitemap work is untouched), but flagged explicitly since it's the kind of thing "DO NOT change SEO" instructions in earlier phases were written to catch — recommend confirming this specific consequence is acceptable before Phase 13B executes the images batch.
- CSS `url()` references to `images/` (see CSS section above) — updated in the same pass as the CSS relative→absolute-path fix.

### Fonts — 15 files move

| Current | Target |
|---|---|
| `fonts/*` (15 files) | `assets/fonts/*` |

**Font path updates required:**
- CSS `url()` references in `css/font-awesome.css`, `css/flaticon.css`, and any other file with a `@font-face` block — updated in the same pass as the CSS relative→absolute-path fix described above, not as a separate content edit.
- No PHP or HTML file references `fonts/` directly (fonts are only ever reached via CSS `@font-face`), so this batch has no `.php` file changes at all beyond whatever the CSS batch already made root-relative.

## Task 5 — Risk assessment

| Risk | Why it's high-risk | Mitigation |
|---|---|---|
| **`header.php`/`footer.php` include-path change** | Included by all 40 pages. A single typo breaks the entire site, not one page. | Mechanical find/replace with a scripted before/after occurrence-count assertion (established pattern from Phases 9–11), `php -l` on all 47 files, then a full page-render smoke test before moving to the next batch. |
| **Mail include-path change** | Only 2 files touched, but if wrong, every enquiry form on the site silently stops delivering leads with no visible error to the submitter. | Test with a real (or stubbed, if a mailer-stub mechanism is available at execution time) form submission immediately after this batch, not just `php -l`. |
| **CSS relative-path coupling to fonts/images** | Identified during this review (see Task 1) — moving CSS without correctly handling font/image relative paths breaks visual rendering sitewide, not just missing assets. | Convert relative CSS asset URLs to root-relative absolute paths as part of the CSS batch itself (see Task 4), which removes the coupling rather than just managing it. |
| **Two pre-existing broken asset references** (`srivani-image/landing-page/hero.webp`, `img/nucleo-icon-*.svg`) | Neither points to a real file today. Migration tooling that blindly rewrites "every `url(...)` in this file" needs to handle — or explicitly skip — references that were already broken before Phase 13B touches anything, so a "file not found" doesn't get misattributed to the migration. | Enumerate and rewrite only `url()` references that currently resolve to a real file; log (don't silently rewrite) references that don't, and cross-check the log against `docs/TECHNICAL_DEBT.md`'s existing entries for these two. |
| **`images/` vs `Images/` on macOS vs Linux** | Already flagged in `docs/TECHNICAL_DEBT.md` item 20. A migration script run locally on macOS could silently treat them as one folder (correct) or, depending on tooling, get confused by the alias — worth an explicit check that only `images/` (lowercase) is the source of truth being migrated. | Confirm via `ls -id images Images` (same inode = safe to treat as one folder) immediately before running the images batch, exactly as done during this review. |
| **Open Graph / schema.org absolute image URL change** | Not a page-URL change, but it is a change to a URL search engines/social platforms have already indexed, adjacent to Phase 11's SEO work. | Explicit sign-off requested before the images batch (see Task 4) — consistent with every prior phase's "stop and report" boundary around anything SEO-adjacent. |
| **No version control** | Every step needs its own manual backup; there's no `git revert` safety net. | Full project backup before each batch (not just once at the start), matching the methodology used in every phase since Phase 7. See `docs/DEPLOYMENT_GUIDE.md`'s Rollback Strategy section — recommend making a real git repository before Phase 13B begins (already recommended in `docs/MODERNIZATION_REPORT.md`). |
| **Analytics/tracking tags** | `header.php`/`footer.php` carry Google Analytics, Google Ads, Clarity, Statcounter, Artibot. None of these reference file paths that are moving, so they're low risk in this specific migration — but any mistake while editing `header.php`/`footer.php` for the includes-path batch happens in the same file these tags live in. | Diff the full `header.php`/`footer.php` content before/after each edit, not just the specific lines intended to change, to catch any accidental collateral edit near the tracking blocks. |
| **Sitemap/robots.txt** | Not moving, but robots.txt's `Sitemap:` directive and every sitemap `<loc>` entry reference page URLs that also aren't moving — genuinely low risk in this plan, listed here to confirm it was explicitly considered, not overlooked. | No action needed; verify unchanged after each batch as a quick sanity check. |

## Task 6 — Execution order (Phase 13B)

Each batch is independently deployable and independently testable, per the instruction not to move everything at once. Font/image path coupling (Task 5) is resolved *within* the CSS batch (via the root-relative-path fix) specifically so the batches below don't have hidden inter-dependencies beyond the order listed.

```
Batch 1 — Includes (non-mail)
  Move header.php, footer.php, error-log-config.php, script.php → includes/
  Update: 40 include paths (header) + 40 (footer) + 13 (error-log-config) + 15 (script)
      │
      ▼ Verify (see Task 7 checklist)
      │
Batch 2 — Mail library
  Move mail-config.php, PHPMailer-master/ → includes/mail/
  Update: 2 files × 2 require-paths each = 4 line changes
      │
      ▼ Verify — including an actual test form submission
      │
Batch 3 — CSS (+ the relative→absolute asset-path fix inside the CSS files)
  Move css/ → assets/css/legacy/, assets/css/ → assets/css/modern/
  Rewrite relative url(...) references to root-relative absolute paths
  Update: 15 links in header.php + 14 pages' modern-CSS reference + 2 pages'
          page-specific stylesheet reference
      │
      ▼ Verify — full visual screenshot diff, not just php -l
      │
Batch 4 — Fonts
  Move fonts/ → assets/fonts/
  (No further path edits needed if Batch 3's root-relative fix already landed)
      │
      ▼ Verify — icon fonts render, no missing-glyph boxes
      │
Batch 5 — Images
  Move images/ → assets/images/
  Update: 2 header.php <img> tags + favicon + $pageOgImage default +
          every page's own <img> references + any remaining CSS url(images/...)
      │
      ▼ Verify — visual screenshot diff + confirm OG/Twitter image URL change
        is acceptable (explicit sign-off, per Task 5)
      │
Batch 6 — JavaScript
  Move js/ → assets/js/
  Update: 12 <script src> tags in footer.php + 9 pages' individual
          enquiry-forms.js reference
      │
      ▼ Verify — console-error sweep + functional test of forms/sliders/
        datepicker/navigation (JS-dependent behavior is the widest blast
        radius of any single batch, hence it's last, once everything else
        is already proven stable)
```

Fonts (Batch 4) is sequenced right after CSS specifically because it's the lowest-risk, fastest-to-verify batch (no PHP files touched at all) and confirms the CSS batch's root-relative-path fix actually worked before moving on to the higher-risk Images and JavaScript batches.

## Task 7 — Regression checklist (run after every batch, not just at the end)

- [ ] `php -l` on every `.php` file in the project (not just the ones touched this batch — a shared-file mistake can affect files that weren't directly edited)
- [ ] Homepage (`index.php`) loads and renders correctly
- [ ] A representative sample of other pages loads correctly: at least one from each template family (a "legacy" page, a "modern" hero-form page, and the 3 pages with page-specific inline scripts — shirdi, srivani-vip-break-darshan-from-chennai, srivani-vip-break-darshan-tour-package-from-chennai)
- [ ] Both form types submit correctly: the legacy booking widget and the modern hero-form/enquiry-form (using a stubbed/intercepted request if a real send isn't desired for the test — see `docs/DEPLOYMENT_GUIDE.md`)
- [ ] Desktop navigation (dropdown menus) works
- [ ] Mobile navigation (slide-out menu) works
- [ ] Mobile viewport render check (not just desktop) on the same representative page sample
- [ ] All images render (no broken-image icons) on the representative page sample
- [ ] CSS renders correctly — no unstyled/broken-layout flash, sliders/carousels visually correct
- [ ] JavaScript-dependent features work: sticky header, return-to-top, `select2`/`nice-select` dropdowns, `owl.carousel` sliders, the `.datepicker` popup, Magnific Popup video lightbox
- [ ] Playwright before/after screenshot diff on the representative page sample, both viewports (desktop + mobile) — matching the methodology used in every phase since Phase 8
- [ ] Zero new browser console errors or uncaught page errors (the pre-existing `ipapi.co` CORS warning on localhost is expected and not a regression — see `docs/ARCHITECTURE.md`)
- [ ] `robots.txt` and `sitemap.xml` still return their expected, unchanged content
- [ ] Analytics/tracking tags (GA, Google Ads, Clarity, Statcounter, Artibot, reCAPTCHA) still present in the rendered `<head>`/footer — not broken by an adjacent edit to `header.php`/`footer.php`

## Rollback strategy

Consistent with `docs/DEPLOYMENT_GUIDE.md`: because there is no version control, take a full project backup **before each batch**, not just once before the whole migration. If a batch's verification checklist fails, restore only the files that batch touched from that batch's specific backup, re-run the checklist, and do not proceed to the next batch until it passes cleanly. Keep every batch's backup until the *entire* migration (all 6 batches) is confirmed stable in production, not just locally — a problem surfaced by production-only conditions (real domain, real HTTPS, real hosting file permissions) should roll back to the same granularity.

## Recommendation before Phase 13B

1. **Get sign-off specifically on the Open Graph/schema image URL change** (Task 5/Batch 5) before Phase 13B starts — it's the one part of this plan that's SEO-adjacent, and every prior phase has treated that category as requiring explicit approval rather than assumed consent.
2. **Fix the two newly-found pre-existing broken asset references** (`srivani-image/landing-page/hero.webp`, `img/nucleo-icon-*.svg`) as their own small, separate, low-risk task — either just before or just after the restructuring, but tracked in `docs/TECHNICAL_DEBT.md` regardless so they aren't lost.
3. **Strongly consider initializing git before Phase 13B begins** — this is the highest file-touch-count phase of the entire modernization effort so far (roughly 200 files moving, ~100+ path references updating), and it's exactly the kind of work version control exists for.
4. **Execute batches in the order above, one at a time, with the full regression checklist after each** — do not compress multiple batches into a single upload even if they seem related.

Stopping here. No files have been moved, renamed, or had their paths changed. Waiting for approval before Phase 13B.
