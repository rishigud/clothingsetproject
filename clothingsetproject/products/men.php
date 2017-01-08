<?php include 'includes/header.php'?>


<div class="container">

  <div class="row">
 
     <div class="col-md-4">
	
            <div class="cart-block">
			    <form action="cart/update" method="post">
				  <table  cellpadding="6" cellspacing="1" style="width:100%" border="0">
				  <tr>
				     
					 <th>QTY</th>
					 <th><?php  ?></th>
					 <th style="text-align:right">Item Price</th>
				  
				  
				  </tr>
				  
				  <tr>
				    
					<td></td>
					<td class="right"><strong>Total</strong></td>
					<td class="right" style="text-align:right">$</td>
				  
				  </tr>
				
				
				  </table>
				  <br>
				 
	
				<p><button class="btn btn-default" type="submit">Update cart</button><a class="btn btn-default" href="cart.php">Go to cart</a></p>
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
                         <div class="col-md-4 item">
						 <div class="item-price">$60</div>
            
                          
						  <a href="product.php">
						  
						  <img src="">
						  
						  </a>
						  <div class="item-title">Shirt</div>
						   <div class="item-add">
						   <button class="btn btn-default" type="submit" href="">Add To Cart</button>
						   
						   </div>
                         </div>
                          

                          <div class="col-md-4">
                           <div class="item-price">$60</div>
            
                          
						  <a href="product.php">
						  
						  <img src="images/men.jpg">
						  
						  </a>
						  <div class="item-title">Shirt</div>
						   <div class="item-add">
						   <button class="btn btn-default" type="submit" href="">Add To Cart</button>
						   
						   </div>
                          </div>

                          <div class="col-md-4">
                           <div class="item-price">$60</div>
            
                          
						  <a href="product.php">
						  
						  <img src="">
						  
						  </a>
						  <div class="item-title">Shirt</div>
						   <div class="item-add">
						   <button class="btn btn-default" type="submit" href="">Add To Cart</button>
						   
						   </div>
                           </div>
						 
						 </div>
                       </div>
                   </div>
        

   </div>


</div>



</div>




</div>








<?php include 'includes/footer.php'?>