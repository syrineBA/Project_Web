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
                    <h3>Les forums <?php echo $p;?>	</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <ul class="popular">
                        <li><a href="forum_fr.php?pays=france"><i class="glyphicon glyphicon-menu-right"> </i>forum recette francaise</a></li>
                        <li><a href="forum_tn.php?pays=tunisie"><i class="glyphicon glyphicon-menu-right"> </i>forum recette tunisienne</a></li>
                        <li><a href="forum_it.php?pays=italie"><i class="glyphicon glyphicon-menu-right"> </i>forum recette italienne</a></li>

                    </ul>
                </div>
            </div>

            <div id="results-container">


            </div>



        </div>

        <div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">

            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
    <?php include("App/Views/Footer.html"); ?>


    </body>
</php>