<?php
// ������ 9:
// �������� ��������, � ����� ����������� ������� �����, ���� �����
// ���������� �� ������ �� ������� � ������� ��� (����� �� � ������ ��
// 		�� �������� � ������� ���, ��� ����� �� �� ������, ���� ����� �� ��
// 		�������� � �������� ���). ��������� �� ������ �������� ����� � ����
// 		������������ ����� � ����� ��� �� ���������� ���� �����.
require_once 'readline.php';

$arr = [];

for ($i = 0; $i < 5; $i++) {
	$arr[$i] = readline('enter number:');
}


$arr_1 = [];

$len = count($arr);


for ($i = $len - 1; $i >= 0; $i--) {
	
	$arr_1[$i] = $arr[$i];
	
}

print_r($arr_1);


$n = 0;

$count = 1;

$halfLen = ($len / 2);


for ($i = 0; $i < $halfLen; $i++) {
	
	$n = $arr[$i];
	
	$arr[$i] = $arr[$len - $count];
	

	$arr[$len - $count] = $n;
	
	$count++;
}


print_r($arr);










