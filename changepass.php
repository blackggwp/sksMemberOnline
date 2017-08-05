<?php
require 'conn.php';
require 'func.php';
date_default_timezone_set('Asia/Bangkok');
$p = $_POST;
// showArray($_POST);
$error = '';
$cusid = $_COOKIE['customerid'];


if ((isset($p['submit_changepass'])) && ($cusid != ''))  {
	// $userOldPass = $p['input_old_pass'];
	$input_new_pass = $p['input_new_pass'];
	$input_new_pass_confirm = $p['input_new_pass_confirm'];
	if ($input_new_pass == $input_new_pass_confirm) {
		changepass($conn,$input_new_pass,$cusid);
	}else{
		$error .= "<h3 style='color:red;'>ท่านใส่รหัสผ่านไม่ตรงกัน</h3>";
	}
	





}

function changepass($conn,$pass,$cusid) {
	global $error;
	$sql = "UPDATE tcustomer SET  password = '$pass' WHERE (customerid = '$cusid') ";
// echo "$sql";
$stmt = $conn->prepare($sql);
$stmt->execute();
	if( $stmt->rowCount() > 0 ) {

	$error .= "<h3 style='color:green;'>เปลี่ยนรหัสผ่านสำเร็จ</h3>";

}else{
 		$error .= "<h3 style='color:red;'>เปลี่ยนรหัสผ่านไม่สำเร็จ กรุณาลองอีกครั้ง</h3>";
	}

}
?>
<form action="" method="post">
<h2>เปลี่ยนรหัสผ่าน</h2>
<!-- รหัสผ่านเดิม<input type="password" id="input_old_pass" name="input_old_pass" required="required"><br> -->
รหัสผ่านใหม่<input type="password" id="input_new_pass" name="input_new_pass" required="required"><br>
ยืนยันรหัสผ่านใหม่<input type="password" id="input_new_pass_confirm" name="input_new_pass_confirm" required="required">

	<button type="submit" name="submit_changepass">ลงมือ</button>
</form>
<?php echo "$error"; ?>
<a href="coupon.php">Back</a>