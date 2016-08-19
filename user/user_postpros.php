<?php require_once("../_includes/user_session.php");?>
<?php
$u_name=ucwords($loged_user);
$date=date("jS F Y , l");
$time=date("h:i A");
 ?>
<?php
$sql=mysqli_connect("localhost","root","","napsat");
$naps=addslashes($_POST[nap]);
$query="INSERT INTO cont (cat,author,title,dat,tim,stat) 
VALUES ('$_POST[n_cat]','$u_name','$_POST[title]','$date','$time','$naps')";
$queryInsertion=mysqli_query($sql,$query);
								if($queryInsertion)
								{
									header("location:thanks.php?");
									exit;
								}
										else
											{
											header("location:index.php?msg=Something went wrong please try again");
											exit;
											}
	
?>