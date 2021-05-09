<!-- Backend Code -->
<?php
  session_start();
   if(isset($_SESSION['user'])){
     header('location:index.php');
   }
  // Database Connection 
     include('includes/constant.php');
    // Checking register button pressed or not
    if(isset($_POST['button'])){
        //intialising variables
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $str=$_POST['password'];
        $password=base64_encode($str);
        $img="";
     // query to check user already registered or not when cookie is cleared
      $query="SELECT  `Phone` FROM `users_rent` WHERE `Phone`='$phone'";
      $run=mysqli_query($con,$query);
      $row=mysqli_num_rows($run);
     if($row==1){
        // setting session for already registered
         $error=1;
       }
       else{
        //query for inserting user information
         $query="INSERT INTO `users_rent`SET `Name`='$name', `Phone`='$phone', `Password`='$password', `Image`='$img'";
          $run=mysqli_query($con,$query);

      // Cookie setting
         setcookie("name",$name);
          setcookie("phone",$phone);
           setcookie("password",$password);

      // Fetching Id from users_rent table
       $query="SELECT  `Id` FROM `users_rent` WHERE `Phone`='$phone'";
       $run=mysqli_query($con,$query);
       $result=mysqli_fetch_assoc($run);
       $id=$result['Id'];
        // Setting session for login
         $_SESSION['user']=$phone;
         $_SESSION['id']=$id;

       // Setting session for no error
         $error=null;
        // Sending to index.php
       header('location:index.php');
      }
    }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
 <!--header-->
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

 body{
   overflow-x:hidden;
 }
</style>
</head>

<body class="bg-gradient-success">
   <!-- Navigation -->
   <?php
  //  include 'layout/menu.php';
  ?>
  <!-- body-->
  <div class="row my-4 " id="d1">
    <div class="card o-hidden border-0 shadow-lg my-0 col-xl-5 col-md-8 container p-0">
      <div class="card-body p-0 container col-xl-10">
        <!-- Nested Row within Card Body -->
        <div class=" row container  ">
          <div class="col-md-12 p-0 container ">
          <div class="col-md-12 p-0 container">
            <div class="p-3 col-md-12 -md p-1 container">
              <div class="text-center col-md-12 p-0 container">
                <div class="user col-md-12 p-2 container">
                <h1 class="h4 text-gray-900 mb-3">Create an Account!</h1>
              </div>
              <!-- Showing given deata -->
              <?php
              if(isset($_POST['name'])){
                 $name=$_POST['name'];
                  $phone=$_POST['phone'];
                  $password=$_POST['password'];
                }
                else{
                  $name="";
                   $phone="";
                     $password="";
                }
                ?>

              <form class="user p-1" action=""  method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleLastName" name="name"  placeholder="Name" value="<?php echo $name; ?>" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPhone"  name="phone" placeholder="Phone No."  value="<?php echo $phone; ?>" required="required" maxlength="10" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password"  placeholder="Password"  value="<?php echo $password; ?>" required="required">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block my-3" name="button">
                  Register Account
                </button>
                <!-- showing error for alraedy registered  -->
                <?php
                if(isset($error)){
                  echo "<p style='color:red'> This number is already registered! </p>";
                }
                ?>
                <div class="text-center ">
                  <a class="small" href="login.php">Already have an account? Login!</a>
                </div>
              </form>
           </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>
<?php
    include 'layout/footer.php';
  ?>

</body>
</html>
