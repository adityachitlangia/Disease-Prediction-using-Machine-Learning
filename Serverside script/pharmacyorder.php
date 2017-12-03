<?php
require_once('conn.php');
session_start();
/*foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}*/

	$items = $_SESSION['list'];
	
	foreach($items as $value)
	{	$valuepreg=preg_replace('/\s+/','_', $value);
		$valuepreg=str_replace('.','_', $valuepreg);
		$confirmation=$_POST[$valuepreg];
		//echo $confirmation;
		
		
			if ($confirmation=='Y')
			{ 
				$sql="Select Area from pharmacy where Chemist='$value';";
				$result = mysqli_query($con,$sql);
				//echo $sql;
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$area=$row["Area"];
				echo '<style>body {
  				background-image: url("img/takecare.jpeg");
  				background-size: 1920px 900px;
 				background-repeat: no-repeat;}';
				$patientname=$_SESSION['fname'];
				echo $patientname;
				$disease=$_SESSION['disease'];
				$sql = "Insert into orders (PharmacyName, PatientName, Area) values('$value','$patientname','$area');";
				//echo $sql;
				$result = mysqli_query($con,$sql);
							
			}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style type="text/css">
body {
  background-image: url("img/takecare.jpg");
  background-size: 1500px 700px;
  background-repeat: no-repeat;
}
button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3a9ecb;
  width: 230px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
  </style>

</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  <center>
  	<h2 style="color: red;">Thanks for interacting with us! We hope to see you as late as possible next time!!</h2></center><br>
  	<center><a href="welcome.php"><button style="color: white;text-decoration: none;">Back to Homepage</button></a></center>
  </body>
</html>