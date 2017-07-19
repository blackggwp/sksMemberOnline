<?php 
require'conn.php';
require'func.php';

$p = $_POST;

if ($p['login_email'] && $p['login_password'] != '') {
	# code...
	// showArray($p);
	$login_email = $p['login_email'];
    $login_password = $p['login_password'];


$sql = "SELECT * FROM tcustomer WHERE email = '$login_email' AND password = '$login_password' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
// var_dump($stmt);
$result = $stmt->fetch( PDO::FETCH_ASSOC );
// $sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet) 
// 		VALUES (?, ?, ?, ?, ?,?)";
//    $params = array($email, $pass, $tel, $perid, $birthdate, $outlet);

// 	$stmt = $conn->prepare($sql);
// 	$stmt->execute($params);
	
	if( $stmt->rowCount() ) {
 		 echo "login successfully";
 		 // header("refresh: 2;Location: coupon.php");
 		 header( 'refresh: 2; url=coupon.php' );
 		 exit(0);
 	}else{
 		echo "login unsuccessful";
	}


}


	




$conn = null;
?>