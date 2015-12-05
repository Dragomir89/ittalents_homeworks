<?php
require_once 'readline.php';
// Въведете 2 различни целочислени числа от конзолата. Запишете
// тяхната сума, разлика, произведение, остатък от деление и
// целочислено деление в отделни променливи и разпечатайте тези
// резултати.


$a = readline('Enter A = ' . PHP_EOL);
$b = readline('Enter B = ' . PHP_EOL);

$sum = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$modul = $a % $b;
$division = $a / $b;

echo" $sum, $subtraction, $multiplication, $modul, $division";