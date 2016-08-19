<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php
	error_reporting(0);
?>

<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hai,<?php echo ucwords($loged_user)  ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<h1><a href="../_includes/user_logout.php">Logout</a></h1>
				<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
				<h1>Hai , <strong><?php echo ucwords($loged_user)  ?></strong><br />
				
				</h1>
				Have a nice day.
				<br />
<a href="profile.php">Profile</a>
<br>
   <a href="urworks.php">Works</a>

				<hr>
				<?php

			require_once("../cat.php");
		?>
			</header>
			


		<!-- Main -->
			<div id="main">
					<section>
							<h2>Post Status</h2>
					</section>
					<section>
							<form method="post" action="user_postpros.php">
								<div class="row uniform 50%">
								<div class="12u$">
										<div class="select-wrapper">
											<select name="n_cat" id="n_cat">
												<option name="nc" value="">- Select Category -</option>
												<option name="ro" value="1">Romance</option>
												<option name="ho" value="2">Horror</option>
												<option name="my" value="3">Mysteries</option>
												<option name="sc" value="4">Science fiction</option>
												<option name="fa" value="5">Fantacy</option>
												<option name="th" value="6">Thrillers</option>	
												<option name="hi" value="7">Historial</option>
												<option name="we" value="8">Westers</option>
												<option name="ot" value="9">Other</option>
												
												
											</select>
										</div>
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="title" id="title" value="" placeholder="Title" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="part" id="part" value="" placeholder="Part" />
									</div>
									<div class="12u$">
										<textarea name="novel" id="novel" placeholder="Write your story" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Save and publish" class="special"/></li>
											<li><input type="submit" value="Save" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

	</body>
</html>