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
       <?php if($this->session->flashdata('success')){?>
         <div class="bg-success p-2 text-white my-3">
         <?php echo $this->session->flashdata('success');?>
     </div>
     <?php }?>
     <div class="row container my-3">
     <a href="<?php echo base_url('Admin/page/p');?>" class="col-xl-2 btn btn-primary">Add Product </a>
     &nbsp;&nbsp;
     <a href="<?php echo base_url('Admin/clientList');?>" class="col-xl-2 btn btn-primary"> View Client List </a>
     &nbsp;&nbsp;
     <a href="<?php echo base_url('Admin/index');?>" class="col-xl-2 btn btn-primary"> Dashboard</a>
     &nbsp;&nbsp;
     <a href="<?php echo base_url('Admin/logout');?>" class="text-primary col-xl-2 btn btn-none"> Logout </a>
   </div>
   <?php echo form_error('name','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('price','<div class="error py-2 bg-danger text-white">','</div>');?>
   <?php echo form_error('stock','<div class="erorr py-2 bg-danger text-white">','</div>'); ?>
   <?php echo form_error('brand','<div class="error py-2 bg-danger text-white">','</div>');?>
   <h1 class="">Add Product</h1>
   <?php echo form_open('Admin/addProduct'); ?>
    <p class="h3">Product name</p>
    <?php echo form_input(["type"=>"text","name"=>"name","class"=>"form-control","value"=>set_value('name'),"placeholder"=>"Enter Product Name"]); ?>
    <p class="h3">Price</p>
    <?php echo form_input(["type"=>"text","name"=>"price","class"=>"form-control","value"=>set_value('price'),"placeholder"=>"Enter price"]); ?>
    <p class="h3">Available Stock</p>
    <?php echo form_input(["type"=>"text","name"=>"stock","class"=>"form-control","value"=>set_value('stock'),"placeholder"=>"Enter Stock"]); ?>
    <p class="h3">Brand Name</p>
    <?php echo form_input(["type"=>"text","name"=>"brand","class"=>"form-control","value"=>set_value('brand'),"placeholder"=>"Enter Brand Name"]); ?>
    <input type="submit" class="btn btn-primary my-2" value="Submit"/>
   <?php echo form_close(); ?>
 </div>
 </div>
 </body>
</html>


<?php include('includes/footer.php'); ?>
