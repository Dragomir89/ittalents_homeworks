<?php
// Задача 10: Въведете число от клавиатурата и определете дали е
// просто. Просто число е това което се дели САМО на 1 и на себе
// си.
require_once 'readline.php';



$n = readline('enter number: ');

for ($i = 2; $i < $n; $i++) {
	
	if ($n % $i == 0) {
		echo "$n is not prim";
		return ;
	}
	
}
echo "$n is prim";