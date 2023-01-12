<!DOCTYPE html>
<html>
<head>
    <meta charset="utf">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Css_file/Stylesheet.css">
    <script src="../Javascript_files/Javascript.js"></script>
</head>
<div class="navabar">
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

<body class="signup">
    <div name="Container">
    <form onsubmit= "return validation()" class="form" method ="post" action="users_insert.php"  name ="signupform">
    <h1>Create an Account</h1>
    <hr>
    
    <label>First Name *</label> 
    <p>
    <input id = "fisrtname" type="text" name="firstname" placeholder="Enter your first name" >
    </p>
    <label>Last name *</label> 
    <p>
    <input class="lastname" type="text" name="lastname" placeholder="Enter your Last name" >
    </p>
    <label>Email *</label> 
    <p>
    <input class="email" type="text" name="useremail" placeholder="Enter your email" >
    </p>
   
    <label>Password *</label>
    <p>
    <input class="pass1" type="password" name="userpass1" placeholder="Enter password" >
    </p>
    
   
    

    <p>
    <input class="checkbox"type="checkbox" name="remember" >
    <label>*By creating an account you agree to ourTerms and Coniditons</label>
    </p>
    <p>
   <button class ="submit"type ="submit" name="submit">Submit</button>

    </p>    
    </div>
    </form>


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

