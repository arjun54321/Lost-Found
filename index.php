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
	<link rel="stylesheet" type="text/css" href="css/popup.css">

	<style type="text/css">
		/*inline hyperlink*/
		html {
		  scroll-behavior: smooth;
		  overflow-x: hidden;	
		}
		/*end inline hyperlink*/
		/*end inline hyperlink*/
		#modal{
			width: 30%;
			height: 450px;
			background: red;
			margin-left: 35%;
			margin-top:-600px; 
			position:fixed;
			z-index: 2;
			margin-right: 35%;
			float: left;
		}
		#blur{
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.8);/*red,green,blue,alpha*/
			position:fixed;
			top: 0;
			left: 0;
			display: none;
			z-index: 2;
		}
		body{
			margin:0;
		    font: normal 16px Arial, Helvetica, sand-serif;
	        color:black;
		}
	</style>
	<style>
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 300px;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		  float:left;
		  margin-right:6px;
		 margin-top: 10px;
		}	
		.cardbtn {
			  border: none;
			  outline: 0;
			  display: inline-block;
			  padding: 8px;
			  color: white;
			  background-color: #000;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			  font-size: 18px;
			  float: left;
			}
			.cardbtn:hover{
			  opacity: 0.7;
			}
	</style>
</head>
<body>
	<!-- start loader coding -->
	<!-- <div class="loader-con"> 
		<div class="slide-left"></div>
		<div class="slide-right"></div>
        <i class="loader-icon" style="font-size:50px"><img class=”img-logo” src="images/logo/cat.gif" style="width:80px;height:80px;" /></i>
	</div> -->
	<!-- end loader coding -->

	<!-- start popup -->
		<div class="popup" style="z-index: 5;">
			<div id="blur"></div>
			<div id="modal">
				<div class="signup"><button onclick="signup();" class="sbt1">Signup</button></div>
				<div class="signin"><button onclick="signin();" class="sbt2">signin</button></div>
				<div class="usersignup" id="usersignup">
						name<br><input type="text" name="name" id="name"><br><br>
						email<br><input type="email" name="email" id="email"><br><br>
						phone<br><input type="text" name="phone" id="phone"><br><br>
						password<br><input type="password" name="password" id="password"><br><br>
				</div>
				<div class="usersignin" id="usersignin">
						name<br><input type="text" name="name" id="name1"><br><br>
						password<br><input type="password" name="password" id="password1"><br><br>
				</div>
				<div>
						<input type="text" id="source" name="source" value="signup">
						<button id="submit">submit</button>
						<div id="display"></div>
				</div>
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
			<li><a href="index.php">LOST<span style="font-size: 20px">&</span>FOUND</a></li>
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

	<!-- start mobile search bar -->
	<div class="search-container1">
	    <form action="/action_page.php">
	      <input type="text" placeholder="Search.." name="search">
	      <button type="submit"><i class="fa fa-search"></i></button>
	    </form>
  	</div>
  	<!-- end mobile search bar -->

	<!-- start section1 coding -->
	<div class="section1">
		<div class="section1data" style="float:left">
			<div id="load_data"></div>
   			<div id="load_data_message"></div>
		</div>
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
	<script type="text/javascript" src="js/loader.js"></script>
	<script type="text/javascript">
		var source=document.getElementById('source');
		function signup(){
			var signin=document.getElementById('usersignin').style.display="none";
			var signup=document.getElementById('usersignup').style.display="block";
			source.value="signup";
		}
		function signin(){
			var signup=document.getElementById('usersignup').style.display="none";
			var signin=document.getElementById('usersignin').style.display="block";
			source.value="signin";
		}
	</script>
	<script type="text/javascript">
	
		$(document).ready(function(){
			$('#submit').click(function(){
				//alert("hello");
				//console.log("hello");
				var source=$("#source").val();
				var name=$("#name").val();
				var name1=$("#name1").val();
				var email=$("#email").val();
				var phone=$("#phone").val();
				var password=$("#password").val();
				var password1=$("#password1").val();
				console.log(source);
				// if(name.length==0 && email.length==0){
				// 	$("#display").html("please fill the form");
				// 	return false;
				// }
 				if(source=="signup"){
					$.ajax({
						type:'POST',
						url:'signup.php' ,
						data:{name:name , email:email , phone:phone , password:password},
						success:function(insert){
							$("#display").html(insert);
							// $('#name').val("");
							// $('#email').val("");
							// $('#phone').val("");
							// $('#password').val("");
						}
					});
				}if(source=="signin"){console.log("world");
					$.ajax({
						type:'POST',
						url:'signin.php' ,
						data:{name:name1 , password:password1},
						success:function(insert){
							$("#display").html(insert);
							// $('#name').val("");
							// $('#password').val("");
						}
					});
				}

			});
		});
	</script>
	<script>

        $(document).ready(function(){
           var limit = 8;
           var start = 0;
           var action = 'inactive';
           function load_country_data(limit, start)
           {
              $.ajax({
                 url:"fatch.php",
                 method:"POST",
                 data:{limit:limit, start:start},
                 cache:false,
                 success:function(data)
                 {
                  $('#load_data').append(data);
                  if(data == '')
                  {
                   //$('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                   action = 'active';
                  }
                  else
                  {
                  //$('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
                  // $('#load_data_message').html("<div class='demo'></div>");
                   action = "inactive";
                  }
                 }
              });
            }
         if(action == 'inactive')
         {
            action = 'active';
            load_country_data(limit, start);
         }
         $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
            {
              action = 'active';
              start = start + limit;
              setTimeout(function(){
              load_country_data(limit, start);
              }, 1000);
            }
         }); 
        });
      </script>
</body>
</html>