<?php 
require'conn.php';
require'func.php';
date_default_timezone_set('Asia/Bangkok');

$p = $_POST;
if (isset($p['form_register_submit'])) {

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
 		 header( 'refresh: 2; url=coupon.php' );

		 exit(0);
	}else{
		echo "<h1>register unsuccessfull</h1>";
		exit(0);
	}

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