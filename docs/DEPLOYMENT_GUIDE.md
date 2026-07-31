# Deployment Guide

## Local development

See `README.md` → Local Setup for the one-line dev server command. A few things worth repeating here because they matter specifically when you're about to deploy:

- The local dev server (`php -S`) speaks HTTP/1.1 only and does not process `.htaccess` — it cannot verify the production HTTPS/`www` redirect, compression, or (if added later per `docs/TECHNICAL_DEBT.md`) caching headers. Those need to be checked against the live domain, not locally.
- The project became a **git repository in Phase 13B**. Every phase of work before that (through Phase 13A) had no version control and compensated by taking a full manual backup of every file about to be touched before editing. Now that git exists, use it as the primary rollback mechanism (commit before and after any risky change, exactly as Phase 13B's six migration batches each got their own commit) — but keep taking a manual backup too before any production deployment, since git protects the local working copy, not whatever's actually live on the hosting account until you've deployed and confirmed it.

## Production hosting

- cPanel-based shared hosting (confirmed via the auto-generated PHP-version handler block in `.htaccess`).
- Production PHP version: **8.1** (`ea-php81`).
- Deployment is manual file upload (FTP/SFTP or cPanel's File Manager) — there is no CI/CD pipeline, no `git push`-to-deploy, no build step to run first. What you upload is exactly what serves.

## Deployment checklist

Before uploading anything:

1. **Run `php -l` on every `.php` file you changed.** A syntax error in a file that's `include`d by every page (`includes/header.php`, `includes/footer.php`, `includes/mail/mail-config.php`) takes the entire site down, not just one page.
2. **Test locally first** using the dev server, including the specific flow you changed (a form submission, a new page, a nav change on both desktop and mobile widths).
3. **Check for console errors** in the browser dev tools on at least the page you changed and one or two representative other pages, to catch anything a shared file (`includes/header.php`, `includes/footer.php`, `xpedia.js`) might have broken elsewhere.
4. **If you touched a form**, verify the specific validation path changed still matches between client-side JS and server-side PHP (see `MAINTENANCE_GUIDE.md` → Edit forms) — a mismatch here isn't a crash, it's a silent UX bug (e.g. client accepts something the server then rejects with an ugly plain-text response).
5. **If you touched `includes/mail/mail-config.php` or either endpoint**, do a real test submission (accepting that it will send a real email) or verify the change doesn't affect the actual send path before trusting it.

## Production upload

1. Take a full backup of the current production file set (see "Rollback strategy" below — you need this *before* uploading, not after something goes wrong).
2. Upload only the files that changed, preserving the exact same relative paths (the project has no build output — the files you edited locally are the files that go to production, verbatim).
3. Immediately after upload, load the specific page(s) you changed on the live domain and confirm they render and behave as expected — don't assume a successful upload means a successful deploy.
4. If you changed anything in `includes/header.php`/`includes/footer.php`/`includes/mail/mail-config.php`/`includes/error-log-config.php` (i.e. anything shared across pages), spot-check a handful of *other*, unrelated pages too, since a shared-file change can have effects far from where you were focused.

## Cache clearing

- **Browser cache**: this project doesn't currently set any `Cache-Control`/`Expires` headers (see `docs/TECHNICAL_DEBT.md` item 16), so there's no server-side cache to clear for HTML/CSS/JS today. If that changes in a future performance phase, this section will need updating with the specific header values and how to bust them (e.g. a version query string on asset URLs).
- **Hosting-level cache**: if the cPanel account has any caching layer enabled (some hosts bundle one, e.g. LiteSpeed Cache), it needs to be purged after a deploy — check the hosting control panel; this isn't something the codebase itself controls.
- **CDN**: none is currently in front of the site (see `docs/CONFIGURATION.md`/`DEPENDENCIES.md`) — if one is added later, its cache purge step belongs here too.
- **Google's cache of your pages** (search results, social share previews) is out of your control and not something a deploy needs to wait for.

## Rollback strategy

For anything not yet deployed, git rollback (see item 4 below) is the primary mechanism as of Phase 13B. For anything already live on production, "rollback" still means "restore the backup you took before deploying," since git only protects your local working copy:

1. Keep the pre-deploy backup (see step 1 of Production Upload) until you've confirmed the new deploy is stable — don't overwrite or discard it immediately.
2. If something breaks after a deploy, re-upload the backed-up versions of exactly the files you changed, rather than restoring the entire site — this limits the blast radius of the rollback itself and avoids accidentally reverting unrelated concurrent work.
3. After rolling back, re-verify the same checklist items above (syntax, console errors, form behavior) against the restored files before considering the incident closed.
4. **Use git for local rollback.** `git log --oneline` shows every batch/change as its own commit (a convention established in Phase 13B — keep it going). To roll back a specific change: `git revert <commit>` (safe, adds a new commit undoing it, preserves history) rather than `git reset --hard` (rewrites history — avoid unless you're certain nothing since that commit needs to be kept). Note that reverting locally doesn't undo anything already deployed — you still need to re-upload the reverted files per the Production Upload steps above.
