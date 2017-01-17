<?php 
	// 1. Khoi tao session
	session_start();
	if (!isset($_SESSION["USER_INFO"])) { // 2. Neu khong co thong tin user thi redirect ve trang login
		header("Location: login.php");
	}

	$user = $_SESSION["USER_INFO"];
 ?>
 <h1>Tung hoa - anh <?= $user["username"] ?>, login thanh cong !!!!</h1>
 <a href="logout.php">Logout</a>