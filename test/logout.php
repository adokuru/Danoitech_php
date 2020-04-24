<?php
	ob_start();
	session_start();

	unset($_SESSION['userEmail']);
	header("location: login.php");
?>