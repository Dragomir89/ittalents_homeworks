<?php
// ������ 11: �������� ����� N, ���� ��� ����� � ��������� ����
// �������� ������� ���������� � �������� N:
//   *
//  ***
// *****
// .................
// �a�� ������������ ���������� � ����������� �����
// ����������, �� ����������.
require_once 'readline.php';


$n = 3;//readline('enter odd number: ');

$star = '*';

$count = $n;

$triangele = '';

for ($i = 0; $i < $n; $i++) {

	$line = '';	
	
	for ($j = 0; $j <= $count; $j++) {
		$line .= ' ';
	}
	$count--;
	
	
	$line .= $star;
	
	echo $line;
	
	
	$star .= '**';
	
	echo PHP_EOL;
	
}

$line = '';
for ($i = 0; $i < $n * 3; $i++) {
	$line .= '.';
}
echo $line;











