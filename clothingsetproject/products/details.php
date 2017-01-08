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
				    <div class="row items">
                        <div class="col-md-4">
						<img src="images/men.jpg" >
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
						 <div>
						 <form>
						 <button class="btn btn-default" type="submit" href="cart.php">Add To Cart</button>
						 </form>
						 </div>
						 
						 </div>
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