<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php require_once("sq.php");?>
<?php find_selected_page(); ?>
<?php
	error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hai,<?php echo ucwords($loged_user)  ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body id="top">
			<?php 
		require_once("header.php");
		 ?>
			<div id="main">
					<section>
							<h2>Post your Nap</h2>
					</section>
					<section>
							<form method="post" action="user_postpros.php">
								<div class="row uniform 50%">
								<div class="12u$">
										<div class="select-wrapper">
											<select name="n_cat" id="n_cat">
											<option name="sc" value="">- Select Category -</option>
												<option name="lo" value="love">Love</option>
												<option name="li" value="life">Life</option>	
												<option name="sf" value="scifi">Scientic Fiction</option>
												<option name="ot" value="others">Others</option>
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
										<textarea name="nap" id="nap" placeholder="Write your Nap" rows="9"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="sav" value="Save and publish" class="special"/></li>
											<li><input type="submit" name="dra" value="Save as Draft" class="special"/></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
						<?php
			require_once("foot.php");
		?>
	</body>
</html>