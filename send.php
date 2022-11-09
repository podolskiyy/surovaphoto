<?php

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];
    
    // $name = htmlspecialchars($name);
    // $email = htmlspecialchars($email);
    // $message = htmlspecialchars($message);
    
    // $name = urldecode($name);
    // $email = urldecode($email);
    // $message = urldecode($message);
    
    // $name = trim($name);
    // $email = trim($email);
    // $message = trim($message);
    
    // $to = "qumagipupu@rungel.net";
    // $subject = "Test";
    // $headers = "From:".$email;
    
    // mail($to, $subject, "TEXT", $headers);
    // echo "";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'vladislav.gulyakin@gmail.com';
        $mail->Password = viUiuyT3xHHXQX;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
        $mail->Port       = 465; 

        $mail->setFrom($_POST["email"]);
        $mail->addAddress('vladislav.gulyakin@gmail.com', 'Joe User'); 
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail-isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        $mail->send();

        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
