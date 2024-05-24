<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $to = "jose.pinho.oliveira@gmail.com"; // Replace with your email address
    $subject = $_POST['name'];
    $message = "data: " . $_POST['data'] . ", hora: " . $_POST['hora'];
    $from = $_POST['email'];
    
    // Set the headers
    $headers = "From: $from";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>