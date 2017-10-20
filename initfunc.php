<?php
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
function splitDate($d){
	$a=explode("/", $d);
	return $a[1].'/'.$a[0].'/'.$a[2];
}
function showArray($var) {
	echo "<pre>";
		print_r($var);
	echo "</pre>";

}
function splittag($tag) {
	$t = split(',', $tag);

	return ($t);
}
function inputNumDotOnly($str){
	$pattern = "/[^0-9\.]/";
	return $output = preg_replace($pattern, '', $str);
}
function inputNumOnly($str) {
	$pattern = '/[^0-9]/';
	return $str = preg_replace($pattern, '', $str);
}
function removeAllSpace($str){
	return $string_not_have_space = preg_replace('/\s+/', '', $str);
}
function removeSharpSignphp($str){
	return $string_not_have_sharp_sign = str_replace('#', '', $str);
}
function printtable_sqlite($results){

	$tcolumn = $results['count'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "sss"."$tcolumn";
	$h='';
	$cols=array();
	for ($counter = 0; $counter < $tcolumn; $counter ++) {
		$meta = $results->getColumnMeta($counter);
		$h.='<th>'.$meta['name'].'</th>';
	}

	$r='';
	foreach ($results as $dr) {

		$r.='<tr>';
		for ($i = 0; $i < $tcolumn; $i ++) {
			$r.='<td>'.$dr[$i].'</td>';
		}
		$r.='</tr>';
	}

	$h='<thead>'.$h.'</thead>';
	$s.='<table class="tblreport table table-hover">'.$h.$r;
	$s.='</table>';

	return $s;

}
?>
