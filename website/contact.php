<?php
include("./partials/head_info.html");
include("./partials/scripts.html");
?>

<body>
	<!-- navigation -->
	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<?php include("./partials/navbar_header.html"); ?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="resume.php">RESUME</a></li>
					<li><a href="contact.php" class="active">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- contact section -->
	<div id="contact">
		<div id="container">
			<form style="margin-left:10%;">
				<ul class="form-style-1" style="list-style-type: none;">
					<li>
						<label>Full Name <span class="required">:</span></label><br>
						<input type="text" name="field1" class="field-divided" placeholder="Full Name" required/> 
					</li><br>
					<li>
						<label>Email <span class="required">:</span></label><br>
						<input type="email" name="field3" class="field-long" placeholder="Email" required/>
					</li><br>
					<li>
						<label>Subject</label><br>
						<select name="field4" class="field-select" style="height:35px;">
							<option value="Job Opportunity">Job Opportunity</option>
							<option value="Social">Social</option>
							<option value="General Question">General</option>
						</select>
					</li><br>
					<li>
						<label>Your Message <span class="required">:</span></label><br>
						<textarea name="field5" id="field5" class="field-long field-textarea" style="height:30%;width:50%;" required></textarea>
					</li><br>
					<li>
						<input type="submit" value="Submit" id="submit_button" style="background-color:#d54ab6;color: whitesmoke;"/>
					</li>
				</ul>
			</form>
		</div>
	</div>

	<div id="contact-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12"></div>
			</div>
		</div>
	</div>

</body>