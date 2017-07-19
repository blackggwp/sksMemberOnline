<?php 
require'conn.php';
require'func.php';

$p = $_POST;
if ((isset($p['registerEmail']) && (isset($p['registerPassword'])))) {
	// showArray($p);
	$email = $p['registerEmail'];
    $pass = $p['registerPassword'];
    $tel = $p['tel'];
    $perid = $p['perid'];
    $birthdate = splitDate($p['birthdate']);
    $outlet = $p['outlet'];
    $customerid = "";
    $lastInsertId = "";

try {

$add_cus_sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet) ";
$add_cus_sql .= "VALUES ('$email', '$pass', '$tel', '$perid', '$birthdate', '$outlet')";
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
		 echo "<h1>register successfull</h1>";
		 include 'libs/thaimailer.php';
		 ini_set('smtp', 'smtp.totisp.net');
		 try{
		 mail_to('ironhighh@gmail.com');
		 mail_from('black.thitikorn@gmail.com');
		 mail_subject('test subject');
		 mail_body('contenttttt');
		 mail_send();
		}catch(Exception $e)  
			{   
				die( print_r( $e->getMessage() ) );   
			} 

			// redirect to homepage
 		 // header( 'refresh: 2; url=coupon.php' );

		 exit(0);
	}else{
		echo "<h1>register unsuccessfull</h1>";
		exit(0);
	}

}

function updatetcustomer($conn){
	global $customerid,$lastInsertId;
	$updatesql = "UPDATE tcustomer SET customerid = '$customerid' WHERE (id = '$lastInsertId') ";
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
try{
	$genCustomeridQuery = "INSERT INTO tcustomerdetail (customername) ";
	$genCustomeridQuery .= "VALUES ('black')";
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