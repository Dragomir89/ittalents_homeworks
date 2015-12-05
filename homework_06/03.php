<?php
// Задача 3:
// Да се състави програма, която проверява дали въведено естествено
// число е просто.
// Пример: 101
// Изход: просто

require_once 'readline.php';

$n = readline('enter numb: ');

function isPrimNumber($n) {
	
	if ($n == 2) return true;
	
	for ($i = 2; $i < $n; $i++) {
		if ($n % 2 == 0) {
			return false;
		}
	}
	
	return true;
	
}


var_dump(isPrimNumber($n));