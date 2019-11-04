<?php

$conectare = mysqli_connect("localhost", "denii", "", "urcandenisa");

if(!$conectare){
	die("Conectare nereusita!");
}