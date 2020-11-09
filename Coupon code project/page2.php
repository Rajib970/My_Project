<!DOCTYPE html>
<html lang="en">

<head>
<!-- cookie setting-->
<?php
   $value="page2";
     if(isset($_COOKIE['cookie2'])){
		 header('location:page3.php');
	 }
 ?>
  <!-- header-->
  <?php
    include 'layout/header.php';
  ?>
  <!-- styling -->
  <style>


  #div2{
    align:center;
    margin-top:4%;
  }
  h2{
    text-align:center;
  }
  form{
    padding:15px;
    margin-left:9%;
  }
  button{
    margin-top:7%;
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
       <header>
       <h2 >Register Now! </h2>
     </header>
     <div class="Container">
       <form  method="POST" action="userdata.php">
      <div class="form-group col-xl-10 ">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" required="required">
      </div>
      <div class="form-group col-xl-10">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required="required" >
      </div>
    <div class="form-group col-xl-10">
      <label for="inputPhno">Phone No.</label>
      <input type="tel" maxlength="10" class="form-control" id="inputPhno" placeholder="Enter ten digits" name="phno" minlength="10" required="required" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
    </div>
      <div class="form-group col-xl-10">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control" name="state" >
          <option selected>Choose...</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option >Andaman and Nicobar Islands</option>
  <option >Arunachal Pradesh</option>
  <option >Assam</option>
  <option >Bihar</option>
  <option >Chandigarh</option>
  <option>Chhattisgarh</option>
  <option >Dadar and Nagar Haveli</option>
  <option >Daman and Diu</option>
  <option>Delhi</option>
  <option >Lakshadweep</option>
  <option >Puducherry</option>
  <option >Goa</option>
  <option >Gujarat</option>
  <option >Haryana</option>
  <option >Himachal Pradesh</option>
  <option>Jammu and Kashmir</option>
  <option >Jharkhand</option>
  <option >Karnataka</option>
  <option >Kerala</option>
  <option >Madhya Pradesh</option>
  <option >Maharashtra</option>
  <option>Manipur</option>
  <option>Meghalaya</option>
  <option >Mizoram</option>
  <option>Nagaland</option>
  <option >Odisha</option>
  <option >Punjab</option>
  <option >Rajasthan</option>
  <option >Sikkim</option>
  <option>Tamil Nadu</option>
  <option >Telangana</option>
  <option>Tripura</option>
  <option >Uttar Pradesh</option>
  <option >Uttarakhand</option>
  <option >West Bengal</option>
        </select>
      </div>
      <div class="form-group col-xl-10">
        <label for="inputprofession">Profession</label>
        <select id="profession" class="form-control" name="role" >
          <option selected>Choose...</option>
          <option>Businessman</option>
          <option>Service</option>
          <option>Student</option>
        </select>
      </div>
      <div class="container">
    <button type="submit" class="btn btn-primary btn-block col-lg-8 " name="register">Register</button>
  </div>
  </form>
</br>
</div>
</div>
</div>
<!-- Footer -->
     <?php
   include('layout/footer.php');
      ?>


</body>


</html>
