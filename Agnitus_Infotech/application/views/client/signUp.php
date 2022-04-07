<?php include('includes/header.php'); ?>
<html>
 <head>
   <title>
     Add Product
   </title>
   <style>
   </style>
 </head>
 <body>
   <div class="py-2 row">
     <div class="col-xl-8 container">
       <?php if($this->session->flashdata('email')){?>
         <div class="bg-danger p-2 text-white my-3">
         <?php echo $this->session->flashdata('email');?>
     </div>
     <?php }?>
   <?php echo form_error('name','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('email','<div class="error py-2 bg-danger text-white">','</div>');?>
   <?php echo form_error('phone','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('password','<div class="error py-2 bg-danger text-white">','</div>');?>
      <?php echo form_error('country','<div class="error py-2 bg-danger text-white">','</div>');?>
   <h1 class="">Sign Up</h1>
   <?php echo form_open('client/signUp'); ?>
    <p class="h3">Name</p>
    <?php echo form_input(["type"=>"text","name"=>"name","value"=>set_value('name'),"class"=>"form-control","placeholder"=>"Enter Name"]); ?>
    <p class="h3">Email</p>
    <?php echo form_input(["type"=>"email","name"=>"email","value"=>set_value('email'),"class"=>"form-control","placeholder"=>"Enter Email"]); ?>
    <p class="h3">Phone</p>
    <?php echo form_input(["type"=>"text","name"=>"phone","value"=>set_value('phone'),"class"=>"form-control","placeholder"=>"Enter Phone No."]); ?>
    <p class="h3">Country</p>
    <?php include('includes/country.php'); ?>
    <p class="h3">Password</p>
    <?php echo form_input(["type"=>"password","name"=>"password","value"=>set_value('password'),"class"=>"form-control","placeholder"=>"Enter password"]); ?>
    <input type="submit" class="btn btn-primary my-2" value="Submit"/>
   <?php echo form_close(); ?>
   <a href="<?php echo base_url('Client/index'); ?>" class="text-primary container"> Login </a>
 </div>
 </div>
 </body>
</html>


<?php include('includes/footer.php'); ?>
