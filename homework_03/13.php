<?php
// Задача 13:
// Да се състави програма, чрез която се въвежда число и се представя
// като число в двоична бройна система.
// Програмата, чрез масив, да изчислява последователно всички цифри
// на въведеното естествено число в 2-ична бройна система.
// Пример: 99
// Изход: 1100011
require_once 'readline.php';


$numb = readline('enter number: ');
$arrElement = 0;

$arr = [];

while ($numb >= 1){
	

	$arrElement = $numb % 2 ;
	$numb = (int)($numb / 2);
	
	array_push($arr, $arrElement);
	
}

$len = count($arr);

for ($i = $len - 1; $i >= 0; $i--) {
	echo $arr[$i];
}