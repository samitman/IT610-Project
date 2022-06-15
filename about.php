<?php 
	include("./partials/head_info.html");
	include("./partials/scripts.html");
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
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php" class="active">ABOUT</a></li>
				<li><a href="resume.php">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- bio section -->
<div id="team">
	<div class="container">
    
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12" style="text-align: center;">
				<h2>Meet Sam!</h2>
                <p style="text-decoration: underline;">
					Born with the surname, "ITman", my destiny to become a master of IT was preordained. <p>
				</p> <br>
				<p>
					As a first generation American, I am passionate about serving the country that has provided so much for my family.
					I am fortunate to be able to explore my interests and studies in IT security
					while working for the federal government under the Cyber Corps Scholarship for Service.
				</p><br>
				<p>
					Currently, I am working in a DevOps role for the Cybersecurity and Infrastructure 
					Security Agency, a component of DHS. In the past, I was a software engineering intern with 
					Optum - United Health Group, and an IT intern with KIPP, the largest charter school organization 
					in the country. 
				</p><br>
				<p>	
					Thanks for visiting! Read more about this project below and contact me with any questions.
				</p>
			</div>
         </div>
         
         <div class="row mt30">

			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="images/headshot.jpg" class="img-responsive" alt="team img">
					<h3>Sam Itman</h3>
					<h4>IT Security Professional</h4>
					<p>SFS Cyber Corps Scholar at NJIT pursuing an MS in IT Security and Administration.
						4.0 GPA 
					</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>
	</div>
</div>		

<!-- info section -->
<div class="row mt30" style="margin-right: 15px; margin-left: 15px; margin-top: 5px;"> 
	<div class="col-md-12 col-sm-12">
		<hr>
	</div>
	<div class="col-md-6 col-sm-6">
		<h3>Project Info</h3>
		<p>This website is hosted on an AWS EC2 Linux instance running an Apache2 web server.</p>
		<p>Domain name configured through AWS Route 53, and SSL certificate configured through certbot.</p>
		<p>Visit Github link provided on home page for more information!</p>
	</div>
	<div class="col-md-6 col-sm-6">
		<strong>CSS3</strong>
		<span class="pull-right">50%</span>
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
			</div>
		<strong>HTML5</strong>
		<span class="pull-right">46.5%</span>
			<div class="progress">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="46.5" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
			</div>
		<strong>JS</strong>
		<span class="pull-right">3.5%</span>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="3.5" aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
			</div>
	</div>
</div>

</body>