<?php
// Започвайки от 3, да се изведат на екрана първите n
// числа които се делят на 3. Числата да са разделени със запетая.
require_once 'readline.php';

$n = 5;//readline('n numbers: ' . PHP_EOL);


$sum = 0;
$result = ' ';
for ($i = 0; $i < $n - 1; $i++) {
	
	$sum += 3;
	
	$result .= "$sum, ";
	
	
}
$sum += 3;

$result .= "$sum ";

echo "$result";