<?php 
require_once './db.php';

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
 			<th></th>
 		</thead>
 		<tbody>
 			<?php 
 			foreach ($products as $value) {
 				?>
				<tr>
					<td><?= $value["id"]  ?></td>
					<td><?= $value["name"]  ?></td>
					<td><?= $value["price"]  ?></td>
					<td><a href="cart.php?id=<?= $value["id"]?>">Add to cart</a></td>
				</tr>
 				<?php
 			}
 			 ?>
 		</tbody>
 	</table>
 
 </body>
 </html>