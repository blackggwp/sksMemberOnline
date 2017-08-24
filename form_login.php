<?php 
require'conn.php';
// require'func.php';
require'initfunc.php';
require'initscript.php';


$p = $_POST;

if (isset($p['submit_login_form'])) {
	
if ( strlen(trim($p['login_email'])) && strlen(trim($p['login_password'])) != 0 ) {
	// showArray($p);
	$login_email = $p['login_email'];
  $login_password = $p['login_password'];


$sql = "SELECT * FROM tcustomer WHERE email = '$login_email' AND password = '$login_password' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
// var_dump($stmt);
$customerinfoArray = $stmt->fetch( PDO::FETCH_ASSOC );
// $sql = "INSERT INTO tcustomer (email, password, tel, perid, birthdate,outlet) 
// 		VALUES (?, ?, ?, ?, ?,?)";
//    $params = array($email, $pass, $tel, $perid, $birthdate, $outlet);

// 	$stmt = $conn->prepare($sql);
// 	$stmt->execute($params);
	
	if( $stmt->rowCount() ) {
 		 // echo "<h1>login success.</h1>";
 		 // header("refresh: 2;Location: coupon.php");
		setcookie( "customerid", $customerinfoArray['customerid'], time() + 36000 );

 		 header( 'refresh: 0; url=coupon.php' );
 		 exit(0);
 	}
 	else{
 		?>

 <div id="login_failed_dialog" title="Message" style="display:none;">
  <p>อีเมล์หรือรหัสผ่านไม่ถูกต้อง<br>กรุณาลองใหม่อีกครั้ง</p>
</div>
 	<script>
    $( "#login_failed_dialog" ).dialog({
      modal: true,
      buttons: {
      	Ok: function() {
          $( this ).dialog( "close" );
        	window.location.replace("index.php");

        }

      },
      close: function() {
        window.location.replace("index.php");
      }
    });
 		
 	</script>
 		<?php

 		 exit(0);

	}


}
}

	




$conn = null;
?>