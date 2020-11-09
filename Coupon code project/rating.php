<?php 
   session_start();
   //connecting database
   include('includes/constant.php');
   //initialising cookie value
        $cookie=$_COOKIE['cookie4'];
		//checking cookie set or not
	   if($cookie!="page4"){
	   // checking rating value
	   $rating=$_POST['star'];
	   $email=$_COOKIE['cookie2'];
	   //query
	   $query="UPDATE `users` SET `rating`='$rating' WHERE `email`='$email'";
	   $run=mysqli_query($con,$query);
	   //setting cookie
	   $value="page4";
	   setcookie("cookie4",$value);
	   //sending email
	   $to =$email;
       $subject = "Coupon code";
       $txt = "12345";
       $headers = "From: webmaster@example.com" . "\r\n" .
           "CC: somebodyelse@example.com";
          mail($to,$subject,$txt,$headers);
	   //checking rating is >3 or n ot
	   if($rating>3){
		   header('location:https://www.google.com/search?q=playbees+technologies&rlz=1C1SQJL_enIN894IN894&oq=playbee&aqs=chrome.0.69i59j46i39i175i199j69i57j69i60l5.2326j0j7&sourceid=chrome&ie=UTF-8#lkt=overview&trex=m_t:lcl_akp,rc_f:nav,rc_ludocids:17359548320906655774,rc_q:Playbees%2520Technologies%2520%257C%2520Software%2520and%2520Website%2520Development%2520in%2520Bolpur%252C%2520Burdwan,ru_q:Playbees%2520Technologies%2520%257C%2520Software%2520and%2520Website%2520Development%2520in%2520Bolpur%252C%2520Burdwan,trex_id:hZQrIb');
	    }
	   else{
		   header('location:page5.php');
        }
    }
	else{
		header('location:page5.php');
	}
   session_destroy();
?>