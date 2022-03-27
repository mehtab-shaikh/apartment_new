<html>
<head>
<title>view</title>
<style>
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
<script type='text/javascript' src='js/jquery-3.6.0.min.js'></script>
	<script type='text/javascript' src='js/view.js'></script>
</head>
<body background="grey">
<div class="topnav">
  <div class='logo'></div>
</div>
<h1 style='background-color: seagreen;text-align: center;color:white;'>Welcome to BLW Admin Dashboard</h1>
<h3><a href="rulesAndRegulations.php">ByLaws & Rules & Regulations</a></h3>
<h3><a href="rentalrequest.php">List of Rental requests By order of priority</a></h3>
<h3><a href="financialstatement.php">Financial Statements </a></h3>
<h3><a href="bankingstatement.php">Banking statements</a></h3>
<h3><a href="homeowners.php">Directory of homeowners</a></h3>
<form>
<label><a href="#"><b>Current contracts</b></a></label>
<select name="forma" class='contactsDropDown'>
<option value = "">select</option>
<option value = "Insurance">Insurance</option>
<option value = "Cable">Cable</option>
<option value = "Management Company">Management Company</option>
<option value = "Janitorial Services">Janitorial Services</option>
<option value = "Landscaping">Landscaping</option>
</select>
</form>
<form>
<label><a href="#"><b> Voting Documents</b></a></label>
<select name="forma" class='votingDropDown'>
<option value = "">select</option>
<option value = "Ballots">Ballots</option>
<option value = "Sign-in sheets">Sign-in sheets</option>
<option value = "proxies">proxies</option>
</select>
</form>
<h3><a href="meetings.php">Minutes of meetings</a></h3>
<h3><a href="hoa.php">Apt #s which are delinquent in paying HOA Quarterly Dues</a></h3>
<h3><a href="dis_complain.php">Complain/Compliance</a></h3>
<a href="logout.php">Log Out</a>
</body>
</html>
