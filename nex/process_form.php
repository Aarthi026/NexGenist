<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["contactName"];
    $email = $_POST["contactEmail"];
    $subject = $_POST["contactSubject"];
    $message = $_POST["contactMessage"];

    // Set the recipient email address
    $to = "NexGenist00@gmail.com"; // Change this to your actual email address

    // Set the email subject
    $subject = "New Contact Form Submission: $subject";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
