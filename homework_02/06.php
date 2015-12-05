<?php
//  Да се прочете число от екрана(конзолата) и да се
// изведе сбора на всички числа между 1 и въведеното число.
require_once 'readline.php';

$numb = readline("number : "). PHP_EOL;

$sum = 0;
for ($i = 1; $i <= $numb; $i++) {
	$sum += $i;
}

echo "$sum";