<?php
require_once('conn.php');
if(isset($_POST) & !empty($_POST))
{
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname= mysqli_real_escape_string($con,$_POST['lname']);
$eid = mysqli_real_escape_string($con,$_POST['eid']);
$age = mysqli_real_escape_string($con,$_POST['age']);
$pass = md5($_POST['pass']);

$sql1 = "SELECT * FROM UserDetails WHERE email='$eid'";
$result1 = mysqli_query($con,$sql1);

$sql = "INSERT into userdetails(Fname,Lname,Email,Age,Password) values('$fname','$lname','$eid','$age','$pass')";
$result = mysqli_query($con,$sql);

/*if(mysql_num_rows($result1)==1){
	echo "User already registered!";
	exit();
}
else{*/
	if($result)
  {
    header("location: mid.html");
  }
  else
  {
    echo "User Registration Failed, User already registered!";
  }
 

/*else{
	echo "Hell No!!";*/
}
?>
