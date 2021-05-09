<!-- Connecting database -->
<?php
// Connecting database
include('includes/constant.php');
// code to fetch image name
$phone=$_SESSION['user'];
$query="SELECT  `Image` FROM `users_rent` WHERE `Phone`='$phone'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$img=$row['Image'];
?>

<!--Styling -->
<style>
  #dropdown_menu ul{
    list-style: none;
  }
  #dropdown_menu ul li ul li:hover{
    cursor:pointer;
  }
  #dropdown_menu ul li ul li button{
    margin: 0 -15px;
  }
</style>
<!-- Nav Item - User Information -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 my-4   static-top shadow ">
  <!-- Categories button-->

  <div class=" mx-3 ">
    <button class="btn btn-info  dropdown-toggle my-3  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categories
    </button>
    <div class=" dropdown-menu " aria-labelledby="dropdownMenuButton" id="dropdown_menu">
      <form class="" action="items.php" method="POST">
        <ul class="row list-group list-group-horizontal ">
          <li class=" list-group-item border-0  col-auto "><b>Automobiles</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>
          <li class=" list-group-item border-0  col-auto "><b>Kitchen</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>
          <li class=" list-group-item border-0  col-auto "><b>Homes</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>

        </ul>

        <ul class="row list-group list-group-horizontal ">
          <li class=" list-group-item border-0  col-auto "><b>Automob</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>
          <li class=" list-group-item border-0  col-auto "><b>Automob</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>
          <li class=" list-group-item border-0  col-auto "><b>Automob</b>
            <ul class="list-group col-md-3 " >
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>
              <li class=""><button class="btn btn-default bg-white" name="search" type="submit" value="Car">Car</button> </li>

            </ul>
          </li>
        </ul>

      </form>
    </div>
  </div>

  <!-- Sidebar Toggle (Topbar) -->


  <!-- Topbar Search -->
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 p-3 my-md-0 mw-100 navbar-search " action="items.php" method="POST">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small  my-3 p-3 h-25" placeholder="Search for..." name="search" aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary my-3 " type="submit" name="btn_search" >
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search" action="items.php" method="POST">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small  p-3 h-25" placeholder="Search for..." name="search" maria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" name="btn_search">
                <i class="fas fa-search fa-sm my-2 p-0 h-25 "></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    <!-- Rent button -->
    <div class="my-3 ">
      <a href="rent.php" class="btn btn-warning text-white ">Rent</a>
    </div>
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow ">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      <?php
        if($img!=""){
          echo" <img class='img-profile rounded-circle' src='img/users_image/$img'>";
        }
        else{
          echo "<i class='far fa-user-circle '  style='color:black; font-size:30px;'></i>";
        }
      ?>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="profile.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <a class="dropdown-item" href="myuploads.php">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        My uploads
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="logout.php" >
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>
</ul>
</nav>
