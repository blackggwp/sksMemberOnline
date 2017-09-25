<p id="coupon_des_text">Grill Lover Set A :  เนื้อหมูติดมันหมักซอสซูกิชิ  เสิร์ฟพร้อม ข้าวผัดกระเทียม,  ซุปใส และโค้ก</p>

<script>
    
const mq = window.matchMedia( "(max-width: 460)" );
if (mq.matches) {
    alert('true');

} else {
    alert('false');
}
    
</script>

<?php 
require'conn.php';
// require'func.php';
require'initscript.php';
require'initfunc.php';

$email = 'ttt@ttt';
$perid = '3434254325445';

//checkEmail($conn,$email);
// checkPerid($conn,$perid);


function checkEmail($conn,$email) {
$chkEmailStr = " SELECT email FROM tcustomer WHERE email = '$email' ";
$stmt = $conn->prepare($chkEmailStr);
$stmt->execute();
// var_dump($stmt);
$chkemail = $stmt->rowCount();
	
	if( $chkemail == -1 ) {
?>
<div id="email_used_dialog" title="Message" style="display:none;">
  <p>อีเมล์นี้ถูกใช้ไปแล้ว</p>
</div>
<script>
$( "#email_used_dialog" ).dialog({
      modal: true,
      buttons: {
      	Ok: function() {
        	window.location.replace("register.php");
      	}
      },
      close: function() {
        window.location.replace("register.php");
      }
    });
</script>
<?php
 		 // echo "found !!";
 		 exit(0);
 	}
}
function checkPerid($conn,$perid) {
$chkPeridStr = " SELECT perid FROM tcustomer WHERE (perid = '$perid') ";

$stmt = $conn->prepare($chkPeridStr);
$stmt->execute();
var_dump($stmt);
$chkperid = $stmt->rowCount();
// echo "returnRow = ".$chk;
	if( $chkperid == -1 ) {
?>
<div id="perid_used_dialog" title="Message" style="display:none;">
  <p>หมายเลขบัตรประชาชนนี้ถูกใช้ไปแล้ว</p>
</div>
<script>
$( "#perid_used_dialog" ).dialog({
      modal: true,
      buttons: {
      	Ok: function() {
        	window.location.replace("register.php");
      	}
      },
      close: function() {
        window.location.replace("register.php");
      }
    });
</script>
<?php
 		 // echo "found !!";
 		 exit(0);
 	}
}
 ?>