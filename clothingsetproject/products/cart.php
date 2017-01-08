<?php include 'includes/header.php'?>

<div class="container">

  <div class="row">
 
     <div class="col-md-4">
	
            <div class="cart-block">
			    <form action="cart/update" method="post">
				  <table  cellpadding="6" cellspacing="1" style="width:100%" border="0">
				  <tr>
				     
					 <th>QTY</th>
					 <th>Item Description</th>
					 <th style="text-align:right">Item Price</th>
				  
				  
				  </tr>
				  
				  <tr>
				    
					<td></td>
					<td class="right"><strong>Total</strong></td>
					<td class="right" style="text-align:right">$</td>
				  
				  </tr>
				
				
				  </table>
				  <br>
				 
	
				<p><button class="btn btn-default" type="submit">Update cart</button><a class="btn btn-default">Go to cart</a></p>
				</form>
			
			 
			 
			 </div>
			 <div class="panel panel-default panel-list ">
                <div class="panel-heading panel-heading-dark">
				<h3>Categories</h3></div>
                  <div class="panel-body">
                         <div class="list-group">
         <a href="#" class="list-group-item active">
                Cras justo odio
                </a>
             <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
             <a href="#" class="list-group-item">Morbi leo risus</a>
             <a href="#" class="list-group-item">Porta ac consectetur ac</a>
             <a href="#" class="list-group-item">Vestibulum at eros</a>
             </div>
                       </div>
                   </div>
			 

     </div>

   <div class="col-md-8">
      
	<div class="row">
     <div class="panel panel-default panel-list ">
                <div class="panel-heading panel-heading-green">
				<h3>Items</h3></div>
                  <div class="panel-body">
				    <table class="table table-striped">
					
			    <tr>
					<th>Item</th>
					<th>QTY</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Men Shirt</td>
					<td>1</td>
					<td>$60</td>
				</tr>
				<tr>
					<td>Women Shirt</td>
					<td>1</td>
					<td>$60</td>
				</tr>
				<tr>
					<td>Kids Shirt</td>
					<td>1</td>
					<td>$60</td>
				</tr>
				<tr>
				  <td col="3" class="cart-subtotal">
				  Subtotal: $180
				  </td>
				</tr>
				<tr>
				  <td col="3" class="cart-shipping">
				  Shipping:$4
				  </td>
				</tr>
				<tr>
				  <td col="3" class="cart-total">
				  Total: $184
				  </td>
				</tr>
					
					</table>
					
				<h3>Shipping Address</h3>
				   <form>
				   <div class="form-group">
  <label>Address</label>
  <textarea name="address" class="form-control" rows="3" placeholder="Enter Address"></textarea>
  
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
  
  <button name="checkout" type="submit" class="btn btn-default">Checkout</button>
				   </form>
			
					
					
					
						 </div>
                       </div>
                   </div>
        

   </div>


</div>



</div>




</div>








<?php include 'includes/footer.php'?>