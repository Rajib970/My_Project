<?php include('includes/header.php'); ?>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
  </style>
</head>
<body>
  <?php if($this->session->flashdata('msg')){ ?>
    <div class="bg-success text-white my-2 p-3">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  <?php } ?>
  <div class="row container my-3">
  <a href="<?php echo base_url('Admin/page/p');?>" class="col-xl-2 btn btn-primary">Add Product </a>
  &nbsp;&nbsp;
  <a href="<?php echo base_url('Admin/clientList');?>" class="col-xl-2 btn btn-primary"> View Client List </a>
  &nbsp;&nbsp;
  <a href="<?php echo base_url('Admin/index');?>" class="col-xl-2 btn btn-primary"> Dashboard</a>
  &nbsp;&nbsp;
  <a href="<?php echo base_url('Admin/logout');?>" class="text-primary col-xl-2 btn btn-none"> Logout </a>
</div>
<h1 class="container py-3">Client List</h1>
<table class="table table-hover my-1">
 <thead>
   <tr>
     <th scope="col">Sl. No.</th>
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Phone</th>
     <th scope="col">Country</th>
      <th scope="col">Wallet</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach($clients as $client){ ?>
     <tr>
      <td><?php print_r($client->id); ?></td>
     <td><?php print_r($client->name); ?></td>
     <td><?php print_r($client->email); ?></td>
     <td><?php print_r($client->phone); ?></td>
     <td><?php print_r($client->country); ?></td>
     <td><?php print_r($client->wallet); ?></td>
     <td><a href="<?php echo base_url('Admin/page/').$client->id; ?>" class="btn btn-primary">Add Wallet</a></td>
   </tr>
 <?php } ?>
 </tbody>
</table>
</body>
</html>



<?php include('includes/footer.php'); ?>
