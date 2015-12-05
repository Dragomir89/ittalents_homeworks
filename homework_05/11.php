<?php
// Задача 11:
// Да се създаде метод, който отпечатва масив в конзолата.


$n = 5;

function printArray($n) {
	$result = '[';
	
	for ($i = 0; $i < $n - 1; $i++) {
		$result .= $i . ', ';
	}
	
	$result .= $i;
	$result .= ']';
	
	return $result;
}


echo printArray($n);