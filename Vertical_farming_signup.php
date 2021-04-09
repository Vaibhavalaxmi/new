<?php
$host="remotemysql.com";
$user="NGzf1nr5Wb";
$pass="ZN4NJN2d3e";
$db="NGzf1nr5Wb";
$conn=mysqli_connect($host,$user,$pass,$db);
if(isset($_GET['submit']))
{
	
	$email=$_GET['Email'];
	$password=$_GET['Password'];
	
	$sql="insert into vertical_farming_registration(EmailId,Password)values($email,$password)";
	
if(mysqli_query($conn,$sql))
{
	echo "success";
	


}
else
{
	echo "user already exists or not a valid phone number";
}
}

?>
	
	
	





