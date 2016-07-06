<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'me@jackearsman.com';
$subject = 'New Message!';
$msg = $name . '' . $email . '' . $message . '';

$mail($to, $subject, $message);
?>
