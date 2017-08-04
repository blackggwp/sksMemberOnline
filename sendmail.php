<?php
date_default_timezone_set('Asia/Bangkok');
	require_once('libs/phpmailer/class.phpmailer.php');
	$mail = new PHPMailer();
	// $mailer = new PHPMailer(true);
	// $mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->Host = "192.168.0.144"; // sets GMAIL as the SMTP server
	// $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	// $mail->Port = 465; // set the SMTP port for the GMAIL server

	$mail->Username = "fuji"; // GMAIL username 
	$mail->Password = "1234"; // GMAIL password
	$mail->From = "black.thitikorn@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "Admin Sukishi";  // set from Name
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
