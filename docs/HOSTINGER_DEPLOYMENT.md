# Hostinger deployment

This is a PHP site with no database or build command. Upload the project files
to the domain's `public_html` folder, preserving hidden files such as
`.htaccess` and `logs/.htaccess`.

## Required Hostinger settings

1. In hPanel, set the website's PHP version to **8.1** before the first test.
   Do not add a cPanel `ea-php81` handler to `.htaccess`.
2. Ensure SSL is active for `www.tirupatibalajibooking.com`; the root
   `.htaccess` redirects all traffic to that exact HTTPS hostname.
3. Keep PHP error display off in production. The application logs errors to
   `public_html/logs/php-errors.log`, which is blocked from web access.

## Configure enquiry email

The application supports any SMTP provider. It checks `MAIL_*` environment
variables first; if they are unavailable, it reads a private PHP file outside
the document root.

For the normal Hostinger directory layout, create this file:

`/home/u123456789/domains/your-domain.tld/tbb-mail-config.php`

Start with `docs/tbb-mail-config.example.php`, copy it to that path, replace
every placeholder, and set its permissions to 600 if available. The file must
return the configuration array unchanged in structure.

For a Hostinger mailbox use `smtp.hostinger.com`, SSL on port 465, and the full
mailbox address/password. If using Gmail or another provider, use that
provider's SMTP host, port, encryption, and an app password where required.

Required values:

- `MAIL_SMTP_HOST`
- `MAIL_SMTP_PORT`
- `MAIL_SMTP_SECURE` (`ssl`, `tls`, or empty only if your provider requires it)
- `MAIL_SMTP_AUTH` (`true` or `false`)
- `MAIL_SMTP_USERNAME`
- `MAIL_SMTP_PASSWORD`
- `MAIL_FROM_ADDRESS`
- `MAIL_FROM_NAME`
- `MAIL_TO_ADDRESS`

If these are absent or invalid, enquiry forms safely return an error instead
of attempting to send mail with fallback credentials.

## Verify after upload

1. Open the home page and one content page using the final `www` domain.
2. Submit one enquiry and confirm it arrives at `MAIL_TO_ADDRESS` and that
   Reply-To is the visitor's email when supplied.
3. Verify `https://www.tirupatibalajibooking.com/logs/php-errors.log` is not
   publicly accessible.
4. Delete the test enquiry or label it clearly.
