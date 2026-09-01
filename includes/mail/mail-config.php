<?php
/**
 * Shared mail configuration and helpers for the enquiry form handlers
 * (con_enq.php, enquiry-submit.php). Requires PHPMailerAutoload.php to
 * already be loaded by the including script before send_enquiry_mail() is
 * called.
 *
 * Configuration is deliberately kept outside version-controlled web files.
 * Values are read, in order, from PHP environment variables or an external
 * PHP configuration file. On Hostinger's usual layout, that file is:
 *   /home/u123456789/domains/example.com/tbb-mail-config.php
 * (one directory above public_html). See docs/HOSTINGER_DEPLOYMENT.md.
 */

/** @var array<string, mixed> $tbbMailPrivateConfig */
$tbbMailPrivateConfig = [];

// TBB_MAIL_CONFIG_PATH is useful on hosts with a custom private-config path.
$tbbMailConfigPath = getenv('TBB_MAIL_CONFIG_PATH');
if (!is_string($tbbMailConfigPath) || $tbbMailConfigPath === '') {
    // __DIR__ is public_html/includes/mail; this resolves one level above
    // public_html when the site is deployed in the domain's document root.
    $tbbMailConfigPath = dirname(__DIR__, 3) . '/tbb-mail-config.php';
}

if (is_file($tbbMailConfigPath)) {
    $loadedMailConfig = require $tbbMailConfigPath;
    if (is_array($loadedMailConfig)) {
        $tbbMailPrivateConfig = $loadedMailConfig;
    }
}

/**
 * Gets a mail setting from an environment variable, then the private config.
 * Empty values are treated as missing so a partly configured mailer cannot
 * accidentally attempt a send with invalid credentials.
 */
function mail_config_value(string $key, string $default = ''): string
{
    global $tbbMailPrivateConfig;

    $environmentValue = getenv($key);
    if (is_string($environmentValue) && trim($environmentValue) !== '') {
        return trim($environmentValue);
    }

    $fileValue = $tbbMailPrivateConfig[$key] ?? null;
    if (is_string($fileValue) && trim($fileValue) !== '') {
        return trim($fileValue);
    }

    return $default;
}

define('MAIL_SMTP_HOST', mail_config_value('MAIL_SMTP_HOST'));
define('MAIL_SMTP_PORT', (int) mail_config_value('MAIL_SMTP_PORT', '465'));
define('MAIL_SMTP_SECURE', mail_config_value('MAIL_SMTP_SECURE', 'ssl'));
define('MAIL_SMTP_AUTH', filter_var(mail_config_value('MAIL_SMTP_AUTH', 'true'), FILTER_VALIDATE_BOOLEAN));
define('MAIL_SMTP_USERNAME', mail_config_value('MAIL_SMTP_USERNAME'));
define('MAIL_SMTP_PASSWORD', mail_config_value('MAIL_SMTP_PASSWORD'));
define('MAIL_FROM_ADDRESS', mail_config_value('MAIL_FROM_ADDRESS'));
define('MAIL_FROM_NAME', mail_config_value('MAIL_FROM_NAME', 'Divine Balaji Travels Enquiry'));
define('MAIL_TO_ADDRESS', mail_config_value('MAIL_TO_ADDRESS'));

function mail_is_configured(): bool
{
    return MAIL_SMTP_HOST !== ''
        && MAIL_SMTP_PORT > 0
        && (!MAIL_SMTP_AUTH || (MAIL_SMTP_USERNAME !== '' && MAIL_SMTP_PASSWORD !== ''))
        && filter_var(MAIL_FROM_ADDRESS, FILTER_VALIDATE_EMAIL) !== false
        && filter_var(MAIL_TO_ADDRESS, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Reads a $_POST value as a plain string. A malformed/spoofed submission
 * (e.g. name[]=a&name[]=b) makes PHP populate $_POST[...] with an array
 * instead, and trim() requires a string - without this guard such a
 * request throws an uncaught TypeError (fatal 500) instead of being
 * rejected as ordinary bad input.
 */
function post_string(string $key): string
{
    $value = $_POST[$key] ?? '';
    return is_string($value) ? $value : '';
}

function escape_html(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Validates a mobile number against the given digit-count bounds.
 * Returns an error message, or null if valid.
 */
function validate_mobile(string $mobile, int $minLen, int $maxLen): ?string
{
    $digits = preg_replace('/\D+/', '', $mobile);
    if ($digits === '') {
        return 'WhatsApp number is required.';
    }
    if (strlen($digits) < $minLen || strlen($digits) > $maxLen) {
        return 'Enter a valid WhatsApp number.';
    }
    return null;
}

/**
 * Validates the captcha answer against the session's stored answer.
 * An empty $sessionAnswer means no captcha was ever issued for this
 * session (e.g. a direct POST with no prior page load / no cookie) -
 * treated as a failed check rather than skipped, so a request with no
 * session can't bypass the captcha entirely.
 * Returns an error message, or null if valid.
 */
function validate_captcha(string $sessionAnswer, string $userAnswer): ?string
{
    if ($userAnswer === '') {
        return 'Answer is required.';
    }
    if ($sessionAnswer === '' || $sessionAnswer != $userAnswer) {
        return 'Answer does not match.';
    }
    return null;
}

/**
 * Builds the shared HTML email body: a simple label/value table.
 * $rows is an ordered [label => value] array; values are inserted as-is,
 * so callers must pass already-escaped (and where needed, nl2br'd) HTML.
 */
function build_enquiry_email_html(string $title, array $rows): string
{
    $rowsHtml = '';
    foreach ($rows as $label => $value) {
        $rowsHtml .= "\t<tr>\n\t\t<th>" . $label . "</th>\n\t\t<td>:</td>\n\t\t<td>" . $value . "</td>\n\t</tr>\n";
    }

    return '<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>' . $title . '</title>
</head>
<body>
<table>
' . $rowsHtml . '</table>
</body>
</html>';
}

/**
 * Sends an enquiry email using the shared SMTP configuration.
 * Returns true on success, false on failure (mirrors PHPMailer::send()).
 */
function send_enquiry_mail(string $subject, string $htmlBody, ?string $replyToEmail = null): bool
{
    if (!mail_is_configured()) {
        error_log('Enquiry mail is not configured. Set the required MAIL_* settings.');
        return false;
    }

    $mail = new PHPMailer;
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = MAIL_SMTP_HOST;
    $mail->Port = MAIL_SMTP_PORT;
    $mail->SMTPSecure = MAIL_SMTP_SECURE;
    $mail->SMTPAuth = MAIL_SMTP_AUTH;
    $mail->Username = MAIL_SMTP_USERNAME;
    $mail->Password = MAIL_SMTP_PASSWORD;

    $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO_ADDRESS);

    if ($replyToEmail !== null && $replyToEmail !== '' && filter_var($replyToEmail, FILTER_VALIDATE_EMAIL)) {
        $mail->AddReplyTo($replyToEmail);
    }

    $mail->Subject = $subject;
    $mail->Body = $htmlBody;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $sent = $mail->send();
    if (!$sent) {
        // Keep the visitor-facing response generic, but record the provider's
        // diagnostic in the server log for troubleshooting.
        error_log('Enquiry mail delivery failed: ' . $mail->ErrorInfo);
    }

    return $sent;
}
