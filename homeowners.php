<?php
	include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>admin dash</title>
	<script type='text/javascript' src='js/jquery-3.6.0.min.js'></script>
	<script type='text/javascript' src='js/homeowners.js'></script>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
.DN{
	display:none;
}

.mainContainer{
	display: flex;
    flex-direction: column;
    justify-content: flex-start;
	align-items:center;
	width:100%;
}

table{
	width:50%;
	height:50%;
	margin-bottom:2rem;
}


tr{
	height: 20px !important;
}

td{
	height: 20px !important;
}

.logo{
	position: absolute;
    right: 0%;
    height: 5rem;
    width: 10rem;
    display: inline-block;
	background-image:url("images/blw1.jpeg");
	background-position: center;
    background-size: contain;
	background-repeat: no-repeat;
    top: 1rem;
}
</style>
<body background-color:"black">
<h3 align="center"> These are all User Request</h3>
<div class="topnav">
  <a href="view.php">Back</a>
  <span class='addAttachmentBtn'>Add Attachment</span>
  <div class='logo'></div>
</div>
<div class='mainContainer'>

							<?php
							echo "<table class= 'table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "FILE NAME"; echo "</th>";
							echo "<th>"; echo "DESCRIPTION"; echo "</th>";
							echo "<th>";echo "OPEN_ATTACHMENT";echo "</th>";
							echo "<th>";echo "DELETE_ATTACHMENT";echo "</th>";
							echo "</tr>";
							$res= mysqli_query($conn,"select * from homeowners");
							while($row=mysqli_fetch_array($res))
							{								
								echo '<tr><td>'.$row["imageFileName"].'</td>';
								echo '<td>'.$row["description"].'</td>';
								echo '<td><a href=./UploadedFile/'.$row["imageFileName"].' target="blank">Open</td>';
								echo "<td>";?> <a href="deleteHomeownersAttachment.php?doc_id=<?php echo $row["doc_id"]; ?>">Delete This</a> <?php echo "</td></tr>";
							}
								
							echo "</table>";
							if(isset($_POST['submit']))
							{
								$description=$_POST['description'];
								$target_dir = "UploadedFile/";
								$fileName=$_FILES['uploadFile']["name"];
								move_uploaded_file($_FILES["uploadFile"]["tmp_name"], 'UploadedFile/'.$fileName);

								$qry="INSERT INTO `homeowners`( `description`, `imageFileName`) VALUES ('$description','$fileName')";
								$run=mysqli_query($conn,$qry);
								if($run==true)
								{
									echo('inserted');
								}
								
							}
							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$_SESSION['postdata'] = $_POST;
								unset($_POST);
								header("Location: ".$_SERVER['PHP_SELF']);
								exit;
							}
						?>
	<div class='addAttachmentContainer DN'>
	
	<h2  align="center">Add Your Attachement</h2>
	<form action="homeowners.php" method="post" enctype="multipart/form-data">
	<table align="center" border="1" style="background-color: powderblue;">
	<th>Description</th>
	<td><textarea name="description" placeholder="Enter your description/purpose here" rows='5' cols='30' required></textarea></td></tr>
	<tr>
		<th>Upload File</th>
		<td><input type='file' name='uploadFile' id='uploadFile' /></td>
	</tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
	</div>
	</div>			
</body>
</html>

        <!-- /page content -->
