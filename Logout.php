<html>
<?php
   session_start();
   setcookie("usera", "", time() - 8400, "/");
	unset($_COOKIE['username']);
	
  	session_destroy();
  	unset($_SESSION['username']);
	  header("location: index.php");
   ?>
  
</html>