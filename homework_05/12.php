<?php
// Задача 12:
// Да се създаде метод, който приема за входни данни число N и
// връща масив от числа с дължина N, който съдържа всички числа
// от 1 до N.
require_once 'readline.php';


$n = readline('enter number: ');

function createArr($n) {

	$arr = [];
	
	for ($i = 1; $i <= $n; $i++) {
	
		$arr[$i - 1] = $i;
	
	}
	
	
	return  $arr;	
}

