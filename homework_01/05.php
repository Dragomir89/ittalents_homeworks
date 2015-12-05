<?php
require_once 'readline.php';

// Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ
// ред.



$a = readline('Enter a ' . PHP_EOL);
$b = readline('Enter b ' . PHP_EOL);
$c = readline('Enter c ' . PHP_EOL);

$max = max($a, $b, $c);
$min = min($a, $b, $c);

if ($a != $max && $a != $min) {
	echo "$max , $a , $min";
}
if ($b != $max && $b != $min) {
	echo "$max , $b , $min";
}
if ($c != $max && $c != $min) {
	echo "$max , $c , $min";
}