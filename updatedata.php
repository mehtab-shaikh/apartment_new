<?php
include('dbcon.php');
	$flatid=$_POST['flat_id'];
	$apartment=$_POST['apartment'];
	$sid=$_POST['s_id'];
	$address=$_POST['address'];
	$fl_id=$_POST['id'];	
	$qry="UPDATE `flat` SET `flat_id` = '$flatid', `apartment` = '$apartment', `_id` = '$sid', `address` = '$address' WHERE `id` =$fl_id;";
    $run=mysqli_query($conn,$qry);
	
	if($run==true)
	{
		
	?>
	<script>
	alert('data updated	successfully');
	window.open('updateform.php?id=<?php echo $u_id;?>','_self');
	</script>
	<?php
	
	}
?>