<?php 
	print_r($_POST);
	$p = $_POST;
	$r = $p['ref'];
	// echo $r;

include('conn.php');
$query = "INSERT INTO tcouponee (promotioncode) VALUES ('code')";
$stmt = $conn->exec( $query );

	if ($stmt === false) {
		echo "Save Coupon not complete.\n";
	}
   $lastRow = $conn->lastInsertId('tcoupon');  
   echo "last row = " .$lastRow . "\n";  
 ?>