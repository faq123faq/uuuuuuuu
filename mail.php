<?php
$to = "smv12es@gmail.com";
$subject = "My Subject";
$message = "This is the email message content.";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
}
echo "Email delivery failed.";
?>
