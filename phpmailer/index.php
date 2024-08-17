<?php


require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = '587';

$mail->Username = 'ermitzy@gmail.com'; // Gmail address which you want to use as SMTP server
$mail->Password = 'cjstivdvohrcrpwl'; // Gmail address Password


$mail->Subject = 'Message Received (Contact Page)';

$mail->setFrom('ermitzy@gmail.com');

$mail->isHTML(true);
$mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";


$mail->addAddress('ermitzy@gmail.com');


if ($mail->Send()){

	echo"Email Sent..!";
}else{

	echo "Error..!";
}


$mail->smtpClose();
