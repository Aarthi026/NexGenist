<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["contactName"];
    $email = $_POST["contactEmail"];
    $subject = $_POST["contactSubject"];
    $message = $_POST["contactMessage"];

    // Set the recipient email address
    $to = "NexGenist00@gmail.com"; // Change this to your actual email address

    // Set the email subject
    $subject = "New Contact Form Submission: $subject";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = ' smtp.gmail.com';  // Change this to your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'NexGenist00@gmail.com';  // Change this to your SMTP username
        $mail->Password = 'wvdp cmpj odwn tjya';  // Change this to your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender information
        $mail->setFrom($email, $name);

        // Recipient information
        $mail->addAddress($to);

        // Email content
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Attempt to send the email
        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "Invalid request";
}
