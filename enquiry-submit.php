<?php
require 'includes/mail/phpmailer/PHPMailerAutoload.php';
require 'includes/mail/mail-config.php';
session_start();

header('Content-Type: application/json');

$jsonResponse = function (int $status, array $payload) {
	http_response_code($status);
	echo json_encode($payload);
	exit;
};

// Honeypot: the "website" field is hidden from real users via CSS on the
// page (srivani-vip-break-darshan-from-chennai.php); only a bot filling
// every field would populate it. con_enq.php has no equivalent field - see
// docs/TECHNICAL_DEBT.md.
if (!empty($_POST['website'])) {
	exit;
}

$answer = $_SESSION["answer"] ?? '';
$user_answer = trim(post_string('answer'));

$name = trim(post_string('name'));
$mobile = trim(post_string('mobile'));

$errors = [];

if ($name === '') {
	$errors['name'] = 'Full Name is required.';
} elseif (strlen($name) > 100) {
	$errors['name'] = 'Full Name is too long.';
}

$mobileError = validate_mobile($mobile, 6, 15);
if ($mobileError !== null) {
	$errors['mobile'] = $mobileError;
}

$captchaError = validate_captcha($answer, $user_answer);
if ($captchaError !== null) {
	$errors['answer'] = $captchaError;
}

if (!empty($errors)) {
	$firstError = reset($errors);
	$jsonResponse(422, ['success' => false, 'message' => $firstError, 'errors' => $errors]);
}

$emailHtml = build_enquiry_email_html('New Enquiry', [
	'Name' => escape_html($name),
	'WhatsApp Number' => escape_html($mobile),
]);

if (!send_enquiry_mail('New Srivani VIP Break Darshan Enquiry', $emailHtml)) {
	$jsonResponse(500, ['success' => false, 'message' => 'Sorry, we could not send your enquiry right now. Please try again in a few minutes.']);
}

$jsonResponse(200, ['success' => true, 'message' => 'Enquiry sent successfully.']);
