<?php
session_start();
if(isset($_SESSION['uid']))
{
	header ("location:view.php");
}
?>

<?php
include('dbcon.php');
if(isset($_POST['login']))
{
	$username=isset($_POST['ad_name'])?$_POST['ad_name']:''; // This is ternery operator (condition)?true:false;
	$password=isset($_POST['pass'])?$_POST['pass']:'';
	$qry="SELECT * FROM admin WHERE username='".$username."' AND password='".$password."' limit 1;";
	// exit();
	$run=mysqli_query($conn,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		
		?>
		<script>
		alert('username or password not match!!');
		window.open('admin.php','_self');
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
		
		$ad_id=$data['ad_id'];
		session_start();
		$_SESSION['uid']=$ad_id;
		header("location:view.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>adminform</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
</head>
<body align="left">
<body background="images/blw1.jpeg" style="background-size:cover";>
<div class="bgimg">
<div class="centerdiv">
<form action="admin.php" method="POST">
<img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png" id="profilepic">
<h2>Admin login</h2>
<div>
Username:<input type="text" name="ad_name" class="inputbox" placeholder="Please specify the username" required>
</div>
<br>
<div>
Password:<input type="password" name="pass" class="inputbox" placeholder="Please specify the password" required>
</div>
<br>
<div>
<button type="submit" name="login"> LOGIN </button>
</div>
</form> <br>
<div class="FORGOT-SECTION">
<h4><a href="forgetpassword.php">Forget Password?</a></h4>
</div>

</div>
</div>
</body>
</html>