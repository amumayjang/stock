<?php 
	// 1. Start session
	session_start();
	if(!isset($_GET["id"]) || $_GET["id"] <= 0){
		echo "Sai duong dan!";die;
	}

	if( isset($_SESSION["CART"]) == false || count($_SESSION["CART"]) == 0){
		echo "Khong ton tai gio hang!";die;
	}
	$id = $_GET["id"];

	$cartData = $_SESSION["CART"];
	for ($i=0; $i < count($cartData); $i++) { 
		if($id == $cartData[$i]["id"]){
			if ($cartData[$i]["quantity"] > 1) {
				$cartData[$i]["quantity"] -= 1;
			} else{
				if ($cartData[$i]['quantity'] == 1) {
					array_splice($cartData, $i, 1);
				}
			}
			break;
		}
	}

	$_SESSION["CART"] = $cartData;

	header("Location: cart.php");



 ?>