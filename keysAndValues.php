<?php 
	$users['first_name'] = "Michael";
	$users['last_name'] = "Choi";
	$firstString = "There are " . count($users) . " keys in this array: ";
	foreach($users as $key => $value){
		$firstString .= $key . ", ";
	}
	echo $firstString . "<br>";
	foreach($users as $key => $value){
		echo "The value in the key '" . $key . "' is '" . $value . "' <br>";
	}

?>