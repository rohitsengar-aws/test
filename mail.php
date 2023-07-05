<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$number=$_REQUEST['phone'];
$course=$_REQUEST['course'];
$message=$_REQUEST['message'];
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();                         
    $mail->Host       = 'mail.worldtradekey.in';
    $mail->SMTPAuth   = true;              
    $mail->Username   = 'pinkysahu@worldtradekey.in';
    $mail->Password   = 'pinkysahu123';         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;                    
    $mail->setFrom($email, $name);
      $mail->addAddress('pinkysahu4242@gmail.com', 'eduluck');
    $mail->isHTML(true);   
    $mail->Subject = 'You Get an Enquiry from '.$name;
    $mail->Body    = '
<h3>Dear, eduluck</h3>
<p><strong>You Get an Enquiry from '.$name.'</strong></p>
<p><strong>Name : - </strong>'.$name.'</p>
<p><strong>Email : - </strong>'.$email.'</p>
<p><strong>Number : - </strong>'.$number.'</p>
<p><strong>course : - </strong>'.$course.'</p>
<p><strong>message : - </strong>'.$message.'</p>';
$mail->SMTPDebug;
    $mail->send();
     echo "<script type='text/javascript'>location.href = 'career.html';</script>";
    
     
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error:";
    exit;
}


?>