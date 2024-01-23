<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $subject = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];

    $to = "your@email.com"; // Replace with your email address
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }

    exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>

<div class="row contact-content" data-aos="fade-up">
    <div class="contact-primary">
        <h3 class="h6">Contact us for Orders</h3>
        <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
            <fieldset>
                <div class="form-field"> <input name="contactName" type="text" id="contactName" placeholder="Your Name" value minlength="2" required aria-required="true" class="full-width"></div>
                <div class="form-field"> <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value required aria-required="true" class="full-width"></div>
                <div class="form-field"> <input name="contactSubject" type="text" id="contactSubject" placeholder="Project Title" value class="full-width"></div>
                <div class="form-field"><textarea name="contactMessage" id="contactMessage" placeholder="Project Description" rows="10" cols="50" required aria-required="true" class="full-width"></textarea></div>
                <div class="form-field">
                    <button class="full-width btn--primary">Submit</button>
                    <div class="submit-loader">
                        <div class="text-loader">Sending...</div>
                        <div class="s-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="message-warning"> Something went wrong. Please try again.</div>
        <div class="message-success"> Your message was sent, thank you!<br></div>
    </div>
</div>

</body>
</html>
