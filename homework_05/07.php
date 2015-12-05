<?php
// Задача 7:
// Да се състави програма, която чете набор от думи разделени с
// интервал.
// Като резултат да се извеждат броя на въведените думи, както и броя
// знаци в най-дългата дума.
// Пример: asd fg hjkl
// Изход: 3 думи, най-дългата е с 4 символа.


$str = 'dasd dasd 12345678';

$len = mb_strlen($str, 'UTF-8');

$maxWord = '';
$maxWordLen = 0;
$currentWordLen = 0;

$words = (explode(" ",$str));

$len = count($words);


for ($i = 0; $i < $len; $i++) {
	
	if (mb_strlen($words[$i]) > $maxWordLen) {
		$maxWordLen = mb_strlen($words[$i]);
		$maxWord = $words[$i];
	}
	
}

echo "$len думи, най-дългата е с $maxWordLen символа.";