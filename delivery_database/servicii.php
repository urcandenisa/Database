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
	height: 1000;
}
footer{
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
    margin-top:330px;
    padding: 1em;
    overflow: hidden;
    color: solid gray;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
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
</style>
</head>
<body>
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
      <li><a href="index.html">Acasa</a></li>
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
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
  	

		<article>
			
			<p style="font-size:130%; text-align:right;"><b> Proiect final Baze de Date</b></p>
			<p style="font-size:110%; text-align:right"> <b>Urcan Denisa-Teodora </b></p>
			<p style="font-size:110%; text-align:right"> <b>Grupa 30226, Seria B</b></p>
			<p style="font-size:110%; text-align:right"> <b>CTI Romana</b></p>
			<p style="font-size:110%; text-align:right"> <b>Prof. Gabriel Dragomir</b></p>
			<form action="index.html" method="post">
				<button type="submit" style="float:right" onclick="submit">Back</button>
			</form>
		</article>

		<footer>
			<p style="color: white; font-size: 130%;text-align:right"><b>Universitatea Tehnica din Cluj-Napoca</p>
			<p style="color: white;text-align:right">Facultatea de Automatica si Calculatoare</p>
			<p style="color: white;text-align:right">An scolar 2018-2019 </b></p>
		</footer>
</header>
	</div>
</body>
</html>
