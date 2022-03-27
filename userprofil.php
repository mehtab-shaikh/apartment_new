<?php
	include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>user dash</title>
</head>
</style>
<body background="c.jpg">
<a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">log out</a>
<table align="center">
<h3><a href="userprofil.php" style="color:dodgeblue;">View profile</a></h3>
<h3><a href="bill.php" style="color:dodgeblue;">Pay Bill</a></h3>
<h3><a href="complains.php" style="color:dodgeblue;">Add Complain</a></h3>
</table>
<h3 align="center">We are Working On It</h3>

</body>
</html>
<?php

    if (isset($_GET['f_name']))
    {
        $firstname = $_GET['f_name'];
        $sql = "SELECT * FROM users WHERE f_name='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows >0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["f_name"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["u_id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["f_name"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["l_name"].'</td></tr>';
                echo '<tr><td>Username:</td><td>'.$row["u_name"].'</td></tr>';
				echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Parmanent Address:</td><td>'.$row["par_address"].'</td></tr>';
                echo '<tr><td>Move In Date:</td><td>'.$row["move_in_date"].'</td></tr>';
				echo '<tr><td>Gender:</td><td>'.$row["gender"].'</td></tr>';
                echo '<tr><td>Flat Type:</td><td>'.$row["f_type"].'</td></tr>';
             
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {
        $sql = "SELECT * FROM users";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows >0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["u_id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["f_name"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["l_name"].'</td></tr>';
                echo '<tr><td>Username:</td><td>'.$row["u_name"].'</td></tr>';
				echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Parmanent Address:</td><td>'.$row["par_address"].'</td></tr>';
                echo '<tr><td>Move In Date:</td><td>'.$row["move_in_date"].'</td></tr>';
				echo '<tr><td>Gender:</td><td>'.$row["gender"].'</td></tr>';
                echo '<tr><td>Flat Type:</td><td>'.$row["f_type"].'</td></tr>';
                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
?>