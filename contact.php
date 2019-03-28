<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once "PhpMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";
if(isset($_POST['mail-submit'])) {
  $subject = 'VEI Fundraising SUpport';
  $email = $_POST['email'];
  $user = $_POST['user'];
  $message = $_POST['message'];
  $mail = new PHPMailer();

  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; //587
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls"; //TLS
  $mail->Username = "ikomo.vei@gmail.com"; //ikomo.vei@gmail.com
  $mail->Password = "cryptokingdom19"; //cryptokingdom19

  $mail->setFrom($email);
  $mail->addAddress('ikomo.vei@gmail.com');
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  if($mail->send()){
    $msg = "1";
  }
  else {
    $msg = "2";
  }
}
 ?>
