<?php
$host="localhost";
$user="root";
$password="";
$db="lost&found";
$con=mysqli_connect($host,$user,$password,$db);
if($con)
{
	// echo"connected";
}
else
{
	die(mysqli_connect_error());
}


?>