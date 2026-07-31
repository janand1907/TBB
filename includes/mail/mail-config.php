<?php
/**
 * Shared mail configuration and helpers for the enquiry form handlers
 * (con_enq.php, enquiry-submit.php). Requires PHPMailer-master/PHPMailerAutoload.php
 * to already be loaded by the including script before send_enquiry_mail() is called.
 */

const MAIL_SMTP_HOST = 'smtp.gmail.com';
const MAIL_SMTP_PORT = 465;
const MAIL_SMTP_SECURE = 'ssl';
const MAIL_SMTP_AUTH = true;
const MAIL_SMTP_USERNAME = 'mailtoemk@gmail.com';
const MAIL_SMTP_PASSWORD = 'mcnlwxwjjtvqamdt';
const MAIL_FROM_ADDRESS = 'mailtoemk@gmail.com';
const MAIL_FROM_NAME = 'TTD Travels Enquiry';
const MAIL_TO_ADDRESS = 'ttdpackages@gmail.com';

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

    return $mail->send();
}
