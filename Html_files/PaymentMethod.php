<!DOCTYPE html>
<html>
<head>
    <meta charset="utf">
    <title>Payment</title>
    <link rel="stylesheet" href="../Css_file/Stylesheet.css">
    
</head>
<div class="navabar">
    <ul class="nav">
        <li><a class="logolink" href="Homepage.html"><img class= "logo" src="../img/Logo.png" title="Go to Home"></a></li>
        <li><a class="nava" href="Homepage.html" title="Home">Home</a></li>
        <li><a class="nava" href="Categories.html" title="Categories">Categories</a></li>
        <li><a class="nava" href="AboutUs.html" title="About us">About Us</a></li>
        <li><a class="nava" href="Contact Us.html" title="Contact us">Contact Us</a></li>
        <li><form class="seacrhform">
            <input title="search" class="searchinp" type="text" placeholder="Search:Necklaces,scarfs,icecaps,bracelets.." name="search">
        </form></li>
        <li><a href="SignUp.php"><img class="profile" src="../img/pp2.png"></a></li>
        <li><a href="Shopcart.html" ><img src="../img/Shopcart.png" title="Cart" class="cart"></a></li> 
    </ul>
</div>
<body class="payment">
    <div name="Container">
    <form class="form" action="POST"  >
    <h1 class="checkoutheader">Checkout</h1>
    <hr>
    
    <div>
    <label>First Name *</label> 
    <p>
    <input class="name" type="text" name="fname" placeholder="Enter your name" required> 
    <label class="nlast" >Last Name *</label>
    <input class="name" type="text" name="lname" placeholder="Enter your last name"  required>
    </p>
    </div>
    
    <div>
    <label>City *</label>
    <p>
    <select name="city" class="city">
    <option selected>Cario</option>
    <option>Alexanderia</option>
    <option>Port Said</option>
    <option>kafr el sheikh</option>
    </select>

    <label>Street Address *</label>
    <input class="street" type="text" name="streetinfo" placeholder="Enter your street"  required>
    </p>
    </div>

    <div>
    <label>Card Name *</label>
    <p>
        <select name="card name" class="city">
            <option selected>Visa</option>
            <option>MasterCard</option>
            <option>Meeza</option>
            <option>Mobile Payment</option>
            </select>  
    <!--<input class="cname" type="text" name="cname" placeholder="Enter card name"  required>-->
    
    <label>Credit Card Number *</label>
    <input class="cnumber" type="text" name="cname" placeholder="Enter card number"  required>
    </p>
    </div>

    <div>
    <label>CCV *</label>
    <p>
    <input class="ccv" type="text" name="ccv" placeholder="Enter CCV" size="4" maxlength="4" required>
    
    <label>Expiration Date</label>
    <input class="month" type="month" name="month" placeholder="Month"  >
    <input class="year" type="text" name="year" placeholder="Year"  >
    </p>
    </div>
    
    <div>
    <p>
    <input class="submit" type="submit" >
    </p> 
    </div>   
</div>
</form>
<div class="sidebar">
    
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
