<!-- Starting session -->
<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
  // Connecting database
  include('includes/constant.php');
  // Updating profile details
  if(isset($_POST['update'])){
    $phone=$_SESSION['user'];
    $id=$_SESSION['id'];
    // Checking image need to update or not
    if($_POST['name']!=null){
      $name=$_POST['name'];
      $query="UPDATE `users_rent` SET `Name`='$name' WHERE `Id`='$id'";
      $run=mysqli_query($con,$query);
    }

    // Checking Phone no. need to update or not
    if($_POST['phone']!=null){
      $no=$_POST['phone'];
      $query="SELECT  `Sl` FROM `rent_goods` WHERE `Phone`='$phone'";
      $run=mysqli_query($con,$query);
      $result=mysqli_fetch_assoc($run);

      // updating phone number in required rows
      $sl=$result['Sl'];
      $query="UPDATE `rent_goods` SET `Phone`='$no' WHERE `Sl`='$sl'";
      $run=mysqli_query($con,$query);
      $query="UPDATE `users_rent` SET `Phone`='$no' WHERE `Id`='$id'";
      $run=mysqli_query($con,$query);
      // Setting new phone number in session
      $_SESSION['user']=$no;
    }
  // Checking password need to update or not
  if($_POST['password']!=null){
    $str=$_POST['password'];
    $password=base64_encode($str);
    // query to update Password`
    $query="UPDATE `users_rent` SET `Password`='$password' WHERE `Id`='$id'";
    $run=mysqli_query($con,$query);
  }
  // Checking image need to update or not
  if($_FILES['img']['type']!=null){
    $img=$_FILES['img']['name'];
    $temp_name=$_FILES['img']['tmp_name'];
    // query to update Image name
    $query="UPDATE `users_rent` SET `Image`='$img' WHERE `Phone`='$phone'";
    $run=mysqli_query($con,$query);
    move_uploaded_file($temp_name,"img/users_image/$img");
  }
}
  // Fetching profile details form databadse
  $id=$_SESSION['id'];
  $query="SELECT * FROM `users_rent` WHERE `Id`='$id'";
  $run=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($run);
  $name=$row['Name'];
  $phone=$row['Phone'];
  $str=$row['Password'];
  $password=base64_decode($str);
  $img=$row['Image'];
  ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- header -->
    <?php
    include 'layout/header.php';
    ?>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Stylesheets -->

    <link rel="stylesheet" href="assets/css/docs.theme.min.css">
    <!-- Stylesheets -->

    <link rel="stylesheet" href="assets/css/docs.theme.min.css">
    <!-- Custom fonts for this template-->

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- javascript -->
    <script src="assets/vendors/jquery.min.js"></script>
    <!-- jquery script -->
    <script src="jquery.js"></script>

    <!-- javascript for image preview -->
    <script src="js/jquery.uploadPreview.js"></script>

    <!--jquery-->
    <script>
    // Input image
    $(document).ready(function(){
      $("#img").click(function(){
        $("#InputImg").click();
      });
      $("#icon").click(function(){
        $("#InputImg").click();
      });
      // Display image after selecting
      $.uploadPreview({
        input_field:"#InputImg",
        preview_box:"#divImage",
        success_callback: function(){
          var i=$("#img,#icon");
          i.animate({opacity:0});
        }
      });
      // Input Name
      $("#Name").click(function(){
        $("#Name").hide();
        $("#InputName").show();
      });
      // Input Phone No.
      $("#Phone").click(function(){
        $("#Phone").hide();
        $("#InputPhone").show();
      });
      // Input Password
      $("#Password").click(function(){
        $("#Password").hide();
        $("#InputPassword").show();
      });
      // Showing buttons
      $("#InputImg, #InputName, #InputPhone, #InputPassword").click(function(){
        $("button#Upload, button#Cancel").show();
      });
    });

    </script>
    <!-- styling-->
    <style>
    #img, #icon:hover{
      cursor:pointer;
    }
    #Name, #Phone, #Address, #Email, #Password :hover{
      cursor:pointer;
    }
    #DivName{
      margin-top:-8%;
    }
    #DivPhone{
      margin-top:-6%;
    }
    #DivPassword{
      margin-top:-6%;
    }
    </style>

  </head>

  <body class="" id="page-top">

    <!-- Navigation -->
    <?php
    include 'layout/menu.php';
    ?>

    <!-- Content Wrapper -->
    <div id="d1" class="d-flex flex-column  ">

      <!-- Main Content -->
      <div id="content" class="my-5">

        <!-- Topbar -->
        <?php
        include('nav.php');
        ?>

        <!-- main content-->
        <div class="row container">
          <form class="form col-md-8 shadow-lg  bg-white rounded container " method="POST" action="" enctype="multipart/form-data">
            <div class="col-md-4 container"></div>
            <div class="col-md-6 container">
              <div class=" row d-flex justify-content-center container rounded-circle my-2 " id="divImage">
                <?php
                  if($img!=""){
                    echo "<img src='img/users_image/$img' class='rounded-circle  p-2 '  id='img'>";
                  }
                  else {
                    echo " <i class='far fa-user-circle my-4' id='icon' style='font-size:150px;'></i>";
                  }
                ?>
                <input type="file" name="img" id="InputImg" style="display:none;">
              </div>
            </div>

            <div class="row container" id="DivName">
              <h1 class="h5 container" >Name</h1>
              <div class="container my-2 border border-dark " id="Name">
                <p class="my-2" ><?php echo $name; ?></p>
              </div>
              <input type="text" class="col my-1 p-2" placeholder="Name" name="name" id="InputName" style="display:none;" >
            </div>
            <div class="row container" id="DivPhone">
              <h1 class="h5 container">Phone No.</h1>
              <div class="container my-2 border border-dark"  id="Phone" >
                <p class="my-2" ><?php echo $phone; ?></p>
              </div>
              <input type="text" class="col" placeholder="Phone No." name="phone" id="InputPhone" style="display:none;"  maxlength="10" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" >
            </div>
            <div class="row container  " id="DivPassword">
              <h1 class="h5 container">Pasword</h1>
              <div class="container my-2 border border-dark"  id="Password" >
                <p class="my-2"><?php echo $password;  ?></p>
              </div>
              <input type="text" class="col" placeholder="Password" name="password" id="InputPassword" style="display:none;">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary btn-block my-4 container" name="update" style="display:none;" id="Upload">Update</button>
            <button type="submit" class="btn btn-dark btn-block my-4 container"   style="display:none;" id="Cancel">Cancel</button>
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
