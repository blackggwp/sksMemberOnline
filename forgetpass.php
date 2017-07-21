<?php

try {
	

phpmail2();
}catch(Exception $e)  
			{   
				die( print_r( $e->getMessage() ) );   
			}
function phpmail2(){
require 'libs/PHPMailer/PHPMailerAutoload.php';
require 'libs/PHPMailer/class.phpmailer.php';
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->setFrom('from@example.com', 'Your Name');
$mail->addAddress('myfriend@example.net', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
$mail->Port = 465;  
$mail->SMTPSecure = 'SSL';
                                  // TCP port to connect to

if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
}
function phpmail(){
	
require 'libs/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->Debugoutput = 'html';
$mail->isSMTP();
// $mail->Host = "ssl://smtp.gmail.com";
$mail->SMTPSecure = 'SSL';
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username  = 'ironhighh@gmail.com';                 // SMTP username
$mail->Password = 'BLaCK027471638';                           // SMTP password
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('ironhighh@gmail.com', 'Mailer');
$mail->addAddress('ironhighh@gmail.com', 'Black iron');     // Add a recipient
$mail->addAddress('ironhighh@gmail.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
echo !extension_loaded('openssl')?"Not Available":"Available";


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}

function sendmail(){
	// include 'libs/thaimailer.php';
	ini_set("SMTP", "192.168.0.144");
	// ini_set('smtp_port',25);
	try{
		$to = "ironhighh@gmail.com";
		$from = "black.thitikorn@gmail.com";
		$subject = "test subject";
		$message = "content";
		// $headers = "From: webmaster@example.com" . "\r\n" .
		// "CC: black.thitikorn@gmail.com";

		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Your name <info@address.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
		 if (mail($to, $subject, $message,$headers)){echo "mail has been sended";}
		 else{echo "mail can't send";}
		}catch(Exception $e)  
			{   
				die( print_r( $e->getMessage() ) );   
			}
			
}



?>