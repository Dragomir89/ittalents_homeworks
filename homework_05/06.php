<?php
// Задача 6:
// Да се състави програма, чрез която се въвежда изречение с отделни
// думи.
// Като резултат на екрана да се извежда същия текст, но всяка отделна
// дума да започва с главна буква, а следващите я букви да са малки.
// Пример: супер яката задача
// Изход: Супер Яката Задача
require_once 'readline.php';

$str = readline('enter string: ');

function firstLetterToUppercase($str) {
	
	return ucwords($str);
	
	
}

var_dump(firstLetterToUppercase($str));