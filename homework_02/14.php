<?php
require_once 'readline.php';

// Задача 14: Да се състави програма, която по въведено
// естествено число N от интервала [10..200] извежда в обратен
// ред всички числа, които са кратни на 7 и са по-малки от N.



$n = readline('enter number');

if ($n > 200 || $n < 10) {
	echo 'invalid input';
	return ;
}


for ($i = $n; $i >= 10 ; $i--) {
	
	if ($i % 7 == 0) {
		echo "$i" . PHP_EOL;
	}
	
}