<?php
require "conectare.php";
$sql = "CALL perechi";
	$result = mysqli_query($conectare, $sql);
	if(mysqli_num_rows($result)>1){
	echo "Perechile sunt: ";
		while($row=mysqli_fetch_assoc($result)){
echo "( ".$row["IDC1"].", ".$row["IDC2"]." )"."<br>";
			}
		} elseif(mysqli_num_rows($result)==1){
		echo "Perechea este: ";
			$row=mysqli_fetch_assoc($result);
			echo "( ".$row["IDC1"].", ".$row["IDC2"]." )"."<br>";
		} else{ 
			echo "No result";
		}
		mysqli_close($conectare);
?>
     