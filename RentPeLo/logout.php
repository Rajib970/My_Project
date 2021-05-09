<?php
  // destroying session for logout
     session_start();
      session_destroy();
	  setcookie("name","");
	   setcookie("phone","");
	    header('location:login.php');
?>
