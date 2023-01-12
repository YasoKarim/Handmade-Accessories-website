<!DOCTYPE html>
<html>
<head>
    <title>View user</title>
    <meta charset="utf">
    <link rel="stylesheet" href="../Css_file/Stylesheet.css">
    <script src="../Javascript_files/Javascript.js"></script>
</head>
<body class = "viewusers">
    <div class="viewUserBody"> 
    <h1>View user</h1>
    <?php
    $con = mysqli_connect("localhost","root","") or die ("Error cannot connect to the server");
    $db = mysqli_select_db($con,"accessories") or die ("Error can't connect to database");
    $email = $_GET["email"];
    $viewusers = "SELECT * FROM users WHERE email = '$email'";
    $reuslt = mysqli_query($con,$viewusers);
if(!$reuslt)
{
    die("Error occured".mysqli_errno($con)); 
}
$row = mysqli_fetch_array($reuslt);
$firstname =  $row["fname"];
$lastname  =  $row["lname"]; 
$email     =  $row["email"];
$password  =  $row["pass"];
   ?>
   <p>
   <label>First Name: </label>
   <?php echo $firstname;?> 
   </p>
   <p>
   <label>Lastname:</label>
   <?php echo $lastname;?>
   </p>
   <p>
   <label>Email: </label>
   <?php echo $email;?>
   </p>
   <p>
   <label>Password: </label>
   <?php echo $password;?>
   </p>
   </div>

    <div  class="footer">
        <p><strong>Author: </strong><br>
            Yasmine El Shafei<br>
            Mariam El Kady <br>
            Copyright &copy;, <script>document.write(new Date().getFullYear())</script> <a href="Homepage.html">Y&MAccessories.com</a>
        </p>
        <div class="footer-img">
        <img title="Instagram" class="Instagram" src="../img/Instagrm.png" alt="Instagram">
        <img title="Facebook" class="Facebook" src="../img/Facebook.png" alt="Facebook">
        <img title="TikTok" class="Tiktok" src="../img/Tiktok.png" alt="TikTok">
        </div>    
    </div>
</body>

</html>
<!--<div class="navabar">
    <ul class="nav">
        <li><a class="logolink" href="Homepage.html"><img class= "logo" src="../img/Logo.png" title="Go to Home"></a></li>
        <li><a class="nava" href="Homepage.html" title="Home">Home</a></li>
        <li><a class="nava" href="Categories.html" title="Categories">Categories</a></li>
        <li><a class="nava" href="AboutUs.php" title="About us">About Us</a></li>
        <li><a class="nava" href="Contact Us.html" title="Contact us">Contact Us</a></li>
        <li><form class="seacrhform">
            <input title="search" class="searchinp" type="text" placeholder="Search:Necklaces,scarfs,icecaps,bracelets.." name="search">
        </form></li>
        <li><a href="SignUp.php"><img class="profile" src="../img/pp2.png"></a></li>
        <li><a href="Shopcart.html" ><img src="../img/Shopcart.png" title="Cart" class="cart"></a></li> 
    </ul>
</div>
echo $row["fname"]. " ";
echo $row["lname"]. " "; 
echo $row["email"]. " ";
echo $row["pass"]. " "; 
echo "<br>";
<table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Details</th>
        </tr>
--->