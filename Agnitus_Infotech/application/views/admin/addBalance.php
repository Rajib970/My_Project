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
   <div class="row container my-3">
   <a href="<?php echo base_url('Admin/page/p');?>" class="col-xl-2 btn btn-primary">Add Product </a>
   &nbsp;&nbsp;
   <a href="<?php echo base_url('Admin/clientList');?>" class="col-xl-2 btn btn-primary"> View Client List </a>
   &nbsp;&nbsp;
   <a href="<?php echo base_url('Admin/index');?>" class="col-xl-2 btn btn-primary"> Dashboard</a>
   &nbsp;&nbsp;
   <a href="<?php echo base_url('Admin/logout');?>" class="text-primary col-xl-2 btn btn-none"> Logout </a>
 </div>

   <div class="py-2 row">
     <div class="col-xl-8 container">
   <h1 class="">Add Balance</h1>
   <?php echo form_error('balance','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_open('Admin/addBalance'); ?>
    <p class="h3">Add Balance</p>
    <?php echo form_input(["type"=>"text","name"=>"balance","value"=>set_value('balance'),"class"=>"form-control","placeholder"=>"Enter the amount"]); ?>
    <?php echo form_input(["type"=>"hidden","name"=>"id","class"=>"form-control","value"=>$id]); ?>
    <input type="submit" class="btn btn-primary my-2" value="Submit"/>
   <?php echo form_close(); ?>
 </div>
 </div>
 </body>
</html>


<?php include('includes/footer.php'); ?>
