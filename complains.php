<html>
<head>
<title>complain</title>
</head>
<body background="b.jpg">
<a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">log out</a>
<table align="center">
<h3><a href="userprofil.php" style="color:dodgeblue;">View profile</a></h3>
<h3><a href="bill.php" style="color:dodgeblue;">Pay Bill</a></h3>
<h3><a href="complains.php" style="color:dodgeblue;">Add Complain</a></h3>
</table>
<h2 align="center">COMPLAIN HERE</h2>
<form action="complains.php" method="post" enctype="mutipart/form-data">
<table align="center" border="1" style="background-color: powderblue;">

<th>User Name</th>
<td><input type="text" name="u_name" placeholder="enter User name" required></td></tr>
<th>flat_id</th>
<td><input type="text" name="flat_id" placeholder="enter your flat id" required></td></tr>
<tr>
<tr>
<th>s_id</th>
<td><input type="text" name="s_id" placeholder="enter society id" required></td></tr>
<th>Subject</th>
<td><input type="text" name="subject" placeholder="enter subject" required></td></tr>
<th>Reporting Date</th>
<td><input type="text" name="r_date" placeholder="enter reporting date" required></td></tr>	
<tr><td colspan="2"><input type="submit" name="submit" value="SUBMIT"></td></tr>
</table>
</form>
 </body>
 </html>
 <?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$username=$_POST['u_name'];
	$flatid=$_POST['flat_id'];
	$sid=$_POST['s_id'];
	$subject=$_POST['subject'];
	$reportingdate=$_POST['r_date'];
	$qry="INSERT INTO `complain`(`u_name`,`flat_id`, `s_id`,`subject`,`r_date`) VALUES ('$username','$flatid','$sid','$subject','$reportingdate')";
	$run=mysqli_query($conn,$qry);
	if($run==true)
	{
		
	?>
	<script>
	alert('data inserted successfully');
	</script>
	<?php
	
	}
}
?>