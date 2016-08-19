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
		<title>Napsat|New</title>
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
							<h3>Latest Naps</h3>
					</section>
			<?php
			require_once("new_cont.php");
		?>
		</section>
				<?php
			require_once("foot.php");
		?>
	</body>
</html>