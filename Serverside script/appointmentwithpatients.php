<?php
require_once('conn.php');
session_start();
$name=$_SESSION['name'];
//echo $name;
$query="select * from appointments where DoctorName='$name';";
$result = mysqli_query($con,$query);
//echo $query;
if($result->num_rows > 0) {
	echo '<center><table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Appointment Num</th>
			  <th>Patient Name</th>
			  <th>Disease</th>';
		echo '</tr>';
	while($row = $result->fetch_assoc()) {
	$area=$row['Area'];
	echo '<tr>';
			echo '  <td>' . $row["ANo"] . '</td>';
			echo '  <td>' . $row["PatientName"] . '</td>';
			echo '  <td>' . $row["Disease"] . '</td>';
			echo '  </td></tr>';
		}
	}
	else{
		echo '<center>No Appointments!</center>';
	}

	echo '<style>
	body{
		background-color: #DEF0F5;
	}	
	button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3a9ecb;
  width: 100px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}</style><br><br><a href="welcomedoctor.php"><button>Back</button></a><br><br></center>';
?> 