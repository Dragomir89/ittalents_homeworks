<?php

// Задача 2:
// Имате квадратен двумерен масив от естествени числа, чийто стойности
// се въвеждат от конзолата. Да се отпечатат диагоналите на масива.
// Пример:
// 1,4,6,3
// 5,9,7,2
// 4,8,1,9
// 2,3,4,5
// Изход:
// 1 9 1 5
// 3 7 8 2
require_once 'readline.php';


$arr = [
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
];


for ($i = 0; $i < 4; $i++) {
	for ($j = 0; $j < 4; $j++) {
		$arr[$i][$j] = readline('enter number: ');
	}
}



$len = count($arr);

$count = $len - 1;

$leftDiagonal = '';

$rightDiagonal = '';



for ($i = 0; $i < $len; $i++) {
	
	$leftDiagonal .= $arr[$i][$i] . ' ';
		
	$rightDiagonal .= $arr[$i][$count] . ' ';

	$count--;	
	
}


echo $leftDiagonal . PHP_EOL;


echo $rightDiagonal . PHP_EOL;







