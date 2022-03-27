<?php
	include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>APARTMENT DETAILS</title>
</head>
<body>
<div class="topnav">
  <a href="index.php">Main Page </a>
  <a href="login.php">Admin Login</a>
  <a href="userlogin.php">User Login</a>
</div>

<header>
<h1 align="center">BLW PRIVATE PROPERTY</H1>
<h2 align="center" ><i> Boca Linda West</i></h2>
<img src="images/a.jpg"style="width:128px;height:128px;">
<img src="images/c.jpg"style="width:128px;height:128px;">
<img src="images/h.jpg"style="width:128px;height:128px;">
<img src="images/g.jpg"style="width:128px;height:128px;">
<img src="images/e.jpg"style="width:128px;height:128px;">
<img src="images/f.jpg"style="width:128px;height:128px;">
<!-- <img src="images/i.jpg"style="width:128px;height:128px;"> -->
<img src="images/b.jpg"style="width:128px;height:128px;">
<img src="images/d.jpg"style="width:128px;height:128px;">
<p align ="upright">Private property is a legal designation for the ownership of property by non-governmental legal entities. 
    Private property is distinguishable from public property, 
    which is owned by a state entity, and from collective or cooperative property, which is owned by a group of non-governmental entities
 <p align ="upright">
 Property rights are theoretical socially-enforced constructs in economics for determining how a resource or economic good is used and owned. 
 Resources can be owned by (and hence be the property of) individuals, associations or governments. 
 Property rights can be viewed as an attribute of an economic good.
</p>
</header>

<section>
  <nav>
    <p align ="center">
<h2>Amenities</h2>
<input type="text" value="Kitchen"><br>
<input type="text" value="Shower/bath"><br>
<input type="text" value="Balcony"><br>
<input type="text" value="Fridge/freezer"><br>
<input type="text" value=" Heating"><br>
 <input type="text" value="Family-friendly"><br>   
<input type="text" value="Lift"><br>
<input type="text" value="Gay-friendly"><br>
<input type="text" value="Dishwasher"><br>
<input type="text" value="Internet"><br>
<input type="text" value="Washing machine"><br>
<input type="text" value="WiFi"><br>
<input type="text" value="Bed linen"><br>
<input type="text" value="Hair dryer"><br>
<input type="text" value="Iron"><br>
<input type="text" value="Kettle"><br>  
<input type="text" value="Towels"><br> 
</p>

  </nav><br><br><br>
  <h2 align="center">********** <u>"BEAUTIFUL PLACE TO STAY PEACE"</u> **********</h2>
<!--   
  <article>
<strong><p align ="upright">After submitting your furnished housing request, you will receive detailed apartment community information for your desired location along with our all inclusive price quote for your fully furnished Lawrence apartment.<br><br>
 Please submit your request into our reservation system by using the SUBMIT button below. 
 </p></strong>
 <section>

                <form name="form1" action="apartmentdetails.php" method="post">
                    <h2 align="center">Request Form</h2><br>
                    <div align="center">
                    <label>First Name:</label><br>
                        <input type="text" class="form-control" placeholder="FirstName" name="f_name" required=""/>
                        </div>
               
                    <div align="center">
                    <label>Last Name:</label><br>
                        <input type="text" class="form-control" placeholder="LastName" name="l_name" required=""/></div>
                    
                    <div align="center">
                    <label>User Name:</label><br>
                        <input type="text" class="form-control" placeholder="Username" name="u_name" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Password:</label><br>
                        <input type="password" class="form-control" placeholder="Password" name="pass" required=""/>
                    </div>
                    <div align="center">
                    <label>Email:</label><br>
                        <input type="text" class="form-control" placeholder="Email" name="email" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Permanent Address:</label><br>
                        <input type="text" class="form-control" placeholder="Permanent Address" name="par_address" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Move In Date:</label><br>
                        <input type="date" class="form-control" placeholder="Date" name="move_in_date" required="">
                    </div>
                    
                    <div align="center">
                    <label>Gender:</label><br>
                    	<input type="radio" name="gender" value="male" checked> Male
  						<input type="radio" name="gender" value="female"> Female
                        
                    </div>
                    <div align="center">
                    <label>Flat Type:</label><br>
                    	<input type="radio" name="f_type" value="1_Bed/1_Bath" checked> 1 Bed/1 Bath
  						<input type="radio" name="f_type" value="2_Bed/1_Bath"> 2 Bed/1 Bath
                        <input type="radio" name="f_type" value="2_Bed/2_Bath"> 2 Bed/2 Bath
  						<input type="radio" name="f_type" value="3_Bed/2_Bath"> 3 Bed/2 Bath
                    </div>
                    <div align="center">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Submit Request">
                    </div>
                </form>
               
            </section>
     </article>
</section>
      	<?php
			if(isset($_POST["submit"]))
			{
			mysqli_query($conn,"insert into users values('','$_POST[f_name]','$_POST[l_name]','$_POST[u_name]','$_POST[pass]','$_POST[email]','$_POST[par_address]','$_POST[move_in_date]','$_POST[gender]','$_POST[f_type]','no')");
			?>
		<div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved
  	  </div> -->
        
	  
	  <?php
			
			}
	?>
</body>
</html>
