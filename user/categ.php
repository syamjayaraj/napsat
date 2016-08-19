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
		<title>Napsat|Category</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body id="top">
			<header id="header">
			<a href="index.php"><img src="logo2.png"></a>
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

<section id="two">
						<h2>Naps by Categories</h2>
						<div class="row">
							<article class="6u 12u$(xsmall) work-item">
								<a href="love.php" class="image fit thumb"><img src="images/thumbs/01.jpg" alt="" /></a>
								<h3 align="center">Love</h3>
								<p>Love is the favourite category of all kind of people in the world.Without Love, the world can not exist</p>
							</article>
							<article class="6u$ 12u$(xsmall) work-item">
								<a href="life.php" class="image fit thumb"><img src="images/thumbs/02.jpg" alt="" /></a>
								<h3>Life</h3>
								<p>There may be happiness and sad in our Life.Our Napers also wrote about life</p>
							</article>
							<article class="6u 12u$(xsmall) work-item">
								<a href="scifi.php" class="image fit thumb"><img src="images/thumbs/03.jpg" alt="" /></a>
								<h3>Scientific Fiction</h3>
								<p>We all like an imaginary world.Everyone have ability to imagine anything.Our Napers Wrote their imagination here.</p>
							</article>
							<article class="6u$ 12u$(xsmall) work-item">
								<a href="others.php" class="image fit thumb"><img src="images/thumbs/06.jpg" alt="" /></a>
								<h3>Others</h3>
								<p>There is always an Other category for totally different minds</p>
							</article>
						</div>
					</section>
				</div>
						<?php
			require_once("foot.php");
		?>
				</body>
				</html>
