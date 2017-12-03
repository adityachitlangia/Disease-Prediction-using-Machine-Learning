<?php
require_once('conn.php');
session_start();
//$eid=$_SESSION['loginuser'];
$disease=$_SESSION['disease'];
echo '<center><h2>Most probable disease : '.$disease.'</h2></center>';
$query="select distinct(Specialist) from disease_doctor where DiseaseName='$disease';";
$result = mysqli_query($con,$query);
if($result->num_rows > 0) {
	$specialist = array();
	while($row = $result->fetch_assoc()) {
	$check=$row['Specialist'];
			array_push($specialist, $check);
		}
	}
	echo '<h3><center>Specialist(s) required to treat the disease the disease : </h3></center>';
	for($i = 0; $i < sizeof($specialist); $i++)
	{
		echo '<h4><center>'.($i+1).'.  '.$specialist[$i].'<br></center>';
	}
	echo '<br>';

/*$query="select * from doctor_location where Area='$_POST['location1']' or Area='$_POST['location2']' or Area='$_POST['location3']' or Area='$_POST['location4']';";
echo $query;
$result = mysqli_query($con,$query);
if($result->num_rows > 0) {
	$specialist = array();
	while($row = $result->fetch_assoc()) {
	$check=$row['Specialist'];
			array_push($specialist, $check);
		}
	}*/
$ar1=$_POST['location1'];
$ar2=$_POST['location2'];
$ar3=$_POST['location3'];
$ar4=$_POST['location4'];
$_SESSION['ar1']=$ar1;
$_SESSION['ar2']=$ar2;
$_SESSION['ar3']=$ar3;
$_SESSION['ar4']=$ar4;

$alldoctors=array();

//echo $ar1;


echo'<html>
<head>
<style>
body{
		background-color: #DEF0F5;
	}	
button{
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
  margin-bottom:10px;
}
	</style>';

echo '<form action = "doctorappointment.php" method = "POST">';
echo '<center><table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Speciality</th>
			  <th>Doctor Name</th>
			  <th>Area</th>
			  <th>Confirm(Y/N)</th>';
		echo '</tr>';
foreach ($specialist as $spl) {
	$query="select * from doctor_location where Speciality='$spl' and (Area='$ar1' or Area='$ar2' or Area='$ar3' or Area='$ar4');";
	$result = mysqli_query($con,$query);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	$docname=$row['Name'];
	$area=$row['Area'];
	array_push($alldoctors,$docname);
	echo '<tr>';
			echo '  <td>' . $row["Speciality"] . '</td>';
			echo '  <td>' . $row["Name"] . '</td>';
			echo '  <td>' . $row["Area"] . '</td>';
			echo '  <td>' . '<input type = "text" name ="'.$docname.'" size=10px>';
			echo '  </td></tr>';


		}
	}
	echo '</center>';
}
echo '<button type = "submit">Submit</button>';
		echo '</form>';
$_SESSION['list'] = $alldoctors;
?> 