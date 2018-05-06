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
    <div class="menu">
        <div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Recettes </h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <h2>Categories</h2>
                    <ul class="popular">
                        <li><a href="forum_fr.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette francaise</a></li>
                        <li><a href="forum_tn.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette tunisienne</a></li>
                        <li><a href="forum_it.php"><i class="glyphicon glyphicon-menu-right"> </i>forum recette italienne</a></li>
                        <li><a href="#"></i></a></li>
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
                            if (isset($_REQUEST['nom'])){
                                $nom = stripslashes($_REQUEST['nom']); // removes backslashes
                                $nom = mysqli_real_escape_string($con,$nom); //escapes special characters in a string
                                $description = stripslashes($_REQUEST['description']);
                                $description = mysqli_real_escape_string($con,$description);
                                $image = stripslashes($_REQUEST['image']);
                                $image = mysqli_real_escape_string($con,$image);

                                $pays = "italie";
                                $trn_date = date("Y-m-d H:i:s");
                                $query = "INSERT into `liste sujets` (nom,description,pays,image) VALUES ('$nom', '$description', '$pays', 'images/$image')";
                                $result = mysqli_query($con,$query);


                                echo "<div class='form'><h3>le sujet est ajouté</h3><br/>Cliquez ici <a href='forum_it.php?pays=italie'>Refresh</a></div>";

                            }else{
                                ?>
                                <form id ="subject" >
                                    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

                                        <input type="text" class="form-control" placeholder="Nom du sujet" name="nom" id="nom" />

                                        <textarea type="text" class="form-control" placeholder="Description de subjec" name="description" id="description"></textarea>

                                        <p class="your-para">Ajouter une image au subjet</p>
                                        <input type="file" name="image" />

                                        <input type="submit" value="Ajouter Subjet">
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
    <?php
    $p=$_GET['pays'];?>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url: "App/API/GetSubjects.php?pays=italie",
                dataType: "json",

                success: function(result){
                    if(result.msg == "empty")
                        $('#results-container').html('<div class="alert alert-danger col-md-4 menu-bottom1"><strong>Alert!<strong> Aucune Resultat </div>')
                    else
                    {   console.log(result.msg);
                        var html = "";
                        $.each(result.data, function(index, value){
                            html += '<div class="media wow fadeInLeft animated" data-wow-delay=".5s">'
                                +' <div class="code-in">'
                                +' <p class="smith"><a href="#">'+value.nom+' </a> <span>14 Juin 2018, 20:20</span></p>'
                                + '<div class="clearfix"> </div>'
                                +'</div>'
                                + '<div class="media-left">'
                                + '<a href="subjects.php?pays=italie&subject='+value.nom+' ">'
                                +' <img src="'+value.image+'" alt="" width="100px" height="100px" >'
                                + '</a>'
                                + ' </div>'
                                +'<div class="media-body">'
                                +'<p>'+value.description+'</p>'
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