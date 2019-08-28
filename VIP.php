<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  if (isset($_GET['logout'])) {
	setcookie("userc", "", time() - 8400, "/");
	unset($_COOKIE['username']);
	
  	session_destroy();
  	unset($_SESSION['username']);
	  header("location: login.php");
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
* {
 
  box-sizing: border-box;
}

body, a {
 
  font-family: Arial;
  font-size: 20px;
}

img, .container {
  display: block;
  margin-left:0 auto;
  margin-right:0 auto;
  position: center;
  max-height: 700px;
  max-width: 1300px;
  margin:0 auto;
  
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
	
  position: absolute;
  margin-left:0 ;
  margin-right:0 ;
  bottom: 0;
	up:0;
  
  color: #E0E0E0 ;
  width: 80%;
  padding: 10px;
	
}
h1
{
 background-color: #B8B8B8;
 text-align: center;
 color: #000000;
}


</style>
</head>


<body onload="myFunction()">


<div class="container">

  <img src="hotel.jpg" alt="hotel" style="width:120%;">



	<div class="centered">
        
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
		

    <!-- logged in user information -->
	<?php  if (isset($_SESSION['username'])) : ?>
	<?php
$username= $_SESSION['username']; 

if(isset($_COOKIE['userc'])) {
	?>
	
	<p id="demo"></p>
	<?php
 
} 
else
{
	?>
	<p id="demo2"></p>

	<?php


}

  ?>
	<p><h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1></p>
		

<h3> We provide special offers upto 10% discount at each item to our Newsellers at our Restaurant or Cafe</h3>

	<span>	<button   style="background-color:#808080"><a href="SecondPage.php">Cafe</a></button>
		<button style="background-color:#808080">	<a href="restaurant.php">Restaurant</a></button></span>

		<p> <a href="VIP.php?logout='1'" style="color: blue;">logout</a> </p>
		
		
    <?php endif ?>
		</div>
		</div>
</div>
<script>
function myFunction() {
	if(document.getElementById("demo2")!=null)
	alert("Cookie is not set.");	
	else
	alert( "Cookie is set.");
	
}


</script>

		
</body>
</html>