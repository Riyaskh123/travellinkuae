<?php
if (isset($_REQUEST["phone"]) && isset($_REQUEST["name"])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $car = $_POST['service'] == 'Dubai Chauffer Service' ? htmlspecialchars("Car: " . $_POST['car'] . "\n") : "";
    $message = htmlspecialchars($_POST['message']);
    
    // Validate reCAPTCHA
    $recaptcha_secret = '6Lf1H3wqAAAAAKRFuWx5gHmepERmwsCHMaK_MDCD';
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
    
    if ($recaptcha->success) {
        // Proceed with email sending
        $to = "info@travellinkuae.com";
        $subject = "New Booking Request";
        $body = "You have received a new booking request. Here are the details:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Service: $service\n" .
            "$car" .
            "Message: $message";
        
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            header('Location: ../enquiry.php?e=1');
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "reCAPTCHA verification failed. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
