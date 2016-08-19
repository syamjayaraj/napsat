<?php require_once("../_includes/user_session.php");?>
<?php
$name=ucwords($loged_user);
$con=mysqli_connect("localhost","root","","napsat");
if(isset($_POST['btn_upload']))
{
	$filetmp=$_FILES["file_img"]["tmp_name"];
	$filename=$_FILES["file_img"]["name"];
	$filetype=$_FILES["file_img"]["type"];
	$filepath="images/".$filename;
	move_uploaded_file($filetmp,$filepath);
	$sql="UPDATE user SET img_url='$filename' WHERE username='$name'";
	$result=mysql_query($sql);
}

$queryInsertion=mysqli_query($con,$sql);
								if($queryInsertion)
								{
									header("location:img_res.php?");
									exit;
								}
										else
											{
											header("location:index.php?msg=Something went wrong please try again");
											exit;
											}
?>
