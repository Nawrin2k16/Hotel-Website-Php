<?php


if(isset($_COOKIE['userc'])) {
  header('location: VIP.php');
} 
else{

  include('server.php') ;
 
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css"><style>
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
div.input-group, p
{
 color: #ABB8B8;
}
a
{
	background-color:#BBB1B1;
 color: #080808;
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
  <img src="KingRoom.jpg" alt="room" style="width:200%;">

  <form method="post" action="NewP.php">

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
  	  <label>Password(length must be of above or equal 6 digits) </label>
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
  		Already a member? <a href="login.php">Sign in</a>
			<br>
			<button type="button"  style="background-color:#BBB1B1" class="cancelbtn"><a href = "index.php" tite = "Logout">Cancel</a></button>
  	</p>
		<script>
		function ErrorMsg()
		{
			
	var str = document.getElementById('reg').value;

var len = str.length;
if(len<6)
{
	alert('The Password you entered is too small');	
}
return str;
		}
	
</script>
  </form>
</body>
</html>
<?php
}
      ?>