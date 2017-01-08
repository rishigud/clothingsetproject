<?php if($this->cart->contents()) : ?>
<form method="post" action="<?php echo base_url();?>cart/process">
<table  style="width:100%">
    <tr>
				     
		 <th>QTY</th>
	     <th>Item Description</th>
		 <th style="text-align:right">Item Price</th>
				   
				  
    </tr>
	
					      <?php $i = 0; ?>

<?php foreach ($this->cart->contents() as $items): ?>


       <tr>
		<td><?php echo $items['qty']; ?></td>
		<td><?php echo $items['name']; ?></td>
		<td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	   </tr>
        
		<?php echo '<input type="hidden" name="item_name['.$i.']" value="'.$items['name'].'" />';?>
		<?php echo '<input type="hidden" name="item_code['.$i.']" value="'.$items['id'].'" />';?>
		<?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$items['qty'].'" />';?>
		<?php $i++;?>
	<?php endforeach; ?>
	  <tr>
                        <td></td>
                        <td class="right"><strong>Shipping</strong></td>
                        <td class="right" style="text-align:right;"><?php echo $this->config->item('shipping');?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="right"><strong>Tax</strong></td>
                        <td class="right" style="text-align:right;"><?php echo $this->config->item('tax');?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right" style="text-align:right;"><strong>$<?php echo $this->cart->format_number($this->cart->total() + $this->config->item('shipping') + $this->config->item('tax'));?></strong></td>
                    </tr>
		
  


</table>



<?php else :?>
<p> There are no items in your cart</p>
<?php endif ;?>

<?php if($this->session->userdata('logged_in')):?>


  <div class="form-group">
  <h2>Shipping Info</h2>
  <label>Address</label>
  <textarea name="address" class="form-control" rows="3" placeholder="Enter Address"></textarea>
  
  </div>
    <div class="form-group">
  <h2>Shipping Info</h2>
  <label>Address2</label>
  <textarea name="address2" class="form-control" rows="3" placeholder="Enter Address"></textarea>
  
  </div>
  
  <div class="form-group">
  <label>City</label>
  <input name="city" type="text" class="form-control" placeholder="Enter City">
  
  </div>
  
  <div class="form-group">
  <label>State</label>
  <input name="state" type="text" class="form-control" placeholder="Enter State">
  
  </div>
  <div class="form-group">
  <label>Zip</label>
  <input name="zip" type="number" class="form-control" placeholder="Enter Zip">
  
  </div>
  <div class="form-group">
  <label>Phone</label>
  <input name="phone" type="number" class="form-control" placeholder="Enter Phone">
  
  </div>
  
 <button name="submit" type="submit"  class="btn btn-primary">Checkout</button>
  


<?php else :?>

<p><a class="btn btn-default" href="<?php echo base_url()?>users/register">Create Account</a></p>
<p> Please register to purchase the items</p>
<?php endif ;?>
</form>