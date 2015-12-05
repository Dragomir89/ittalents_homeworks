<?php
// Задача 2:
// Да се състави програма, чрез която от клавиатурата се въвеждат
// последователно две думи с дължина 10-20 знака.
// Програмата да размени първите им 5 знака и да изведе дължината на
// по-дългата, както и новото им съдържание.
// Пример: uchilishe uchenik
// Изход: 9 uchenishe
require_once 'readline.php';


$str1 = readline('str1');
$str2 = readline('str2');
$result = '';

$len1 = mb_strlen($str1, 'UTF-8');
$len2 = mb_strlen($str2, 'UTF-8');

if ($len1 < 10 || $len1 > 20 || $len2 < 10 || $len2 > 20) {
	echo 'invalid input';
	return ;
}

if ($len1 < $len2) {
	
	$str = $str1;
	
	$str1 = $str2;
	$str2 = $str1;
}


$len = mb_strlen($str1, 'UTF-8');

$result = mb_substr($str2,0,5, 'UTF-8');

echo $result , PHP_EOL;

$result .= mb_substr($str1,5, $len - 1, 'UTF-8');


echo $result;