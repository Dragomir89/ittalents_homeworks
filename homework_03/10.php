<?php
// ������ 10:
// �� �� ������� ��������, ���� ����� �� �������� 7 ���� ����� �
// ��������� �����.
// ���������� �� ������ �������, ����� � ���-������ �� ��������
// �������� �� ���������� �����.
// ������: 1,2,3,4,5,6,7
// �����: ������ �������� 4, ���-������ �������� 4
require_once 'readline.php';

$arr = [];

for ($i = 0; $i < 7; $i++) {
	$arr[$i] = readline('enter number: ');
}



$len = count($arr);
$sum = 0;

for ($i = 0; $i < $len; $i++) {
	
	$sum += $arr[$i];
	
}

$result = $sum / $len;


echo $result;