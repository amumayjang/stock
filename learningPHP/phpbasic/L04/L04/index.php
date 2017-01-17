<?php 

	require_once 'Product.php';
	require_once 'People.php';

	$products = [
		["id" => 1, "name" => "TV - LG", "price" => 2000],
		["id" => 2, "name" => "Smartphone - IPorn", "price" => 1500],
		["id" => 3, "name" => "Smartphone - SameSung", "price" => 1600],
		["id" => 4, "name" => "TV - LCD", "price" => 2500],
		["id" => 5, "name" => "Laptop - HP", "price" => 1700],
		["id" => 6, "name" => "Laptop - Lenovo", "price" => 1800],
		["id" => 7, "name" => "Laptop - Dell", "price" => 1900],
	];
	$objects = [];
	foreach ($products as $key => $value) {
		$obj = new Product($value["id"], $value["name"], $value["price"]);
		array_push($objects, $obj);
	}
	$pp = new People();
	$test = $objects[1];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Product List</title>
 </head>
 <body>

 	<table>
 		<thead>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Price</th>
 		</thead>
 		<tbody>
 			<?php 
 			foreach ($objects as $value) {
 				?>
				<tr>
					<td><?= $value->id  ?></td>
					<td><?= $value->productName  ?></td>
					<td><?= $value->price  ?></td>
				</tr>
 				<?php
 			}
				$test->toString($_GET["text"]);
				echo "<br>";
				$pp->toString();
 			 ?>
 		</tbody>
 	</table>
 
 </body>
 </html>