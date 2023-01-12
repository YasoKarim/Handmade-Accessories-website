<!DOCTYPE html>
<html>

<head>
	<title>View Product</title>	
	<meta charset ="UTF-8">
	<meta name="keywords" content="Text,Website">
	<meta name="description" content="Text Website">
	<meta name="viewport" content="width=device-widt,initial-scale:1.0">
	<link rel="stylesheet" href="../Css_file/myStyle.css">
	<script>
	</script>
</head>

<body>
	
	<div id="header">
		<ul>
		    <li><a href="Homepage.html"><img  src="../img/Logo.png"></li>
			<li><a href="Homepage.html">Home Page</a></li>
			<li><a href="SignUp.php">Sign Up</a></li>
			<li><a href="Contact Us.html">Contact Us</a></li>
			<li><a href="AboutUs.html">AboutUs</a></li>
			<li><a href="Shopcart.html">Shop Cart</a></li>
			<li><a href="Categories.html">Categories</a></li>
		</ul>	
			
	</div>
		<form method="post" action="insert product.php">
			<h1 class="viewprod">View Product</h1>
			<hr>
			<div id="product">
			<h2>Product A</h2>
			<img src="../img/th52.jpg">
			<p><label>Product Name</label></p>
			<input type="text" name="product_name">
			<br>
			<p><label>Product Price</label></p>
			<input type="text" name="product_price">
			<br>
			<p><label>Product Maker</label></p>
			<input type="text" name="product_maker">
			<br>
			<p><label>Product rating:</label></p>
			<input type="text" name="product_rating">
			<br><br>
			<p><label>product_range:</label></p>
			<input type="text" name="product_range">
			<br><br>
			<!--Low <input type="range" name="range" min="1" max="10">High</p>
			<input type="text" name="range">
			<br>-->
			<input type="submit" value="Add product">
			<div class="buttons">	
			<p>
			<a href="PaymentMethod.html"><input class="button-input" type="button" value="buy" ></a>
			<a href="Design.html"><input class="button-input" type="button" value="Choose your design"></a>
		    <!-- <img src="../img/R.png" alt="" class="imgfav">	-->
		</p>
			</div>
		</form>
		
</body>
</html>