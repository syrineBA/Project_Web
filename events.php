<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
<head>
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Events :: w3layouts</title>
<?php include("App/Views/Imports.html"); ?>

</head>
<body>
<?php include("App/Views/NavBar.html"); ?>
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
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>detail recette</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>description detaillée de la recette</span>
				</div>
				<div class="col-md-8 events-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="events-bottom">
				<div class="col-md-5 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="single.php"><img src="<?php echo htmlentities($result->images);?>" alt="" class="img-responsive"></a>
				</div>
				<div class="col-md-7 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">

					<h3>nom de la recette:
                        <br><?php echo htmlentities($result->nom);?></h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p> description de la recette
                        <br>
                        <?php echo htmlentities($result->description);?>
					</p>
					
	
				</div>

				<div class="clearfix"> </div>
			</div>
			
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

<?php include("App/Views/Footer.html"); ?>


</body>
</php>