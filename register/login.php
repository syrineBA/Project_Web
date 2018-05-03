<?php include("../App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

        <?php include("Views/Imports.html"); ?>
        <?php include("Views/Imports.html"); ?>
    </head>
    <body>
    <?php include("Views/NavBar.html");

    require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
            echo "<div class='form'><h3>You are logged successfully</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            echo "<div class='form'><h3>If you want to see your profile  <a href='../profile.php'>profile</a></div>";


            header("Location: ../index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

        <div class="comment" style="text-align: center">

            <h3>Login In</h3>
<form action="" method="post" name="login">
    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
    <input type="text" name="username" style="width: 200px; height: 40px" placeholder="Username" required />
    </div>
    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
    </div>
    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
    <input type="password" name="password" style="width: 200px; height: 40px"placeholder="Password" required />
    </div>
    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
    <input name="submit" type="submit" value="Login" />
    </div>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<?php } ?>
    <!--//news-->
    </div>
    <?php include("Views/Footer.html"); ?>
    </body>
</php>
