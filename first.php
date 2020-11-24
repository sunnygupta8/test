<?php 
function sum( $arr, $n) 
{ 
	$sum = 0; 
	for ($i = 0; $i < $n; $i++) 
	$sum += $arr[$i]; 
    return $sum; 
} 
$arr =array(120, 300, 47, 150); 
$n = sizeof($arr); 
echo "Sum of given array is ", 
sum($arr, $n); 
 ?> 
