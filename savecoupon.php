<?php 
	print_r($_POST);
	$p = $_POST;
	$r = $p['ref'];
	echo $r;

include('conn.php');
$query = "INSERT INTO tcoupon (promotioncode) VALUES ('code')";
$result = mssql_query($query)or die('Error querying MSSQL database');
var_dump($result);
 ?>