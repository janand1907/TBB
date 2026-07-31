<?php
/**
 * Shared production error-logging config. Included on the 13 pages that
 * call error_reporting(E_ALL) — those pages log real PHP errors/warnings
 * to logs/php-errors.log instead of displaying them to visitors. The
 * other pages in the project have no error_reporting() call at all and
 * fall back to the server's default php.ini setting (unverified).
 *
 * History: this file was originally written while those 13 pages still
 * called error_reporting(0), under which log_errors/error_log have
 * nothing to act on (verified empirically: error_reporting(0) suppresses
 * PHP's entire error pipeline, not just display — a triggered warning
 * produced no log entry until reporting was raised to E_ALL). The 13
 * including pages have since been switched to error_reporting(E_ALL), so
 * this file is now active on them, not a no-op. See MAINTENANCE_GUIDE.md
 * for how to add this to another page and TECHNICAL_DEBT.md for the
 * remaining inconsistency across the other pages.
 *
 * PENDING — confirm before relying on this in production: the log path
 * below is a sensible default for this project's cPanel hosting (a
 * logs/ folder inside the docroot, blocked from direct web access via
 * logs/.htaccess), but the real production log location/permissions is
 * a hosting decision — confirm the path is writable by the PHP process
 * on the live server.
 */

const TBB_ERROR_LOG_PATH = __DIR__ . '/logs/php-errors.log'; // PENDING: confirm for production

ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', TBB_ERROR_LOG_PATH);
