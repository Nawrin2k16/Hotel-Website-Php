<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html lang = "en">
<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Graver INN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href = "css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  
</body>
</html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="indexStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->

<div class="w3-bar w3-white w3-large"></div>
<a href='welcome.php' class="w3-bar-item w3-button w3-red w3-mobile"><i style='font-size:24px' class='fas'>&#xf594;</i><h4>
     ADMIN PANEL</h4></a>
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile">Rooms</a>
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
  <a href="#booking" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Book Now</a>
</div>
<!-- Header -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        </div>
        <div class="w3-display-top w3-center">
          <span class="w3-border" style="font-size:80px">
          <?php
function writeMsg() {
    echo "Hotel<br>Graver Inn</span>";
}

writeMsg();
?> 
        </div>
        <div class="w3-display-bottomright w3-center w3-padding-large">
          <span class="w3-text-white">Kuakata, Patuakhal</span>
        </div>
      </header>
      
    </header>
    <br>
    <br>

  <div class="w3-padding l6 m8" id="booking">
    <div class="w3-container w3-red">
      <h2><i class='fas' >&#xf594;</i>Hotel graver inn</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>

            <input class="w3-input w3-border" type="text" name="CheckIn" required placeholder="
            <?php     
            echo  date("d m y");
            ?>"
            
            >
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
      </form>
    </div>
  </div>

<br>
<br>
<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h2><b>Rooms</b></h2>
    <p>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
  </div>
  

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From $99</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"><a href="Single.php">View Room</a></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="double.jpg" alt="Norway" style= "width:100% ">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From $149</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"><a href="Double.php">View Room</a></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="Delux.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room</h3>
        <h6 class="w3-opacity">From $199</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> 
            <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"><a href="Duplex.php">View Room</a></button>
      </div>
    </div>
  </div>

  <div class="pagination">
      <a href="#">&laquo;</a> 
      <a href="#">1</a>
      <a target="_blank" href="WonderfulDoubleQueen.jpg">2</a>
      <a target="_blank" href="KingRoom.jpg" >more image &raquo;</a>
    </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h2><b>About</b></h2>
      <h6>Our hotel is one of a kind. It is truely amazing. Hotel Graver Inn has the maximum facilities
           you expect from a luxury whether you are with us on a business, 
          pleasure, attending or organizing an event, 
        you have access to arrange of superb comforts and amenities for an effortless and enjoyable stay 
        for creating the perfect balance of modern comforts and nostalgic ambiance. </h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> 
        <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i>
        <i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div  class="w3-image w3-greyscale" style="width:100%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.078564300041!2d90.12315561448247!3d21.815895185577354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aa7d1bee3c12e5%3A0x285bc8cccc708bed!2sHotel+Graver+Inn+International%2C+Kuakata!5e0!3m2!1sen!2sbd!4v1561566364713!5m2!1sen!2sbd" 
    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Address: East Side Of Rakhain Mohila Market, Kuakata, Patuakhal</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: 04428-56007</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> graverinn.sales@gmail.com</div>
  </div>

  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>

  <p class="dotted">FACILITIES & SERVICES</p>
  <table>
  <ul class="a" >
  <?php  
  $array = array(" Free WiFi, Indoor Gym, Kids Zone 24/7.", "Conference Hall.", "Open Air Concert Facility.", "Business Centre Facility. ", "Credit Card Facility.", 
  "Fire Protection System.", "Large Car Parking.","Standby Generator. ",
    " Security Guard. CC Camera Protected.",
    "On early booking, we arrange Tour & Sight Seeing .");  
    foreach($array as $key=>$value): ?>
    <tr>
        <td><b><li><?php echo $value; ?></li></b></td>
    </tr>
    <?php endforeach; ?>
        </ul>
        </table>
        

  <div class="w3-container">
    <h2><b>Our Hotels</b></h2>
    <h5>You can find our hotels anywhere in the world:</h5>
  </div>
 
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
                <div class="gallery">
                <a target="_blank" href="cinqueterre.jpg">
            <img src="cinqueterre.jpg" alt="cinqueterre" style="width:100%">
        </a>
            <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
        </div>
          </div>
        </div>
   
       
        <div class="w3-half">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
              <div class="w3-display-container">
                    <div class="gallery">
                    <a target="_blank" href="newyork2.jpg">
                <img src="newyork2.jpg" alt="New York" style="width:100%">
            </a>
                <span class="w3-display-bottomleft w3-padding">New York</span>
            </div>
              </div>
            </div>
        
            
            <div class="w3-half w3-margin-bottom">
              <div class="w3-display-container">
                    <div class="gallery">
                    <a target="_blank" href="sanfran.jpg">
                <img src="sanfran.jpg" alt="San Francisco" style="width:100%">
            </a>
                <span class="w3-display-bottomleft w3-padding">San Francisco</span>
            </div>
              </div>
            </div>
          </div>
        
        
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
              <div class="w3-display-container">
                    <div class="gallery">
                    <a target="_blank" href="pisa.jpg">
                <img src="pisa.jpg" alt="Pisa" style="width:100%">
            </a>
                <span class="w3-display-bottomleft w3-padding">Pisa</span>
            </div>
              </div>
            </div>
       
          
            <div class="w3-half w3-margin-bottom">
              <div class="w3-display-container">
                    <div class="gallery">
                    <a target="_blank" href="paris.jpg">
                <img src="paris.jpg" alt="Paris" style="width:100%">
            </a>
                <span class="w3-display-bottomleft w3-padding">Paris</span>
            </div>
              </div>
            </div>
          </div>
        </div>
    </div>


  <div class="w3-padding-32 w3-black w3-center w3-margin-top" style="margin:32px 0;">
    <h2>Get the best offers first!</h2>
    <p>Join our newsletter.</p>
    <button class="w3-button w3-white w3-padding-large"> <a href = "NewP.php" tite = "Sign in">SIGN UP.</a></button>
    <p>Or
    <br> <button class="w3-button w3-white w3-padding-large"> <a href ="login.php" tite="login">Login</a></button></p>
    
    
    </div>
 

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Kuakata, Patuakhali<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> mobile: 01833318380, 01833318387, 01833318381<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: graverinn.sales@gmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

</html>
</footer>

<!-- Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
</body>
