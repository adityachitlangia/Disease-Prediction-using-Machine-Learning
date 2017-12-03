<?php
require_once('conn.php');
session_start();
$eid=$_SESSION['loginpharmacy'];

$ses_sql=mysqli_query($con,"select * from pharmacydetails where Email='$eid'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC); 
$pharmacyid=$row['PId'];
$name=$row['Name'];
$area=$row['Location'];
$email=$row['Email'];
$_SESSION['PharmacyName']=$name; 

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<title>Welcome<?php  echo  $name;?></title>


</head>
<body style="background-color: #3a9ecb;">
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="#" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu" href="orderofpatients.php">Orders</a></li>
					        <li><a class="menu" href="allpharmacies.php">Pharmacies</a></li>
					        <li><a class="menu" href="logout.php">Logout</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->



<section class="about text-center" id="about">
		<div class="container">
			
</div>

	<div style="margin-top: 200px;">
<center>
	<h1 style="font-size: 60px; color: white;">Hello <?php  echo  $name; ?>!</h1>
	<table>
		<tr>
			<td style="font-size: 40px; color: white;">UserId</td>
			<td>&nbsp</td>
			<td style="font-size: 40px;color: white;"><center><?php  echo  $pharmacyid; ?></center></td>
		</tr>
		<tr>
			<td style="font-size: 40px;color: white;">Area</td>
			<td>&nbsp</td>
			<td style="font-size: 40px;color: white;"><?php  echo  $area; ?></td>
		</tr>
	</table>

</center>
</div>
</section>



</body>
</html>
