<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "hello@homecares.sg, firlianif@gmail.com";
    $subject = "homecares.sg - New Request for Steam Cleaning Fast Quote";

    $message = "Salutation: " . $_POST["salutation"] . "\n" .
    "Name: " . $_POST["name"] . "\n" .
    "Contact No.: " . $_POST["phone"] . "\n" .
    "Email: " . $_POST["email"] . "\n" .
    "Type of Steam Cleaning Service Required: " . $_POST["service_required"] . "\n" .
    "Quantity: " . $_POST["quantity"] . "\n" .
    "Remarks: " . $_POST["remarks"] . "\n" .
    "Promotion Code: " . $_POST["promo_code"];

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