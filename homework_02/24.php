<?php
// Задача 24:
// Едно число X е палиндром, aко се чете еднакво отпред назад и
// отзад напред.
// Да се състави програма, която проверява дали въведено число е
// палиндром.
// Входни данни: N - естествено число от интервала [10 .. 30000].
// Пример: 17571
// Изход: числото е палиндром
require_once 'readline.php';


$n = readline('enter number: ');

if ($n < 10 || $n > 3000) {
	echo 'invalid input';
	return ;
}

$numberLen = strlen($n);

$halfLen = (int)($numberLen / 2);


$currentCount = 0;


$flag = true;

while ($currentCount != $halfLen){
	
	if ($n{$currentCount} != $n{$numberLen - 1}) {
		echo 'is not palindrom';
		return ;
	}
	
	$numberLen--;
	$currentCount++;
}

echo 'is palindrom';



