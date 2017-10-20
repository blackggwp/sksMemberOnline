<!DOCTYPE html>
<html lang="en">
<div class="index_header"></div>

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
 		echo '<h2 id="forgetpass_unsuccess_text">ไม่มี Email นี้อยู่ในระบบ</br>
กรุณากรอก Email ใหม่อีกครั้ง หรือ <a href="register.php">สมัครสมาชิก</a>
</h2>';
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
 		echo '<h2 id="forgetpass_success_text">ส่งรหัสผ่านของท่านไปตามที่อยู่ Email นี้แล้ว</h2>';

	 }else
	 {
	 	echo "send mail not complete";
	 }
}

?>
<div class="forgetpass_panel" style="text-align:center;">
<form action="" method="post" name="form_forgetpass">
<h2>Email</h2>
<input type="email" id="input_forget_email" name="input_forget_email" required="required" placeholder="example@mail.com">
<br>
<br>

	<button class="forget_submit_btn" type="submit" name="submit_forgetpass">Send</button>
</form>
</div>
	<a class="forgetpass_back_btn" href="index.php"><</a>


<?php require 'footer.php' ?>
</html>
