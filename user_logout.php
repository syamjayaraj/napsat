<?php require_once("_includes/connection.php"); ?>
<?php
		session_start();
		
		$_SESSION = array();
		
		if(isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
			
		}
		session_destroy();
		header('location:index.php');
		exit;
?>
