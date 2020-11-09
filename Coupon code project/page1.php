<!DOCTYPE html>
<html lang="en">

<head>
<!-- cookie checking-->
<?php
     if(isset($_COOKIE['cookie1'])){
       header('location:page2.php');
     }
   $value="page1";
    ?>
  <?php
    include 'layout/header.php';
  ?>
</head>

<body>

  <!-- Navigation -->
   <?php
    include 'layout/menu.php';
  ?>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">&#8377;500-&#8377;5000 Gift Voucher To Grow Your Business</h1>
		  <br/>
          <p class="lead mb-5 text-white">Unlock your coupon code to get the gift voucher</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-12 ">
        <h2>Follow the below instructions to get the coupon code</h2>
        <hr>
            <h3 >Steps</h3>
          </div>
          <ul>
            <li>Step 1: Register for the service</li>
            <li>Step 2: Give answer of a question to unlock the coupon code</li>
            <li>Step 3: Get the coupon code</li>
          </ul>
        <!-- <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a> -->
      </div>
      <div class="container mb-5">
        <hr>
        <form action="" method="POST">
      <button class="btn btn-success" name="button">Proceed &rarr;</button>
      <!--- cookie setting -->
      <?php if(isset($_POST['button'])){
        setcookie("cookie1",$value);
        header('location:page2.php');
      }
      ?>
    </form>
    </div>
    </div>
  </div>
  <!-- Footer -->
 <?php
    include 'layout/footer.php';
  ?>
</body>
</html>
