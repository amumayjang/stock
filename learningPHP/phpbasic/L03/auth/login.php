<?php 
	session_start();
	require_once './db.php';
	$msg = null;
	// 1. Kiem tra request dang post
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$msg = "Usernam/password khong dung!";
		
		// 2. Lay thong tin tu form
		$username = $_POST["username"];
		$pwd = $_POST["password"];

		// 3. So sanh thong tin tu form voi csdl
		for ($i=0; $i < count($users); $i++) { 
			$unit = $users[$i];
			if($username == $unit["username"] && $pwd == $unit["pwd"]){
				// 4. Tao session
				$_SESSION["USER_INFO"] = $unit;
				$msg = null;
				break;
			}
		}
		if($msg == null){
			// 5. Redirect
			header("Location: dashboard.php");
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login page</title>
 </head>
 <body>
 	<h3 style="color: red;"><?= $msg ?></h3>
 	<form method="post">
 		<input type="text" name="username" placeholder="User name"/>
 		<br/>
 		<input type="password" name="password" placeholder="Password"/>
 		<br>
 		<button type="submit">Login</button>
 	</form>
 
 </body>
 </html>