<?php


if(isset($_COOKIE['userc'])) {
  header('location: VIP.php');
} 
else{

  include('server.php') ;
 
  ?>


<!DOCTYPE html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">


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
  <img src="login2.jpg" alt="Notebook" style="width:120%;">

<form method="post" action="login.php">
<p>



      <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">

<div class="content">
            <?php include('errors.php'); ?>
            <h2>Login Form</h2>
            <h2>Enter Username and Password</h2> 

  
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button  type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="NewP.php">Sign up</a>
  	</p>
            
    <label style="background-color:#B0BAB1">
    <form action="#" method="post" >

      <input type="checkbox"  checked="checked" name="remember"> Remember me
      <?php


if (isset($_POST['remember'])){
  setcookie ("userc",$username , time() + 3*3600, '/'); 
echo $_POST['remember']; // Displays value of checked checkbox.
}
?>
    </form>
    </label>
         </form>
         <div class="container" style="background-color:#f1f1f1">
       <button type="button" style="background-color:#01844f" class="cancelbtn"><a href = "index.php" tite = "Logout">Cancel</a></button>


    <span class="password"> <p id="email">Forgot password?</p></span>
  </div>
			
        
         <br>
         
      </div> 
      </form>
      </p>
</body>
      </html>
      <?php
}
      ?>