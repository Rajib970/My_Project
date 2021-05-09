  <!-- Starting session -->
  <?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:index.php');
  }

// Database Connection

//database connection
  include('includes/constant.php');

//Initialising variables
  if(isset($_POST['button'])){
    $category=$_POST['category'];
    $heading=$_POST['heading'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $location=$_POST['location'];
    $status="Pending";
    $featured=0;

// Initialising phone number
    $phone=$_COOKIE['phone'];
    if($_FILES['img1']['name']!="" && $category!="-1"){
      if($_FILES['img1']['size']>204800 || $_FILES['img2']['size']>204800|| $_FILES['img3']['size']>204800 || $_FILES['img4']['size']>204800){
        $_SESSION['error']="Please select image of size within 200kb and category!";

    // Setting session values for display given data
        $_SESSION['heading']=$heading;
        $_SESSION['category']=$category;
        $_SESSION['price']=$price;
        $_SESSION['location']=$location;
        $_SESSION['description']=$description;
      }

      else{
        $img1=$_FILES['img1']['name'];
        $temp_name1=$_FILES['img1']['tmp_name'];
        move_uploaded_file($temp_name1, "img/rent_upload/$img1");
        $img2=$_FILES['img2']['name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
        move_uploaded_file($temp_name2, "img/rent_upload/$img2");
        $img3=$_FILES['img3']['name'];
        $temp_name3=$_FILES['img3']['tmp_name'];
        move_uploaded_file($temp_name3, "img/rent_upload/$img3");
        $img4=$_FILES['img4']['name'];
        $temp_name4=$_FILES['img4']['tmp_name'];
        move_uploaded_file($temp_name4, "img/rent_upload/$img4");
        $query="INSERT INTO `rent_goods` SET  `Category`='$category', `Heading`='$heading',`Location`='$location',
        `Description`='$description',`Phone`='$phone', `Price`='$price',  `Img1`='$img1', `Img2`='$img2', `Img3`='$img3',
        `Img4`='$img4', `Status`='$status', `Featured`='$featured'";
        $run=mysqli_query($con,$query);
    // Unsetting all sessions
        unset($_SESSION['heading'], $_SESSION['category'], $_SESSION['location'], $_SESSION['description'], $_SESSION['price']);
    // Unsetting session of error msg
        unset($_SESSION['error']);
    // Redirecting myuploads.php page
        header('location:myuploads.php');
      }
    }
    else{
  // Setting session values for display given data
      $_SESSION['heading']=$heading;
      $_SESSION['category']=$category;
      $_SESSION['price']=$price;
      $_SESSION['location']=$location;
      $_SESSION['description']=$description;
  // Setting session value for error msg
      $msg="Please select an imgae and category !";
      $_SESSION['error']=$msg;
    }
  }
// Sending to index page
  else{
    header('location.index.php');
  }
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

      <!-- jquery -->
     <script>
     // Jquery for image input
     $(document).ready(function(){
       $("#p1").click(function(){
         $("#Image1").click();
       });

       $("#p2").click(function(){
         $("#Image2").click();
       });

       $("#p3").click(function(){
         $("#Image3").click();
       });

       $("#p4").click(function(){
         $("#Image4").click();
       });

       // hiding cancel button and display when heading is selected
       $("#Reset").hide();
       $("#Heading").click(function(){
         $("#Reset").show();
       });

       // jquery for image preview
       // Preview Image for Image1
       $.uploadPreview({
         input_field:"#Image1",
         preview_box:"#ViewImage1",
         success_callback:function(){
           $("#p1").hide();
           var div=$("#p2");
           div.show();
         }
       });
       // Preview Image for Image2
       $.uploadPreview({
         input_field:"#Image2",
         preview_box:"#ViewImage2",
         success_callback:function(){
           $("#p2").hide();
           var div=$("#p3");
           div.show();
         }
       });
       // Preview Image for Image3
       $.uploadPreview({
         input_field:"#Image3",
         preview_box:"#ViewImage3",
         success_callback:function(){
           $("#p3").hide();
           var div=$("#p4");
           div.show();
         }
       });
       // Preview Image for Image4
       $.uploadPreview({
         input_field:"#Image4",
         preview_box:"#ViewImage4",
         success_callback:function(){
           $("#p4").animate({opacity:0});
         }
       });


     });

      </script>

     <!-- styling-->
     <style>
     #heading{
       margin-top:22px;
     }
     #p1{
       margin-top:-%;
     }
     #btn{
       margin-top:-7%;
     }
     p:hover{
       cursor:pointer;
     }
     #description{
       margin-top:-;
     }
     </style>

  </head>

  <body class="bg-info" id="page-top">

    <!-- Navigation -->
    <?php
    include 'layout/menu.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column  ">

      <!-- Main Content -->
      <div id="content" class="my-5">

        <!-- Topbar -->
        <?php
        include('nav.php');
        ?>
        <!-- End of Topbar -->
        <!-- form to upload goods -->
        <div class="row " id="d1">
          <div class="card o-hidden border-0 shadow-lg my-3 col-xl-8 container p-0">
            <div class="card-body p-0 container col-xl-10">
              <div class=" row container ">
                <div class="col-xl-10 p-0 container">
                  <div class="col-xl-12 p-0 container">
                    <div class="p-0 col-xl-12  container">
                      <div class="text-center col-xl-12 p-0 container">
                        <div class="user col-lg-12 p-0 container">
                          <h1 class="h3 text-gray-900 mb-3 " id="heading"> Upload informations to give rent! </h1>
                        </div>
                        <!-- displaying error message for image and category -->
                        <?php
                          if(isset($_SESSION['error'])){
                            $error=$_SESSION['error'];
                            echo "<p style='color:red;'>".$error."</p>";
                          }
                        ?>
                        <form class="user my-4  " action=""  method="POST" enctype="multipart/form-data">
                          <!--  <div class="form-group "> -->
                          <div class="input-group mb-4 ">
                            <div class="input-group-prepend ">
                              <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                            </div>
                            <select class="custom-select" id="category" name="category" required="required" >
                              <option selected value="-1"> Choose...</option>
                              <option value="Car">Car</option>
                              <option value="Bike">Bike</option>
                              <option value="Mobile">Mobile</option>
                              <option value="Laptop">Laptop</option>
                            </select>
                          </div>
                          <!-- Initialising variable for given heading -->
                          <?php
                            if(isset($_SESSION['heading'])){
                              $heading=$_SESSION['heading'];
                            }
                            else{
                              $heading="";
                            }
                          ?>
                          <div class="form-group p-0 ">
                            <input type="text" class="form-control form-control-user" id="Heading" name="heading" value="<?php echo $heading; ?>" placeholder="Give heading within 100 words" maxlength="100" required="required" >
                          </div>
                          <div class="form-row p-2">
                            <div class="col" id="ViewImage1">
                              <p class="border border-dark" id="p1" style="font-size:60px;">+</p>
                              <input type="file" class="form-control" id="Image1" name="img1" placeholder="First name" style="display:none;"  >
                            </div>
                            <div class="col"  id="ViewImage2">
                              <p class="border border-dark" id="p2" style="font-size:60px; display:none;">+</p>
                              <input type="file" class="form-control" id="Image2"  name="img2" placeholder="First name" style="display:none" >
                            </div>
                            <div class="col" id="ViewImage3">
                              <p class="border border-dark" id="p3" style="font-size:60px; display:none">+</p>
                              <input type="file" class="form-control" id="Image3"  name="img3" placeholder="First name" style="display:none">
                            </div>
                            <div class="col" id="ViewImage4">
                              <p class="border border-dark" id="p4" style="font-size:60px;  display:none;">+</p>
                              <input type="file" class="form-control" id="Image4"  name="img4" placeholder="First name" style="display:none">
                            </div>
                          </div>
                          <!-- Initialising variable for given location -->
                          <?php
                            if(isset($_SESSION['location'])){
                              $location=$_SESSION['location'];
                            }
                            else{
                              $location="";
                            }
                          ?>
                          <div class="form-group p-0 ">
                            <input type="text" class="form-control form-control-user" id="Heading" name="location" value="<?php echo $location; ?>" placeholder="Current location of item"required="required" >
                          </div>
                          <div class="form-group " id="description">
                            <textarea   class="form-control form-control-user" id="Description"  name="description" value="" placeholder="Describe the details within 500 words"  maxlength="400" required="required"></textarea>
                          </div>
                          <!-- Initialising variable for given price -->
                          <?php
                            if(isset($_SESSION['price'])){
                              $price=$_SESSION['price'];
                            }
                            else{
                              $price="";
                            }
                          ?>
                          <div class="form-group p-0 ">
                            <input type="text" class="form-control form-control-user" id="" name="price" value="<?php echo $price; ?>" placeholder="Rent Price" required="required" >
                          </div>

                          <button type="submit" class="btn btn-primary btn-user btn-block my-0" id="btn" name="button">
                            Submit
                          </button>
                          <a href="rent.php"  class="btn btn-dark btn-user btn-block my-3" id="Reset" name="reset" >
                            Cancel
                          </a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
