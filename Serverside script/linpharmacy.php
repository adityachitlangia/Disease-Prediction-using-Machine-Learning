<?php
require_once('conn.php');
session_start();
if(isset($_POST) & !empty($_POST)) 
{
	$eid=mysqli_real_escape_string($con,$_POST['eid']);
	$pass= mysqli_real_escape_string($con,$_POST['pass']);
	$sql = "SELECT * FROM pharmacydetails WHERE email='$eid' AND password='$pass'";

	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['CustomerID'];
      
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['loginpharmacy']=$eid;
         header("location: welcomepharmacy.php");
      }else{
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
		
	//$_SESSION['login_user']=$fname;	

	/*$myFile = "rip.html"; // or .php   
	$fh = fopen($myFile, 'w'); // or die("error");  
	$stringData = "<html>
	<body>


	<h1>Hello my Name is Arush</h1>
	</body>
	</html>
	";   
	fwrite($fh, $stringData);
	fclose($fh);
	echo "You have successfully logged in.";
	header('Location: rip.html');*/
	
	}

else{
		echo "Not Connected!!";
}
?>﻿