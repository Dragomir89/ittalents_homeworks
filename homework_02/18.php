<?php
require_once 'readline.php';

// ���������� �� ������� ��������� �� ���������.
// ������������ �������� �� ����������� � ���������� �� 2-��
// �����.
// ������: 2 2
// �����:
// 1*1= 1;
// 1*2= 2;
// 2*1= 2;
// 2*2= 4;


$n = readline('n = ');
$m = readline('m = ');

$max = max($n, $m);
$min = min($n, $m);

for ($i = 1; $i <= $max; $i++) {
	
	for ($j = 1; $j <= $min; $j++) {
		
		$result = $i * $j;
		
		echo "$i * $j = $result" . PHP_EOL;
		
	}
	
}