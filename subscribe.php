<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // CHANGE THIS to your receiving email
    $to = "admin@finalarcx.com";  

    $subject = "New FinalArcX Subscriber";
    $message = "A new user subscribed with email: " . $email;
    $headers = "From: notify@finalarcx.com\r\n";
    $headers .= "Reply-To: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2 style='color:green; text-align:center;'>✅ Thanks! You are now subscribed.</h2>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>❌ Something went wrong. Please try again.</h2>";
    }
}
?>
