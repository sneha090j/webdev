<?php

 require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\PHPMailer.php';
 require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\SMTP.php';
 require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail=new PHPMailer();


$mail->isSMTP();

$mail->Host="smtp.gmail.com";

$mail->SMTPAuth="true";

$mail->SMTPSecure="tls";

$mail->Port="587";

$mail->Username="sneha090j@gmail.com";

$mail->Password="avth gwpt voxd llyk";

$mail->Subject="Test Email Using PHPmailer";

$mail->setFrom("sneha090j@gmail.com");

$mail->Body="This is plain text";

$mail->addAddress("sneha090j@gmail.com");

if($mail->Send()){
    echo "Mail sent..!";
}
else{
    echo"error...!";
}

$mail->smtpClose();

?>