<?php
require_once 'readline.php';

// �� �� ������� ��������, ����� ������� �������, ����� ������ ��
// �������� ��� ����� *, � ������������ � ��������� ��� �������
// ����.
// ������ ����� b - ������� �� �������� ����� �� ���������
// [3..20], c - ����� ����.
// ���������� �� �������� ����� for.
// ������: 4 +
// �����:
// ****
// *++*
// *++*
// ****



$n = readline('enter numb: ');
$star = '*';
$char = readline('enter char: ');

$line = '';
for ($i = 0; $i < $n; $i++) {
	
	$line .= $star;
}
echo $line . PHP_EOL;

for ($i = 0; $i < $n - 2; $i++) {
	$line = '';
	$line .= '*';
	
	for ($j = 0; $j < $n - 2; $j++) {
		$line .= $char;	
	}
	
	$line .= '*';
	echo $line . PHP_EOL;
	
}

$line = '';
for ($i = 0; $i < $n; $i++) {

	$line .=  $star;
}
echo $line . PHP_EOL;
















