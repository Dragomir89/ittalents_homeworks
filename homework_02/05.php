<?php
require_once 'readline.php';


$a = readline('enter number: ' . PHP_EOL);

$b = readline('enter number: ' . PHP_EOL);

$max = max($a , $b);
$min = min($a , $b);

for ($i = $min; $i <= $max; $i++) {
	echo " $i";
}