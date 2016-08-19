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
		<title>Your Naps</title>
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
			<header class="major">
							<h3>Your Contributions</h3>
							<td>
      <span style="float:left">
          <h3><a href="urworks.php"><u>Published</u></a></h3></span>
       <span style="float:right">
           <!--<h3><a href="urworks_d.php">Drafts</a></h3></span>-->
 </td>


						</header>
			</section>
			<?php
			require_once("main_cont_page.php");
		?>
		</section>
				<?php
			require_once("foot.php");
		?>
	</body>
</html>