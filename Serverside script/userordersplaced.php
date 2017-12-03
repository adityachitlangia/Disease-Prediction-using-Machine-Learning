<?php
require_once('conn.php');
session_start();
echo '<style>
body{
		background-color: #DEF0F5;
	}	
  button{
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3a9ecb;
  width: 150px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
</style>';
$name=$_SESSION['fname'];
//echo $name;
$query="select * from orders where PatientName='$name';";
//echo $query;
$result = mysqli_query($con,$query);
//echo $query;
if($result->num_rows > 0) {
	echo '<center><table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Orderno</th>
			  <th>Pharmacy Name</th>
			  <th>Area</th>';
		echo '</tr>';
	while($row = $result->fetch_assoc()) {
	$area=$row['Area'];
	echo '<tr>';
			echo '  <td>' . $row["ONo"] . '</td>';
			echo '  <td>' . $row["PharmacyName"] . '</td>';
			echo '  <td>' . $row["Area"] . '</td>';
			echo '  </td></tr>';
		}
	}
	else{
		echo '<br><center>';
		echo 'No Orders!</center>';
	}
	echo '<center><br><br><a href="welcome.php"><button>Back</button></a><br><br></center>';
?> 