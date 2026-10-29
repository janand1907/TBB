# Private SEO Control Panel: manual setup

Local route: `/admin/seo/`. Production route after owner deployment: `https://www.divinebalajitravels.com/admin/seo/`.

This panel uses the existing blog admin login and database. Public pages, Google Ads, GA4, consent and enquiry forms are untouched. PHP 8.1+ with PDO MySQL, cURL, OpenSSL and mbstring is required. No worker or SSH is required on Hostinger.

## Before uploading

1. Back up the current blog database in Hostinger phpMyAdmin. Keep a copy of the existing `admin/bootstrap.php`, `admin/blog-lib.php` and `admin/admin-ui.php` files. Back up the private configuration and token key separately if they already exist.
2. In phpMyAdmin, import `database/seo-001.sql` into the **same** database used by the blog admin. This only creates `seo_*` tables and foreign keys from those tables to the existing `users` and SEO keyword rows. It does not alter blog tables. Do not upload this SQL file into `public_html`.
3. Upload the website files listed below through Hostinger File Manager. Maintain the folder hierarchy. Do not upload the test fixture database, local reports, or the SQLite schema into `public_html`.
4. Sign in as an existing administrator and open `/admin/seo/`. Check that the page is private, the Google connection shows “Not connected,” and no data is presented as a real API measurement yet.

## Private Google configuration

Create these **outside `public_html`**, next to the existing private blog configuration (usually the account home directory):

- `tbb-seo-config.php`: a PHP file returning `['client_id' => 'YOUR_WEB_CLIENT_ID', 'client_secret' => 'YOUR_WEB_CLIENT_SECRET']`. Do not commit or place this file in a public directory.
- `tbb-seo-key`: a file containing a base64-encoded, cryptographically random 32-byte key on one line. Generate locally with `openssl rand -base64 32`, then upload privately. Keep a secure backup. Losing or changing this key makes saved OAuth tokens unreadable; reconnecting will then be required.

Create a Google Cloud project controlled by the owner, enable **Search Console API**, configure the OAuth consent screen, and create an **OAuth 2.0 Web application** client. Add this exact authorized redirect URI:

`https://www.divinebalajitravels.com/admin/seo/google-callback.php`

The account completing OAuth must already have Search Console access to the domain property or the matching `https://www.divinebalajitravels.com/` URL-prefix property. The panel discovers the property through the Sites API and requests only `https://www.googleapis.com/auth/webmasters.readonly`. An administrator clicks **Connect Google** and completes Google’s own authorization page. Staff never enter a Google password or one-time code in the website.

The token is encrypted with AES-256-GCM before database storage. The key is a separate private file. Google API access cannot be verified until the owner provides real OAuth configuration and authorizes the account. Keep the private client file and key permissions restricted to the hosting account where possible.

## Historical report import

Create a directory named `tbb-seo-import/2026-10-24/` outside `public_html`, next to `tbb-seo-config.php`. Upload **copies** of these existing private CSV files into matching subfolders:

- `keyword-master-tracker.csv`
- `keyword-to-page-map.csv`
- `daily-ranking-history.csv`
- `weekly-seo-performance-summary.csv`
- `seo-action-log.csv`
- `gsc-export/Queries.csv`
- `gsc-export/Pages.csv`
- `gsc-export/Countries.csv`
- `gsc-export/Devices.csv`

The original ZIP, Excel workbook and private report sources remain in the reporting folder and need no public upload. In the dashboard, open **Google Connection** to review file counts and then use **Import available reports** once. Repeating the import of unchanged files is safe; matching file hashes are skipped. The import recognizes 556 keywords, 25 primary keywords, 25 keyword-to-page mappings, 52 genuine sitewide daily chart rows, 538 **period-level** query rows, 57 period-level page rows, nine weekly summaries and seven action-log tasks in the October 24 source. The master rows are retained as source snapshots, including missing values and notes. It does **not** turn the period-level query export into daily or India-only ranks. Imported tasks preserve their source status and free-text team name; they stay unassigned until an admin maps them to an actual active admin user. The source files are never overwritten.

## Refresh behavior

An administrator or SEO Manager clicks **REFRESH GOOGLE DATA**. The panel asks Search Console for the latest available finalized Pacific Time date, then imports one grouping per request in pages of at most 1,000 rows: property, query, page, query + page, country and device. If more work remains, click **CONTINUE GOOGLE REFRESH** after the 30-second cooldown. No worker or scheduled task is needed. Rows are keyed by property, date, search type, dimensions and source to prevent duplicate history. Previous API data remains in place if a request fails. Search Console can omit anonymized queries and has row limits; “omitted rows” is therefore unknown, never reported as zero.

Average position is a Search Console metric, not a current exact SERP rank. Movement appears only for adjacent daily observations of the exact query with the same target country and device scope, after a full daily import. Missing data stays “NO GSC DATA” or “NO COMPARABLE DATA.”
Country labels such as India, UK, USA, Canada, Australia, Singapore, Malaysia, Sri Lanka and UAE map to Search Console's three-letter country codes. A broad “International” target has no single comparable country scope and therefore stays without a country-specific ranking until the owner chooses a particular country.

**CLEAR DASHBOARD CACHE** removes only short-lived overview aggregation entries. It does not delete observations, keywords, tasks, imports, tokens or blog data.

## Access and security

Existing `administrator`, `seo_manager`, `editor` and `author` roles are reused. Admins manage Google connection and cache; SEO Managers refresh, edit keywords and assign tasks; Editors see reports and their assigned tasks; Authors see only their assigned tasks. All state-changing actions use the existing CSRF token. Every SEO request reloads the current active user/role from the database, including exports. The dashboard requires HTTPS in production, sets `Cache-Control: no-store` and `X-Robots-Tag: noindex`, and records important actions in the existing audit log. CSV exports neutralize spreadsheet formulas.

The administrator can choose the dashboard's default reporting period in Google Connection settings. This preference changes only the starting view; staff can still select other periods. It does not alter raw observations.

## Production smoke test

1. Anonymous `/admin/seo/` redirects to admin login. Anonymous exports are blocked.
2. Administrator can see the panel, import preview, connect button and cache action. SEO Manager cannot connect or clear cache. Editor cannot export or refresh. Author sees only assigned tasks.
3. Bad CSRF tokens return 419. Confirm successful historical import counts and no duplicated rows on retry.
4. Authorize Google and confirm the discovered property is correct. Complete a full refresh by clicking Continue until status is success. Check actual date, processed/added/updated counts, and a protected CSV export.
5. Check the existing blog admin and a public package page for regressions. No production enquiry form submission is needed.

## Rollback

If necessary, restore the three backed-up existing admin files and remove only the new `/admin/seo/` files. Restore the pre-migration database backup if the owner wants the newly created `seo_*` tables removed; do not drop them without a backup because that would destroy new SEO history and tasks. Keep the private key available for any future restoration of the OAuth connection. No public website files or blog tables are modified by the SEO migration.

## Exact manual upload map

| Local file in `TBB/` | Hostinger destination |
| --- | --- |
| `admin/bootstrap.php` | `public_html/admin/bootstrap.php` |
| `admin/blog-lib.php` | `public_html/admin/blog-lib.php` |
| `admin/admin-ui.php` | `public_html/admin/admin-ui.php` |
| `admin/seo/core.php` | `public_html/admin/seo/core.php` |
| `admin/seo/google.php` | `public_html/admin/seo/google.php` |
| `admin/seo/import.php` | `public_html/admin/seo/import.php` |
| `admin/seo/index.php` | `public_html/admin/seo/index.php` |
| `admin/seo/action.php` | `public_html/admin/seo/action.php` |
| `admin/seo/google-callback.php` | `public_html/admin/seo/google-callback.php` |
| `admin/seo/export.php` | `public_html/admin/seo/export.php` |
| `admin/seo/seo.css` | `public_html/admin/seo/seo.css` |

`database/seo-001.sql` is imported through phpMyAdmin; it is not a public upload. Private OAuth files and report CSV copies go outside `public_html`. `database/seo-001-sqlite.sql` and `tests/seo-control-panel.php` stay local.
