<?php require 'initscript.php'; ?>
<div class="main_header">
    <div class="nav_bar">
    <ul>
        <li><span><a href="index.php"><b>Home</b></a></span></li>
        <li><span><a href="register.php"><b>register</b></a></span></li>
        <li><span><a href="coupon.php"><b>coupon</b></a></span></li>

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

