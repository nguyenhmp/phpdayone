<?php 
	$score = rand(50,100); 
	echo "<h1>Your score: $score/100</h1><br>";
	echo "<h2>Your grade is ";
	if ($score > 90){
		echo "A </h2>";
	} else if($score > 80){
		echo "B </h2>";
	} else if($score > 70){
		echo "C </h2>";
	}else if($score > 70){
		echo "D </h2>";
	}else{
		echo "booo</h2>";
	}
?>