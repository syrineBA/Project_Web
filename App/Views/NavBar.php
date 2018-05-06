<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>

<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.php"><span>C</span><img src="images/oo.png" alt=""><img src="/images/oo.png" alt="">king</a></h1>
		</div>

		<div class="nav-icon">
            <?php if($_SESSION['username']!=''){?>
                <li><a  href="profile.php"><?php echo  $_SESSION['username'] ?></a></li>
            <?php   } ?>
        </div>

		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.php">Accueil</a></li>
                        <?php if($_SESSION['username']==""){?>
                        <li><a  href="register/registration.php">Register</a></li>
						<li><a  href="register/login.php">Login</a></li>
                        <?php }elseif($_SESSION['username']!=''){?>
                        <li><a  href="profile.php">Profile</a></li>
                         <li><a  href="register/logout.php">logout</a></li>
                        <?php   } ?>
						<li><a  href="menu.php?pays=france">Recettes Françaises</a></li>
						<li><a  href="menu.php?pays=italie">Recettes Italiennes</a></li>
						<li><a  class="active" href="menu.php?pays=tunisie">Recettes Tunisiennes</a></li>
						<li><a  href="forum.php">Forum</a></li>
						<li><a  href="contact.php">Contact</a></li>
					</ul>
				</div>
			<script>
$('.navicon').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('navicon--active');
    $('.toggle').toggleClass('toggle--active');
});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->

</div>
