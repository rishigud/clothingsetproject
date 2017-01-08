       <div class="cart-block">
			    <form action="cart/update" method="post">
				  <table  cellpadding="6" cellspacing="1" style="width:100%" border="0">
				  <tr>
				     
					 <th>QTY</th>
					 <th>Item Description</th>
					 <th style="text-align:right">Item Price</th>
				   
				  
				  </tr>
<?php if($this->session->userdata('logged_in') ):?>			   
				      <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

       <input type="hidden" name="<?php echo $i.'[rowid]';?>" value="<?php echo $items['rowid']; ?>"/>

        <tr>
                <td class="qty-color"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>
				<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>
				
				
				  </table>
				  <br>
				 
	
				<p><button class="btn btn-default" type="submit" >Update cart</button><a class="btn btn-default" href="<?php echo base_url()?>cart">Go to cart</a></p>
				</form>
			
			 
			 
			 </div>
			 
<?php else : ?>
				      <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

       <input type="hidden" name="<?php echo $i.'[rowid]';?>" value="<?php echo $items['rowid']; ?>"/>

        <tr>
                <td class="qty-color"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>
				<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>
				
				
				  </table>
				  <br>
				 
	
				<p><button class="btn btn-default" type="submit" >Update cart</button><a class="btn btn-default" href="<?php echo base_url()?>cart">Go to cart</a></p>
				</form>
			
			 
			 
			 </div>

<?php endif ;?>
			    
   <div class="panel panel-default panel-list ">
   <div class="panel-heading panel-heading-dark">
				<h3>Categories</h3></div>
                  <div class="panel-body">
                         <div class="list-group">
			<ul class="list-group">
				<?php foreach(get_categories_main() as $category) :?>
                          <li class="list-group-item"><a href="<?php echo base_url()?>items/category_products/<?php echo $category->category_name?>"><?php echo $category->category_name?></a></li>
                <?php endforeach ;?>
</ul>

</div>	
			 
			 <div class="list-group">
			 <div class="panel-heading panel-heading-dark">
				<h3>Most Popular Brands</h3></div>
			<ul class="list-group">
					<?php foreach(get_most_popular_main() as $popular) :?>	 
                    <li class="list-group-item"><a href="<?php echo base_url()?>items/details/<?php echo $popular->i_id?>"><?php echo $popular->brand ?></a></li>
					<?php endforeach ;?>
  
</ul>