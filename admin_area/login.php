<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Admin login</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 
	<style type="text/css">
		a:hover{
			opacity: 50%;
		}
		</style>
	</head>
<body>
<div class="login">


<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1>Admin Login</h1>
    <form method="post" action="login.php" style="text-align:center">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
		<br>
		<br>
		<a style="color:white;text-decoration:none;font-size:20px;" href="../index.php">Home</a>
    </form>
</div>


</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = $_POST['email'];
		$pass = $_POST['password'];
	
	$sel_user = "SELECT * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	
	}
	
	
	
	
	








?>