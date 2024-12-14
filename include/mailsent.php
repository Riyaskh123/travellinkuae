<?php
if (isset($_REQUEST["phone"]) && isset($_REQUEST["name"])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $car = $_POST['service'] == 'Dubai Chauffer Service' ? htmlspecialchars("Car: ".$_POST['car']."\n") : "";
    // $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@travellinkuae.com"; 
    $subject = "New Booking Request";
    $body = "You have received a new booking request. Here are the details:\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Service: $service\n" .
        "$car" .
        // "Pick Up Location: $location\n" .
        "Message: $message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // echo "Email successfully sent to $to...";
        header('Location: ../enquiry.php?e=1');
    } else {
        echo "Email sending failed...";
    }
} else {
    echo "Invalid request method.";
}