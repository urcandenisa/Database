<?php
require "conectare.php";
$sql = "CALL proiect";
	$result = mysqli_query($conectare, $sql);
	if(mysqli_num_rows($result)>1){
		while($row=mysqli_fetch_assoc($result)){
			echo " Proiectul ". $row["idp"]."( ". $row["numep"].")"." din orasul ".$row["oras"]."<br>";				
			}
		} elseif(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			echo " Proiectul ". $row["idp"]."( ". $row["numep"].")"." din orasul ".$row["oras"]."<br>";
		} else{ 
			echo "No result";
		}
		mysqli_close($conectare);
?>
     