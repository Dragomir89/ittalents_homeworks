<?php
require_once 'readline.php';
// ������ �� �� ������� �������� � ����. ����� 2 ���� � ���������� 2 �
// 3 ����� � �� �������� ������������.
// �� �� ������� ��������, ����� �� ����� ���� ������� ��� �� ��������
// ��������� � ���� ����, �.�. ��-����� ���� �� �� ����� ����� ��
// ������.
// ������ �����: ���������� ����� �� ��������� [10..9999].



$number = readline('Enter number of liters') . PHP_EOL;

$coefficient = $number / 5;
$coefficient = (int)$coefficient;
$coefficient_1 = $number % 5;

echo "$coefficient x 2 buckets" . PHP_EOL;

echo "$coefficient x 3 buckets" . PHP_EOL;



if ($coefficient_1 % 3 == 0) {
	
	$coefficient_1 /= 3;
	
	echo " add $coefficient_1 buckets x 3 liters" . PHP_EOL;

}else if ($coefficient_1 % 2 == 0 || $coefficient_1 < 2) {

	$coefficient_1 /= 2;

	echo "add $coefficient_1 buckets x 2 liters" . PHP_EOL;
}
