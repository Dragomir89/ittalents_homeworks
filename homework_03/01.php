<?php
require_once 'readline.php';

// ������ 1:
// �� �� ������� ����� � �� �� ������ ���-������� ����� ������ ��
// 3 �� ������.



$arr = [];

for ($i = 0; $i < 5; $i++) {
	$arr[$i] = readline('numb: ');
}


$len = count($arr);

$min = PHP_INT_MAX;

for ($i = 0; $i < $len; $i++) {
	 
	if ($arr[$i] < $min && $arr[$i] % 3 ==0) {
		$min = $arr[$i];
	}
	
}
echo $min;
