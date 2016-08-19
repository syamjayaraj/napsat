<?php require_once("_includes/user_session1.php");?>
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
					<section>
							<h2>Sign In</h2>
							<form method="post" action="signinpros.php" name="signin">
								<div class="row uniform 50%">
									<div class="6u$ 12u$(xsmall)">
										<input name="user" type="text" placeholder="Username" maxlength="60" id="textfeilds" >
									</div>								
									<div class="6u$ 12u$(xsmall)">
										<input name="pass" type="password" placeholder="Password" maxlength="50" id="password">
										<input name="login" type="hidden" value="mmm">
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Signin" /></li>
										</ul>
									</div>
								</div>
							</form>
					Do Not Have An Account? &nbsp 
					<a href="signup.php"  id="forget">Signup</a>
					<br>
					<a href="index.php"  id="forget">Back to Home</a>
						</section>
			<?php
			require_once("foot.php");
		?>
	</body>
</html>