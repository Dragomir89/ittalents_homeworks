<?php

// ������ 2:
// �� �� ������� ��������, ����� ��������� ������������ �� ���
// ���������� ����� =>2, ���� �� �������� ���� ��������.
// ������ �����: 2 ���������� �����.
// ������: 4, 5
// �����: 20


require_once 'readline.php';

$x = readline('enter number: ');

$y = readline('enter number: ');

function multiplyBySum($x , $y) {
	
	$result = 0;
	
	$min = min($x , $y);
	$max = max($x, $y);
	
	for ($i = 0; $i < $min; $i++) {
		
		$result += $max;
		
	};
	
	
	return $result;
	
}

var_dump(multiplyBySum($x, $y));