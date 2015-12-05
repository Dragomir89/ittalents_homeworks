<?php

// Задача 2:
// Да се състави програма, която изчислява произведение на две
// естествени числа =>2, като се използва само събиране.
// Входни данни: 2 естествени числа.
// Пример: 4, 5
// Изход: 20


require_once 'readline.php';

$x = readline('enter number: ');

$y = readline('enter number: ');

function multiplyBySum($x , $y) {
	
	$result = 0;
	
	$min = min($x , $y);
	$max = max($x, $y);
	
	for ($i = 0; $i < $min; $i++) {
		
		$result += $max;
		
	};
	
	
	return $result;
	
}

var_dump(multiplyBySum($x, $y));