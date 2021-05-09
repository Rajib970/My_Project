<!-- Starting session -->
<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
  // Connecting database
  include('includes/constant.php');
  //Checking  delete button set or not
  if(isset($_POST['delete'])){
    $sl=$_POST['delete'];
    // Query for delete item
    $query="DELETE FROM `rent_goods` WHERE `Sl`='$sl'";
    $run=mysqli_query($con,$query);
  }
  // Checking reserve button set or not
  if(isset($_POST['active'])){
    $sl=$_POST['active'];
    // Query for active item
    $query="UPDATE `rent_goods` SET `Status`='Active' WHERE `Sl`='$sl'";
    $run=mysqli_query($con,$query);
  }
  // Checking Unreserved item set or not
  if(isset($_POST['not_active'])){
    $sl=$_POST['not_active'];
    // Query for reserve item
    $query="UPDATE `rent_goods` SET `Status`='Reserved' WHERE `Sl`='$sl'";
    $run=mysqli_query($con,$query);
  }
  //Fetching uploaded items form rent_goods
  $phone=$_SESSION['user'];
  $query="SELECT * FROM `rent_goods`  WHERE `Phone`='$phone'";
  $run=mysqli_query($con,$query);
  $result=mysqli_fetch_all($run, MYSQLI_ASSOC);
  $size=sizeof($result);
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
    <!-- jquery script -->
    <script src="jquery.js"></script>
    <!-- styling-->
    <style>
    div#carhdng{
      margin-top:-3%;
    }
    </style>

  </head>

  <body class="" id="">
    <!-- Navigation -->
    <?php
    include 'layout/menu.php';
    ?>
    <!-- Content Wrapper -->
    <div id="d1" class=" my-5">
      <!-- including navigation bar -->
      <?php
      include('nav.php')
      ?>
      <!-- contents -->
      <div class="row container" id="carhdng">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 container-fluid ">
          <h1 class="h3 mb-0 text-gray-800 ">My Uploads</h1>
        </div>
      </div>

      <div class="container">
        <div class="">
          <!-- Display contents -->
          <?php
            $j=1;
            for($i=0;$i<$size;$i++){
              // Initialising variables
              $heading=$result[$i]['Heading'];
              $description=$result[$i]['Description'];
              $phone=$result[$i]['Phone'];
              $price=$result[$i]['Price'];
              $img=$result[$i]['Img1'];
              $location=$result[$i]['Location'];
              $status=$result[$i]['Status'];
              $sl=$result[$i]['Sl'];

              if($j==1){
                echo "<div class='row'>";
              }
              // Displaying one by one
              echo " <div class='col-xl-4 '>
              <form action='' method='POST'>
              <div class='card'>
              <img class='img' src='img/rent_upload/$img' height='' width=''>
              <div class='card-body'>
              <p class='h5 card-title'>$heading</p>
              <p class='h6 card-text'>$description</p>
              <p class='h6 card-text p-1'>Location:$location</p>
              <p claas='h6'><strong class='p-1'> Status:$status</strong></p>";

              // Displaying button for Reserve / Not Reserve
              if($status=="Active"){
                echo "<button class='btn btn-block btn-info' type='submit' name='not_active' value='$sl'> Reserved </button>";
              }
              if($status=="Reserved"){
                echo "<button class='btn btn-block btn-info' type='submit' name='active' value='$sl'>Not Reserved </button>";
              }
              echo" <button class='btn btn-block btn-danger' type='submit' name='delete' value='$sl'> Delete </button>
              </div>
              </div>
              </form>
              </div>";
              $j++;
              if($j==4){
                echo"</div>";
                $j=1;
              }
            }
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
