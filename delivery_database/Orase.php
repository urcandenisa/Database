<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <style>
div.container{
	width:100%;
	border: 0px;
}
header{
font-family:"Agency FB";
	color: solid gray;
	clear: left;
	text:align: center;
	height: 900;
}
footer{
	margin-top:0px;
	font-family:"Agency FB";
	padding: 0.5em;
	color: soft gray;
	opacity:0.8;
	background-color: #111;
	clear: right;
	text-align: right;
	
}
article {
    font-family:"Agency FB";
    margin-top:10px;
    padding: 1em;
    overflow: hidden;
    color: solid gray;
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  margin-top: 0 px;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 9px 9px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="margin:0;">
<div class="container">
<header style="background-image:url('furnizori.jpg')">
			
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.html">Acasă</a></li>
      <li><a href="detalii.php">Despre</a></li>
	 <li><a href="contact.php">Contact</a></li>
      <li>
	  <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Servicii
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Orase.php">Orase</a>
      <a href="Proiecte.php">Proiecte</a>
      <a href="Componente.php">Componente</a>
    </div>
	 </div>
	 </div>
	  </li>
	 
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.html">Acasă</a>
    <a href="3a.php">Livrări</a>
    <a href="3b.php">Proiecte</a>
    <a href="4a.php">Proiecte, componente din acelasi oras</a>
	<a href="4b.php">Componente livrate de acelasi furnizor cu acelasi proiect</a>
	<a href="5a.php">Componenta cu masa cea mai mica</a>
	<a href="5b.php">Proiecte din oras cu codul</a>
	<a href="6a.php">Proiecte in orase</a>
	<a href="6b.php">Componenta livrata in cantitate maxima</a>
  </div>
		<article>
		
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="Alba-Iulia.jpg" style="width:100%">
  <div class="text">Alba-Iulia</div>
  
</div>

<div class="mySlides fade">
  
  <img src="Arad.jpg" style="width:100%">
  <div class="text">Arad</div>
  
</div>

<div class="mySlides fade">
  
  <img src="Baia_Mare.png" style="width:100%">
  <div class="text">Baia-Mare</div>
  
</div>


<div class="mySlides fade">
  
  <img src="Bistrita.jpg" style="width:100%">
  <div class="text">Bistrita</div>
  
</div>

<div class="mySlides fade">
  
  <img src="Brasov.jpg" style="width:100%">
  <div class="text">Brasov</div>

</div>

<div class="mySlides fade">
  
  <img src="Cluj-Napoca.jpg" style="width:100%">
  <div class="text">Cluj-Napoca</div>
  
</div>

<div class="mySlides fade">
  
  <img src="Deva.jpg" style="width:100%">
  <div class="text">Deva</div>
</div>

<div class="mySlides fade">
  
  <img src="Satu-Mare.jpg" style="width:100%">
  <div class="text">Satu-Mare</div>

</div>

<div class="mySlides fade">
  
  <img src="Sibiu.jpg" style="width:100%">
  <div class="text">Sibiu</div>

</div>

<div class="mySlides fade">
  
  <img src="Targu-Mures.jpg" style="width:100%">
  <div class="text">Targu-Mures</div>
</div>

<div class="mySlides fade">
  
  <img src="Zalau.jpg" style="width:100%">
  <div class="text">Zalau</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<form action="index.html" method="post">
				<button type="submit" style="float:right" onclick="submit">Inapoi</button>
			</form>
		</article>
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
  </script>
  	
		<footer>
			<p style="color: white; font-size: 130%;text-align:right"><b>Universitatea Tehnica din Cluj-Napoca</p>
			<p style="color: white;text-align:right">Facultatea de Automatica si Calculatoare</p>
			<p style="color: white;text-align:right">An scolar 2018-2019 </b></p>
		</footer>
</header>
	</div>
</body>
</html>
