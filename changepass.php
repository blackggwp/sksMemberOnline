<!DOCTYPE html>
<html lang="">
<?php
require 'conn.php';
require 'func.php';

require'header.php';

date_default_timezone_set('Asia/Bangkok');
$p = $_POST;
// showArray($_POST);
$error = '';

if(isset($_COOKIE['customerid'])){ 
  $customerid = $_COOKIE['customerid'];


if ((isset($p['submit_changepass'])) && ($customerid != ''))  {
	// $userOldPass = $p['input_old_pass'];
	$input_new_pass = $p['input_new_pass'];
	$input_new_pass_confirm = $p['input_new_pass_confirm'];
	if ($input_new_pass == $input_new_pass_confirm) {
		changepass($conn,$input_new_pass,$customerid);
	}else{
		$error .= "<h3 style='color:red;'>ท่านใส่รหัสผ่านไม่ตรงกัน</h3>";
	}

}

}else{ 
      // redirect to homepage
      ?>
      <script>alert('กรุณาเข้าสู่ระบบก่อน');</script>
      <?php
     header( 'refresh: 0; url=index.php' );

     exit(0);
     } ?>

<?php
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
<div class="changepass_panel">
<form action="" method="post">
<h1>เปลี่ยนรหัสผ่าน</h1>
<!-- รหัสผ่านเดิม<input type="password" id="input_old_pass" name="input_old_pass" required="required"><br> -->
<label for="">รหัสผ่านใหม่</label><br>
<input type="password" id="input_new_pass" name="input_new_pass" required="required"><br>
<label for="">ยืนยันรหัสผ่านใหม่</label><br>
<input type="password" id="input_new_pass_confirm" name="input_new_pass_confirm" required="required">
<br>
<br>

	<button type="submit" name="submit_changepass">ลงมือ</button>
	<br>

</form>
<?php echo "$error"; ?>
<br>

<a class="back_btn" href="coupon.php">Back</a>

</div>


<?php 
  require 'footer.php';
 ?>

 </html>