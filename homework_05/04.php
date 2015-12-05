<?php
// Задача 4:
// Да се състави програма, чрез която по въведени трите имена на двама
// човека разделени със запетая, се извежда чие име има по-голям сбор
// от ASCII кодовете на съставящите името букви.
// Пример: Anna Dosewa Asenowa, Iwo Peew Peew
// Изход: Anna Dosewa Asenowa

$name1 = 'Anna Dosewa Asenowa';
$name2 = 'Iwo Peew Peew';
$result;

$len1 = mb_strlen($name1, 'UTF-8');

$len2 = mb_strlen($name2, 'UTF-8');

$sum1 = 0;
$sum2 = 0;

for ($i = 0; $i < $len1; $i++) {
	$sum1 += ord($name1[$i]);
}
for ($i = 0; $i < $len2; $i++) {
	$sum2 += ord($name2[$i]);
}

$result = $sum1 > $sum2 ? $name1 : $name2;

echo $result;