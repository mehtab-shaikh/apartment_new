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
include('dbcon.php');
$fl_id=$_GET['id'];
$sql="SELECT * FROM `flat` WHERE `id`='$fl_id'";
$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);
?>
<form action="updatedata.php" method="post" enctype="mutipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">
<tr>
<th>Flat ID</th>
<td><input type="text" name="flat_id" value=<?php echo $data['flat_id'];?> required></td></tr>
<tr>
<th>Apartment</th>
<td><input type="text" name="apartment" value=<?php echo $data['apartment'];?> required></td></tr>	
<tr>
<th>Society Name</th>
<td><input type="text" name="s_id" value=<?php echo $data['s_id'];?> required></td></tr>
<tr>
<th>Address</th>
<td><input type="text" name="address" value=<?php echo $data['address'];?> required></td></tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
<input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>