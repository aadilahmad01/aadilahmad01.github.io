<?php

$receiving_email_address = "your-email@example.com";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? 'Contact Form Message';
    $message = $_POST['message'] ?? '';

    $body  = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    if (mail($receiving_email_address, $subject, $body, $headers)) {
        echo "OK";
    } else {
        echo "Error sending email.";
    }
}
?>
