<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>
        <?php include("App/Global-scripts/init_register.php"); ?>

        <?php include("App/Views/Imports.html"); ?>
    </head>

    <body>
    <?php include("App/Views/NavBar.php"); ?>
    <?php include ('session.php');?>

        <?php
        $username=$_SESSION['username'];
        $result=mysql_query("SELECT * FROM users where username='$username' ");

        if($test = mysql_fetch_array($result))
        {
            $_SESSION['image']=$test['image'];
            $id = $test['username'];
            $image = "images/".$test['image'];

            echo"<div class='content'>
	<div class='events'>
		<div class='container'>
			<div class='events-top'>
				<div class='col-md-4 events-left animated wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='500ms'>
			                    		<h3>Bienvenu </h3>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>
					<label><i class='glyphicon glyphicon-menu-up'></i></label>
				</div>
				<div class='col-md-8 events-right animated wow fadeInRight' data-wow-duration='1000ms' data-wow-delay='500ms'>
				</div>
				<div class=‘clearfix’> </div>
			</div></div>
			<div class='events-bottom'>
				<div class='col-md-5 events-bottom1 animated wow fadeInRight' data-wow-duration='1000ms' data-wow-delay='500ms'>
					<img src=$image alt='' class='img-responsive' width='300px' height='1000px'>
				</div>
			
				<div class=‘clearfix’> </div>
			</div>
		</div>
	</div>

";
            echo " <div class='info-user'>";
            echo " <div>";
            echo " <label>Nom et prenom : </label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
            echo "</div> ";
            echo "<hr /> ";
            echo "<br /> ";
            echo " <div>";
            echo " <label>Email : </label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['email']."</b>";
            echo "</div> ";
            echo "<hr /> ";
            echo "<br /> ";
            echo " <div>";
            echo " <label>image : </label>&nbsp;&nbsp;&nbsp;<b>".$test['image']."</b>";
            echo "</div> ";
            echo "<hr /> ";
            echo "<br /> ";
            echo " <div class='edit-info'>";
            echo " <a href ='edit_profile.php?username=$id'><button class=\"btn btn-primary\" type='button'>Edit Profile</button></a>";
            echo "</div> ";
            echo "<br /> ";
            echo "<br /> ";
            echo"</div>";
        }
        ?>






    </div>

    </body>

</php>