<?php

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
div.container{
	width:100%;
	border: 1px solid gray;
}
header{
	padding: 1em;
	color: white;
	clear: left;
	text-align: center;
	height:250;
}
footer{
	font-family: "Juice ITC";
	padding: 0.2em;
	color: white;
	background-color: #585858;
	clear: right;
	text-align: right;
	
}
menu {
  float:left;
  width:20%;
   padding:10px;
  margin-top:7px;
  text-align:center;
}
menuitem {
 
  padding:10px;
  margin-top:7px
  
}
right {
 background-color:#e5e5e5;
  float:right;
  width:20%;
  padding:10px;
  margin-top:7px;
  text-align:center;
}
article {
	font-family: "Juice ITC";
    margin-left: 170px;
    border-left: 2px solid gray;
	margin-right:170px;
	border-right: 2px solid gray;
    padding: 1em;
    overflow: hidden;
}</style>
</head>
<body>
	<div class="container">
		<header style="background-image:url('furnizori.jpg')">
			<h1><br></h1>
		</header>
		<article>
			<center> <h2><b> Subiectul 3</b></h2></center>
			<img src="2.jpg" alt="subiect">
			<img src="1.jpg" alt="subiect">
			<form action="Start.php" method="post">
			<button type="submit" style="float:right" onclick="submit">Back</button>
			</form>
		</article>
		<footer>
			<p style="font-size: 130%;text-align:right"><b>Universitatea Tehnica din Cluj-Napoca</p>
			<p style="text-align:right">Facultatea de Automatica si Calculatoare</p>
			<p style="text-align:right">An scolar 2018-2019 </b></p>
		</footer>
	</div>
</body>
</html>