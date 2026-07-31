# Tirupati Balaji Booking (tirupatibalajibooking.com)

A PHP + jQuery marketing/lead-generation website for **Divine Balaji Travels**, a private travel company organizing Tirupati (and Shirdi) pilgrimage tour packages. The site's job is simple: get a visitor to one of 40 informational pages, and get them to submit an enquiry form so a human can follow up by phone/WhatsApp/email.

There is no database, no CMS, no user accounts, and no admin panel. Every page is a static-ish PHP file; the only "dynamic" behavior is a math-question captcha and sending an email when someone submits a form.

## Project overview

- **What it is**: 40 content pages (temple guides, tour packages, NRI/Srivani darshan packages, policy pages) sharing one navigation/footer, plus two form-handling endpoints that email enquiries to the business.
- **What it isn't**: no build step, no package manager, no framework, no database. Everything is hand-authored PHP/HTML/CSS/JS, deployed by uploading files directly (see `DEPLOYMENT_GUIDE.md`).
- **Who this is for**: a developer picking up maintenance work on this project — fixing a page, updating a phone number, adding a new package page, or investigating a bug.

## Requirements

- **PHP 8.1** — confirmed as the production version via the cPanel-generated handler in `.htaccess` (`AddHandler application/x-httpd-ea-php81`). Use 8.1 locally too, to avoid surprises; nothing in the codebase requires a newer version, but nothing has been tested against one either.
- No Composer, npm, or any package manager is used. `PHPMailer-master/` is a vendored copy of PHPMailer 5.2.22, committed directly into the project.
- No database.

## Local setup

1. Clone/copy the project to a local folder.
2. From the project root, start PHP's built-in development server:
   ```
   php -S 127.0.0.1:8000 -t .
   ```
3. Open `http://127.0.0.1:8000/index.php` in a browser.

That's it — there's no install/build step. Every `.css`/`.js`/image asset is a plain static file already in the repo.

### Things that won't work locally

- **Outgoing email.** Submitting a form locally will attempt a real SMTP connection to Gmail using the credentials in `mail-config.php`. If you don't want to actually send an email while testing, don't complete a full valid form submission — client-side validation (see `ARCHITECTURE.md`) blocks incomplete submissions before they reach the server, which is usually enough to test the UI without triggering a send.
- **HTTP/2.** PHP's built-in dev server only ever speaks HTTP/1.1. Don't use it to test anything protocol-level (see `DEPLOYMENT_GUIDE.md`).
- **The `.htaccess` HTTPS/www redirect.** PHP's built-in server doesn't process `.htaccess` at all, so the forced-HTTPS/forced-`www` behavior that's live in production won't happen locally.
- **Geo-IP phone country detection.** The `.hero-form`/`.enquiry-form` fields call out to `https://ipapi.co/json/` for a default country code. From `127.0.0.1` this reliably fails with a CORS error in the console — this is expected, pre-existing, and doesn't happen on the real domain.

## Important folders

| Path | What's in it |
|---|---|
| `*.php` (project root) | All 40 pages, plus `header.php`/`footer.php` and the mail-handling files — everything currently lives flat in the root. See `RESTRUCTURE_PLAN.md` for the proposed future layout. |
| `css/` | The "legacy" template's stylesheets — loaded on every page |
| `assets/css/` | A second, newer stylesheet used only by pages with the modern hero-form layout |
| `js/` | All JavaScript — vendor libraries plus 3 project-authored files (`xpedia.js`, `enquiry-forms.js`, `legacy-enquiry-forms.js`) |
| `images/` | Site images (note: `Images/` is the *same* folder as `images/` on macOS but will be a *different*, likely-empty folder on the real Linux production server — see `TECHNICAL_DEBT.md`) |
| `PHPMailer-master/` | Vendored third-party mail library |
| `docs/` | This documentation set |
| `logs/` | PHP error log destination (only used by the 13 pages that opt into it — see `MAINTENANCE_GUIDE.md`) |

## Where to go next

- **`ARCHITECTURE.md`** — how a page loads, how the mail system works, how shared CSS/JS is structured.
- **`MAINTENANCE_GUIDE.md`** — step-by-step instructions for the most common changes (add a page, change the phone number, update the sitemap, etc.).
- **`DEPLOYMENT_GUIDE.md`** — how this actually gets uploaded to production, and how to roll back.
- **`CONFIGURATION.md`** — every configurable value (SMTP, phone numbers, tracking IDs) and where it lives.
- **`DEPENDENCIES.md`** — every third-party library/service in use.
- **`TECHNICAL_DEBT.md`** — everything that's known to be imperfect but hasn't been fixed yet, with priority and impact.
- **`MODERNIZATION_REPORT.md`** — the full history of what's been done to this codebase across 12 phases of work.
