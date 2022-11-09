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

if (mail("qumagipupu@rungel.net",
         "Новое письмо",
         "Name: ".$name."\n".
         "Message: ".$message,
         "From: no-reply@gmail.com \r\n"))
{
    echo('OKEY');
}
else {
    echo('ERROR');
}

?>