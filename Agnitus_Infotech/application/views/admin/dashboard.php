<?php include('includes/header.php'); ?>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
  </style>
</head>
<body>
  <div class="row container my-3">
  <a href="<?php echo base_url('Admin/page/p');?>" class="col-xl-3 btn btn-primary">Add Product </a>
  &nbsp;&nbsp;
  <a href="<?php echo base_url('Admin/clientList');?>" class="col-xl-3 btn btn-primary"> View Client List </a>
  &nbsp;&nbsp;
  <a href="<?php echo base_url('Admin/logout');?>" class="text-primary col-xl-3 btn btn-none"> Logout </a>
</div>
<h1 class="container">Product List</h1>
<table class="table table-hover my-1">
 <thead>
   <tr>
     <th scope="col">Sl. No.</th>
     <th scope="col">Name</th>
     <th scope="col">Price</th>
     <th scope="col">Avl. Stock</th>
     <th scope="col">Brand</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach($products as $product){ ?>
     <tr>
      <td><?php print_r($product->id); ?></td>
     <td><?php print_r($product->name); ?></td>
     <td><?php print_r($product->price);  ?></td>
     <td><?php print_r($product->stock); ?></td>
     <td><?php print_r($product->brand); ?></td>
   </tr>
 <?php } ?>
 </tbody>
</table>
</body>
</html>



<?php include('includes/footer.php'); ?>
