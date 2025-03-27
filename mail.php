<?php 

$to = "gescalantece@gmail.com"; 
$from = $_POST['email']; // Sender's email
$sender_name = $_POST['name'];
$number_of_guests = $_POST['guest'];
$events = $_POST['events'];
$notes = $_POST['notes'];

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
    echo "Error sending email.";
}

?>
