<?php
/**
 * Copy this file outside public_html as tbb-mail-config.php, then replace the
 * placeholder values. Do not upload this example or the real config into
 * public_html and do not commit the real file to git.
 *
 * Any MAIL_* environment variable takes precedence over this file.
 */
return [
    'MAIL_SMTP_HOST' => 'smtp.hostinger.com',
    'MAIL_SMTP_PORT' => '465',
    'MAIL_SMTP_SECURE' => 'ssl',
    'MAIL_SMTP_AUTH' => 'true',
    'MAIL_SMTP_USERNAME' => 'enquiries@example.com',
    'MAIL_SMTP_PASSWORD' => 'replace-with-the-mailbox-password',
    'MAIL_FROM_ADDRESS' => 'enquiries@example.com',
    'MAIL_FROM_NAME' => 'Divine Balaji Travels Enquiry',
    'MAIL_TO_ADDRESS' => 'owner@example.com',
];
