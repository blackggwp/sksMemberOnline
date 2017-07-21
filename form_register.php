<?php 
require'conn.php';
require'func.php';
date_default_timezone_set('Asia/Bangkok');

$p = $_POST;
if ((isset($p['registerEmail']) && (isset($p['registerPassword'])))) {
	// showArray($p);
	$email = $p['registerEmail'];
    $pass = $p['registerPassword'];
    $tel = $p['tel'];
    $perid = $p['perid'];
    $birthdate = splitDate($p['birthdate']);
    $outlet = $p['outlet'];

	$systemdate = date("Y-m-d H:i:s");
    $customerid = "";
    $lastInsertId = "";

try {

$add_cus_sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet,systemdate) ";
$add_cus_sql .= "VALUES ('$email', '$pass', '$tel', '$perid', '$birthdate', '$outlet','$systemdate')";
	$status = $conn->exec($add_cus_sql);

	$lastInsertId = $conn->lastInsertId();
}
catch(Exception $e)  
	{   
		die( print_r( $e->getMessage() ) );   
	} 

	if( $status ) {

		 $customerid = genCustomerid($conn);
		 updatetcustomer($conn);

		 $sth = $conn->prepare("SELECT * FROM tcustomer WHERE (customerid = '$customerid') ");
		 $sth->execute();
		 $customerinfoArray = $sth->fetch(PDO::FETCH_ASSOC);

		setcookie( "customerid", $customerinfoArray['customerid'], time() + 36000 );
		// setcookie( "email", $email, time() + 36000 );

		 echo "<h1>register successfull</h1>";


			// redirect to homepage
 		 // header( 'refresh: 2; url=coupon.php' );

		 exit(0);
	}else{
		echo "<h1>register unsuccessfull</h1>";
		exit(0);
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
function phpmail(){
require 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
function updatetcustomer($conn){
	global $customerid,$lastInsertId,$systemdate;
	$updatesql = "UPDATE tcustomer SET customerid = '$customerid',systemdate = '$systemdate' WHERE (id = '$lastInsertId') ";
	// echo "$updatesql";
	$stmt = $conn->exec($updatesql);
	
	// if ($stmt){
	// 	echo "update success";
	// }
	// else{
	// 	echo "fail";
	// }

}
function genCustomerid($conn){
	global $systemdate;
try{
	$genCustomeridQuery = "INSERT INTO tcustomerdetail (customername,systemdate) ";
	$genCustomeridQuery .= "VALUES ('black','$systemdate')";
	$status = $conn->exec($genCustomeridQuery);
	// get customerid
	$customerid = $conn->lastInsertId ();
}
catch(Exception $e)  
	{   
		die( print_r( $e->getMessage() ) );   
	} 
	if ( $status ) {
		return $customerid;
	}
}
	
$conn = null;
?>