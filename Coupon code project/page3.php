<!DOCTYPE html>
<html lang="en">

<head>
<!-- cookie setting-->
<?php
//cookie checking
    if(isset($_COOKIE['cookie3'])){
		 header('location:page4.php');
	 }
   $value="page3";
 ?>
  <?php
    include 'layout/header.php';
  ?>
  <!-- styling -->
  <style>
    #hd1{
      margin-top:0;
      text-align:center;
    }
    #hd2{
      padding:5px;

    }
    #d2{
      margin-top:4%;
    }
    #d3{
      margin-top:3%;
    }
  </style>
</head>
<body>
  <!-- Navigation -->
   <?php
    include 'layout/menu.php';
  ?>
  <!-- body-->
  <div class="row" id="d1">
<div class="shadow-lg p-3 mb-5 bg-white rounded container col-lg-5"  id="d2" >
  <h5 class="" id="hd1">Answer the following question to unlock the coupon code</h5>
    <div class="p-3 mb-2 bg-light text-dark col-12 container" id="d3" >
    <h5 id="hd2" class="container">What is the name of our website?</h5>
       <form action="cookie1.php">
              <div class="row">
			    <div class=" col-xl-8">
				<input type="text" class="form-control" id="inputName" placeholder="Answer" name="name" required="required">
      </br>
    </div>
  </div>
        <p><strong>Hint:</strong> Search <strong>playbees technologies</strong> in google.</p>
				</div>
             <div class="container mb-5">
                <br/>
              <button type="submit" class="btn btn-primary container" >Submit and Unlock coupon code</button>
            </div>
          </form>
       </div>
     </div>
  <!-- Footer -->
 <?php
    include 'layout/footer.php';
  ?>
</body>
</html>
