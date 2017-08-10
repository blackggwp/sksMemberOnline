<!DOCTYPE html>
<html lang="">
<?php
require'header.php';

$outlet = array(
'B12' =>
'Sukishi BBQ The Mall Bangkapi',
'S01' =>
'Sukishi BBQ Central Pinklao',
'S10' =>
'Sukishi BBQ Future  Rangsit',
'S11' =>
'Sukishi BBQ Central Ladprao 2',
'S15'=>
'Sukishi BBQ Siam Center',
'S17'=>
'Sukishi BBQ Central Chaengwattana',
'S18'=>
'Sukishi BBQ Central Festival Pattaya Beach',
'S23Q'=>
'Sukishi BBQ The Mall Ngamwongwan',
'S24'=>
'Sukishi BBQ Central Chonburi',
'S28'=>
'Sukishi BBQ Rattanathibet',
'S29Q'=>
'Sukishi BBQ Central Khonkaen',
'S34'=>
'Sukishi BBQ The Mall BangCare',
'S36'=>
'Sukishi BBQ CentralWorld',
'S37'=>
'Sukishi BBQ Central Bangna 2',
'S41'=>
'Sukishi BBQ Central Phuket',
'S50'=>
'Sukishi BBQ Central Phitsanulok',
'S52'=>
'Sukishi BBQ Central Rama 9',
'S54'=>
'Sukishi BBQ Central Udon',
'S60'=>
'Sukishi BBQ Central suratthani',
'S61'=>
'Sukishi BBQ Central lampang',
'S66'=>
'Sukishi BBQ Central UBN',
'S69'=>
'Sukishi BBQ Mega Bangna',
'S71'=>
'Sukishi BBQ FASHION ISLAND',
'S72'=>
'Sukishi BBQ CT CHIANG MAI',
'S73'=>
'Sukishi BBQ Robinson Saraburi',
'S74'=>
'Sukishi BBQ Central Hadyai1',
'S76'=>
'Sukishi BBQ Robinson Surin',
'S78'=>
'Sukishi BBQ ROBINSON CHACHENGSAO',
'S79'=>
'Sukishi BBQ Central Rama 2',
'S80'=>
'Sukishi BBQ CT Westgate Bangyai',
'S81'=>
'Sukishi BBQ Bluport Huahin'
);
?>
<body>
<div class="bg_register">
<section id="root_content">
<div class="container" style="text-align: center;">
<!-- <h1>Sukishi Register Online</h1> -->



<form action="form_register.php" method="post" id="form_register">

<div class="register_panel">
<div class="welcome_message">
<p><b>ยินดีต้อนรับท่านเข้าสู่การเป็นสมาชิก 
Sukishi E-Member</b></p>
<p>ลงทะเบียนกับเราเพื่อให้คุณมีช่วงเวลาดีๆ ที่ซูกิชิ</p>
<p>พร้อมรับข่าวสารและโปรโมชั่นก่อนใคร</p>
<p>รวมทั้งสิทธิพิเศษมากมายที่ไม่ควรพลาด!</p>
</div>
<hr>
<h2>สมัครสมาชิก</h2>

<h2>อีเมล<span class="input_require">*</span></h2>
<input type="email" name="registerEmail" placeholder="name@email.com" required>
<h2>รหัสผ่าน<span class="input_require">*</span></h2>

<input type="password" name="registerPassword" placeholder="Password" required>

<h2>หมายเลขโทรศัพท์มือถือ<span class="input_require">*</span></h2>
<p>กรอกเบอร์โทรศัพท์มือถือเพื่อรับสิทธิพิเศษมากมายทาง SMS</p>
    <input type="tel" name="tel" id="inputTel" class="form-control" value="" title="" placeholder="081-123-4567" required>

    <h2>หมายเลขบัตรประชาชน</h2>
    <input type="number" name="perid" id="InputPerid" class="form-control" value="" title="" placeholder="0-0000-00000-00-0">

<h2>วัน / เดือน / ปีเกิด <span>*</span></h2>
<p>กรอกเดือนเกิดตามบัตรประชาชนเพื่อรับของขวัญสุดพิเศษในเดือนเกิดของคุณ</p>
    <input type="text"  id="birthdate" name="birthdate" placeholder="- Click Select -" required>


<h2>สาขาที่คุณสะดวก</h2>
<!-- <select name="registerOutlet" id="registerOutlet" class="form-control">
      <option value="" selected="selected">สาขา</option>
      <option value="S01">S01</option>
      <option value="S10">S10</option>


    </select> -->

    <select name="outlet" id="outlet">
    <option value="" selected>Choose here</option>
  <?php
    foreach ($outlet as $key => $value) {
      echo '<option value="'.$key.'">'.$value.'</option>';
    }
  ?>
</select>

<br>
<br>

<div class="checkbox">
  <label>
    <input type="checkbox" class="receiveInformation" name="receiveInformation">
    ต้องการรับข้อมูลข่าวสาร ทางอีเมลและ SMS
  </label>
</div>


  <button type="submit" name="form_register_submit" id="register_submit_btn">สมัครสมาชิก</button>

</div>

</form>

</div>

</section>
</div>
</body>

<?php
  require 'footer.php';
?>

</html>
