<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

        <?php include("App/Views/Imports.html"); ?>
    </head>
    <body>
    <?php include("App/Views/NavBar.php"); ?>

    <!--content-->

    <?php
    if($_GET['pays']!='') $_SESSION["pays"]=$_GET['pays'];
    ?>
    <?php
    if($_GET['subject']!='') $_SESSION["subject"]=$_GET['subject'];
    else
        ?>

    <div class="menu">
        <div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Recettes <?php echo $p;?>	</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <h2>Categories</h2>
                    <ul class="popular">
                        <li><a href="forum_fr.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette francaise</a></li>
                        <li><a href="forum_tn.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette tunisienne</a></li>
                        <li><a href="forum_it.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette italienne</a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"> </i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"> </i></a></li>
                    </ul>
                </div>
                <div id="results-container">

                </div>

                <?php

                $con = mysqli_connect("localhost","root","","login_forum_php");
                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }                            // If form submitted, insert values into the database.
                if (isset($_REQUEST['commentaire'])){
                    $com = stripslashes($_REQUEST['commentaire']); // removes backslashes
                    $com = mysqli_real_escape_string($con,$com); //escapes special characters in a string
                    echo "hellllo ";
                    echo $p ;
$ss =$_SESSION["subject"];
$pp = $_SESSION["pays"];
                    $username =$_SESSION["username"];
                    $query = "INSERT into `liste forum` (sujet,pays,commentaire,username) VALUES ('$ss', '$pp', '$com', '$username')";
                    $result = mysqli_query($con,$query);


                    echo "<div class='form'><h3>a Subject is added</h3><br/>Click here to <a href='subjects.php?'>Refresh</a></div>";

                }else{
                    ?>
                    <form id ="subject" methode="post" action="subjects.php?pays=<?php echo $_SESSION["pays"]?>&subjects=<?php  echo $_SESSION["subject"]?>">
                        <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

                            <input type="text" class="form-control" placeholder="Commentaire" name="commentaire" id="commentaire" />
                            <input  type= "submit" value="Ajouter un Subjet">
                        </div>

                    </form>
                <?php } ?>




        </div>

        <div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">

            <div class="clearfix"> </div>
        </div>
    </div>
    </div>

    <?php include("App/Views/Footer.html"); ?>


    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url: "App/API/GetComments.php?pays=<?php echo $_SESSION["pays"]?>&subject=<?php echo $_SESSION["subject"]?>",
                dataType: "json",

                success: function(result){
                    if(result.msg == "empty")
                        $('#results-container').html('<div class="alert alert-danger col-md-4 menu-bottom1"><strong>Alert<strong> Aucune Resultat </div>')
                    else
                    {
                        var html = "";
                        $.each(result.data, function(index, value){

                            html += '<div class="media wow fadeInLeft animated" data-wow-delay=".5s">'
                                +' <div class="code-in">'
                                +' <p class="smith"><a href="#">'+value.username+' </a> <span>14 June 2018, 20:20</span></p>'
                                + '<div class="clearfix"> </div>'
                                +'</div>'
                                + '<div class="media-left">'
                                + '<a href="#">'
                                +' <img src="images/subjects/user.png" alt="" width="50px" height="50px" >'
                                + '</a>'
                                + ' </div>'
                                +'<div class="media-body">'
                                +'<p>'+value.commentaire+'</p>'
                                +'</div>'
                                + ' </div>'

                        })
                        $('#results-container').html(html)
                    }

                }
            });
        })
    </script>


    </body>
</php>