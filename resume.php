<!DOCTYPE html>
<html lang="en">

<?php 
	include("./partials/head_info.html");
?>

<body>	
<!-- navigation -->

	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="resume.html" class="active">RESUME</a></li>
				<li><a href="contact.html">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- portfolio section -->

<div id="portfolio" style="padding-bottom: 0px;">
	<div class="container">
		<div class="row">
			<a class="download_link"
				href="./images/itman_resume.pdf" download>
				Click to download resume.
			 </a>
         </div>
	</div>
</div>	

<div style="text-align:center;">
	<img src="./images/ItmanResume.jpg" style="max-width: 80%;">
</div>
<br><br>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>