<?php
require 'readline.php';

// Да се поиска от потребителя да въведе 3 числа A, В и С (може да са с
// 		плаваща запетая) от конзолата.
// 		Да се изведе подходящо съобщение за това дали C е между A и B.



$a = readline('Enter A' . PHP_EOL);
$b = readline('Enter B' . PHP_EOL);
$c = readline('Enter C' . PHP_EOL);


if ($a > $b && $b > $c) {
	echo "number $b is between $a and $c  one";
}
else if ($b > $a && $a > $c) {
	echo "number $a is between $b and $c two";
}
else {
	echo "number $b is between $c and $a three";
}

