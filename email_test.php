<?php
include('Crypto_new.php');
include('admin/include/config.php');
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

error_reporting(0);

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';             // For Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'raj.marathe@mitsde.com';       // Your Gmail address
    $mail->Password   = 'gxxefzxevrjrwswn';     // Your App Password (NOT Gmail password)
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('sanjay.gaikwad@mitsde.com', 'Sanjay');

    $mail->addAddress('raj.marathe@mitsde.com', 'Test Receiver'); // Change to your test recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHP';
    $mail->Body = 'This is a <b>test email</b> sent using PHPMailer in PHP.';

    $mail->send();
    echo '✅ Message has been sent successfully.';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>