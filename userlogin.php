<?php
session_start();
if(isset($_SESSION['usrid']))
{
	header ("location:userdash.php");
}
?>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$username=isset($_POST['u_name'])?$_POST['u_name']:''; // This is ternery operator (condition)?true:false;
	$password=isset($_POST['pass'])?$_POST['pass']:'';
    $qry="SELECT * FROM users WHERE u_name='".$username."' AND pass='".$password."' AND status='yes' limit 1;";
    //exit();
	$run=mysqli_query($conn,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		
		?>
		<script>
		alert('username or password not match!!');
		window.open('userlogin.php','_self');
		</script>
		<?php
	}
	
	else
	{
		$data=mysqli_fetch_assoc($run);
		
		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */
		
		$u_name=$data['u_name'];
		session_start();
		$_SESSION['usrid']=$u_name;
		header("location:userdash.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>userform</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body align="left">
<body background="images/blw1.jpeg" style="background-size:cover";>
<div class="bgimg">
<div class="centerdiv">
<form action="userlogin.php" method="POST">
<img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png" id="profilepic">
<h2>User login</h2>
<div>
username:<input type="text" name="u_name" class="inputbox" placeholder="Enter the username" required>
</div>
<br>
<div>
password:<input type="password" name="pass" class="inputbox" placeholder="Enter the password" required>
</div>
<br>
<div>
<button type="submit" name="submit"> LOGIN </button>
</div>
</form> <br>
<div class="FORGOT-SECTION">
<h4><a href="forgetpassword.php">Forget Password?</a></h4>
</div>
<!-- <div class="separator">
                <p class="change_link">New to site?
                    <a href="apartmentdetails.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
</div> -->
</div>
</body>
</html>