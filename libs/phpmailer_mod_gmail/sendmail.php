<?
date_default_timezone_set('Asia/Bangkok');

### INCLUDE PHPMAILER เข้ามา ###
include ("class.phpmailer.php");

### FUNCTION SEND MAIL ####

function scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text) {

$mail = new PHPMailer();
$mail -> From     = $email_user_send;
$mail -> FromName = $from_name;

$mail -> AddAddress($to_email,$to_name);
$mail -> Subject	= $subject;
$mail -> Body		= $body_html;
$mail -> AltBody	= $body_text;
$mail -> IsHTML (true);

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier

$mail->Port = 465;
$mail->SMTPAuth		= true;
$mail->SMTPDebug	= true;
$mail->Username = $email_user_send;
$mail->Password = $email_pass_send;

$status = $mail->Send();
	if ($status) {
	 	echo 'send mail complete';
	 }else
	 {
	 	echo "send mail not complete";
	 }

$mail->ClearAddresses();


}
### FUNCTION SEND MAIL ####











#### เวลาเรียกใช้เรียกเป็น Function แบบนี้ #####
$to_name			="blackiron";
$to_email			="ironhighh@gmail.com";
$from_name			="mr.black";
$email_user_send	="black.thitikorn@gmail.com";
$email_pass_send	="BLaCK027471638";
$subject			="this is subject";
$body_html			="this is body";
$body_text			="body text";

scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text);


?>