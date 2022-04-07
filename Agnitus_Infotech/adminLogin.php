<?php include('includes/header.php'); ?>
<html>
 <head>
   <title>
     Admin Login
   </title>
   <style>
   </style>
 </head>
 <body>
   <div class="py-2 row">
     <div class="col-xl-8 container">
   <h1 class="">Admin Login</h1>
   <?php echo form_error('username','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('password','<div class="error py-2 bg-danger text-white">','</div>');?>
   <?php echo form_open('Admin/login'); ?>
    <p class="h3">Username</p>
    <?php echo form_input(["type"=>"email","name"=>"username","class"=>"form-control","placeholder"=>"Enter email address"]); ?>
    <p class="h3">Password</p>
    <?php echo form_input(["type"=>"password","name"=>"password","class"=>"form-control","placeholder"=>"Enter password"]); ?>
    <input type="submit" class="btn btn-primary my-2" value="Submit"/>
   <?php echo form_close(); ?>
 </div>
 </div>
 </body>
</html>


<?php include('includes/footer.php'); ?>
