<?php
require_once 'readline.php';

// ������ 16:
// �� �� ������� ��������, ���� ����� �� �������� 2 ����������
// ����� N, M �� ��������� [10..5555].
// ����������, ���� ����� for, �� ������� ������ ����� ��
// ���������, ����� �� ������ �� 50 � �������� ���.
// ������: 25,249
// �����: 200,150,100, 50.


$n = readline('N = ');
$m = readline('M = ');

$max = max($n , $m);

$min = min($n , $m);

$result = '';

do{
	

	if ($max % 50 == 0) {
		$result .= "$max ";
	}	
	
$max--;	
	
	
}while ($max != $min);

echo $result;
