<?php
    include('dbcon.php');
	$id=$_REQUEST['id'];
	$qry="DELETE FROM `flat` WHERE `id`='$id';";
    $run=mysqli_query($conn,$qry);
	
	if($run==true)
	{
		
	?>
	<script>
	alert('data deleted	successfully');
	window.open('delete.php','_self');
	</script>
	<?php
	
	}
?>