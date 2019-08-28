<?php


  include('server2.php') ;
 
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
* {
 
  box-sizing: border-box;
}

body {
  position: center;
  font-family: Arial;
  font-size: 17px;
}

img, .container {
  display: block;
  margin-left:auto;
  margin-right: auto;
  position: center;
  max-height: 700px;
  max-width: 1300px;
  margin:0 auto;
  
  
}
h2
{
 background-color: #B8B8B8;
}
div.input-group, p, a
{
 color: #ABB8B8;
}


.container .content {

  position: absolute;
  margin-left:0 ;
  margin-right:0 ;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #011641;
  width: 60%;
  padding: 10px;
}
</style>
</head>


<body>
<div class="container">
<h1>For Admin Registration</h1>
  <img src="hotel.jpg" alt="hotel" style="width:120%;">
	
  <form method="post" action="register.php">
	<form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">

<div class="content">
            <?php include('errors.php'); ?>
            <h2>Registration Form</h2>

  
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
			<input id="reg" type="password" name="password_1"  onchange="ErrorMsg();" >
  	  
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
     
  	<p>
  		Already a member? <a href="adlogin.php">Sign in</a>
			<br>
			<button type="button" class="cancelbtn" style="background-color:#0F004f"><a href = "index.php" tite = "Logout">Cancel</a></button>
  	</p>
		<script>
		function ErrorMsg()
		{
			
	var str = document.getElementById('reg').value;

var len = str.length;
if(len<6)
{
	alert('Too small');	
}
return str;
		}
	
</script>
  </form>
</body>
</html>
