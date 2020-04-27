<?php 
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['subject'];
$formcontent="From: $username \n Message: $message";
$recipient = "larrieAd@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: index.html");
?>


