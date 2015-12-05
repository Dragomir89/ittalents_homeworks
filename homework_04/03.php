<?php
// Задача 3:
// Имате двумерен масив от числа, чийто стойности са въведени
// предварително. Да се отпечатат сумата на елементите на масива,
// както и средноаритметичното на тези числа.

$arr = [
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
];


$sum = 0 ;

$average = 0;

$count = 0;

foreach ($arr as $key => $arr1) {
	foreach ($arr1 as $key => $value) {

		$count++;
		
		$sum += $value;
	
	};
}

$average = $sum / $count;

echo 'sum = ' . $sum . PHP_EOL;

echo 'average = ' . $average . PHP_EOL;
