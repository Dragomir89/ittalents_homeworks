<?php
require_once 'readline.php';
// �� �� ������� ��������, ����� ������� �� ������� 2 ����������
// ���������� ����� a,b.
// ���������� �� ������ ��������� ���� ���������� ����� ��
// �������������� �� ����� ����� � �����, ����� � ������ �����.
// ������ �����: a,b - ���������� ����� �� ��������� [10..99].
// ������: 15, 25
// �����: 375, 5 �������


$a = readline('a = ');
$b = readline('b = ') . PHP_EOL;

$c = $a * $b;
$d = $c % 10;

if (!($c % 2)) {
	echo "$c , $d even";
}
else {
	echo "$c , $d odd";
}