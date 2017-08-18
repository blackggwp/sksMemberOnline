<?php 
require'conn.php';
require'func.php';
require'initscript.php';
date_default_timezone_set('Asia/Bangkok');

$p = $_POST;
if (isset($p['form_register_submit'])) {

if ((isset($p['registerEmail']) && (isset($p['registerPassword'])) 
	&& (isset($p['tel'])) && (isset($p['birthdate'])) )) {
	// showArray($p);
	$email = $p['registerEmail'];
    $pass = $p['registerPassword'];
    $tel = inputNumOnly($p['tel']);
    $perid = inputNumOnly($p['perid']);
    $birthdate = $p['birthdate'];
    if ($birthdate != '') {
    	$birthdate = splitDate($p['birthdate']);
    }
    $recieveInformation = $p['receiveInformation'];
    if ($recieveInformation == 'on') {
    	$recieveInformation = 'true';
    }
    $outlet = $p['outlet'];

	$systemdate = date("Y-m-d H:i:s");
    $customerid = "";
    $lastInsertId = "";

try {

$add_cus_sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet,systemdate,recieveinformation) ";
$add_cus_sql .= "VALUES ('$email', '$pass', '$tel', '$perid', '$birthdate', '$outlet','$systemdate','$recieveInformation')";
	// echo $add_cus_sql;
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
?>
<div id="register_success_dialog" title="Message" style="display:none;">
  <p>สมัครสมาชิกสำเร็จแล้ว<br>
  ระบบกำลังนำท่านไปยังหน้าคูปอง</p>
</div>
<script>
$( "#register_success_dialog" ).dialog({
      modal: true,
      close: function() {
        window.location.replace("coupon.php");
      }
    });
</script>

<?php
		 exit(0);
	}
	else{
?>
<div id="register_failed_dialog" title="Message" style="display:none;">
  <p>สมัครสมาชิกไม่สำเร็จ<br>กรุณาลองใหม่อีกครั้ง</p>
</div>

<script>
$( "#register_failed_dialog" ).dialog({
      modal: true,
      close: function() {
        window.location.replace("register.php");
      }
    });
</script>
<?php
		exit(0);
	}

}
else{
	?>
<div id="register_failed_dialog2" title="Message" style="display:none;">
  <p>ท่านกรอกข้อมูลไม่ครบถ้วน<br>กรุณาลองใหม่อีกครั้ง</p>
</div>
<script>
$( "#register_failed_dialog2" ).dialog({
      modal: true,
      close: function() {
        window.location.replace("register.php");
      }
    });
</script>
<?php	
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