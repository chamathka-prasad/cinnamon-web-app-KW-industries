<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        echo "<span style='color:red;'>Please fill in all fields correctly.</span>";
        exit;
    }

    // Set the company's email address here
    $to = "zee123hmz@gmail.com"; // <-- Replace with the company's real email address

    $subject = "New Contact Form Message from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<span style='color:green;'>Thank you! Your message has been sent.</span>";
    } else {
        echo "<span style='color:red;'>Sorry, your message could not be sent. Please try again later.</span>";
    }
} else {
    echo "<span style='color:red;'>Invalid request.</span>";
}
?>

