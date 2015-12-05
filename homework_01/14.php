<?php
// Да се състави програма, която по въведени координати на 2 позиции
// от шахматната дъска извежда отговор дали са оцветени в еднакъв или
// различен цвят.
// Шахматната дъска е квадратна.
// Въвеждат се две двойки числа от интервала [1..8].
// Пример: 2 2 3 2
// Изход: Позициите са с различен цвят
require_once 'readline.php';


$firstHorizontalPos = readline('firstHorizontalPos' . PHP_EOL);

$firstVerticalPos = readline('firstVerticalPos' . PHP_EOL);

$secondHorizontalPos = readline('secondHorizontalPos' . PHP_EOL);

$secondVerticalPos = readline('secondVerticalPos' . PHP_EOL);

if ($firstHorizontalPos > 8 || $firstVerticalPos > 8 
		|| $secondHorizontalPos > 8 || $secondVerticalPos > 8 ) {
	echo 'invalid input';
	return ;
}

$sum1 = $firstHorizontalPos + $firstVerticalPos;
$sum2 = $secondHorizontalPos + $secondVerticalPos;


if ($sum1 % 2 == $sum2 % 2) {
	echo 'there are same color';
}else {
	echo 'there are different color';
}