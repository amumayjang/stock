<?php 
	session_start();
	//session_destroy();

	unset($_SESSION["USER_INFO"]);
	header("Location: login.php");
 ?>