<!DOCTYPE html>
<html lang="">
<?php
require 'conn.php';
require 'func.php';
require 'header.php';
date_default_timezone_set('Asia/Bangkok');
$p = $_POST;
// showArray($_POST);

if (isset($p['submit_forgetpass'])) {
	$userEmail = $p['input_forget_email'];

$sql = "SELECT * FROM tcustomer WHERE email = '$userEmail' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
// var_dump($stmt);

	
	if( $stmt->rowCount() ) {
		$customerinfoArray = $stmt->fetch( PDO::FETCH_ASSOC );

		$userPass = $customerinfoArray['password'];
		sendmail($userEmail,$userPass);


 	}else{
 		echo "<h1>อีเมลล์นี้ไม่มีอยู่ในระบบ</h1>";
	}

}


function sendmail($mailto,$userPass){
	require_once('libs/phpmailer/class.phpmailer.php');
	$mail = new PHPMailer();
	// $mailer = new PHPMailer(true);
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->Host = "192.168.0.144"; // sets GMAIL as the SMTP server
	// $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	// $mail->Port = 465; // set the SMTP port for the GMAIL server

	$mail->Username = "fuji"; // GMAIL username 
	$mail->Password = "1234"; // GMAIL password
	$mail->From = "webmaster.sukishi@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "Admin Sukishi";  // set from Name
	$mail->Subject = "Password sukishi E-Member."; 
	$mail->Body = "Your password is: <b>".$userPass."</b>";


	// $mail->AddAddress("ironhighh@gmail.com", "Mr.Black"); // to Address
	$mail->AddAddress($mailto); // to Address

	// $mail->SMTPDebug = 2; 				//for debug

	$status = $mail->Send();
	if ($status) {
	 	// echo 'send mail complete';
 		echo "<h1>ส่งรหัสผ่านของท่านไปตามที่อยู่อีเมลล์นี้แล้ว</h1>";

	 }else
	 {
	 	echo "send mail not complete";
	 }
}
	
?>
<div class="forgetpass_panel">
<form action="" method="post">
<h2>อีเมล</h2>
<input type="email" id="input_forget_email" name="input_forget_email" required="required">
<br>
<br>

	<button class="submit_btn" type="submit" name="submit_forgetpass">ส่ง</button>
</form>
</div>

<a class="back_btn" href="index.php">Back to homepage</a>

<?php require 'footer.php' ?>
</html>