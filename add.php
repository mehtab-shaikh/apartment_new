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

<!-- <?php
include('header.php');
include('titlehead.php');
?> -->
<body background="blw1.jpg">


<h2  align="center">Add Your Attachement</h2><br><br><br><br><br><br>
<form action="add.php" method="post" enctype="multipart/form-data">
<table align="center" border="1" style="background-color: powderblue;">

<th>category</th>
<td><input type="text" name="category" placeholder="enter your category" required></td></tr>
<tr>
<th>Aartment Name</th>
<td><input type="text" name="apartment" placeholder="enter apartment name" required></td></tr>
<tr>
<th>s_id</th>
<td><input type="text" name="s_id" placeholder="enter society id" required></td></tr>	
<tr>
<tr>
<th>Address</th>
<td><input type="text" name="address" placeholder="enter flat address" required></td></tr> -->
<tr>
	<th>Upload File</th>
	<td><input type='file' name='uploadFile' id='uploadFile' /></td>
</tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$flatid=$_POST['category'];
	$apartment=$_POST['apartment'];
	$sid=$_POST['s_id'];
	$address=$_POST['address'];
	$target_dir = "UploadedFile/";
	$fileName=$_FILES['uploadFile']["name"];
	move_uploaded_file($_FILES["uploadFile"]["tmp_name"], 'UploadedFile/'.$fileName);

	$qry="INSERT INTO `flat`( `flat_id`, `apartment`, `s_id`, `address`) VALUES ('$flatid','$apartment','$sid','$address')";
	$run=mysqli_query($conn,$qry);
	if($run==true)
	{
		echo('inserted');
	?>
	<script>
	alert('data inserted successfully');
	</script>
	<?php
	
	}
}
?>