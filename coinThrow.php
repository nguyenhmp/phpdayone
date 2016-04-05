<?php 
	$heads = 0;
	$tails = 0;
	for ($i = 0; $i < 5000; $i++){
		$flip = rand(0,1);
		echo "Attempt #$i: Throwing a coin... It's a ";
		if ($flip == 1){
			echo "head! ...";
			$heads++;
		} else {
			echo "tail! ...";
			$tails++;
		}
		echo "Got $heads head(s) so far and $tails tail(s) so far<br>";
	}
?>