<?php require 'initscript.php'; ?>
<div class="main_header">
    <div class="nav_bar">
    <ul>
        <li><span><a href="index.php">Home</a></span></li>
        <li><span><a href="register.php">register</a></span></li>
        <li><span><a href="coupon.php">coupon</a></span></li>

    </ul>
        
    </div>

</div>

<div class="usercmd" style="background-color:red;">
    <div style="float:right;">
        <?php if(isset($_COOKIE['customerid']) && ($_COOKIE['customerid'] != ''))
        { 
            echo '<div id="logout_btn"><a href="logout.php">ออกจากระบบ</a></div>'; 
            echo '<div id="changepass_btn"><a href="changepass.php">เปลี่ยนรหัสผ่าน</a></div>'; 

            // echo '<button id="logout_btn" onclick="logout.php">logout</button>';

        }
         ?>
    </div>
    
    <!-- <div id="changepass_panel">
        
    </div>
    <div class="close_dialog">
            <img class="close_img" alt="close" src="img/close.png" />
    </div> -->
</div>

