<?php 
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
echo "<select>";
foreach($states as $state){
	echo "<option>$state</option>";
}
echo "</select>";
?>