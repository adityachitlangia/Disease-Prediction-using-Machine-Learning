<?php
echo '
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
  margin: 10px;
}
</style>';
require_once('conn.php');
session_start();
$type=$_POST['doctype'];
//echo $name;
$query="select * from doctor_location where Speciality='$type';";
$result = mysqli_query($con,$query);
//echo $query;
if($result->num_rows > 0) {
	echo '<center><table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Speciality</th>
			  <th>Name</th>
			  <th>Area</th>';
		echo '</tr>';
	while($row = $result->fetch_assoc()) {
	$area=$row['Area'];
	echo '<tr>';
			echo '  <td>' . $row["Speciality"] . '</td>';
			echo '  <td>' . $row["Name"] . '</td>';
			echo '  <td>' . $row["Area"] . '</td>';
			echo '  </td></tr>';
		}
	}
	echo "<a href='welcomedoctor.php'><button>Back</button></a></center>";
?> 