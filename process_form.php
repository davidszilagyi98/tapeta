<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Replace with your email address
  $to = "szilagyidavid98@gmail.com";
  $headers = "From: $email";

//   if (mail($to, $subject, $message, $headers)) {
//     // Redirect to a thank you page or display a success message
//     header("Location: thank_you.html");
//     exit();
//   } else {
//     echo "Error sending email. Please try again.";
//   }
}
?>
