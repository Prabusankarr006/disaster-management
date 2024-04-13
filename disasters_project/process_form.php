<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kavinkumar4v@gmail.com"; // Replace with your email address
    $subject = "Feedback from $name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your feedback! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your feedback.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
