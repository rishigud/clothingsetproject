<?php include 'libraries/database.php'?>
<?php include 'includes/header.php' ;?>

<?php 
$db=new Database();
if(isset($_POST['submit'])){
	
$username=$_POST['username'];
$password=$_POST['password'];
$query=("SELECT username,password from registered_user WHERE username='".$username."' AND password='".$password."'")or die(mysqli_error());
$values=$db->select($query);
while($row=$values->fetch_assoc()){
	
	$user=$row['username'];
	$pass=$row['password'];
	if($pass!=$password){
	
	echo 'error';
	}
	else{
		
		header("Location: index.php?msg=".urlencode('successfully logged in'));
	}
}

}

?>
<form role="form" method="post" action="login.php">
  <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" class="form-control"  placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control"  placeholder="Password">
  </div>

  <button name="submit" type="submit" class="btn btn-default">Submit</button>
  
</form>

<?php include 'includes/footer.php' ; ?>