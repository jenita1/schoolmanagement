<?php

include("config.php");
//send test email
//phpmailr object
$mail =new PHPMailer;

//from email address and name
$mail->From ="lamichhanejenita@gmail.com";
$mail->FromName="Jenita lamichhane";
//to address and name

$mail->addAddress("hackingmindsam@gmail.com");
$mail->addName("san");
//Address to which receipient will reply
$mail->addReplyTo("lamichhanejenita@gmail.com");
//send html text
$mail->isHtml(true);
$mail->Subject ="Subject Text";
$mail->Body ="<i>mail body in HTML </i>";
$mail->AltBody ="Hello there,Happy new year";
if(!$mail->send())
{
	echo "Mailer Error:".$mail->ErrorInfo;
}
else{
	echo "Message has been sent successfully";
}
init_set('display_errors',1);

?>