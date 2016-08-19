<?php require_once("../_includes/user_session.php");?>
<?php
$name=ucwords($loged_user);
$kon=mysqli_connect("localhost","root","","napsat");
$sql = "SELECT * FROM cont WHERE author='$name'";
$nap_ur = mysqli_query($kon,$sql);

$new = "SELECT * FROM cont ORDER BY id desc";
$nap_new = mysqli_query($kon,$new);

$love = "SELECT * FROM cont WHERE cat='love' ORDER BY id desc";
$nap_love = mysqli_query($kon,$love);


$life = "SELECT * FROM cont WHERE cat='life' ORDER BY id desc";
$nap_life = mysqli_query($kon,$life);

$scifi = "SELECT * FROM cont WHERE cat='scifi' ORDER BY id desc ";
$nap_scifi = mysqli_query($kon,$scifi);

$others = "SELECT * FROM cont WHERE cat='others' ORDER BY id desc ";
$nap_others = mysqli_query($kon,$others);

$sql_d = "SELECT * FROM cont_d WHERE author='$name'";
$nap_ur_d = mysqli_query($kon,$sql_d);


$img_con="SELECT * FROM user WHERE username='$name'";
$user_img = mysqli_query($kon,$img_con);

$img_adm="SELECT * FROM admin WHERE username='$name'";
$adm_img = mysqli_query($kon,$img_adm);

$adm_contri = "SELECT * FROM cont";
$adm_contrib = mysqli_query($kon,$adm_contri);
?>

