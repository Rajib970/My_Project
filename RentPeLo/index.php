 <!-- Backend Code -->
 <?php
 session_start();
 //connecting database
 include('includes/constant.php');
 // Checking session set or not
 if(!isset($_SESSION['user'])){
   if(isset($_COOKIE['phone']) && isset($_COOKIE['password'])){
     $phone=$_COOKIE['phone'];
     $password=$_COOKIE['password'];
     // query for fetching phone number and password
     $query="SELECT  `Phone`,`Password`,`Id` FROM `users_rent` WHERE `Phone`='$phone' AND `Password`='$password'";
     $run=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($run);
     $row=mysqli_num_rows($run);
     // Checking user login or not
     if($row==1){
       $_SESSION['user']=$_COOKIE['phone'];
       $_SESSION['id']=$result['Id'];
     }
     else{
       header('location:login.php');
     }
   }
   else{
     header('location:login.php');
   }
 }

 // Fetching featured items
 $query="SELECT * FROM `rent_goods` WHERE `Status`='Active' AND`Featured`='1' AND `Category`='Car'";
 $run=mysqli_query($con,$query);
 $rows=mysqli_fetch_all($run,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

 <head>

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <!-- Stylesheets -->

   <link rel="stylesheet" href="assets/css/docs.theme.min.css">

   <!-- Favicons -->
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="shortcut icon" href="assets/ico/favicon.png">
   <link rel="shortcut icon" href="favicon.ico">

   <!-- Owl Stylesheets -->
   <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">


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
   <script src="assets/owlcarousel/owl.carousel.js"></script>

   <!-- styling-->
   <style>
   div#carhdng{
     margin-top:-3%;

   }
   </style>

 </head>

 <body id="page-top">

   <!-- Navigation -->
   <?php
   include 'layout/menu.php';
   ?>

   <!-- Main Content -->
   <div id="d1" class="my-5 p-1">
     <!-- Topbar -->
     <?php
     include('nav.php');
     ?>
     <!-- End of Topbar -->

     <div class="row" id="carhdng">
       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4 container-fluid ">
         <h1 class="h3 mb-0 text-gray-800 ">Featured Products</h1>
       </div>
     </div>
     <div class="home-demo " id="caritem">
       <div class="row">
         <div class="owl-carousel">

           <!-- Featured product  -->
           <?php
           $size=sizeof($rows);
           for($i=0;$i<$size;$i++){
             // Initialising variables
             $heading=$rows[$i]['Heading'];
             $location=$rows[$i]['Location'];
             $price=$rows[$i]['Price'];
             $img=$rows[$i]["Img1"];
             $sl=$rows[$i]['Sl'];

             // Display contents
             echo "
             <div class='item'>
             <div class='card'>
             <form action='details.php' method='POST'>
             <img src='img/rent_upload/$img' class='card-img-top' alt=''>
             <div class='card-body'>
             <p class='h5 my-3'>$heading</p>
             <p class='h6 '>Location: $location</p>
             <p class='h6 my-3'>Rent: &#8377;$price</p>
             <hr/>
             <button class='btn btn-primary btn-block' type='submit' name='view' value='$sl'> View Detals</button>
             </form>
             </div>
             </div>
             </div>";
           }

           ?>
         </div>
       </div>

       <!-- javascript for owl corousel-->
       <script>
       var owl = $('.owl-carousel');
       owl.owlCarousel({
         margin: 10,
         responsive: {
           0: {
             items: 1
           },
           600: {
             items: 3
           },
           1000: {
             items:3
           }
         }
       })
       </script>

     </div>
   </div>
 </div>

 <!-- Footer -->
 <?php
 include 'layout/footer.php';
 ?>

</body>
</html>
