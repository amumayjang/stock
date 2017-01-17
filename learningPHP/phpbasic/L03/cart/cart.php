<?php 
	// 1. session start
	session_start();
	// 2. Lay database ra 
	require_once './db.php';
	$_SESSION["CART"] = isset($_SESSION["CART"]) == true ? $_SESSION["CART"] : [];
	if(isset($_GET["id"])){ 
		// 3. Lay id tu url
		$id = $_GET["id"];
		// 4. Kiem tra xem id co ton tai hay khong - neu khong ton tai thi dua ve trang chu
		$item = null;
		for ($i=0; $i < count($products); $i++) { 
			if($id == $products[$i]["id"]){
				$item = $products[$i];
				break;
			}
		}

		if($item == null){
			echo "San pham khong ton tai!";
			die;
		}

		// 5. Kiem tra xem session CART co ton tai hay chua
		$cartData = $_SESSION["CART"];

		// 5.1 Kiem tra xem san pham da ton tai trong gio hang chua - neu co thi cong them 1 vao quantity cua doi tuong trong gio hang
		$flag = true;
		for ($i=0; $i < count($cartData) ; $i++) { 
			if($id == $cartData[$i]["id"]){
				$cartData[$i]["quantity"]++;
				$flag = false;
				break;
			}
		}
		

		// 5.2 Neu khong co thi tao item moi trong gio hang voi quantity = 1
		if($flag){
			$item["quantity"] = 1;
			array_push($cartData, $item);
		}

		// 5.3 Set lai gia tri trong gio hang
		$_SESSION["CART"] = $cartData;

		header("Location: cart.php");
	}
	

	$cartData = $_SESSION["CART"];
	$totalPrice = 0;
 ?>
<html>
 <head>
 	<title>Cart info</title>
 </head>
 <body>

 	<table>
 		<thead>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Price</th>
 			<th>Quantity</th>
 			<th></th>
 		</thead>
 		<tbody>
 			<?php 
 			foreach ($cartData as $value) {
 				$totalPrice += $value["price"] * $value["quantity"];
 				?>
				<tr>
					<td><?= $value["id"]  ?></td>
					<td><?= $value["name"]  ?></td>
					<td><?= $value["price"]  ?></td>
					<td><?= $value["quantity"]  ?></td>
					<td>
						<a href="plus.php?id=<?= $value["id"]  ?>">+1</a>
						<a href="minus.php?id=<?= $value["id"]  ?>">-1</a>

					</td>
				</tr>
 				<?php
 			}
 			 ?>
 			 <tr>
 			 	<td colspan="2">Total Price</td>
 			 	<td colspan="2"><?= $totalPrice ?></td>
 			 </tr>
 		</tbody>
 	</table>
 
 </body>
 </html>
