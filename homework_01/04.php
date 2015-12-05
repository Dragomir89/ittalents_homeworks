<?php
require_once 'readline.php';

// Въведете 2 различни числа от конзолата и ги разпечатайте в
// нарастващ ред.


$a = readline('Enter a ' . PHP_EOL);
$b = readline('Enter b ' . PHP_EOL);

echo min($a , $b) . ' ' . max($a, $b);
 