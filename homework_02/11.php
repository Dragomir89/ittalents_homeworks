<?php
// Задача 11: Въведете число N, чрез уеб форма и изкарайте като
// резултат следния триъгълник с височина N:
//   *
//  ***
// *****
// .................
// Кaто допълнително упражнение – нарисувайте същия
// триъгълник, но незапълнен.
require_once 'readline.php';


$n = 3;//readline('enter odd number: ');

$star = '*';

$count = $n;

$triangele = '';

for ($i = 0; $i < $n; $i++) {

	$line = '';	
	
	for ($j = 0; $j <= $count; $j++) {
		$line .= ' ';
	}
	$count--;
	
	
	$line .= $star;
	
	echo $line;
	
	
	$star .= '**';
	
	echo PHP_EOL;
	
}

$line = '';
for ($i = 0; $i < $n * 3; $i++) {
	$line .= '.';
}
echo $line;











