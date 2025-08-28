<?php
// =========================
//   FILE: send-mail.php
// =========================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yourgmail@gmail.com";  // <-- change this to your receiving email
    $mail_subject = "New Contact Form: " . $subject;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    if (mail($to, $mail_subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>