<?php
	include 'database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>admin dash</title>
<img src="images/imglogo2.png" width="100%" height="150">
</head>
<style>
body  {
    background-image: url(images/img1.jpg);
    background-repeat: no-repeat;
    background-position: center;
	background-size: cover;
}
.topnav {
    background-color: #ff86;
    overflow: hidden;
	
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
	
}
table, th, td {
    border: 2px solid black;
}
</style>
<body>
<div class="topnav">
  <a href="userdash.php">User Dashboard/ All Apertments</a>
  <a href="userprofile.php">Show Profile</a>
  <a href="display_bill.php">Show Bill</a>
  <a href="add_complain.php">Add Complain</a>
  <a href="alogout.php">Log Out</a>
  
</div>
<h3 align="center">Please Pay The Bill With Your Presence</h3>
</body>
</html>