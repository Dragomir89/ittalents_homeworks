<?php
require_once 'readline.php';

// ������ 25:
// �� �� ������� ��������, ����� �� ������ ����� N, �� ���������
// N!, �.�. 1*2*3*4...*N.
// ������: 5
// �����: 120
// ����������� ����� do-while.


$n = readline('enter number: ');

$count = 0;

$result = 1;

do{
	$count++;
	
	$result *= $count;
	
}while ($count != $n);

echo $result;