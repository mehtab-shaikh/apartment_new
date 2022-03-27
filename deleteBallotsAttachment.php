<?php
    include('dbcon.php');
	$id=$_REQUEST["doc_id"];
    echo $id;
	$qry="DELETE FROM `ballots` WHERE `doc_id`=$id";
    $run=mysqli_query($conn,$qry);
	
	if($run==true)
	{
		
	?>
	<script>
	window.open('ballots.php','_self');
	</script>
	<?php
	
	}
?>