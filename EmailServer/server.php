<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "./PHPMailer/Exception.php";
require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";

$mail = new PHPMailer(true);

try{
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "waithiragachatha@students.must.ac.ke";
  $mail->Password = "SC205/103605/20";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port = 465;
  $mail->setFrom( "waithiragachatha@students.must.ac.ke", "John Waithira");
  $mail->addAddress("waithirajon@gmail.com");
  $mail->addReplyTo("waithiragachatha@students.must.ac.ke", "John");
  $mail->Subject = "test";
  $mail->Body = "Body";
  $mail->send(); 

}catch(Exception $e){

}