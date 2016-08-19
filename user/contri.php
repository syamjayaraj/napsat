<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
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
			<header id="header">
				<h1><a href="../user_logout.php">Logout</a></h1>
				<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
				<h1>Hai , <strong><?php echo ucwords($loged_user)  ?></strong><br />
				
				</h1>
				Have a nice day.
				<hr>
	<a href="profile.php">Your Profile</a>
				<hr>
  <a href="urworks.php">Your Contributions</a>
				<hr>
	<a href="Contri.php">Contributors</a>
				<hr>
			</header>
			<div id="main">
					<section>
							<h2>Contributors of InStatus</h2>
					</section>
<?php
require_once("sq_admin.php");
?>

					<section>
							<table class="pure-table">
    <thead>
        <tr>
            <th>Number</th>
            <th>Username</th>
            <th>Status</th>
            <th>Category</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
    </thead>





    <tbody>

    <?php
while ($adm_contribb=mysqli_fetch_assoc($adm_contrib)) {
$count+=1;
?>

        <tr class="pure-table-odd">
            <td><?php echo $adm_contribb['id'];?></td>
            <td><?php echo $adm_contribb['author'];?></td>
            <td><?php echo $adm_contribb['stat'];?></td>
            <td><?php echo $adm_contribb['cat'];?></td>
            <td><?php echo $adm_contribb['dat'];?></td>
            <td><?php echo $adm_contribb['tim'];?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
						</section>
	</body>
</html>