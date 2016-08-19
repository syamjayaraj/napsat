<?php require_once("_includes/user_session1.php");?>
<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
if(isset($_GET['name']) && $_GET['name']!='')
{
	$msg=$_GET['name'];
}
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign Up</title>
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
							<h2>Sign Up</h2>
							<form method="post" action="singuppros.php" name="signin">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input name="f_name" type="text" placeholder="First Name" maxlength="60" id="textfeilds" required="required" >
									</div>
									<div class="6u 12u$(xsmall)">
										<input name="l_name" type="text" placeholder="Last Name" maxlength="50" id="textfeilds" required="required" >
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input name="u_email" type="email" placeholder="Email" maxlength="50" id="emailfeilds"  required="required">
									</div>
									<div class="6u 12u$(xsmall)">
										<input name="username" type="text" placeholder="Username" maxlength="50" id="textfeilds" required="required" />
									</div>		
									<div class="6u 12u$(xsmall)">
										<input name="u_hash" type="password" placeholder="Password" maxlength="50" id="password" required="required">
									</div>		
									<div class="12u$">
										<ul class="actions">
											<input type="hidden" value="mm" name="signup" />
											<li><input type="submit" value="Signup" /></li>
										</ul>
									</div>
								</div>
							</form>
	Already Have An Account ? &nbsp
	<a href="signin.php"  id="forget">Signin</a>
		<br>
	<a href="index.php"  id="forget">Back to Home</a>
						</section>
			<?php
			require_once("foot.php");
		?>
	</body>
</html>