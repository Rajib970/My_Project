<?php include('includes/header.php'); ?>
<html>
 <head>
   <title>
     Client Login
   </title>
   <style>
   </style>
 </head>
 <body>
   <div class="py-2 row">
     <div class="col-xl-8 container">
   <h1 class="">Client Login</h1>
  <?php if($this->session->flashdata('loginError')){ ?>
    <div class="bg-danger p-2 text-white my-3">
    <?php echo $this->session->flashdata('loginError');?>
</div>
<?php }?>
   <?php echo form_error('username','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('password','<div class="error py-2 bg-danger text-white">','</div>');?>
   <?php echo form_open('Client/login'); ?>
    <p class="h3">Username</p>
    <?php echo form_input(["type"=>"email","name"=>"username","value"=>set_value('username'),"class"=>"form-control","placeholder"=>"Enter email address"]); ?>
    <p class="h3">Password</p>
    <?php echo form_input(["type"=>"password","name"=>"password","value"=>set_value('password'),"class"=>"form-control","placeholder"=>"Enter password"]); ?>
    <input type="submit" class="btn btn-primary my-2" value="Submit"/>
   <?php echo form_close(); ?>
      <a href="<?php echo base_url('Client/signUp'); ?>" class="text-primary container">Sign Up </a>
 </div>
 </div>
 </body>
</html>


<?php include('includes/footer.php'); ?>
