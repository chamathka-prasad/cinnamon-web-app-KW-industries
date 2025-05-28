<?php
require __DIR__ . '/../vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Sanitize inputs
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
    die('Please fill in all fields correctly.');
}

$mail = new PHPMailer(true);

try {
    // Gmail SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'zee123hmz@gmail.com'; 
    $mail->Password   = 'iktblamcpywcifyl';    
    $mail->addReplyTo($email, $name);

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('zee123hmz@gmail.com', 'Cinnamon Company Website');
    $mail->addAddress('zee123hmz@gmail.com'); 

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'New Cinnamon Website Message';
    $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";

    $mail->send();

    header("Location: ../home/index.php"); 
    exit;
    
} catch (Exception $e) {
    echo "Error: Message not sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
