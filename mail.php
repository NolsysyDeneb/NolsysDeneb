<?php 

$to = "gescalantece@gmail.com"; 

// Validate and sanitize inputs
$from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$sender_name = htmlspecialchars(strip_tags($_POST['name']));
$number_of_guests = htmlspecialchars(strip_tags($_POST['guest']));
$events = htmlspecialchars(strip_tags($_POST['events']));
$notes = htmlspecialchars(strip_tags($_POST['notes']));

if (!$from) {
    echo "Invalid email address.";
    exit;
}

$subject = "Form Submission";
$message = "$sender_name is attending! The number of guests is: $number_of_guests and the selected event is: $events. 
He/she wrote the following message:\n\n$notes";

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email. Please try again later.";
}

?>
