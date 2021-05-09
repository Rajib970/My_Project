  <?php
  session_start();
  if(!isset($_SESSION['admin'])){
  	header('location:admin_login.php');
  }
  // Connecting database
  include('includes/constant.php');
  //Checking  delete button clicked or not
  if(isset($_POST['delete'])){
  	$sl=$_POST['delete'];
  	$query="DELETE FROM `rent_goods` WHERE `Sl`='$sl'";
  	$run=mysqli_query($con,$query);
  }
 // Checking approve button clicked or not
  if(isset($_POST['approve'])){
  	$sl=$_POST['approve'];
  	$query="UPDATE `rent_goods` SET `Status`='Active' WHERE `Sl`='$sl'";
  	$run=mysqli_query($con,$query);
  }
    // Checking not approve button clicked or not
  if(isset($_POST['not_approve'])){
  	$sl=$_POST['not_approve'];
  	$query="UPDATE `rent_goods` SET `Status`='Pending' WHERE `Sl`='$sl'";
  	$run=mysqli_query($con,$query);
  }
   // Checking Make Featured button clicked or not
  if(isset($_POST['featured'])){
  	$sl=$_POST['featured'];
  	$query="UPDATE `rent_goods` SET `Featured`='1' WHERE `Sl`='$sl'";
  	$run=mysqli_query($con,$query);
  }
   // Checking Not Featured button clicked or not
  if(isset($_POST['not_featured'])){
  	$sl=$_POST['not_featured'];
  	$query="UPDATE `rent_goods` SET `Featured`='0' WHERE `Sl`='$sl'";
  	$run=mysqli_query($con,$query);
  }
 // Fetching uploaded items form rent_goods
  $query="SELECT * FROM `rent_goods`";
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



  	<!-- jquery -->
  	<script>

  	</script>
  	<!-- styling-->
  	<style>

  	</style>

  </head>

  <body class="" id="">

  	<!-- Navigation -->
  	<?php
  	include 'layout/menu.php';
  	?>

  	<!-- Content Wrapper -->
  	<div id="d1" class=" my-5">
  		<!-- contents -->
  		<div class="row container" id="carhdng">
  			<!-- Page Heading -->
  			<div class="d-sm-flex align-items-center justify-content-between mb-4 container-fluid ">
  				<h1 class="h3 mb-0 text-gray-800 ">Uploaded items</h1>
  			</div>
  		</div>
  		<form action='' method='POST'>
  			<!-- Display contents -->
  			<?php
  			for($i=0;$i<$size;$i++){
  				$heading=$result[$i]['Heading'];
  				$description=$result[$i]['Description'];
  				$phone=$result[$i]['Phone'];
  				$price=$result[$i]['Price'];
  				$img1=$result[$i]['Img1'];
  				$img2=$result[$i]['Img2'];
  				$img3=$result[$i]['Img3'];
  				$img4=$result[$i]['Img4'];
  				$location=$result[$i]['Location'];
  				$status=$result[$i]['Status'];
  				$featured=$result[$i]['Featured'];
  				$sl=$result[$i]['Sl'];
          // Displaying one by one
  				echo " <div class='row'>
  				<div class='col-md-7'>
  				<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
  				<div class='carousel-inner'>
  				<div class='carousel-item active'>
  				<img class='d-block w-100' src='img/rent_upload/$img1' alt=''>
  				</div>";

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
  				echo"</div>
  				</div>
  				</div>
  				<div class='col-md-5 bg-light'>
  				<p class='h5 '>  $heading </p>
  				<p class='h6 '> $description </p>
  				<br/>
  				<p class='h6 p-0 container'> Location: $location </p>
  				<p class='h6 p-0 container'> Phone: $phone </p>
  				<p><strong> Rent:.$price</strong></p>";
          // Displaying button for Approve item
  				if($status=="Pending"){
  					echo "<button class='btn btn-block btn-success' type='submit' name='approve' value='$sl'> Approve </button>";
  				}
  				if($status!="Pending"){
  					echo "<button class='btn btn-block btn-warning' type='submit' name='not_approve' value='$sl'> Not Approve </button>";
  				}
          // Displaying button for Making featured to the item
  				if($status!="Pending" && $featured==0){
  					echo "<button class='btn btn-block btn-info' type='submit' name='featured' value='$sl'> Make Featured </button>";
  				}
          // Displaying button for Making not featured to the item
  				if($status!="Pending" && $featured==1){
  					echo "<button class='btn btn-block btn-info' type='submit' name='not_featured' value='$sl'> Not Featured </button>";
  				}
          // Displaying delete button
  				echo" <button class='btn btn-block btn-danger' type='submit' name='delete' value='$sl'> Delete </button>
  				</div>
  				</div>
  				<hr/>";
  			}
  			?>
  		</form>
  	</div>
  	<!-- Footer -->
  	<?php
  	include 'layout/footer.php';
  	?>


  </body>

</html>
