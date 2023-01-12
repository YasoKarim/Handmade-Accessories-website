<?php 
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"]; 
$product_maker = $_POST["product_maker"];
$product_rating = $_POST["product_rating"]; 
$product_range = $_POST["product_range"]; 

$con = mysqli_connect("localhost","root","") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"accessories") or die("Error: Can't Connect to Database");

$insertProduct = "INSERT INTO products (product_name,product_price,product_maker,product_rating,product_range) value('$product_name','$product_price','$product_maker','$product_rating','$product_range')";
$result = mysqli_query($con,$insertProduct);

if($result){
	echo "<h1>product Added Successfully</h1>";
	echo "<a href='viewallproducts.php'>Click here to view all products</a>";
	
}
else {
	die("Error: ".mysqli_errno($con));
	
}
?>