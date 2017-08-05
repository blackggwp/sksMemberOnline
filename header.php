<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sukishi E-Member</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="screen.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.structure.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.theme.min.css" />

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

    
    <script src="app.js"></script>

    <!-- Add respond.js for responsive table-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<div class="main_header">
    <div style="float:left;">
        <a href="index.php">Home</a>
        <a href="register.php">register</a>
        <a href="coupon.php">coupon</a>
        <!-- <a href="profile.php">myprofile</a> -->
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