<!DOCTYPE html>
<html lang="">
<div class="coupon_header"></div>
<?php
require'header.php';
$text = '123';



if(isset($_COOKIE['customerid'])){
  $customerid = $_COOKIE['customerid'];

?>
<body style="background-image: url(img/bg0.jpg);
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;">
<body>
<div class="bg_index">
<div class="displayed_decoration_img" style="text-align:right;height: 0px;">
    <img class="decoration_img" src="img/b2.png" alt="">
  </div>
<section id="root_content">

<input type="hidden" name="customerid" id="customerid" value="<?php echo "$customerid"; ?>">

<br>

<div class="container" style="text-align: center;">

<div class="container" style="text-align: -webkit-center;">
<!-- <h2>Grill Lover Set A</h2> -->
<div class="coupon_heading_text"><img src="img/0-02.png" style="max-width: 10em;max-height: 10em;" alt=""></div>

<div class="imgset">
  <a class="imgPopup" href="img/CO1.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/CO1.jpg" class="displayed_coupon_img" />
  </a>
<h3 class="coupon_des_text set_a">Grill Lover Set A:  เนื้อหมูติดมันหมักซอสซูกิชิ  เสิร์ฟพร้อม ข้าวผัดกระเทียม,  ซุปใส และ โค้ก</h3>

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

<!-- <h2>Grill Lover Set B</h2> -->
<!-- <div class="coupon_heading_text"><img src="img/0-02.png" style="max-width: 14em;max-height: 14em;" alt=""></div> -->


<div class="imgset">
  <a class="imgPopup" href="img/c-o-02.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/c-o-02.jpg" class="displayed_coupon_img" />
  </a>
<h3 class="coupon_des_text set_b">Grill Lover Set B:  เนื้อหมูดำคุโรบุตะสไลด์  เสิร์ฟพร้อม ข้าวผัดกระเทียม,  ซุปใส และ โค้ก</h3>
<br>
<br>

<button class="getcoupon_btn setb_btn">คลิกรับคูปองชุด B</button>

<br>
<br>
  <div id="res_B"></div>
<hr>

</div>

<!-- <h2>Grill Lover Set C</h2> -->
<!-- <div class="coupon_heading_text"><img src="img/0-02.png" style="max-width: 14em;max-height: 14em;" alt=""></div> -->

<div class="imgset">
  <a class="imgPopup" href="img/c-o-03.jpg" class="with-caption image-link" title="Click on image to enlarge/reduce it">
  <img src="img/c-o-03.jpg" class="displayed_coupon_img" />
  </a>
<h3 class="coupon_des_text set_c">Grill Lover Set C:  ปลาหมึกหมักสไตล์เกาหลี  และเบคอน เสิร์ฟพร้อม ข้าวผัดกระเทียม 2 ถ้วย,  ไข่ตุ๋น, ซุปใส 2 ถ้วย  และโค้ก 2 ขวด</h3>

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
  <!-- <p>กรุณาเข้าสู่ระบบก่อน</p> -->
  <div style="text-align: center;">
  <img src="img/0-09.png" style="width: 200px;height: 100px;" alt="login first alert">
  </div>
</div>

      <script>
      // alert('กรุณาเข้าสู่ระบบก่อน');

      $( "#login_first_dialog" ).dialog({
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
     // header( 'refresh: 0; url=index.php' );

     exit(0);
     }
?>
