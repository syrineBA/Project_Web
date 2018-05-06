<?php include("App/Global-scripts/init.php"); ?>
<!DOCTYPE php>
<php>
    <head>
        <title>Cooking A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>

        <?php include("App/Views/Imports.html"); ?>
    </head>
    <body>
    <?php include("App/Views/NavBar.php"); ?>
		
</div>
<!--content-->
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Contact</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>Vous avez une question, une remarque ? Envoyez un mail à Notre email : contact@cooking.com
                        Ou remplissez le formulaire de contact ci-dessous.</p>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-top">
			<div class="col-md-5 contact-map">
			<h5>Google Map</h5>
			<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.982591213648!2d10.19400795013432!3d36.84289297984135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34c6d1e93bef%3A0x4153c4733f285343!2sInstitut+national+des+sciences+appliqu%C3%A9es+et+de+technologie!5e0!3m2!1sfr!2stn!4v1525310953286" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="address">
					      <h4>Address</h4>
					      <p> 676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080
                          </p>
						  <p>INSAT </p>
						  <p>ph : +216 71 703 829</p>
						  <p>site : <a href="www.insat.rnu.tn">www.insat.rnu.tn</a></p>
					 </div>
			</div>
			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h5>Contact Form</h5>
			<form action="App/API/sendMail.php" method="GET">
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Nom </p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Numero de telephone</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Email</p>
                        <input type="email"  name="email" style="width: 200px; height: 40px" placeholder="Email" required />
					</div>
					<div class="col-md-6 contact-grid">
						<p class="your-para">Mot de passe </p>
                        <input type="password" name="password" style="width: 200px; height: 40px ; "laceholder="Password" required />
					</div>
					<div class="clearfix"> </div>
				</div>
				<p class="your-para msg-para">Message</p>
                <textarea type="text" class="form-control" placeholder="Message" name="msg" id="msg"></textarea>
					<div class="send">
						<input type="submit" value="Send" action="App/API/sendMail.php">
					</div>
			</form>
			</div>	
			
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!--footer-->
    <?php include("App/Views/Footer.html"); ?>

    <!--//footer-->

</body>
</php>

