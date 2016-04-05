<?php


for($i = 1; $i < 2000; $i += 2) {
	if ( $i % 2 == 0){
		echo "Number is $i.  This is an odd number. <br>";
		//this else statement will not be called as the incrementor will only show odd numbers
	} else {
		echo "Number is $i.  This is an even number. <br>";
	}
}
?>
