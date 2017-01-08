<?php if($this->session->flashdata('registered')): ?>
<div class="alert alert-success">
<?php echo  $this->session->flashdata('registered') ;?>
</div>

<?php endif;?>
<?php if($this->session->flashdata('pass_login')): ?>
<div class="alert alert-success">
<?php echo  $this->session->flashdata('pass_login') ;?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('fail_login')):?>
<div class="alert alert-danger">
<?php echo  $this->session->flashdata('fail_login') ;?>
</div>

<?php endif;?>
<?php foreach($products as $product) : ?>

<div class="col-md-4 item">
						 <div class="item-price">Selling Price $<?php echo $product->selling_price ;?><br>
						 Quote Price $<?php echo $product->quote_price ;?></div>
                         
                          
						  <a href="<?php echo base_url();?>items/details/<?php echo $product->i_id ;?>">
						  
						  <img src="<?php echo base_url();?>images/<?php echo $product->images ;?>.jpg">
						  
						  </a>
						  <div class="item-title"><?php echo $product->brand ;?> <br>
						  Size <?php echo $product->size?> </div>
						  
						   <div class="item-add">
						   <form method="post" action="<?php echo base_url();?>cart/add">
						   QTY:<input class="qty" type="text" name="qty" value="1">
						   <input type="hidden" name="item_number" value="<?php echo $product->i_id ;?>">
						   <input type="hidden" name="price" value="<?php echo $product->selling_price ;?>">
						   <input type="hidden" name="brand" value="<?php echo $product->brand ;?>">
						   
						   <button class="btn btn-primary" type="submit" >Add To Cart</button>
						   
						   </form>
						   </div>
                         </div>

<?php endforeach ;?>


 

 