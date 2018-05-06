<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
    <head>
        <title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Events :: w3layouts</title>
        <?php include("App/Views/Imports.html"); ?>

    </head>
    <body>
    <?php include("App/Views/NavBar.php"); ?>
    <!--content-->
<!--content-->
<div class="blog">
	<div class="container">

		<div class="col-md-9 ">

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

<div class="single">
	
		<div class="single-top">
			<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="images/ss.jpg" alt="" />
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
		<div class="leave">
			<h3>Leave a comment</h3>
				<form>
					<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
						
							<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						
							<input type="text" value="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">
						
						
							<input type="text" value="Web site" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Web site';}">
						
							<textarea value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}">Comment</textarea>
						<label class="hvr-rectangle-out">
								<input type="submit" value="Send">
						</label>						
				</div>
				</form>
			</div>
		
</div>
<!---->
<!--//content-->

		</div>
		<div class="col-md-3 categories-grid">
			<div class="search-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h4>Search</h4>
					<div class="search">
					<form>
						<input type="text" placeholder="Search" required="" >
						<input type="submit" value="" >
					</form>
					</div>
			</div>
				<div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h4>Categories</h4>
					<ul class="popular">
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a></li>
						
					</ul>
				</div>
				<div class="blog-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<h4>Recent Posts</h4>
							<div class="product-go">
								<a href="single.php" class="fashion"><img class="img-responsive " src="images/bo.jpg" alt=""></a>
								<div class="grid-product">
									<a href="single.php" class="elit">Consectetuer adipiscing</a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
								</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
								<a href="single.php" class="fashion"><img class="img-responsive " src="images/bo1.jpg" alt=""></a>
								<div class="grid-product">
									<a href="single.php" class="elit">Consectetuer adipiscing</a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
								</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
								<a href="single.php" class="fashion"><img class="img-responsive " src="images/bo2.jpg" alt=""></a>
								<div class="grid-product">
									<a href="single.php" class="elit">Consectetuer adipiscing</a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
								</div>
							<div class="clearfix"> </div>
							</div>
						</div>

			</div>
<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.php">Home</a></li>
						<li><a  href="menu.php">Menu</a></li>
						<li><a  href="blog.php">Blog</a></li>
						<li><a  href="recette.php">Events</a></li>
						<li><a  href="contact.php">Contact</a></li>
					</ul>					
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>		
	<!--//footer-->
    <?php }} ?>

</body>
</php>

