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
	margin-top:371px;
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
    margin-top:20px;
	margin-left:70px;
    padding: 1em;
    overflow: hidden;
    color: solid gray;
	font-size:30px;
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
<body style="margin:0">
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
			
			<?php
 // creare variabile cu nume scurte
 $idc="";
 if(isset($_POST['idc'])){
	 $idc=$_POST['idc'];
	}
 else
 {
	 exit;
 }
 $idc= trim($idc);
if (!$idc)
 {
 echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
 exit;
 }
 $user = 'denii';
 $pass = '';
 $host = 'localhost';
 $db_name = 'urcandenisa';
 
 $conn = mysqli_connect($host, $user, $pass, $db_name);
 
 
 // se emite interogarea
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

$sql ="SELECT  idc,idf AS 'Furnizor', MAX(cantitate) AS 'Cantitate maxima' FROM Livrari WHERE idc='$idc' GROUP BY idf";
//.$nume;


$result = $conn->query($sql);
$num_results=$result->num_rows;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Componenta ". $row["idc"]. ", livrata de furnizorul ".$row["Furnizor"] ." in cantitatea ".$row["Cantitate maxima"]."<br>";
   } 
} else {
   echo "0 results";
}
$conn->close();

 echo '</p>';
 // deconectarea de la BD

?>	

</form>
<form action="6b.php" method="post">
				<button type="submit" style="float:right" onclick="submit">Inapoi</button>
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

