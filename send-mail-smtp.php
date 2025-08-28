<?php
// ================================
//   FILE: send-mail-smtp.php
//   (PHPMailer via Gmail SMTP)
// ================================

// NOTE: This file requires PHPMailer installed via Composer.
// Run on your server: composer require phpmailer/phpmailer
// Then set form action to send-mail-smtp.php (instead of send-mail.php)
// and update the SMTP credentials below.

/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // make sure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yourgmail@gmail.com'; // your Gmail
        $mail->Password = 'your-app-password';   // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender/Receiver
        $mail->setFrom($email, $name);
        $mail->addAddress('yourgmail@gmail.com'); // your receiving Gmail

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Contact Form: " . $subject;
        $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        echo "Message sent successfully via SMTP!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
}
*/
?>