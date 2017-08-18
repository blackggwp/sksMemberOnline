<!DOCTYPE html>
<html lang="">
<?php
require'header.php';
$text = '123';



if(isset($_COOKIE['customerid'])){ 
  $customerid = $_COOKIE['customerid'];

?>
<body>
<div class="bg_index">
<section id="root_content">

<input type="hidden" name="customerid" id="customerid" value="<?php echo "$customerid"; ?>">

<br>

<div class="container" style="text-align: center;">

<div class="container" style="text-align: -webkit-center;">
<h2>Grill Lover Set A</h2>
<h3>เนื้อหมูติดมันหมักซอสซูกิชิ เสิร์ฟพร้อม ข้าวผัดกระเทียม, ซุปใส และ โค้ก</h3>

<div class="imgset">
  <a class="imgPopup" href="img/seta.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/seta.jpg" width="100%" />  
  </a>
  
<br>
<br>

<button class="getcoupon_btn seta_btn">คลิกรับคูปองชุด A</button>
<br>
<!-- <a class="getcoupon_btn seta_btn" href="#">คลิกรับคูปองชุด A</a> -->

<br>
<br>
  <div id="res_A"></div>
<hr>

</div>

<h2>Grill Lover Set B</h2>
<h3>เนื้อหมูดำคุโรบุตะสไลด์ เสิร์ฟพร้อม ข้าวผัดกระเทียม ซุปใส และ โค้ก</h3>
 
<div class="imgset">
  <a class="imgPopup" href="img/setb.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/setb.jpg" width="100%" />  
  </a>
<br>
<br>

<button class="getcoupon_btn setb_btn">คลิกรับคูปองชุด B</button>

<br>
<br>
  <div id="res_B"></div>
<hr>

</div>

<h2>Grill Lover Set C</h2>
<h3>ปลาหมึกหมักสไตล์เกาหลี และ เบคอน เสิร์ฟพร้อม ข้าวผัดกระเทียม 2 ถ้วย, ไข่ตุ๋น, ซุปใส 2 ถ้วย และโค้ก 2 ขวด</h3>

<div class="imgset">
  <a class="imgPopup" href="img/setc.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/setc.jpg" width="100%" />  
  </a>
<br>
<br>

<button class="getcoupon_btn setc_btn">คลิกรับคูปองชุด C</button>

<br>
<br>
  <div id="res_C"></div>

<hr>


</div>

</div>

</div>



</section>
</div>


<div class="getcoupon_dialog">
<!-- <div class="barcode_panel">
	<img class="img_barcode" alt="Sukishi Promotion" src="barcode.php?print=true&size=80&text=SKGLA59000001" />
</div> -->

  <div class="close_dialog">
  	<img class="close_img" alt="close" src="img/close.png" />
  </div>
</div>


</body>
<?php
  require 'footer.php';
?>
</html>

<?php  }
else{ 
  ?>

<div id="login_first_dialog" title="Message" style="display:none;">
  <p>กรุณาเข้าสู่ระบบก่อน</p>
</div>

      <script>
      // alert('กรุณาเข้าสู่ระบบก่อน');

      $( "#login_first_dialog" ).dialog({
        modal: true,
        Ok: function() {
          $( this ).dialog( "close" );
          window.location.replace("index.php");

        },
        close: function() {
            window.location.replace("index.php");
        }
        });
      </script>
      <?php
     // header( 'refresh: 0; url=index.php' );

     exit(0);
     } 
?>
