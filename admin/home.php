<?php
	require_once 'dbcon.php';
	
	if(isset($_GET['delete_id']))
	{
		$stmt_select = $DB_con->prepare('SELECT userprofile FROM users WHERE userid =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['userprofile']);
		$stmt_delete = $DB_con->prepare('DELETE FROM users WHERE userid =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();	
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title> UPDATE Recette.</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>

    <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

    <?php include("Views/Imports.html"); ?>
</head>
<body>
<?php include("Views/NavBar.html"); ?>
<div class="container">
<h1 align="center">Update recette</h1>
	<div class="page-header">
    	<h1 class="h2">&nbsp; Liste des recettes<a class="btn btn-success" href="addrecette.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; ajouter recette</a></h1><hr>
    </div>
<div class="row">
<?php
	$stmt = $DB_con->prepare('SELECT userid, username, description, userprofile FROM users ORDER BY userid DESC');
	$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		extract($row);
		?>
		<div class="col-xs-3">
			<h3 class="page-header" style="background-color:cadetblue" align="center"><?php echo $username."<br>".$description; ?></h3>
			<img src="uploads/<?php echo $row['userprofile']; ?>" class="img-rounded" width="250px" height="250px" /><hr>
			<p class="page-header" align="center">
			<span>
			<a class="btn btn-primary" href="editform.php?edit_id=<?php echo $row['userid']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
			<a class="btn btn-warning" href="?delete_id=<?php echo $row['userid']; ?>" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete This User?')"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			</span>
			</p>
		</div>       
		<?php
	}
}
else
{
	?>
	<div class="col-xs-12">
		<div class="alert alert-warning">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
		</div>
	</div>
	<?php
}
?>
</div>
</div>
</body>
</html>