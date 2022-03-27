<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header ('location:admin.php');
}?>

<html>
<head>
<title>admin dash</title>
<h1 align="center" style="background-color:MediumSeaGreen";><b>Welcome to BLW Admin Dashboard</b></h1>
</head>
<body background="images/blw1.jpeg" style="background-size:cover";><br><br>
<a href="logout.php" style="float:right; margin-right:30px; color:black; font-size:30px;">log_out</a>
<table align="center"><br><br>
<h2 align="left" style="color:FFFFE6;"><a href="view.php" style="background-color:80FF66">View Categories</a></h2>
<!-- <h2 align="left" style="color:black;"><a href="add.php" style="background-color:80FF66">Insert Information </a></h2>
<h2 align="left" style="color:black;"><a href="delete.php" style="background-color:80FF66">Delete Information</a></h2>
<h2 align="left" style="color:black;"><a href="update.php" style="background-color:80FF66">Update Information</a></h2> -->
</table>
</body>
</html>



