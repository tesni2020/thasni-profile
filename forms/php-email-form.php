<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "thasnibeegum2020@gmail.com"; // 🔴 Replace with your email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-type: text/plain; charset=UTF-8";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send email. Try again.";
    }
} else {
    echo "Invalid request.";
}
?>
