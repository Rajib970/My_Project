<!DOCTYPE html>
<html lang="en">

<head>
<!-- cookie setting-->
<?php
   $value="page5";
   setcookie("cookie5",$value);
 ?>
  <!-- header-->
  <?php
    include 'layout/header.php';
  ?>
  <!-- fontawsome cdn link -->
<link rel="stylesheet" href="css/all.css">
  <!-- styling -->
  <style>
  #div2{
    align:center;
    margin-top:7%;
  }
   div#d3 h3{
    text-align:center;
  }

  </style>

</head>
<body>
  <!-- Navigation -->
   <?php
    include 'layout/menu.php';
  ?>
  <!--body-->
  <div class="row" id="div1">
     <div class="shadow-lg p-3 mb-5 bg-white rounded container col-xl-5 " id="div2">
       <div class="container" id="d3">
         <h3>Thank you for using our service.</h3>
         <p align="center"id="p1">Your coupon code is</p>
         <div class="alert alert-primary container col-lg-6" role="alert" style="padding:18px;text-align:center;" >
          <!-- coupon code generate code -->12345
        </div>
       </div>
       <div class="container row">
         <div class="col-lg-12">
      <i class="fas fa-smile" style="font-size:120px;color:orange;margin-left:38.3%;"></i>
    </div>
  </div>
</div>
</div>
</body>
</html>
