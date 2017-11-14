<!DOCTYPE html>



<html lang="en">

<head>

<title>Union rent a car</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

.row{
	margin-left:5%;
	margin-right:5%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
  margin-top:40px;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}



.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 0.5px;
	opacity:1;
	font-family: Verdana;
	    
}

.container-fluid{
	background-color: #2d2d30;
	opacity:1;
	
}




.navbar-default a.navbar-brand{
	color:#118c74 !important;
	font-size:35px;
}

@media screen and (max-width: 880px) {
   .navbar-default a.navbar-brand{
	color:#118c74 !important;
	font-size:30px;
}}

@media screen and (max-width: 450px) {
   .navbar-default a.navbar-brand{
	color:#118c74 !important;
	font-size:27px;
}}

@media screen and (max-width: 835px) {
   .navbar-default a.navbar-brand{
	color:#118c74 !important;
	font-size:25px;
}}


@media screen and (max-width: 360px) {
   .navbar-default a.navbar-brand{
	color:#118c74 !important;
	font-size:20px;
}}


.ul
{
	display:inline;
	list-style:none;
	padding-left:-40px;
	font-family: Verdana;
}

.navbar li a, .navbar { 
    color: #118c74 !important;
	font-size: 16px;
	font-family: Verdana;

	
}

.container-fluid{
	width: 100%;	
}


</style>



</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>  
    <div class="navbar-header">
     <a class="navbar-brand navvideo" href="pocetna.php"><strong>UNION RENT A CAR</strong></a>
    </div>    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="galerija.php">GALERIJA</a></li>
        <li><a href="iznajmljivanjeautomobila.php">IZNAJMLJIVANJE AUTOMOBILA</a></li>
        <li><a href="logout.php">KORISNIK - IZLOGUJ SE</a></li>
        </ul>
		 </div>
		 </div>
</nav>

<br><br><br>
<h3 style="text-align:center">Ovde možete videti slike i cene raspoloživih automobila naše agencije:</h3>
<br>
<br>
<div class="row"  style="width:90%" "text-align:center">
  <div class="column">
    <img src="Slike/a1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a30.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
<br>
<div class="row"  style="width:90%" "text-align:center">
  <div class="column">
    <img src="Slike/a5.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a6.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a7.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
<br>
<div class="row"  style="width:90%" "text-align:center">
  <div class="column">
    <img src="Slike/a9.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a100.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a11.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Slike/a12.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>




<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
      <img src="Slike/a1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
      <img src="Slike/a2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
      <img src="Slike/a30.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
      <img src="Slike/a4.jpg" style="width:100%">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">5 / 12</div>
      <img src="Slike/a5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 12</div>
      <img src="Slike/a6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="Slike/a7.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="Slike/a8.jpg" style="width:100%">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="Slike/a9.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="Slike/a100.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="Slike/a11.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">12 / 12</div>
      <img src="Slike/a12.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="Slike/a1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Mercedes smart <br> 20€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Fiat 500l <br> 17€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a30.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mazda 3 <br> 30€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Ford focus <br> 18€ po danu">
    </div>
	
	<div class="column">
      <img class="demo cursor" src="Slike/a5.jpg" style="width:100%" onclick="currentSlide(1)" alt="Opel astra <br> 20€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a6.jpg" style="width:100%" onclick="currentSlide(2)" alt="Opel antara <br> 25€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a7.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mercedes <br> 20€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a8.jpg" style="width:100%" onclick="currentSlide(4)" alt="BMW X3 <br> 30€ po danu">
    </div>
	
	<div class="column">
      <img class="demo cursor" src="Slike/a9.jpg" style="width:100%" onclick="currentSlide(1)" alt="Golf 5 <br> 20€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a100.jpg" style="width:100%" onclick="currentSlide(2)" alt="Fiat punto <br> 15€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a11.jpg" style="width:100%" onclick="currentSlide(3)" alt="Audi a6 karavan <br> 25€ po danu">
    </div>
    <div class="column">
      <img class="demo cursor" src="Slike/a12.jpg" style="width:100%" onclick="currentSlide(4)" alt="BMW A1 <br> 25€ po danu">
    </div>
	
	
	
  </div>
</div>

<br>
	<br>















