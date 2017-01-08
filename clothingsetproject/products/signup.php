<?php include 'libraries/database.php' ?>
<?php include 'includes/header.php' ;?>

<?php 
 $db= new Database();


	
	
if(isset($_POST['submit'])){
		
	$email=mysqli_real_escape_string($db->link,$_POST['email']);
	
	$username=mysqli_real_escape_string($db->link,$_POST['username']);
	$password=mysqli_real_escape_string($db->link,$_POST['password']);
	$reenter_password=mysqli_real_escape_string($db->link,$_POST['re-enter-password']);
	if(isset($_POST['gender1'])){
	$gender=mysqli_real_escape_string($db->link,$_POST['gender1']);
	
	}else{
		
		$gender=mysqli_real_escape_string($db->link,$_POST['gender0']);
		
	}
	$address=mysqli_real_escape_string($db->link,$_POST['address']);
	$city=mysqli_real_escape_string($db->link,$_POST['city']);
	$state=mysqli_real_escape_string($db->link,$_POST['state']);
	$zip=mysqli_real_escape_string($db->link,$_POST['zip']);
	$phone=mysqli_real_escape_string($db->link,$_POST['phone']);
	
	$query="INSERT INTO registered_user (username,password,email,address,city,state,zip,phone,gender) VALUES ('$username','$password','$email','$address','$city','$state','$zip','$phone','$gender')";
	if($password=='' || $reenter_password=='' || $email=='' || $gender=='' || $address=='' || $city=='' || $state=='' || $zip=='' || $phone==''){
	// set error
	$error='fill all the fields';
	
	
}elseif($_POST['password']==$_POST['re-enter-password']&& $_POST['password']!=null && $_POST['re-enter-password']!=null ){
		
	
	$db->insert($query);
	
		
	}else{
		echo '*re-enter-password'; 
	}

}





?>

<form role="form" method="post" action="signup.php">
<div class="form-group">
    <label>Email address</label>
    <input name="email" type="email" class="form-control"  placeholder="Email" required>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" class="form-control"  placeholder="username" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control"  placeholder="Password" required>
  </div>
  
   <div class="form-group">
    <label>Re-Enter Password</label>
    <input name="re-enter-password" type="password" class="form-control"  placeholder="Password">
  </div>
<p class="pass-error" style="color:red;"><?php ?></p>
  <div class="form-group">
    <label>Gender</label>
  <div class="radio">

  
  <input type="radio" name="gender1" value="1"> Male<br>
  <input type="radio" name="gender0" value="0"> Female<br>
  </div>
</div>

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
  
  <button name="submit" type="submit" class="btn btn-default">Submit</button>
  
</form>

<?php include 'includes/footer.php' ; ?>