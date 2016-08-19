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
		<title>Napsat|Love</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />

	</head>
	<body id="top">
		<header id="header">
		<a href="index.php"><img src="../logo2.png"></a>
				<h1><a href="../user_logout.php">Logout</a></h1>
				<?php while($user_imgg=mysqli_fetch_assoc($user_img))
					$a=$user_imgg['img_url'];
					$b="images/$a";
				?>
				<a href="profile.php" class="image avatar"><img src="<?php echo $b ?>" alt="Set your profile picture" /></a>
				<h1>Hai , <strong><?php echo ucwords($loged_user)  ?></strong><br />
				
				</h1>
				Have a nice day.
				<br />
<a href="profile.php">Account</a>
<br>
<a href="urworks.php">Your Naps</a>
<br><br>
<?php
			require_once("cat.php");
		?>
			</header>
			<div id="main">
			<section>
			<header class="major">
							<h1>Category : LIFE</h1>
							<h5>Other Categories : &nbsp <a href="love.php">Love</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href="scifi.php">Scientific Fiction</a> &nbsp&nbsp&nbsp&nbsp&nbsp<a href="others.php">Others</a>
							</h5>
						</header>
			</section>
			<?php
			require_once("life_cont.php");
		?>
		</section>
				<?php
			require_once("foot.php");
		?>
	</body>
</html>