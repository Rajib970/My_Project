<!-- Starting session -->
  <?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
  // database connection
  include('includes/constant.php');
  // Fetching the slelected item details
  if(isset($_POST['view'])){
    $value=$_POST['view'];
    $sl=(int)$value;
    // Query to fetch the item details
    $query="SELECT * FROM `rent_goods` WHERE `Sl`='$sl'";
    $run=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($run);
    $heading=$result['Heading'];
    $description=$result['Description'];
    $phone=$result['Phone'];
    $price=$result['Price'];
    $img1=$result['Img1'];
    $img2=$result['Img2'];
    $img3=$result['Img3'];
    $img4=$result['Img4'];
    $location=$result['Location'];

    // Query to fetch owner name form user_rent table
    $sql="SELECT `Name` FROM `users_rent` WHERE `Phone`='$phone'";
    $execute=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($execute);

    // Initialising owner name
    $owner=$result['Name'];
  }
  else{
    header('location:index.php');
  }
  ?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- header -->
    <?php
    include 'layout/header.php';
    ?>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/docs.theme.min.css">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- javascript -->
    <script src="assets/vendors/jquery.min.js"></script>




    <!-- styling-->
    <style>

    </style>

  </head>

  <body class="" id="page-top">

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
        <!-- main content-->
        <div class="row">
          <div class="col-md-7  p-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <?php
                  echo" <img class='d-block w-100' src='img/rent_upload/$img1' alt=''> ";
                  ?>
                </div>
                <?php
                if($img2!=""){
                  echo" <div class='carousel-item'>
                  <img class='d-block w-100' src='img/rent_upload/$img2' alt=''>
                  </div>";
                }
                if($img3!=""){
                  echo" <div class='carousel-item'>
                  <img class='d-block w-100' src='img/rent_upload/$img3' alt=''>
                  </div>";
                }
                if($img4!=""){
                  echo" <div class='carousel-item'>
                  <img class='d-block w-100' src='img/rent_upload/$img4' alt=''>
                  </div>";
                }
                if($img2!=""){
                  echo "<a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                  <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                  </a>
                  <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                  <span class='carousel-control-next-icon' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                  </a>";
                }
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-light">
            <p class="h5 my-4 "> <?php echo $heading; ?> </p>
            <p class="h6 p-0 "> <?php echo $description; ?> </p>
            <br/>
            <p class="h6 p-0 container"> Owner:  <?php echo $owner; ?> </p>
            <p class="h6 p-0 container"> Location: <?php echo $location; ?> </p>
            <p><strong> Rent:<?php echo "  ".$price; ?></strong></p>

            <!-- Displaying call button -->
            <?php
            echo" <a href='tel:$phone' class='btn btn-info btn-block rounded-pill my-3 p-2'> <i class='fa fa-phone' style='font-size:20px;color:red'></i>&nbsp;&nbsp;&nbsp; Call to the owner</a>
            </div>";
            ?>
          </div>
        </div>
      </div>
    <!-- Footer -->
    <?php
    include 'layout/footer.php';
    ?>

 </body>
</html>
