<?php 


// Hotmail SMTP server name: smtp.live.com
// Hotmail SMTP user name: your Hotmail account
// Hotmail SMTP password: your Hotmail password
// Hotmail SMTP port: 25 or 465



//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer; //important, on php files with more php stuff move it to the top
use PHPMailer\PHPMailer\SMTP; //important, on php files with more php stuff move it to the top

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/autoload.php'; //important

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_off;

//SMTP
$mail = new PHPMailer(true); //important
$mail->CharSet = 'UTF-8';  //not important
$mail->isSMTP(); //important
$mail->Host = 'smtp.office365.com'; //important
$mail->Port       = 587; //important
$mail->SMTPSecure = 'tls'; //important
$mail->SMTPAuth   = true; //important, your IP get banned if not using this

//Auth
$mail->Username = 'angellbelger@outlook.com';
$mail->Password = 'Password here!';//Steps mentioned in last are to create App password

//Set who the message is to be sent from, you need permission to that email as 'send as'
$mail->SetFrom('angellbelger@outlook.com', 'Hosting Group Inc.'); //you need "send to" permission on that account, if dont use yourname@mail.org

//Set an alternative reply-to address
$mail->addReplyTo('no-reply@mail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('yihanar187@djpich.com', 'SIMON MÜLLER');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = "</p>This is a <b>body</b> message in html</p>" ;
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('../../../images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Well Done.';
}



?>