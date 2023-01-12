<?php
	$con = mysqli_connect("localhost","root","") or die("Error: Can't Connect to Server");
	$db = mysqli_select_db($con,"accessories") or die("Error: Can't Connect to Database");
	?>