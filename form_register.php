<?php 
require'conn.php';
require'func.php';

$p = $_POST;

if ((isset($p['registerEmail']) && (isset($p['registerPassword'])))) {
	# code...
	// showArray($p);
	$email = $p['registerEmail'];
    $pass = $p['registerPassword'];
    $tel = $p['tel'];
    $perid = $p['perid'];
    $birthdate = splitDate($p['birthdate']);
    $outlet = $p['registerOutlet'];

$sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet) 
		VALUES (?, ?, ?, ?, ?,?)";
   $params = array($email, $pass, $tel, $perid, $birthdate, $outlet);

	$stmt = $conn->prepare($sql);
	$stmt->execute($params);
	
	if( $stmt->rowCount() ) {
		 echo "register successfully";
 		 header( 'refresh: 2; url=coupon.php' );
		 exit(0);
	}else{
		echo "register unsuccessful";
	}



}

	




$conn = null;
?>