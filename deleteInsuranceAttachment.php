<?php
    include('dbcon.php');
	$id=$_REQUEST["doc_id"];
    echo $id;
	$qry="DELETE FROM `insurance` WHERE `doc_id`=$id";
    $run=mysqli_query($conn,$qry);
	
	if($run==true)
	{
		
	?>
	<script>
	window.open('insurance.php','_self');
	</script>
	<?php
	
	}
?>