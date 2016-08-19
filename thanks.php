<?php if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
			<header id="header">
		<?php require_once("logo.php"); ?>
			</header>
			<div id="main">
					<section id="one">
						<header class="major">
							<h2>Thank you for being a part of us</h2>
						</header>
						<h5>Now you can , </h5>
									<ul class="alt">
										<li>Write Naps</li>
										<li>Read Naps from all Napers over the world</li>
										<li>View profiles of your favorite Napers communicate with them.</li>
									</ul>
						<ul class="actions">
							<li><a href="signin.php" class="button">Signin</a></li>
						</ul>
					</section>
			<footer id="footer">
				<?php require_once("foot.php"); ?>
			</footer>
	</body>
</html>