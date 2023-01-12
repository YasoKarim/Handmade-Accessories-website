<?php
error_reporting(0);
$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$useremail = $_POST["useremail"];
$userpass1 = $_POST["userpass1"];
$con = mysqli_connect("localhost","root","") or die ("Error cannot connect to the server");
$db = mysqli_select_db($con,"accessories") or die ("Error can't connect to database");
echo "$firstname";
$insertUser = "INSERT INTO users (fname,lname,email,pass) 
values('$firstname','$lastname','$useremail','$userpass1')";
$reuslt = mysqli_query($con,$insertUser);
if($reuslt)
{
    echo "<h1>User entered successfully</h1>";
    echo "<a href='login.php'>Click here to Login</a>";
}
else{
die("Error occured".mysqli_errno($con));
}

$conn->close();








