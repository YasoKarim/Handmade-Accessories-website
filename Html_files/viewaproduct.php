<!DOCTYPE html>
<html>

<head>
	<title>View Product</title>	
	<style>
		label {
			font-weight: bold;
		}
	</style>
	
	
</head>

<body>
	<h1>View Product</h1>
	<?php
		include "config.php";
		$product_name = $_GET["product_name"];
		
		$viewallproducts = "SELECT * FROM products WHERE product_name = '$product_name'";
		$result = mysqli_query($con,$viewallproducts);
		if(!$result){
			die("Error: ".mysqli_errno($con));
		}
		
		$row = mysqli_fetch_array($result);
		$product_name = $row["product_name"];
		$product_price = $row["product_price"];
		$product_maker = $row["product_maker"];
		$product_rating = $row["product_rating"];
		$product_range = $row["product_range"];	
		?>
		<label>Product Name:</label>
		<p><?php echo $product_name;?></p>
		<label>Product Price:</label>
		<p><?php echo $product_price;?></p>
		<label>Product Maker:</label>
		<p><?php echo $product_maker;?></p>
		<label>Product Rating:</label>
		<p><?php echo $product_rating;?></p>
		<label>Product Range:</label>
		<p><?php echo $product_range;?></p>
</body>

</html>