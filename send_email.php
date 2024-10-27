<?php
require 'vendor/autoload.php';  // Use the Composer autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Define recipient email
    $recipient_email = "zainbafzal3@gmail.com";  // Recipient email address

    // Send email
    echo smtp_mailer($recipient_email, "New Contact Form Submission", "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong> $message");
}

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; // Uncomment to debug issues
    $mail->Username = "your_email@gmail.com"; // Replace with your email
    $mail->Password = "dsjp xykg xokp bsgv";   // Use your app-specific password
    $mail->setFrom("your_email@gmail.com", "Your Name"); // Replace with your email and name
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo 'Message sent successfully!';
    }
}
?>