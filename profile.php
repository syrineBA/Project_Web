<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>
        <?php include("App/Global-scripts/init_register.php"); ?>

        <?php include("App/Views/Imports.html"); ?>
    </head>

    <body>
    <?php include("App/Views/NavBar.html"); ?>
    <?php include ('session.php');?>



    <div  style="text-align: center">
        <br>
        <h1 style="text-align: center">Personal Info</h1>
        <br />
        <br />
        <?php


        $result=mysql_query("SELECT * FROM users where username='$username' ");

        if($test = mysql_fetch_array($result))
        {
            $id = $test['username'];
            echo " <div class='info-user'>";
            echo " <div>";
            echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
            echo "</div> ";
            echo "<hr /> ";
            echo "<br /> ";
            echo " <div>";
            echo " <label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['email']."</b>";
            echo "</div> ";
            echo "<hr /> ";
            echo "<br /> ";

            echo " <div class='edit-info'>";
            echo " <a href ='edit_profile.php?username=$id'><button class=\"btn btn-primary\" type='button'>Edit Profile</button></a>";
            echo "</div> ";
            echo "<br /> ";
            echo "<br /> ";
        }
        ?>

    </div>






    </div>

    </body>

</php>