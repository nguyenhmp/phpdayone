<?php 
function multiply($arr){
	foreach($arr as $value){
		$value *= 5;
	}
	return $arr;
}
$A = [0,1,2,3,4];
$B = multiply($A, 5);  
var_dump($B);
?>
