<?php
include("connection.php");

// if(isset($_POST['name'])&&isset($_POST['roll']))

// if($roll!="" && $name!="" )
// {



$name=isset($_POST['name']) ? $_POST['name'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$phone=isset($_POST['phone']) ? $_POST['phone'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
// echo $password;
if(!empty($email) && !empty($name) && !empty($phone) && !empty($password) )
{
	$query="INSERT INTO `registereduser`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email', '$phone', '$password')";
	// echo($query);
	$data=mysqli_query($con,$query);
	if($data)
	{
		echo"data inserted";
	}
	else
	{
		echo"not inserted";
	}
}
else
{
	echo"fields are empty"."<br>";
}
?>