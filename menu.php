<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
<head>
<title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

<?php include("App/Views/Imports.html"); ?>
</head>
<body>
<?php include("App/Views/NavBar.html"); ?>
<?php 
$p=$_GET['pays'];?>		
<!--content-->
	<div class="menu">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Recettes <?php echo $p;?>	</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<h2>Categories</h2>
					<ul class="popular">
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>
                        <li><a href="#"></i></a></li>

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

<script type="text/javascript">
	$(document).ready(function(){
		 $.ajax({
		 	url: "App/API/GetRecettes.php?pays=<?php echo $p; ?>",
		 	dataType: "json",

		 	 success: function(result){
		 	 	if(result.msg == "empty")
		 	 		$('#results-container').html('<div class="alert alert-danger col-md-4 menu-bottom1"><strong>Alert<strong> Aucune Resultat </div>')
		 	 	else
		 	 	{
		 	 			var html = "";
		        		$.each(result.data, function(index, value){
		        			
			        		html += 	'<div class="col-md-4 menu-bottom1">'
										+'<div class="btm-right">'
										+'	<a href="events.php?id='+value.id+'">'
										+'		<img src="'+value.images+'" alt="" class="img-responsive" width="50px" height="50px">'
										+'		<div class="captn">'
										+'			<h4> '+value.nom+'</h4>'
										+'			<p>'+value.pays+'</p>	'			
										+'		</div>'
										+'	</a>	'					
										+'</div>'
										+'</div>'
		        		})
		        		$('#results-container').html(html)
		 	 	}
        		
   			 }
		});
	})
</script>

</body>
</php>