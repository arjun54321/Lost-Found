<?php
include("connection.php");
error_reporting(1);

$name=isset($_POST['name']) ? $_POST['name'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
// echo $name;
// echo $password;
if(!empty($name) && !empty($password) )
{
	$query= "SELECT * FROM registereduser WHERE name='$name'";		       			
	                    $data = mysqli_query($con,$query);	                   
	                    $result=mysqli_fetch_assoc($data);	                    
	                    $count=mysqli_num_rows($data);	 

	                    $i=$result['id']; 
	                    $password1=$result['password'];
	                    if($count>0)
	                    {
	                    	if($password==$password1){
	                    		// header('location:display.php?id='.$i);
	                    		echo "thanks for signin";
	                    	}
	                    	else{
	                    		echo "incorrect password";
	                    	}
	                    	 
	                    }
	                        else{
	                        		echo "there is no user with that username";
	                        }
		       	
}                  	                    
	                                       	                    
	                    
		       		else
		       		{
		       			echo "there must be an empty data field";
		       		}
		       ?>
