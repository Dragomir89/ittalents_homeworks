<?php
require 'readline.php';

// �� �� ������ �� ����������� �� ������ 3 ����� A, � � � (���� �� �� �
// 		������� �������) �� ���������.
// 		�� �� ������ ��������� ��������� �� ���� ���� C � ����� A � B.



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

