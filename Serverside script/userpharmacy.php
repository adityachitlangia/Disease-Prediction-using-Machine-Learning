<?php

require_once('conn.php');
session_start();
//$eid=$_SESSION['loginuser'];
$ar1=$_SESSION['ar1'];
$ar2=$_SESSION['ar2'];
$ar3=$_SESSION['ar3'];
$ar4=$_SESSION['ar4'];

$pharmacylocation=array();
$pharmacylocation[0]=$ar1;
$pharmacylocation[1]=$ar2;
$pharmacylocation[2]=$ar3;
$pharmacylocation[3]=$ar4;

$allpharmacy=array();
//echo $ar1;
echo'<style>
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
  padding: 10px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-bottom:10px;
}
	</style>';

echo '<center><form action = "pharmacyorder.php" method = "POST">';
echo '<table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Pharmacy Name</th>
			  <th>Area</th>
			  <th>Confirm(Y/N)</th>';
		echo '</tr>';
foreach ($pharmacylocation as $phr) {
	$query="select * from pharmacy where Area='$phr';";
	$result = mysqli_query($con,$query);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	$phname=$row['Chemist'];
	$area=$row['Area'];
	array_push($allpharmacy,$phname);
	echo '<tr>';
			echo '  <td>' . $row["Chemist"] . '</td>';
			echo '  <td>' . $row["Area"] . '</td>';
			echo '  <td>' . '<input type = "text" name ="'.$phname.'" size=10px>';
			echo '  </td></tr>';


		}
	}

}
echo '<button type = "submit">Submit</button>';
		echo '</form></center>';
$_SESSION['list'] = $allpharmacy;
?> 