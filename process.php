<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up the recipient email address
    $to = "szilagyidavid98@gmail.com";

    // Set up the email subject
    $email_subject = "New Contact Form Submission - $subject";

    // Compose the email message
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Set up additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank-you.html");
} else {
    // Handle the situation where the form wasn't submitted properly
    echo "Error: Form not submitted.";
}
?>
