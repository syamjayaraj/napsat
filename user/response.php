<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php require_once("sq.php");?>
<?php find_selected_page(); ?>
<?php
	error_reporting(0);
?>


<?php if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
			<header id="header">
					<ul class="actions">
							<li><a href="index.php" class="button">Napsat</a></li>
						</ul>
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
					<section id="one">
						<header class="major">
							<h2>Thank you for contacting us.</h2>
						</header>					
									<ul class="alt">
										<li>You will get respose from us within next 30 minutes</li>
									</ul>
						<ul class="actions">
							<li><a href="urworks.php" class="button">Your Contributions</a></li>
						</ul>
					</section>
			<footer id="footer">
				<?php require_once("foot.php"); ?>
			</footer>
	</body>
</html>