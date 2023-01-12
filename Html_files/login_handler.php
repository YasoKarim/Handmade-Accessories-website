<?php
error_reporting(0);
$useremail = $_POST["useremail"];
$userpass1 = $_POST["userpass1"];
$con = mysqli_connect("localhost","root","") or die ("Error cannot connect to the server");
$db = mysqli_select_db($con,"accessories") or die ("Error can't connect to database");
$login = "SELECT email,pass FROM users WHERE email = '$useremail' and pass ='$userpass1'"; 
$reuslt = mysqli_query($con,$login);
$count = mysqli_num_rows($reuslt);
if($count == 1)
{
    echo "<h1>Welcome TO Our Page!</h1>";
    echo "<a href= 'viewusers.php'><h1>View Users</h1></a>";
}
else{
    echo "Invalid Email and password";
}
?>

