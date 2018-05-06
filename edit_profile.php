<?php
include ('session.php');

$username =$_GET['username'];

$result = mysql_query("SELECT * FROM users WHERE username  = '$username' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$username=$test['username'];
$email=$test['email'];
$image=$test['image'];

if(isset($_POST['save']))
{
$username_save=$_POST['username'];
$email_save=$_POST['email'];
$image_save=$_POST['image'];


	mysql_query("UPDATE users SET username ='$username_save', email ='$email_save' ,image='$image_save 'WHERE username = '$username'")
				or die(mysql_error());
	$_SESSION['username']=$username_save;
    header("Location: profile.php"); // Redirecting To Home Page

}else {

?>

<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
        <?php include("App/Views/Imports.html"); ?>

    </head>

<body>

<?php include("App/Views/NavBar.html"); ?>


<div class="container">
<div id="right-nav">
    <br>
			<h1>Editez vos Infos</h1>

    <div>
		
		<fieldset class="-------------">
			<table cellpadding="5" cellspacing="5">


                <form method="POST">
                    <div class="grid-contact">

                        <div class="col-md-6 contact-grid">
                            <p class="your-para">Nom de l'utilisateur :</p>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Enter your name....."  title="Enter your name" required />
                        </div>

                        <div class="clearfix"> </div>
                    </div>


                    <div class="grid-contact">

                        <div class="col-md-6 contact-grid">
                            <p class="your-para">Email</p>
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter your email....."  title="Enter your email" required />
                        </div>
                        <div class="clearfix"> </div>

                        <div class="col-md-6 contact-grid">
                            <p class="your-para">Image</p>
                            <input type="file" name="image" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="send">
                        <button type="submit" class="btn btn-primary" name="save" class="">Save</button>
                    </div>
                </form>


		</fieldset>
<br />

<br />


		</div>
		
		</div>
		

	<?php } ?>
		
	</div>

</body>

</html>