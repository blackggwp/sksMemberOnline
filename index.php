<!DOCTYPE html>
<html lang="">
<div class="index_header"></div>
<?php
require'header.php';
?>

<body style="background-image: url(img/bg0.jpg);
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;">
    <div class="bg_index">
        <div class="displayed_decoration_img" style="text-align:right;height: 0px;">
            <img class="decoration_img" src="img/b2.png" alt="">
        </div>
        <section id="root_content">
            <div class="container" style="text-align: center;">
                <!-- <h1>Sukishi Register Online</h1> -->

                <form action="form_login.php" method="post" name="login_form" id="login_formm">

                    <div class="portal_panel">

                        <div class="displayed_img_mascot"><img class="headerimg_mascot" src="img/0-04.png" alt=""></div>

                        <div class="welcome_message">
                            <p><b>ยินดีต้อนรับท่านเข้าสู่การเป็นสมาชิก 
								Sukishi E-Member</b></p>
                            <p>ลงทะเบียนกับเราเพื่อให้คุณมีช่วงเวลาดีๆ ที่ซูกิชิ</p>
                            <p>พร้อมรับข่าวสารและโปรโมชั่นก่อนใคร</p>
                            <p>aaaรวมทั้งสิทธิพิเศษมากมายที่ไม่ควรพลาด!</p>
                        </div>

                        <div class="portal_login_panel">
                            <!-- <h1 style="font-size: 2.5em;">เข้าสู่ระบบ</h1> -->

                            <h1 style="font-size: 2em;">เข้าสู่ระบบ</h1>
                            <p>
                                <h2>อีเมล</h2>
                                <label id="login_email-error" class="error" for="login_email"></label>
                                <br>
                                <input type="email" id="login_email" name="login_email">
                            </p>

                            <p>
                                <h2>รหัสผ่าน</h2>
                                <label id="login_password-error" class="error" for="login_password"></label>
                                <br>
                                <input type="password" id="login_password" name="login_password">
                            </p>

                            <a id="forgetpass_btn" class="forget_password" href="forgetpass.php" target="_blank">ลืมรหัสผ่าน</a>
                            <br>
                            <br>

                            <!-- <input type="submit" class="login_btn" name="submit_login_form" value="เข้าสู่ระบบ" /> -->

                            <a href="form_login.php">
                                <button type="submit" class="login_btn" name="submit_login_form">เข้าสู่ระบบ</button>
                            </a>
                        </div>
                </form>

                <div class="portal_register_panel">

                    <a href="register.php">
                        <div class="register_btn">สมัครสมาชิก</div>
                    </a>
                </div>
                <div class="displayed_footer_mascot">
                    <img class="footerimg_mascot" src="img/0-03.png" alt="">

                </div>

                </div>


            </div>
            <br>
        </section>
    </div>

</body>
<?php
	require 'footer.php';
	?>

</html>

<div id="userlogin_failed_dialog" title="Message" style="display:none;">
    <p>ท่านกรอกข้อมูลอีเมล์ไม่ถูกต้อง<br>กรุณาลองใหม่อีกครั้ง</p>
</div>