<?php
// Задача 6:
// Напишете програма, която първо чете 2 масива и после извежда
// съобщение дали са еднакви, и дали са с еднакъв размер.
require_once 'readline.php';


$arr1 = [13,2,7];

$arr2 = [13,5,7];

$len1 = count($arr1);
$len2 = count($arr2);


if ($len1 != $len2) {
	echo 'arrays are diffrent'. PHP_EOL;
	echo 'arrays are whith diffrent size';
	return ;
}

for ($i = 0; $i < $len1; $i++) {
	
	if ($arr1[$i] != $arr2[$i]) {
		echo 'arrays are diffrent'. PHP_EOL;
		echo 'arrays are whith same size';
		return ;
		
	}
}

echo 'arrays are same';
