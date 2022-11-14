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
    
    // $to = "vladislav.gulyakin@gmail.com";
    // $subject = "Test";
    // $headers = "From:".$email;
    
    // mail($to, $subject, "TEXT", $headers);
    // echo "";

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\PHPMailer;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    require_once(__DIR__ . '/../../../vendor/autoload.php');

    $mail = new PHPMailer(true);

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'vladislav.gulyakin@gmail.com';                     //SMTP username
        $mail->Password   = 'uzpmgovhjmgrispv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($_POST['email'], 'Client');
        $mail->addAddress('vladislav.gulyakin@gmail.com', 'Joe User');     //Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $_POST['message'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 
        "
        <script>
        document.location.href = 'contact.html';
        </script>
        ";

