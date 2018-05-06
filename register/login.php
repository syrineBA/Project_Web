<?php include("../App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

        <?php include("Views/Imports.html"); ?>
        <?php include("Views/Imports.html"); ?>
    </head>
    <body>
    <?php include("Views/NavBar.php");

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
			$image = $rows['image'];




    echo"<div class='content' id='content-down'>
	<div class='content-top-top'>
<div class='container'>
			<div class='content-top'>
				<div class='col-md-4 content-left animated wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='500ms'>
					<h3>Welcome </h3>
					<label><i class='glyphicon glyphicon-menu-up'></i></label>
					<span>Vous êtes connecté avec succès</span>
				</div>
				<img src= '../images/oo.png' alt=''>
					<div class='form'><h3> Si vous voulez voir votre profile cliquez sur : <a href='../profile.php'>profile</a></div>
				<div class='clearfix'> </div>
			</div></div></div>";

    header("Location: ../index.php"); // Redirecting To Home Page

            }else{
				echo"<div class='content' id='content-down'>
                    	<div class='content-top-top'>
                             <div class='container'>
	                    		<div class='content-top'>
	                       			<div class='col-md-4 content-left animated wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='500ms'>
			                    		<h3>Ooops ! </h3>
		                    			<label><i class='glyphicon glyphicon-menu-up'></i></label>
		                    			<span>Vous n'êtes pas connecté </span>
				                    </div>
					                <div class='form'><h3> Veuillez  cliquez sur : <a href='login.php'>login</a></div>
				                    <div class='clearfix'> </div>
			            </div></div></div>\"";
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
