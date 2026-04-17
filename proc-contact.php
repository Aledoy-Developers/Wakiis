<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request.");
}

// Collect and sanitize form data
$name    = trim($_POST['fullname'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
if ($name === '' || $email === '' || $subject === '' || $message === '') {
    $php_errormsg = "All fields except phone number are required.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
    exit;
}

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aledoysolutions2@gmail.com';
    $mail->Password   = 'zuvw gzmb ljea kcga';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Enable only when debugging
    // $mail->SMTPDebug = 2;

    // Sender and recipient
    $mail->setFrom('aledoysolutions2@gmail.com', 'Wakiis WEBSITE');
    $mail->addAddress('info@wakiis.com');
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New Message from Wakiis Contact Form: " . htmlspecialchars($subject);

    $mail->Body = "
        <h3>New Contact Form Message</h3>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->AltBody =
        "New Contact Form Message\n\n" .
        "Name: {$name}\n" .
        "Email: {$email}\n" .
        "Subject: {$subject}\n\n" .
        "Message:\n{$message}";

    $mail->send();

    echo "<script>alert('Your message has been sent successfully!'); window.location.href='index.php';</script>";
    exit;

} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: " . addslashes($mail->ErrorInfo) . "'); window.history.back();</script>";
    exit;
}
?>