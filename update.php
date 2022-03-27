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
<body background="images/a.jpg">
<style>
table, th, td {
    border: 2px solid black;
}
</style>
<table>
<form action="delete.php" method="post">
<tr><th> enter your flatid </th>
<td><input type="text" name="flat_id" placeholder="enter the flatid" required="required"/>
</td>
<th>enter your society id</th>
<td><input type="text" name="s_id" placeholder="enter the society id " required="required"/>
</td>
<td colspan="2"><input type="submit" name="submit" value="search"/></td>
</tr>
</form>
</table>

<?php

include('dbcon.php');
				$res= mysqli_query($conn,"select * from flat");
							echo "<table class= 'table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "Flat ID"; echo "</th>";
							echo "<th>"; echo "Apartment Name"; echo "</th>";
							echo "<th>"; echo "Society ID"; echo "</th>";
							echo "<th>"; echo "Address"; echo "</th>";
							echo "<th>"; echo "Update"; echo "</th>";
							
							echo "</tr>";
							
							while($row=mysqli_fetch_array($res))
							{
							echo "<tr>";
								echo "<td>"; echo $row["flat_id"]; echo "</td>";
								echo "<td>"; echo $row["apartment"]; echo "</td>";
								echo "<td>"; echo $row["s_id"]; echo "</td>";
								echo "<td>"; echo $row["address"]; echo "</td>";
								echo "<td>"; ?> <a href="updateform.php?id=<?php echo $row["id"]; ?>">Update info</a> <?php echo "</td>";
								
					
							echo "</tr>";
									
							}
							echo "</table>";
							
							?>
</table>
</body>
