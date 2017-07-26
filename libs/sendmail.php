<?php
date_default_timezone_set('Asia/Bangkok');

	/***
	Server SMTP/POP : mail.thaicreate.com
	Email Account : webmaster@thaicreate.com
	Password : 123456
	*/
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	// $mailer = new PHPMailer(true);
	$mail->SetLanguage("en", 'PHPMailer/language/');
	// $mail->SetLanguage( 'en', 'PHPMailer/language/' );
	// $mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->Host = "203.170.129.38"; // sets GMAIL as the SMTP server
	// $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	// $mail->Port = 465; // set the SMTP port for the GMAIL server

	$mail->Username = "noreply@sukishigroup.com"; // GMAIL username 
	$mail->Password = "sukishi02910"; // GMAIL password
	$mail->From = "black.thitikorn@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "Mr.Weerachai Nukitram";  // set from Name
	$mail->Subject = "Test sending mail."; 
	$mail->Body = "My Body & <b>My Description</b>";

	$mail->AddAddress("ironhighh@gmail.com", "Mr.Black"); // to Address
	$mail->SMTPDebug = 2;

	$status = $mail->Send();
	if ($status) {
	 	echo 'send mail complete';
	 }else
	 {
	 	echo "send mail not complete";
	 }
?>
