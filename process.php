<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Construct email message
    $to = "szilagyidavid98@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully";
    } else {
        echo "Failed to send message";
    }
} else {
    // Redirect if accessed directly
    echo “itt vagyok”;
}
?>
