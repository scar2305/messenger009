<?php

$headersep = "\r\n";
$header = "From: $username <$email>" . $headersep . "Reply-To: $username <$email> . $headersep";
$email = $_POST['email'];
$subject="Contact Form";
$username = $_POST['username']; 
$message = "From: $username\n\nMessage: $message\n\nEmail: $email";
$to ='larrieAD@gmail.com';

if (!empty ($_POST['email']) && ($_POST['message'])) {
  mail($to, $subject, $message, $header);
echo "Thank you $name, your message has been received.";
exit;
}

if ( (empty ($_POST['email'])) && (empty ($_POST['message'])) ) {
echo "ERROR, you did not fill in the <b>Email</b> and the <b>message</b> body.";
exit;
}

elseif (empty ($_POST['email'])) {
echo "ERROR, you did not fill in your Email address.";
exit;
}

elseif (empty ($_POST['message'])) {
echo "ERROR, you did not fill in the message body.";
exit;
}

?>