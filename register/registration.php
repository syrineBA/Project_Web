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
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
        ?>
        <div class="form" style="text-align: center">
            <h1>Registration</h1>


            <form name="registration" action="" method="post">

                <div class="grid-contact">
                    <div class="col-md-6 contact-grid">
                        <p class="your-para">Name </p>
                        <input type="text" name="username" style="width: 200px; height: 40px" placeholder="Username" required />
                    </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-6 contact-grid">
                        <p class="your-para">Email </p>
                        <input type="email" name="email" style="width: 200px; height: 40px" placeholder="Email" required />
                    </div>
                    <div class="clearfix"> </div>


                <div class="col-md-6 contact-grid">
                    <p class="your-para">Password </p>
                    <input type="password" name="password" style="width: 200px; height: 40px" placeholder="Password" required />
                </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-6 contact-grid">
                    <input type="submit" name="submit" value="Register" />
                </div>
                </div>

            </form>

        </div>
    <?php } ?>
    </body>
    </html>

    <!--//news-->
    </div>
    <?php include("Views/Footer.html"); ?>
    </body>
</php>
