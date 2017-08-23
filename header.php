<?php require 'initscript.php'; ?>
<div class="main_header">
    
    <div class="nav_bar">
    <ul>
        <li><span><a href="index.php"><b>HOME</b></a></span></li>
        <li><span><a href="register.php"><b>REGISTER</b></a></span></li>
        <li><span><a href="coupon.php"><b>COUPON</b></a></span></li>

    </ul>
        
    </div>

</div>

<div class="usercmd">
    <div>
        <?php if(isset($_COOKIE['customerid']) && ($_COOKIE['customerid'] != ''))
        { 
            echo '<a href="logout.php"><div id="logout_btn"><b>LOG OUT</b></div></a>'; 
            // echo '<div><a href="logout.php"><img src="img/logout.png" class="cmd_image" alt="logout button"></a></div>'; 

            echo '<a href="changepass.php"><div id="changepass_btn"><b>CHANGE PASSWORD</b></div></a>'; 
            // echo '<div><a href="changepass.php"><img src="img/changepass.png" class="cmd_image" alt="logout button"></a></div>'; 

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

