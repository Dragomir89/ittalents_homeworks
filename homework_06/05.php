<?php
// Задача 5:
// Да се състави програма, чрез която се въвежда естествено число N.
// Програмата да извежда число, чиито цифри са написани в ред обратен
// на въведеното число.
// Да се извежда съобщение дали въведеното число е палиндром.
// Пример: 12321
// Изход: 12321 да.
// Пример: 12578
// Изход: 87521 не.
// Използвайте рекурсия







$result = '';
$number = 12121;



function isPalindrom($number) {
	
	$inputNumber = $number;
	$number = (string)$number;
	$len  = strlen($number);
	
	function reverse($number, $len) {
		if ($len == 0) {
			return '';
		}
	
		$len  = strlen($number);
	
		$result = $number % 10;
	
		$number = (int)($number/10);
	
		$len--;
	
		$number = (string)$number;
	
	
		return  $result . reverse($number, $len);
	
	}
	
	$reverseNumber = (int)reverse($number, $len);
	
	//var_dump($reverseNumber);
	
	return $inputNumber == $reverseNumber ? "Изход $reverseNumber да" : "Изход $reverseNumber не";
	
	
}

echo isPalindrom($number);
