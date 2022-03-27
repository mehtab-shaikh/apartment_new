<?php
include 'dbcon.php';
$id = $_GET["u_id"];
mysqli_query($conn, "update users set status= 'yes' where u_id= $id");
?>

<script type="text/javascript">
		window.location= "confirm.php";	
</script>
