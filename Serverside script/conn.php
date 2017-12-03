<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'project'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$con){
	die("No Connection!".mysqli_error($con));
}

$db=mysqli_select_db($con,DB_NAME);
if(!$db){
	die("No database!".mysqli_error($con));
}
?>
