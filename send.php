<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

$to = "qumagipupu@rungel.net";
$subject = "Test";
$headers = "From:" . $email;

mail($to, $subject, $message, $headers);
?>