<!DOCTYPE html>
<html lang="">
<?php
require'header.php';
?>
<body>
<div class="bg_index">
<section id="root_content">
<div class="container" style="text-align: center;">
<!-- <h1>Sukishi Register Online</h1> -->



<form action="form_login.php" method="post">

<div class="portal_panel">
<div class="portal_login" style="width:50%;">
<h2>เข้าสู่ระบบ</h2>

<h2>อีเมล</h2>
<input type="email" name="login_email" required="required">
<h2>รหัสผ่าน</h2>
<input type="password" name="login_password" required="required">

<div class="remember_forget">

	<div class="remember_login" style="display:inline;width:180px;">
			


	</div>
	<br>
	

<a href="form_login.php">
	<button type="submit" class="login_btn" name="submit_login_form">เข้าสู่ระบบ</button>
</a>
</div>

</div>


</form>

<div class="portal_regis" style="padding-top: 10px;width: 40%;margin-left: 20px;margin-right:0px">
	<p><b>ยินดีต้อนรับท่านเข้าสู่การเป็นสมาชิก 
Sukishi E-Member</b></p>
<p>ลงทะเบียนกับเราเพื่อให้คุณมีช่วงเวลาดีๆ ที่ซูกิชิ
พร้อมรับข่าวสารและโปรโมชั่นก่อนใคร</p>

<p>รวมทั้งสิทธิพิเศษมากมายที่ไม่ควรพลาด</p>
<a href="register.php">
	<button type="button" class="register_btn">สมัครสมาชิก</button>
</a>

</div>

</div>


</div>

</section>
</div>

</body>
<?php
  require 'footer.php';
?>

</html>
