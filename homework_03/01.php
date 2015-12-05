<?php
require_once 'readline.php';

// «адача 1:
// ƒа се прочете масив и да се намери най-малкото число кратно на
// 3 от масива.



$arr = [];

for ($i = 0; $i < 5; $i++) {
	$arr[$i] = readline('numb: ');
}


$len = count($arr);

$min = PHP_INT_MAX;

for ($i = 0; $i < $len; $i++) {
	 
	if ($arr[$i] < $min && $arr[$i] % 3 ==0) {
		$min = $arr[$i];
	}
	
}
echo $min;
