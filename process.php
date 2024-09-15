<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate and process the data (you can add more validation)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send an email (simplified example, consider using a library like PHPMailer)
        $to = "newdubaicloth@gmail.com";
        $subject = "Contact Form Submission";
        $headers = "From: $email";
        $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        mail($to, $subject, $mailBody, $headers);

        echo "Thank you for your message!";
    } else {
        echo "All fields are required!";
    }
} else {
    // Handle invalid requests
    echo "Invalid request!";
}
?>
