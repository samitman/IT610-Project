<?php
include("./partials/head_info.html");
include("./partials/scripts.html");
require("./db_connector.php");
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
		<?php
		#establish connection to db
		$db = db_connect();

		#retrieve information from form
		if (isset($_POST["submit"])) {
			$name = null;
			$email = null;
			$subject = null;
			$message = null;
			if (isset($_POST["name"])) {
				$name = $_POST["name"];
			}
			if (isset($_POST["email"])) {
				$email = $_POST["email"];
			}
			if (isset($_POST["subject"])) {
				$subject = $_POST["subject"];
			}
			if (isset($_POST["message"])) {
				$message = $_POST["message"];
			}

			#insert into database
			$sql = "INSERT INTO Messages (name,email,subject,message) 
			VALUES ('$name', '$email', '$subject', '$message')";

			if ($db->query($sql) === TRUE) {
				echo "<br><div style='margin-left:40%;color:#d54ab6;'>Thanks for your message, $name!</div>";
			} else {
				echo "Error: " . $sql . "<br>" . $db->error;
			}
		}

		?>

		<div id="container">
			<form method="POST" style="margin-left:10%;">
				<ul class="form-style-1" style="list-style-type: none;">
					<li>
						<label>Full Name <span class="required">:</span></label><br>
						<input type="text" name="name" class="field-divided" placeholder="Full Name" maxlength="60" required />
					</li><br>
					<li>
						<label>Email <span class="required">:</span></label><br>
						<input type="email" name="email" class="field-long" placeholder="Email" maxlength="60" required />
					</li><br>
					<li>
						<label>Subject</label><br>
						<select name="subject" class="field-select" style="height:35px;">
							<option value="Job Opportunity">Job Opportunity</option>
							<option value="Social">Social</option>
							<option value="General Question">General</option>
						</select>
					</li><br>
					<li>
						<label>Your Message <span class="required">:</span></label><br>
						<textarea name="message" id="field5" class="field-long field-textarea" style="height:30%;width:50%;" maxlength="500" required></textarea>
					</li><br>
					<li>
						<input type="submit" value="Submit" name="submit" id="submit_button" style="background-color:#d54ab6;color: whitesmoke;" />
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