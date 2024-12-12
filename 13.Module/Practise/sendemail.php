<?php

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Replace with your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com'; // Replace with your email
    $mail->Password = 'your-password';         // Replace with your password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('your-email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer.';

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>