<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="slide.css">
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
<p> <h2 style="text-align:center">All double Rooms</h2></p>
  <div class="numbertext">1 / 3</div>
  <img src="double1.jpg" style="width:100%">
  <div class="text">Double Room<br>cost: $149<br>
  <button class="button button2"> <a href ="index.php" tite="index">Back</a></button></p></div>
  
</div>

<div class="mySlides fade">
<p> <h2 style="text-align:center">All double Rooms</h2></p>
  <div class="numbertext">2 / 3</div>
  <img src="double2.jpg" style="width:100%">
  <div class="text">Double Room<br>cost: $159<br>
  <button class="button button2"> <a href ="index.php" tite="index">Back</a></button></p></div>
  
</div>

<div class="mySlides fade">
<p> <h2 style="text-align:center">All double Rooms</h2></p>
  <div class="numbertext">3 / 3</div>
  <img src="double3.jpg" style="width:100%">
  <div class="text">Double Room<br>cost: $169<br>
  <button class="button button2"> <a href ="index.php" tite="index">Back</a></button></p></div>
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
