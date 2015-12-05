<?php
// Задача 14:
// Да се състави метод, който приема за стойност число N и връща
// стойността на N! (N факториел)

require_once 'readline.php';

$n = 5;

function nFactorial($n) {
	if ($n == 1) {
		return 1;
	}
	
	
	return $n  * nFactorial($n - 1);
}

var_dump(nFactorial($n));
