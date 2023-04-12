<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($send_to_email, $send_to_fullname, $subject, $content) {
//Create an instance; passing `true` enables exceptions
    global $config;
    $config_gmail = $config['email'];
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = $config_gmail['smtp_host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = $config_gmail['smtp_user'];                     //SMTP username
        $mail->Password = $config_gmail['smtp_pass'];                               //SMTP password
        $mail->SMTPSecure = $config_gmail['smtp_secure'];            //Enable implicit TLS encryption
        $mail->Port = $config_gmail['smtp_port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($config_gmail['smtp_user'], $config_gmail['smtp_fullname']);
        $mail->addAddress($send_to_email, $send_to_fullname);     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($config_gmail['smtp_user'], $config_gmail['smtp_fullname']);
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');
        //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//        $mail->addAttachment('tc.jpg', 'new.jpg');    //Optional name
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
//        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error".$mail->ErrorInfo;
    }
}

?>