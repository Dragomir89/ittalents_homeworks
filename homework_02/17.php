<?php
require_once 'readline.php';

// Да се състави програма, която извежда квадрат, чийто страни са
// оформени със знака *, а вътрешността е запълнена със въведен
// знак.
// Входни данни b - дължина на страната число от интервала
// [3..20], c - желан знак.
// Програмата да използва цикъл for.
// Пример: 4 +
// Изход:
// ****
// *++*
// *++*
// ****



$n = readline('enter numb: ');
$star = '*';
$char = readline('enter char: ');

$line = '';
for ($i = 0; $i < $n; $i++) {
	
	$line .= $star;
}
echo $line . PHP_EOL;

for ($i = 0; $i < $n - 2; $i++) {
	$line = '';
	$line .= '*';
	
	for ($j = 0; $j < $n - 2; $j++) {
		$line .= $char;	
	}
	
	$line .= '*';
	echo $line . PHP_EOL;
	
}

$line = '';
for ($i = 0; $i < $n; $i++) {

	$line .=  $star;
}
echo $line . PHP_EOL;
















