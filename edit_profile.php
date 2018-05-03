<?php
include("App/Global-scripts/init_register.php");



$username =$_GET['username'];

$result = mysql_query("SELECT * FROM users WHERE username  = '$username' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$username=$test['username'];
$email=$test['email'];

if(isset($_POST['save']))
{
$username_save=$_POST['username'];
$email_save=$_POST['email'];


	mysql_query("UPDATE users SET username ='$username_save', email ='$email_save' WHERE username = '$username'")
				or die(mysql_error()); 
	echo "Saved!";
    echo "<div class='form'><h3>Successefully saved</h3><br/>Click here to <a href='index.php?'>index</a></div>";
}else {

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
        <?php include("App/Views/Imports.html"); ?>

    </head>

<body>
<?php include ('session.php');?>

<?php include("App/Views/NavBar.html"); ?>


<div class="container">
<div id="right-nav">
    <br>
			<h1>Edit Info</h1>
	
		<div>
		
		<fieldset class="-------------">
			<table cellpadding="5" cellspacing="5">

<form method="post" >
				<tr>
					<td><label>User name</label></td>
					<td><label>Email</label></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Enter your name....."  title="Enter your name" required /></td>
					<td><input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter your email....."  title="Enter your email" required /></td>

                </tr><br><br>

			</table>
		</fieldset>
<br />

<br />		
		<button type="submit" class="btn btn-primary" name="save" class="">Save</button>

		
		</div>
		
		</div>
		

	<?php } ?>
		
	</div>

</body>

</html>