<?php
 session_start();
//Database Connection
  include "includes/constant.php";
  if(isset($con)){
	  //checking cookie
	  if(!isset($_COOKIE['cookie2'])){
  //initialising given data
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phno'];
  $state=$_POST['state'];
  $role=$_POST['role'];
  $rating=0;
  //query
     $query="INSERT INTO `users` SET `name`='$name',`email`='$email',`phnbr`='$phone',
	      `state`='$state',`prfsn`='$role',`rating`='$rating'";
	 $run=mysqli_query($con,$query);
	//cookie setting
	setcookie("cookie2",$email);
	header("location:page3.php");
  }
  }
  else{
	  header('location:page3.php');
  }
 ?>
