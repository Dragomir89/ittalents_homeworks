<?php
require_once 'readline.php';
// �������� 2 �������� ����������� ����� �� ���������. ��������
// ������� ����, �������, ������������, ������� �� ������� �
// ����������� ������� � ������� ���������� � ������������ ����
// ���������.


$a = readline('Enter A = ' . PHP_EOL);
$b = readline('Enter B = ' . PHP_EOL);

$sum = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$modul = $a % $b;
$division = $a / $b;

echo" $sum, $subtraction, $multiplication, $modul, $division";