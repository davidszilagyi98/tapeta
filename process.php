<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telepules = $_POST["telepules"];
    $specialConditions = $_POST["special_conditions"];
    $tapetaTipusa = $_POST["tapeta_tipusa"];
    $tapetaMennyiseg = $_POST["tapeta_mennyiseg"];
    $hatarido = $_POST["hatarido"];
    
    // Create the email message
    $to = "kontakt@tapetaotthon.hu"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nTelepülés: $telepules\nKörülmények: $specialConditions\nTapéta típusa: $tapetaTipusa\nTapéta mennyisége: $tapetaMennyiseg\nHatáridő: $hatarido";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Success: Send a JSON response
        echo json_encode(["status" => "success", "message" => "Ajánlatkérődet megkaptuk. Hamarosan felvesszük veled a kapcsolatot!"]);
        exit();
    } else {
        // Error handling: Send a JSON response
        echo json_encode(["status" => "error", "message" => "Error sending email. Please try again later."]);
        exit();
    }
}
?>
