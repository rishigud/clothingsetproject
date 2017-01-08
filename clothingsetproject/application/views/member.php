<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<form role="form" method="post" action="<?php echo base_url() ?>admin/member_register">
<div  style="margin-left:100px;margin-top:20px;margin-right:100px;">
<div class="form-group">
    <label>Email address*</label>
    <input name="email" type="email" class="form-control"  placeholder="Email" >
  </div>
  <div class="form-group">
    <label>Username*</label>
    <input name="username" type="text" class="form-control"  placeholder="username" >
  </div>
  <div class="form-group">
    <label>Password*</label>
    <input name="password" type="password" class="form-control"  placeholder="Password" >
  </div>
  
   <div class="form-group">
    <label>Confirm Password*</label>
    <input name="password2" type="password" class="form-control"  placeholder="Retype-Password">
  </div>
<!--<p class="pass-error" style="color:red;"><?php ?></p>-->
  
  <div class="form-group">
    <label>Gender*</label>
	<br>
     <form method="post" action="<?php echo base_url() ?>admin/member_register">
  <input type="radio" name="gender" value="1"> Male<br>
  <input type="radio" name="gender" value="0"> Female<br>
  <br>
  
     </form>
 <div class="form-group">
  <label>Major*</label>
 <select class="form-control" name="choose">
  <option>CS</option>
  <option>IT</option>
  <option>EE</option>
  </select>
  
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
  
  <button name="submit" type="submit" class="btn btn-primary">Member Register</button>
  </div>
</form>
