<?php
require 'include/PHPMailer.php';
require 'include/SMTP.php';
require 'include/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail = new PHPMailer();
$mail->CharSet = 'utf-8';

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "465";
$mail->Username = "aspirido4@gmail.com";
$mail->Password = "hbrhfljcnm1";
$mail->isHTML(true); 

$mail->Subject = "Данные";
$mail->setFrom("aspirido4@gmail.com");
$mail->Body    = '
Пользователь оставил данные <br> 
Имя: ' . $name . ' <br>
Номер телефона: ' . $phone . '<br>
E-mail: ' . $email . '';
$mail->addAddress("divideetimpera20182@gmail.com");
 

if ($mail->Send()) {
  echo "Email sent..!";
}else {
  echo "Error..!"
}

?>