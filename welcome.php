
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ADMIN PANEL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="style.css">
	<style>
* {
 
  box-sizing: border-box;
}

body, a {
 
  font-family: Arial;
  font-size: 20px;
}
.centered {
    height:200px;
width: 100px;
    
    animation-duration: 10s;
    animation-iteration-count: infinite;
     animation-delay: 2s;
     font-family: "Raleway", sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    font-weight:bold;	
  color: #E0E0E0 ;
  width: 1300px;
  padding: 10px;
	
}
img {
  display: block;
  margin-left:0 auto;
  margin-right:0 auto;
  position: center;
  max-height: 700px;
  max-width: 1300px;
  margin:0 auto;
  
  
}

h1
{
    
 background-color: #B8B8B8;
 text-align: center;
 color: #000000;
}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 2 15px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: underline;
                background color: rgb(60, 60, 60)
                text-transform: uppercase;
            }


/* Safari 4.0 - 8.0 
@-webkit-keyframes stretch {
0% {
transform: scale(.9);
border-radius: 100%;
}
50% {
transform: scale(0.2);

}
}

/* Standard syntax 
@keyframes stretch {
0% {
transform: scale(.2);
border-radius: 100%;
}
50% {
transform: scale(1.2);
}
}*/

        </style>
    </head>
    <body>
    <div class="container"> 
  <img src="VIP2.jpg" alt="vip" style="width:120%;">
  <div class="w3-jumbo flex-center " > 
  <h1 class="w3-jumbo centered" style="font-size: 120px" > ADMIN PANEL</h1>
    
<hr class="w3-border-grey" style="margin:auto;width:40%">Hotel Graver Inn
    
    
 
    <div class="top-right links">
    <div class="btn-group">
    <a href = "register.php" tite = "Signin"><button type="button" class="btn btn-primary btn">SIGN UP</button></a> 
            
    <a href ="adlogin.php" tite="login"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
    </div>
   
                 </div>
            
                
           

           
        </div>
      
    
    <script>
    function logout(){
        var r = confirm("Do you really want to log out?");
    if (r) {
       window.location.href = 'logout.php'
    }
  }
</script>

<div>
</body>
</html>
