<!DOCTYPE html>
<html lang="">
<?php
require'header.php';
$text = '123';
?>
<body>
<div class="bg_index">
<section id="root_content">
<div class="container" style="text-align: center;">
<!-- <h1>Sukishi Register Online</h1> -->

<div class="container" style="text-align: -webkit-center;">
<h1>Set A</h1>
<div style="max-width:50%;">
  <img src="img/seta.jpg" style="width: 100%;
" alt="">
<br>
<br>

<button class="getcoupon_btn seta_btn">คลิกรับคูปองชุด A</button>

<br>
<br>
<hr>

  <div id="res_seta"></div>

</div>

<h1>Set B</h1>
<div style="max-width:50%;">
  <img src="img/setb.jpg" style="width: 100%;
" alt="">
<br>
<br>

<button class="getcoupon_btn setb_btn">คลิกรับคูปองชุด B</button>

<br>
<br>
<hr>

  <div id="res_setb"></div>


</div>

<h1>Set C</h1>
<div style="max-width:50%;">
  <img src="img/setc.jpg" style="width: 100%;
" alt="">
<br>
<br>

<button class="getcoupon_btn setc_btn">คลิกรับคูปองชุด C</button>

<br>
<br>
<hr>

  <div id="res_setc"></div>

</div>

</div>

</div>



</section>
</div>


<div class="getcoupon">
<div class="barcode_panel">
	<img class="img_barcode" alt="Sukishi Promotion" src="barcode.php?print=true&size=80&text=SKGLA59000001" />
</div>

  <div class="close_dialog">
  	<img class="close_img" alt="close" src="img/close.png" />
  </div>
  </div>


</body>
<?php
  require 'footer.php';
?>
</html>