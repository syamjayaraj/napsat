<?php require_once("../_includes/user_session.php");?>
<?php
$u_name=ucwords($loged_user);
$date=date("jS F Y , l");
$time=date("h:i A");
 ?>
<?php
$sql=mysqli_connect("localhost","root","","napsat");
$msg=addslashes($_POST[msg]);
$query="INSERT INTO contact (author,dat,tim,msg) 
VALUES ('$u_name','$date','$time','$msg')";
$queryInsertion=mysqli_query($sql,$query);
								if($queryInsertion)
								{
									header("location:response.php?");
									exit;
								}
										else
											{
											header("location:contact.php?msg=Something went wrong please try again");
											exit;
											}
	
?>