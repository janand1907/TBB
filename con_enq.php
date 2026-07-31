<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
require 'mail-config.php';
session_start();

$isAjaxRequest = (
	(isset($_POST['ajax']) && (string) $_POST['ajax'] === '1')
	|| (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower((string) $_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
	|| (isset($_SERVER['HTTP_ACCEPT']) && stripos((string) $_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
);

if ($isAjaxRequest) {
	header('Content-Type: application/json');
}

$answer = $_SESSION["answer"] ?? '';
$user_answer = trim(post_string('answer'));

$email = post_string('email');

$name = trim(post_string('name'));
$mobile = trim(post_string('mobile'));
$date = trim(post_string('date'));
$peoples = trim(post_string('peoples'));
$messageText = trim(post_string('message'));
$formSource = trim(post_string('form_source'));
// The .mhc-form "Quick Enquiry" mini-form (see docs/ARCHITECTURE.md) only
// collects name + mobile, so it can't satisfy date/peoples/captcha checks -
// $isMhcForm relaxes those three validations for that one form shape.
$isMhcForm = $formSource == 'mhc';

// Two response modes: JS-driven forms (enquiry-forms.js / legacy-enquiry-forms.js)
// send an AJAX request and expect JSON back; a plain browser form POST (no JS,
// or JS disabled) expects a normal page response - redirect to thanks.php on
// success, or the bare error message on failure (see docs/TECHNICAL_DEBT.md
// for the known rough edge in that last case).
$respond = function (int $status, array $payload) use ($isAjaxRequest) {
	http_response_code($status);
	if ($isAjaxRequest) {
		echo json_encode($payload);
	} elseif ($status >= 200 && $status < 300) {
		header('Location: thanks.php', true, 303);
	} else {
		echo $payload['message'] ?? 'Unable to process your enquiry right now.';
	}
	exit;
};

$errors = [];

if ($name === '') {
	$errors['name'] = 'Full Name is required.';
}

$mobileError = validate_mobile($mobile, 6, 12);
if ($mobileError !== null) {
	$errors['mobile'] = $mobileError;
}

if (!$isMhcForm && $date === '') {
	$errors['date'] = 'Travel date is required.';
}

if (!$isMhcForm && $peoples === '') {
	$errors['peoples'] = 'Travellers is required.';
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors['email'] = 'Enter a valid email address.';
}

if (!$isMhcForm) {
	$captchaError = validate_captcha($answer, $user_answer);
	if ($captchaError !== null) {
		$errors['answer'] = $captchaError;
	}
}

if (!empty($errors)) {
	$firstError = reset($errors);
	$respond(422, ['success' => false, 'message' => $firstError, 'errors' => $errors]);
}

$date = $date !== '' ? $date : 'Not provided';
$peoples = $peoples !== '' ? $peoples : 'Not provided';
$messageText = $messageText !== '' ? $messageText : 'Not provided';

$emailHtml = build_enquiry_email_html('Document', [
	'Name' => escape_html($name),
	'Email' => escape_html($email),
	'Phone' => escape_html($mobile),
	'Date' => escape_html($date),
	'No of Peoples' => escape_html($peoples),
	'Message' => nl2br(escape_html($messageText)),
]);

if (!send_enquiry_mail('New Enquiry from TTD Travels', $emailHtml, $email)) {
	$respond(500, ['success' => false, 'message' => 'Sorry, we could not send your enquiry right now. Please try again in a few minutes.']);
}

$respond(200, ['success' => true, 'message' => 'Enquiry sent successfully.']);
