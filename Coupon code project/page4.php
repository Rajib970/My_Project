<!DOCTYPE html>
<html lang="en">

<head>
<!-- cookie setting-->
<?php
//cookie checking
   if(isset($_COOKIE['cookie4'])){
		 header('location:page5.php');
	 }
      $value="page4";
 ?>
  <!--session set-->
  <?php
    include 'layout/header.php';
  ?>
  <!-- jquery code -->
  <script src="jquery.js"></script>
   <!--  <script>
  $(document).ready(function(){
    $("button#b2").click(function(){
      $("#myModal").hide();
  });
});
</script>  -->


  <!-- fontawsome cdn link -->
  <link rel="stylesheet" href="css/all.css">
<style>
#d1{
  margin-top:5%;
}
#d2{
  text-align:center;
}
#d3{
  margin-top:3%;
}
#p1{
  padding:6px;
  font-size:110%;
}
div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\2605';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\2605';
   font-family: FontAwesome;

}
</style>
</head>

<body>

  <!-- Navigation -->
   <?php
    include 'layout/menu.php';
  ?>
  <!-- body-->
  <div class="row " id="d1" >
<div class="shadow-lg p-3 mb-5 bg-white rounded container  col-lg-7 " id="d2" >
  <h3 align="center"  style="padding:5px;">Congratulations! You won a gift voucher </h3>
    <div class="p-3 mb-2 bg-light text-dark col-md-6 container" id="d3">
    <p align="center"id="p1">Your coupon code is</p>
    <div class="alert alert-primary mb-2 col-md-12" role="alert" style="padding:18px;" >
     <!-- coupon code generate code -->12345
   </div>
 </br>
<div class="container-fluid">
     <h6 > Share this offer with:
     <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" style="font-size:20px;color:blue;">&nbsp;</i></a>
    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"style="font-size:21px;color:orange">&nbsp;</i></a>
    <a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"style="font-size:21px;color:#55f107">&nbsp;</i></a>
    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"style="font-size:21px;color:#07c6f1">&nbsp;</i></a>
  </h6>
</div>
</div>
 <div class="stars">
   <br/>
    <h5 align="center">Rate us </h5>
 <form action="rating.php" method="POST">
  <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
  <label class="star star-5" for="star-5"></label>
  <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
  <label class="star star-4" for="star-4"></label>
  <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
  <label class="star star-3" for="star-3"></label>
  <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
  <label class="star star-2" for="star-2"></label>
  <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
  <label class="star star-1" for="star-1"></label>
  <button type="submit" class="btn btn-primary">
    <a href = "mailto:abc@example.com?sub = Feedback&body = Message">Submit</button>
      </form>
       </div>
        </div>
           </div>
    </div>

 <!-- Footer -->
 <?php
   include 'layout/footer.php';
 ?>
</body>
</html>
