<?php 
$array = [1, 2, 5, 10, 255, 3];
$sum = 0;
$length = count($array);
for($i = 0; $i < count($array); $i++) {
  $sum += $array[$i];
}
$average = $sum/$length;
echo "$average";
?>