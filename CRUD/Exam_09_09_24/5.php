<?php
$arr=[5,3,3,7,45,5,58,39,2,7];
$max=max($arr);
$min=min($arr);
echo "Max:".$max;
echo "Min:".$min;
$unique=array_unique($arr);
echo "Unique array";
print_r($unique);
echo "\n";
//<br>
$count=array_count_values($arr);
echo"Repeating values:";
print_r($count)
?>