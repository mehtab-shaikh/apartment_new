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
<h3 align="center"> All User's Bill Information</h3>
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
							$res= mysqli_query($conn,"select * from bill");
							echo "<table class= 'table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "Bill ID"; echo "</th>";
							echo "<th>"; echo "Username"; echo "</th>";
							echo "<th>"; echo "Flat ID"; echo "</th>";
							echo "<th>"; echo "Society Name"; echo "</th>";
							echo "<th>"; echo "Maintenence Cost"; echo "</th>";
							echo "<th>"; echo "Total Cost With Rent"; echo "</th>";
							echo "<th>"; echo "Payment Date"; echo "</th>";
							
							echo "</tr>";
							
							while($row=mysqli_fetch_array($res))
							{
							echo "<tr>";
								echo "<td>"; echo $row["b_id"]; echo "</td>";
								echo "<td>"; echo $row["u_name"]; echo "</td>";
								echo "<td>"; echo $row["flat_id"]; echo "</td>";
								echo "<td>"; echo $row["s_id"]; echo "</td>";
								echo "<td>"; echo $row["m_cost"]; echo "</td>";
								echo "<td>"; echo $row["t_cost"]; echo "</td>";
								echo "<td>"; echo $row["p_date"]; echo "</td>";
					
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