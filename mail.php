<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$reason = $_POST['reason'];
$formcontent = "Name: $name \n Email: $email \n Phone Number: $telephone \n Reason: $reason";
$recipient = "nikolajsvv@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

if (isset($_POST['submit'])) {
    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo '<p>Your email has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again or simply email contact@adapesmedia.com.'
    }
}
?>
