<?php
// Задача 10:
// Да се състави програма, която по даден низ връща друг,
// символите, на който са получени като към всеки код на символ
// от ASCII таблицата е добавеното числото 5 и е записан
// новополучения символ.
// Пример :
// Вход: Hello
// Изход: Mjqqt
require_once 'readline.php';


$str = 'Hello';

$result = '';

$len = mb_strlen($str);

for ($i = 0; $i < $len; $i++) {
	
	$charNumb = ord($str[$i]);
	$charNumb += 5;
	
	$result .= chr($charNumb);
	
}


echo $result;