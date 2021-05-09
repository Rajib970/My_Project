<!-- Backend Code -->
<?php
  // session start
  session_start();
  if(isset($_SESSION['user'])){
    header('location:index.php');
  }
  //connecting database
  include('includes/constant.php');
  // Checking login button pressed or not
  if(isset($_POST['login_btn'])){
    $phone=$_POST['phone'];
    $str=$_POST['password'];
    $password=base64_encode($str);
    $query="SELECT  `Phone`,`Password`,`Id` FROM `users_rent` WHERE `Phone`='$phone' AND `Password`='$password'";
    $run=mysqli_query($con,$query);
    $row=mysqli_num_rows($run);
    $result=mysqli_fetch_assoc($run);
    if($row==1){
      $id=$result['Id'];
      $_SESSION['user']=$phone;
      $_SESSION['id']=$id;
      if(!empty($_POST['remember_me'])){
        setcookie("login_phone", $phone);
        setcookie("login_password", $str);
      }
      $error=null;
      // setting cookie for login
      setcookie("phone",$phone);
      setcookie("password",$password);
      header('location:index.php');
    }
    else{
      $error="Please enter correct data!";
    }
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

  <!-- styling -->
  <style>
  body{
    overflow-x:hidden;
  }
  </style>

</head>

<body class="bg-gradient-success">
  <!-- Navigation -->
  <?php
  include 'layout/menu.php';
  ?>
  <div class="row my-4 " id="d1">
    <div class="container col-xl-8 my-5 ">
      <!-- Outer Row -->
      <div class="row justify-content-center  ">
        <div class="col-xl-10 container p-0 ">
          <div class="card o-hidden border-0 shadow-lg my-3 container p-0 col-xl-10  ">
            <div class="card-body  container col-xl-12 p-0">
              <!-- Nested Row within Card Body -->
              <div class="row container p-0  ">
                <div class="col-xl-10 d-lg-block container p-0 ">
                  <div class="col-xl-12 container  ">
                    <div class="container col-xl-12">
                      <div class="text-center container col-xl-12  ">
                        <h1 class="h4 text-gray-900  my-4">Welcome Back!</h1>
                      </div>
                      <form class="user" action="login.php"  method="POST">
                        <div class="form-group">
                          <!-- checking user saved username and password or not -->
                          <?php
                            if(isset($_COOKIE['login_phone']) && isset($_COOKIE['login_password'])){
                              $phone=$_COOKIE['login_phone'];
                              $password=$_COOKIE['login_password'];
                            }
                            else{
                              $phone="";
                              $password="";
                            }
                          ?>
                          <input type="text" class="form-control form-control-user" id="exampleInputPhone"  name="phone" placeholder="Phone No." value="<?php echo $phone; ?>" required="required" maxlength="10" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" value="<?php echo $password; ?>" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox small ">
                            <input type="checkbox" class="custom-control-input containe" id="customCheck" name="remember_me" value="1" >
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block container" name="login_btn">
                          Login
                        </button>
                        <a href="register.php" class="btn btn-info btn-user btn-block" name="new_accnt">Create a new account</a>
                      </form>
                      <!-- checking given data correct or not -->
                      <?php
                      if(isset($error)){
                        echo "<p class='text-center my-2' style='color:red;'>Please enter correct data]!</p>";
                      }
                      ?>
                      <div class="text-center p-2">
                        <a class="" href="forgot-password.html">Forgot Password?</a>
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
  </div>
</div>
<?php
include 'layout/footer.php';
?>


</body>

</html>
