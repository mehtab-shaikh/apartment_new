<?php
    include('dbcon.php');
	$id=$_REQUEST["doc_id"];
    echo $id;
	$qry="DELETE FROM `financialstatement` WHERE `doc_id`=$id";
    $run=mysqli_query($conn,$qry);
	
	if($run==true)
	{
		
	?>
	<script>
	window.open('financialstatement.php','_self');
	</script>
	<?php
	
	}
?>