<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

<h3>Enter The below Details To Make A Donor</h3>
<form method="post" action="<?php echo base_url()?>admin/donation">
<div  style="margin-left:100px;margin-top:20px;margin-right:100px;">
<div class="form-group">
 <label>Date Of Donation*</label>
 
 <input type="date" name="dateofdonation">

   
  </div>
 <div class="form-group">
 <label>Donor Email*</label>
 
 <input type="email" name="donoremail">

   
 </div>
 <div class="form-group">
<p class="pass-error" style="color:red;"><?php ?></p>
  <div class="form-group">
    <label>Gender*</label>
	<br>
 <form action="<?php echo base_url()?>admin/donation">
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
</form>
</div>

  <div class="form-group">
  <label>Brand*</label>
  <input name="brand" type="text" class="form-control" placeholder="Enter Brand">
  
  </div>
  
  <div class="form-group">
  <label>Size*</label>
  <input name="size" type="text" class="form-control" placeholder="Enter Size">
  
  </div>
  
  <div class="form-group">
  <label>Quote Price*</label>
  <input name="quoteprice" type="number" class="form-control" placeholder="Enter Quote Price">
  
  </div>
  <div class="form-group">
  <label>Selling Price*</label>
  <input name="sellingprice" type="number" class="form-control" placeholder="Enter Selling Price">
  
  </div>
  <div class="form-group">
  <label>Choose Category*</label>
 <select class="form-control" name="choose">
  <option>Men T-shirts</option>
  <option>Woman T-shirts</option>
  <option>Kids T-shirts</option>
  <option>Men BottomWear</option>
  <option>Woman BottomWear</option>
  <option>Kids BottomWear</option>
  </select>
  
  </div>
   <div class="form-group">
  <label>Image Name*</label>
  <input name="images" type="text" class="form-control" placeholder="Enter Image Name">
  
  </div>
  <div class="form-group">
  <label>Description*</label>
  <textarea name="description" class="form-control" rows="3" placeholder="Enter item Description"></textarea>
  
  </div>
  
  <button name="submit" type="submit" class="btn btn-primary">Make A Donation</button>
  </div>
</form>
