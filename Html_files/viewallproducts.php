<!DOCTYPE html>
<html>

<head>
	<title>View Products</title>	
</head>

<body>
	<h1>View Product</h1>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Price</td>
			<td>Maker</td>
			<td>Rating</td>
			<td>Range</td>
			<td>Details</td>
			
		</tr>
	<?php
		include "config.php";
		
		$viewallproducts = "SELECT * FROM products";
		$result = mysqli_query($con,$viewallproducts);
		if(!$result){
			die("Error: ".mysqli_errno($con));
		}
		
		while($row = mysqli_fetch_array($result)){
			echo "
				<tr>
					<td>".$row["product_name"]."</td>
					<td>".$row["product_price"]."</td>
					<td>".$row["product_maker"]."</td>
					<td>".$row["product_rating"]."</td>
					<td>".$row["product_range"]."</td>
					<td><a href='viewaproduct.php?product_name=".$row["product_name"]."'>View</a></td>
				</tr>
			";
		}
		?>		
		</table>
</body>

</html>
