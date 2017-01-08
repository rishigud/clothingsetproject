<div class="row items">
                        <div class="col-md-4">
						<div class="item-image">
						<img  src="<?php echo base_url();?>images/<?php echo $products->images ;?>.jpg" >
						</div>
						</div>
						
						
						<div class="col-md-8">
						<h3>Item</h3>
						 <div class="items-price">$60</div>
						 <div class="items-description">
						 <p>
						 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
						 a galley of type and scrambled it to make a type specimen book
						 </p>
						  <p>
						 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
						 a galley of type and scrambled it to make a type specimen book
						 </p>
						 <form method="post" action="<?php echo base_url();?>cart/add">
						   QTY:<input class="qty" type="text" name="qty" value="1">
						   <input type="hidden" name="item_number" value="<?php echo $products->i_id ;?>">
						   <input type="hidden" name="price" value="<?php echo $products->selling_price ;?>">
						   <input type="hidden" name="brand" value="<?php echo $products->brand ;?>">
						   
						   <button class="btn btn-primary" type="submit" >Add To Cart</button>
						   
						   </form>
						 <div>
						
						 </div>
						 
						 </div>
						</div>
</div>