<!DOCTYPE html>
<html lang="">
<?php
require'header.php';
if(isset($_COOKIE['customerid'])){ 
  $customerid = $_COOKIE['customerid'];
}
?>
<body>

<form action="form_changepass.php">
<button id="changepass_btn" onclick="changepass()">เปลี่ยนรหัสผ่าน</button>
<!-- <input type="submit"> -->
</form>
</body>
<?php
  require 'footer.php';
  function changepass(){
  	echo 'changepass';
  }
?>
</html>