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
    
    $to = "vladislav.gulyakin@gmail.com";
    $subject = "Test";
    $headers = "From:".$email;
    
    mail($to, $subject, "TEXT", $headers);
    echo "";

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'phpmailer/src/Exception.php';
    // require 'phpmailer/src/PHPMailer.php';
    // require 'phpmailer/src/SMTP.php';

    // require 'vendor/autoload.php';

    // if(isset($_POST["send"])) {
    //     $mail = new PHPMailer(true);

    //     $mail->isSMTP();
    //     $mail->Host = 'smtp.gmail.com';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'vladislav.gulyakin@gmail.com';
    //     $mail->Password = '';
    //     $mail->SMTPSecure = 'ssl';
    //     $mail->Port = 465;

    //     $mail->setFrom($_POST["email"]);
    //     $mail->addAddress('vladislav.gulyakin@gmail.com');

    //     $mail->isHTML(true);

    //     $mail->Subject = 'I do not';
    //     $mail->Body = $_POST["message"];

    //     $mail->send();

    //     echo 
    //     "
    //     <script>
    //     alert('Sent Successfully');
    //     document.location.href = 'send-mail.html';
    //     </script>
    //     ";
    // }

