<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header ('location:../admin.php');
}?>

<?php
include('header.php');
include('titlehead.php');
?>
<body background="g.jpg">
<form action="add.php" method="post" enctype="mutipart/form-data">
<table align="center" border="1" style="background-color: powderblue;">

<th>flat_id</th>
<td><input type="text" name="flat_id" placeholder="enter your flat id" required></td></tr>
<tr>
<th>Aartment Name</th>
<td><input type="text" name="apartment" placeholder="enter apartment name" required></td></tr>
<tr>
<th>s_id</th>
<td><input type="text" name="s_id" placeholder="enter society id" required></td></tr>	
<tr>
<tr>
<th>Address</th>
<td><input type="text" name="address" placeholder="enter flat address" required></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$flatid=$_POST['flat_id'];
	$apartment=$_POST['apartment'];
	$sid=$_POST['s_id'];
	$address=$_POST['address'];
	$qry="INSERT INTO `flat`(`flat_id`, `apartment`, `s_id`,`address`) VALUES ('$flatid','$apartment','$sid','$address')";
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