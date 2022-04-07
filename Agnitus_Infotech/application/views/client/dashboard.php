<?php include('includes/header.php'); ?>
<html>
<head>
  <title>Client Dashboard</title>
  <style>
  </style>
</head>
<body class="">
  <?php if($this->session->userdata('insufbalance')){ ?>
    <div class="bg-danger text-white my-2 p-3">
      <?php echo $this->session->userdata('insufbalance'); ?>
    </div>
  <?php } ?>
  <?php if($this->session->userdata('buy')){ ?>
    <div class="bg-success text-white my-2 p-3">
      <?php echo $this->session->userdata('buy'); ?>
    </div>
  <?php } ?>
  <div class="row">
    <div class="col-xl-4">
 <h1 class="container">Product List</h1>
</div>
<div class="col-xl-3 p-3">
<p class="text-dark h5">Wallet Balance: <?php echo $wallet; ?> </p>
</div>
<div class="col-xl-3 p-3">
<a href="<?php echo base_url('Client/logout');?>" class="text-primary"> Logout </a>
</div>
</div>
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
     <td><?php print_r($product->price); ?></td>
     <td><?php print_r($product->stock); ?></td>
     <td><?php print_r($product->brand); ?></td>
      <?php if($prdt_id!=''){
        foreach($prdt_id as $pid){
        if($pid->product_id==$product->id){?>
         <td><span class="btn btn-warning disabled">Purchased<span></td>
       <?php
          break;
          }
        }
      }?>
      <td>
        <?php if($prdt_id!=''){
              if($pid->product_id==$product->id){
          continue;
        }
      }
        ?>
        <?php echo form_open('Client/buy'); ?>
        <?php echo form_input(['type'=>'hidden','name'=>'clientId','value'=>$this->session->userdata('client')]); ?>
        <?php echo form_input(['type'=>'hidden','name'=>'productId','value'=>$product->id]); ?>
        <?php echo form_input(['type'=>'submit','class'=>'btn btn-primary','value'=>'Buy']); ?>
        <?php echo form_close(); ?>
      </td>
   </tr>
  <?php } ?>
 </tbody>
</table>
</body>
</html>



<?php include('includes/footer.php'); ?>
