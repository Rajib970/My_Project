<!-- Starting session -->
<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:index.php');
  }
  // Redirecting index.php page if this page is not necessary
  if((!isset($_POST['search'])) && (!isset($_POST['price'])) && (!isset($_POST['location']))){
    header('location:index.php');
  }

  // Connecting database
  include('includes/constant.php');
  // Code to fetch items according to search or select
  if(isset($_POST['search'])){
    $category=$_POST['search'];
    // Query to fetch items according to category
    $query="SELECT * FROM `rent_goods` WHERE `Category`='$category' AND `Status`='Active'";
    $run=mysqli_query($con,$query);
    $rows=mysqli_fetch_all($run, MYSQLI_ASSOC);
    // taking size of rows
    $size=sizeof($rows);
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
    <!-- jquery script -->
    <script src="jquery.js"></script>
    <!-- styling-->
    <style>

    </style>

  </head>

 <body id="page-top">

    <!-- Navigation -->
    <?php
    include 'layout/menu.php';
    ?>

    <!-- Main Content -->
    <div  class="my-5" id="d1">
      <!-- Topbar -->
      <?php
      include('nav.php');
      ?>

      <div class="container ">
        <br/>
        <!-- Displaying items -->
        <?php
        for($i=0;$i<$size;$i++){
          // Initialising variables
          $img=$rows[$i]['Img1'];
          $heading=$rows[$i]['Heading'];
          $location=$rows[$i]['Location'];
          $price=$rows[$i]['Price'];
          $phone=$rows[$i]['Phone'];
          $sl=$rows[$i]['Sl'];
          // Query to fetch owner name form user_rent table
          $sql="SELECT `Name` FROM `users_rent` WHERE `Phone`='$phone'";
          $execute=mysqli_query($con,$sql);
          $result=mysqli_fetch_assoc($execute);
          // Initialising owner name
          $owner=$result['Name'];
          // Displaying contents
          echo "<div class='row border border-light' id=''>
          <div class='list-group col-xl-4 p-1'>
          <img src='img/rent_upload/$img' class='img' height='' width=''>
          </div>
          <div class=' container list-group col-xl-8 '>
          <p class='h5 p-1 '> $heading </p>
          <p class='h6 p-1 '> Owner: $owner </p>
          <p class='h6 p-1'> Location: $location </p>
          <p><strong class='p-1 my-1' >Rent: $price </strong></p>
          <div class='row'>
          <form class='' action='details.php' method='POST' target='_blank'>
          <button class='btn btn-primary col-auto my-1' type='submit' name='view' value='$sl'> View Details </button>
          <a href='tel:$phone' class='btn btn-info col-auto  '><i class='fa fa-phone' style='font-size:20px;color:red'></i> Call to the owner </a>
          </form>
          </div>
          </div>
          </div>
          <hr/> ";

        }

        ?>
      </div>
    <!-- Footer -->
    <?php
    include 'layout/footer.php';
    ?>
</body>
</html>
