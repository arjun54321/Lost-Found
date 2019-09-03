<?php
include('connection.php');
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "pageload");
 $query = "SELECT * FROM lost ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($con, $query);
 while($row = mysqli_fetch_array($result))
 {
 	$photo=$row['photo'];
 	$lostname=$row['lostname'];
  echo "
	  <div class='card'>
		  <img src='".$photo."' alt='John' style='width:100%; height:200px'>
		  <h1>".$lostname."</h1>
		  <p><button class='cardbtn'>Contact</button></p>
	  </div>
  ";
  // echo"<div class='hello' style='float:left;'><a href='moviereview.php?mid=$result[id]&uid=$_GET[uid]'><img class='my' src='cover/".$j.".jpg' style='' alt='plase wait'></a>";
 }
}

?>
