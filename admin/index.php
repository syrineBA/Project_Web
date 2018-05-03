<?php 
	include('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP/MySQL Add, Edit, Delete, With User Profile.</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap1.min.css">
</head>
<style>
body{
    background: url(uploads/background.jpg);
    background-size: 100% 800px;
    background-repeat: no-repeat;
}
</style>
<body>
<div class="container">
	<h2 align="center">Admin Login</h2><hr>
	<form class="form-horizontal" method="POST">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control" id="inputEmail" placeholder="Enter Username" required />
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password" required />
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
			<button type="submit" name="login" class="btn btn-success">Login</button>
	</form><br>
<?php
if (isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$fetch=$DB_con->prepare("select * from admin where username='$username' and password='$password'")or die(mysql_error());
$fetch->execute(array($username,$password));
$count=$fetch->rowcount();
$row=$fetch->fetch();	
if ($count > 0){
	session_start();
	session_regenerate_id();
	$_SESSION['id'] = $row['user'];
	header('location:home.php');
	session_write_close();
	}
	else{
	echo "<script>alert('Error Credentials.')</script>";
	}
}
?>
</div>
</body>
</html>