<?php
// require 'image_compare.php';
?>
<!DOCTYPE html>
<html>
	<head>
  	<title>LAF</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<link href="https://fonts.googleapis.com/css?family=Germania+One|Do+Hyeon|Jua|Nunito|Ro|Century" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>')</script>
  	<!-- internal js links -->
  	<script src="js/slicknav.js"></script>
  	<script src="js/navbar.js"></script>
  	<!-- internal css -->
  	<link rel="stylesheet" type="text/css" href="css/loader.css">
  	<link rel="stylesheet" type="text/css" href="css/slicknav.css">
  	<link rel="stylesheet" type="text/css" href="css/navbar.css">
  	<link rel="stylesheet" type="text/css" href="css/section1.css">
  	<link rel="stylesheet" type="text/css" href="css/lostsection1.css">
  	<style type="text/css">
      /*inline hyperlink*/
      html {
          scroll-behavior: smooth;
          overflow-x: hidden;
          overflow-y: scroll !important;
      }
      /*end inline hyperlink*/
      #modal {
          width: 30%;
          height: 450px;
          background: red;
          margin-left: 35%;
          margin-top: -600px;
          position: fixed;
          z-index: 2;
          margin-right: 35%;
      }
      #blur {
          width: 100%;
          height: 100%;
          background: rgba(0,0,0,0.8);
          position: fixed;
          top: 0;
          left: 0;
          display: none;
          z-index: 2;
      }
      body {
          margin: 0;
          font: normal 16px Arial, Helvetica, sand-serif;
          color: black;
      }
    </style>
	</head>
  <body>
    <!-- start loader coding -->
    <!-- <div class="loader-con">
          <div class="slide-left"></div>
          <div class="slide-right"></div>
          <i class="loader-icon" style="font-size:50px"><img class="img-logo" src="images/logo/cat.gif" style="width:80px;height:80px;" alt="Loading..."/></i> </div> -->
    <!-- end loader coding --> 

    <!-- start popup -->
    <div class="popup" style="z-index: 5;">
      <div id="blur"></div>
      <div id="modal">
        <h1>hello</h1>
      </div>
    </div>
    <!-- end popup --> 

    <!-- start mobile nav coding -->
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="lost.php">Lost</a></li>
      <li><a href="#">Found</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="#" class="m1">Login</a></li>
    </ul>
    <!-- end mobile nav coding --> 

    <!-- start desktop nav coding -->
    <ul class="desk-menu">
      <div class="brand-name">
        <li><a href="#">LOST<span style="font-size: 20px">&</span>FOUND</a></li>
      </div>
      <div class="search-container2">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="top-right-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="lost.php">Lost</a></li>
        <li><a href="#">Found</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a class="a1">Login</a></li>
      </div>
    </ul>
    <!-- end desktop nav coding -->
    <div class="search-container1">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <!-- start section1 coding -->
    <div class="section1">
      <div class="lostsection1a">
        <form action="" class="insertdata" id="insertdata">
          lostname:<input type="text" name="lostname" id="lostname">
          <br><br>
          category:<input type="text" name="category" id="category">
          <br><br>
          description:<input type="text" name="description" id="description">
          <br><br>
          location:<input type="text" name="location" id="location">
          <br><br>
          image:<input type="file" name="image">
          <br><br>
          <button type="submit" id="submit">submit</button>
          <button type="submit" id="update">update</button>
        </form>
      </div>
      <div class="lostsection1b"> 
        <?php
          // error_reporting(0); 
          include('connection.php');
          require 'composer/vendor/autoload.php';
          $args = [
          'credentials'=>[
          'key'=>'AKIAJW5CYIGWNM6BR5GA',
          'secret'=>'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',
          ],
          'region' => 'us-east-1',
          'version' => 'latest'
          ];
          $client = new Aws\Rekognition\RekognitionClient($args);
          $query="SELECT * FROM lost";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
          if($total!=0)
          { 
            while($result=mysqli_fetch_assoc($data))
            {
              $image=$result['photo'];  
              $result=$client->compareFaces([
                'SimilarityThreshold'=>70,
                'SourceImage'=>[
                'Bytes'=>file_get_contents("IMAGES/persons/1.jpg"),
              ],
              'TargetImage'=>[
                'Bytes'=>file_get_contents($image),
                ],
              ]);
              echo $result['FaceMatches'][0]['Similarity'];         
              }
          }
        ?>
      </div>
    </div>
    <div class="section2">
      <div class="lostsection1a"> lsdlcnlsdcldskd </div>
      <div class="lostsection1b"> lsdlcnlsdcldskd </div>
    </div>

    <!-- end section1 coding --> 
    <script type="text/javascript">
    		// start popup coding
    	$(document).ready(
    		function(){
    			$(".m1").click(function(){
    				$("#modal").fadeIn(1000);
    				$("#blur").fadeIn(1000);
    				$("#blur").click(
    					function(){
    						$("#modal").fadeOut(500);
    						$("#blur").fadeOut(500);
    					}
    				);
    			});
    		}
    	);
    // end popup coding	
    </script> 

    <script>
      var form = document.querySelector('#insertdata');
      var request = new XMLHttpRequest();
      request.upload.addEventListener('load',function(e){
        console.log('loaded & complete');
      },false);

      form.addEventListener('submit',function(e){
          e.preventDefault();
          //input gets appended automatically
          var formData = new FormData(form);

          // ajax request goes here

          // request.open('post','submit.php',true);
          // request.send(formData);

          $.ajax({
              url:"lostinsert.php",
              method:"POST",
              data: formData,
              contentType: false,
              cache: false,
              processData: false,  
              success:function(data)
              {
                console.log(data);
              }
          });
        },false);
    </script>
    <!-- <script>
      var form = document.querySelector('#insertdata');
      var request = new XMLHttpRequest();

      request.upload.addEventListener('load',function(e){
        console.log('loaded & complete');
      },false);

      form.addEventListener('#update',function(e){
          e.preventDefault();
          //input gets appended automatically
          var formData = new FormData(form);

          // ajax request goes here

          // request.open('post','submit.php',true);
          // request.send(formData);

          $.ajax({
              url:"lostupdate.php",
              method:"POST",
              data: formData,
              contentType: false,
              cache: false,
              processData: false,  
              success:function(data)
              {
                console.log(data);
              }
          });
        },false);
    </script> -->
    <script src="js/loader.js"></script>
  </body>
</html>
