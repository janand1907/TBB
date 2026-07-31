# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this project is

A PHP + jQuery marketing/lead-generation website for **Divine Balaji Travels** (tirupatibalajibooking.com), a travel company selling Tirupati/Shirdi pilgrimage tour packages. 40 content pages share a common header/footer; the only dynamic behavior is a session-based math-question captcha and emailing enquiry-form submissions via SMTP. No database, no CMS, no user accounts, no build step, no package manager (Composer/npm). PHPMailer 5.2.22 is vendored directly into the repo.

Production target: standard Hostinger/cPanel shared hosting, PHP 8.1. Deployment is manual file upload — no CI/CD, no `git push`-to-deploy. What you upload is exactly what serves, so never assume a build step will fix or transform anything.

## Commands

```bash
# Local dev server (from project root)
php -S 127.0.0.1:8000 -t .
# then open http://127.0.0.1:8000/index.php

# Syntax-check a file before considering any change done
php -l path/to/file.php

# Project-wide syntax sweep
find . -name '*.php' -not -path './.git/*' -exec php -l {} \;
```

There are no test suites, linters, or formatters configured. Verification is: `php -l`, manual/browser testing of the specific flow changed (see "Verification expectations" below), and a `grep`/`find` sweep to confirm no other reference was missed.

Things that don't work against the local dev server: outgoing email still really attempts SMTP to Gmail (don't complete a full valid form submission unless you intend to send a real email); `.htaccess` (HTTPS/www redirect, compression/caching headers) is never processed by `php -S`; the geo-IP phone-country lookup (`ipapi.co`) fails from `127.0.0.1` — expected, not a bug.

## Architecture

**Page lifecycle** — every page is: set PHP variables → `include './includes/header.php'` → page HTML → `include './includes/footer.php'`. No templating engine; `header.php`/`footer.php` read whatever variables the including page set (`$pageTitle`, `$pageDescription`, `$pageCanonical`, `$activeMenu`, `$extraHeadLinks`, `$pageOgImage`, `$includeDefaultSchema`) via normal PHP include-scope sharing.

**What lives where** (restructured in Phase 13B — see `docs/RESTRUCTURE_PLAN.md` for the full migration record):
- Project root: all 40 `.php` pages, plus `con_enq.php` and `enquiry-submit.php` (form POST targets), `robots.txt`, `sitemap.xml`, `.htaccess`. These stay at the root deliberately — anything a browser/crawler/form directly requests is a public URL and must not move.
- `includes/` — `header.php`, `footer.php`, `error-log-config.php`, `script.php` (Clarity snippet). Never directly requested, only `include`d.
- `includes/mail/` — `mail-config.php` (SMTP config + validation/send helpers) and `phpmailer/` (vendored PHPMailer).
- `assets/css/legacy/` — loaded by every page (unconditional, in `header.php`). `assets/css/modern/` — additional stylesheet for the ~9-14 pages using the newer hero-form/enquiry-form layout. These are two large, non-interchangeable stylesheets.
- `assets/js/` — all vendor + project JS, loaded from `footer.php` (site-wide) except `enquiry-forms.js`, which is loaded per-page only by pages with the modern form.
- `assets/images/`, `assets/fonts/{legacy,modern}/`, `assets/srivani-image/` (pre-existing, separate from the images/fonts move).
- CSS references fonts/images via **root-relative absolute paths** (`/assets/fonts/legacy/Flaticon.woff`), not paths relative to the CSS file's location — intentional, so any one of CSS/fonts/images can move independently in the future without breaking the others.

**Mail architecture** — two independent form-POST endpoints, both at the project root, both `require 'includes/mail/mail-config.php'`:
- `con_enq.php` — general-purpose handler for the "legacy" booking widget (24 pages), the modern `.hero-form`/`.enquiry-form`, and a `.mhc-form` mini-form, distinguished by which POST fields are present. Responds with JSON for AJAX callers (`ajax=1` field / `X-Requested-With` / `Accept: application/json`) or a 303 redirect to `thanks.php` for a plain form POST.
- `enquiry-submit.php` — simpler, JSON-only, used by exactly one page (`srivani-vip-break-darshan-from-chennai.php`), has its own honeypot field and different validation bounds.
- Both call into `mail-config.php`'s shared `validate_mobile()`, `validate_captcha()`, `build_enquiry_email_html()`, `send_enquiry_mail()` — each endpoint passes its own bounds/field set, so the two must stay behaviorally distinct even though the plumbing is shared.
- The captcha is a session-stored math question (`$_SESSION['answer']`, generated in `header.php` on every page load) — **not** reCAPTCHA. The reCAPTCHA script loads site-wide but its verification call is commented out and does nothing.

**Two parallel nav menus**: `includes/header.php` contains a desktop dropdown menu and a separate mobile slide-out menu as two independently hand-written `<ul>` structures. Editing one without the other is the most common way to introduce a silent divergence — always update both.

**No single source of truth for phone number, email addresses, or business name** — see `docs/CONFIGURATION.md` for the full inventory of every variant and where each lives. Before changing a phone number or email, grep for every known format (see `docs/MAINTENANCE_GUIDE.md` → "Change the phone number") rather than assuming one occurrence covers it.

## Verification expectations (established pattern across all prior phases of work on this repo)

- `php -l` on every changed `.php` file. A syntax error in `includes/header.php`, `includes/footer.php`, or `includes/mail/mail-config.php` takes down every page, not just one.
- Any shared-file change (`includes/header.php`, `includes/footer.php`, `includes/mail/mail-config.php`) gets spot-checked across a few unrelated pages too, not just the page you were focused on.
- Form/validation changes: keep client-side (`assets/js/legacy-enquiry-forms.js`, `assets/js/enquiry-forms.js`, or a page's own inline script) and server-side (`includes/mail/mail-config.php`) rules in sync — they're written to match each other's wording exactly.
- CSS/JS changes: verify in an actual browser (render + console-error check), not just `php -l` — this is a hand-authored jQuery-plugin-heavy site (Select2, jQuery UI datepicker, Owl Carousel, bxSlider) where a broken plugin init or a `!important` cascade fight fails silently in the DOM but not in any linter.
- Prefer root-relative paths for new asset references, matching the existing convention.

## Working style established on this project (read before making structural changes)

This codebase has been modernized through a long series of narrowly-scoped, sequential phases (see `docs/CHANGELOG.md` and `docs/MODERNIZATION_REPORT.md` for the full history), each one:
- Scoped to one concern (phone numbers, mail consolidation, CSS, JS, forms, SEO, docs, folder restructuring), not mixed together.
- Preceded by an exhaustive audit (e.g., proving all 147 phone-number occurrences fit exactly two substring patterns before doing a global replace) rather than a spot-fix.
- Followed by an explicit "found but not fixed, here's why" list for anything discovered outside the current phase's scope — see `docs/TECHNICAL_DEBT.md` for the running register. Don't silently fix things you notice while working on something else; document them there instead unless asked to fix them.
- Deletions require exhaustive proof of zero references (HTML, execution path, event binding, plugin dependency) before anything is removed as "dead."
- The project became a git repository in Phase 13B — commit at meaningful checkpoints (e.g., one per logical batch of changes) rather than one giant commit, matching the existing history's granularity.

Check `docs/TECHNICAL_DEBT.md` before touching phone numbers, email addresses, business-name strings, the `.captcha-input` CSS rule, or SMTP credentials — these are known, deliberately-undone issues with documented reasons, not oversights.

## Documentation

Full docs live in `docs/`: `README.md` (setup), `ARCHITECTURE.md`, `MAINTENANCE_GUIDE.md` (step-by-step for common changes), `CONFIGURATION.md` (every config value and its locations), `DEPENDENCIES.md`, `DEPLOYMENT_GUIDE.md`, `TECHNICAL_DEBT.md`, `CHANGELOG.md`, `MODERNIZATION_REPORT.md`, `RESTRUCTURE_PLAN.md`, `PROJECT_INVENTORY.md`. Read the relevant one before making non-trivial changes — most "why is this like this" questions are already answered there.
