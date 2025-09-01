<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "hello@homecares.sg, firlianif@gmail.com";
    $subject = "homecares.sg - New Career Form Submission: " . $_POST["subject"];

    $message = "
Salutation: " . $_POST["salutation"] . "\n" .
"Name: " . $_POST["name"] . "\n" .
"Contact No.: " . $_POST["phone"] . "\n" .
"Email: " . $_POST["email"] . "\n" .
"Posisiion Applying For: " . $_POST["subject"] . "\n\n" .
"Information:\n" . $_POST["message"];

    $headers = "From: hello@homecares.sg\r\n" .
               "Reply-To: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>