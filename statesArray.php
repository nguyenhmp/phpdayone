<?php

//this is missing the other two dropdowns
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
echo "<select>";
foreach($states as $state){
	echo "<option>$state</option>";
}
echo "</select>";
?>
