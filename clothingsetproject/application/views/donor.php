<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

<h3>Enter The below Details To Add A Donor</h3>

<form method="post" action="<?php echo base_url()?>admin/donor_register">
<div  style="margin-left:100px;margin-top:20px;margin-right:100px;">
<div class="form-group">
    <label>Full Name*</label>
    <input name="name" type="text" class="form-control"  placeholder="Full Name" >
  </div>
  <div class="form-group">
    <label>How many items has the donor donated?</label>
    <input name="itemsdonated" type="number" class="form-control"  placeholder="Enter No of Items" >
  </div>
 <div class="form-group">
 <label>Choose Category*</label>
 <select class="form-control" name="choose">
  <option>Alumni</option>
  <option>Current Student</option>
  <option>Faculty</option>
  <option>Staff</option>
  <option>Friend Of Catawba	College</option>
</select>
 
 </div>
<div class="form-group">
    <label>Email address*</label>
    <input name="email" type="email" class="form-control"  placeholder="Email" >
  </div>
<!--<p class="pass-error" style="color:red;"><?php ?></p>-->
   <div class="form-group">
    <label>Gender</label>
  <br>
   <form method="post" action="<?php echo base_url()?>admin/donor_register">
  
  <input type="radio" name="gender" value="1"> Male<br>
  <input type="radio" name="gender" value="0"> Female<br>
   </form>
</div>

  <div class="form-group">
  <label>Address*</label>
  <textarea name="address" class="form-control" rows="3" placeholder="Enter Address"></textarea>
  
  </div>
  
  <div class="form-group">
  <label>City*</label>
  <input name="city" type="text" class="form-control" placeholder="Enter City">
  
  </div>
  
  <div class="form-group">
  <label>State*</label>
  <input name="state" type="text" class="form-control" placeholder="Enter State">
  
  </div>
  <div class="form-group">
  <label>Zip*</label>
  <input name="zip" type="number" class="form-control" placeholder="Enter Zip">
  
  </div>
  <div class="form-group">
  <label>Phone*</label>
  <input name="phone" type="number" class="form-control" placeholder="Enter Phone">
  
  </div>
  
  <button name="submit" type="submit" class="btn btn-primary">Register Donor</button>
  </div>
</form>
