<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Events :: w3layouts</title>
        <?php include("App/Views/Imports.html"); ?>
        <?php
        if($_GET['pays']!='') $_SESSION["pays"]=$_GET['pays'];
        ?>
        <?php
        if($_GET['recette']!='') $_SESSION["recette"]=$_GET['recette'];
        else
        ?>
    </head>
    <body>
    <?php include("App/Views/NavBar.php"); ?>
    <!--content-->
    <?php
    $pid=intval($_GET['id']);
    //echo($pid);
    $sql = "SELECT * from `liste recettes` WHERE id=$pid ";
    $query = $conn->prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
        foreach($results as $result) {	?>


            <div class="content">
                <div class="events">
                    <div class="container">

                        <div class="single">

                            <div class="single-top">
                                <img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="<?php echo htmlentities($result->images);?>" alt="" />
                                <div class="lone-line">
                                    <h4>Social Sense Perception of Loneliness</h4>
                                    <ul class="grid-blog">
                                        <li><span><i class="glyphicon glyphicon-time"> </i>08.09.2014</span></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Comment</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-share"> </i>Share</a></li>
                                    </ul>
                                    <p> description de la recette
                                        <br>
                                        <?php echo htmlentities($result->etapes);?>



                                    </p>
                                </div>
                            </div>

                            <div class="comment">
                                <h3>Comments</h3>
                                <div class="media wow fadeInLeft animated" data-wow-delay=".5s">
                                    <div class="code-in">
                                        <p class="smith"><a href="#">Andey</a> <span>02 June 2014, 15:20</span></p>
                                        <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/<?php echo htmlentities($result->image);?>" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">

                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="media media-1 wow fadeInUp animated" data-wow-delay=".5s">
                                    <div class="code-in">
                                        <p class="smith"><a href="#"> Rackham</a> <span>02 June 2014, 15:20</span></p>
                                        <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/si.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">

                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="media wow fadeInRight animated" data-wow-delay=".5s">
                                    <div class="code-in">
                                        <p class="smith"><a href="#">Clara</a> <span>02 June 2014, 15:20</span></p>
                                        <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/si2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">

                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>



                            <?php

                            $con = mysqli_connect("localhost","root","","login_forum_php");
                            // Check connection
                            if (mysqli_connect_errno())
                            {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                           if (isset($_REQUEST['commentaire'])){
                                $com = stripslashes($_REQUEST['commentaire']); // removes backslashes
                                $com = mysqli_real_escape_string($con,$com); //escapes special characters in a string
                                $pays = $_SESSION["pays"];
                                $username =$_SESSION["username"];
                                $recette=$_SESSION['recette'];
                                $query = "INSERT into `liste commentaires` (recette,username,message,pays) VALUES ('$recette','$username', '$commentaire', '$pays')";
                                $result = mysqli_query($con,$query);

                               echo "<div class='form'><h3>un commentaire est ajouté</h3><br/>Cliquez ici <a href='recette.php'>Refresh</a></div>";
                            }else{
                                ?>
                                <form  methode="post" action="recette_details.php?pays=<?php echo $_SESSION["pays"]?>&subjects=<?php  echo $_SESSION["subject"]?>">
                                    <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

                                        <input type="text" class="form-control" placeholder="Comment" name="commentaire" id="commentaire" />
                                        <input  type= "submit" value="Ajouter un commentaire">
                                    </div>

                                </form>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
            </div>
        <?php }} ?>

    <?php include("App/Views/Footer.html"); ?>


    </body>
</php>