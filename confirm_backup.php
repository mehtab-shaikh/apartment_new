<?php
	include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>admin dash</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body background="images/livingroom.jpg">
<h3 align="center"> These are all User Request</h3>
<div class="topnav">
  <a href="admindash.php">Admin Dashboard</a>
<a href="confirm.php">Show Requests</a>
  <a href="dis_bill.php">Add Bill</a>
  <a href="dis_complain.php">Show Complain</a>
  <a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">log out</a>
</div>
</body>
</html>

							<?php
							$res= mysqli_query($conn,"select * from users");
							echo "<table class= 'table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "Firstname"; echo "</th>";
							echo "<th>"; echo "Lastname"; echo "</th>";
							echo "<th>"; echo "Username"; echo "</th>";
							echo "<th>"; echo "Email"; echo "</th>";
							echo "<th>"; echo "Permanent Address"; echo "</th>";
							echo "<th>"; echo "Move In Date"; echo "</th>";
							echo "<th>"; echo "Gender"; echo "</th>";
							echo "<th>"; echo "Flat Type"; echo "</th>";
							echo "<th>"; echo "Status"; echo "</th>";
							echo "<th>"; echo "Approve"; echo "</th>";
							echo "<th>"; echo "Not approve"; echo "</th>";
							
							echo "</tr>";
							
							while($row=mysqli_fetch_array($res))
							{
							echo "<tr>";
								echo "<td>"; echo $row["f_name"]; echo "</td>";
								echo "<td>"; echo $row["l_name"]; echo "</td>";
								echo "<td>"; echo $row["u_name"]; echo "</td>";
								echo "<td>"; echo $row["email"]; echo "</td>";
								echo "<td>"; echo $row["par_address"]; echo "</td>";
								echo "<td>"; echo $row["move_in_date"]; echo "</td>";
								echo "<td>"; echo $row["gender"]; echo "</td>";
								echo "<td>"; echo $row["f_type"]; echo "</td>";
								echo "<td>"; echo $row["status"]; echo "</td>";
								echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["u_id"]; ?>">Approve</a> <?php echo "</td>";
								echo "<td>"; ?> <a href="notapprove.php?id=<?php echo $row["u_id"];?>">Not Approve</a> <?php echo "</td>";
					
							echo "</tr>";
									
							}
							echo "</table>";
							
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->