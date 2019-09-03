<?php
include("connection.php");
$email="arjunsingh73362@gmail.com";
$lostname=$_POST['lostname'];
$category=$_POST['category'];
$description=$_POST['description'];
$location=$_POST['location'];

// for image
// print_r($_FILES);

if($_FILES["image"]["name"] != '' && $lostname!='' && $category!='' && $description!='' && $location!='')
{
 $test = explode('.', $_FILES["image"]["name"]);
 $ext = end($test);
 $name = $lostname . '.' . $ext;
 $imagelocation = 'IMAGES/upload/' . $name;  
 move_uploaded_file($_FILES["image"]["tmp_name"], $imagelocation);

 $query="INSERT INTO `lost`(`email`, `lostname`, `category`, `description`, `photo`, `location`) VALUES ('$email','$lostname', '$category', '$description', '$imagelocation', '$location')";
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