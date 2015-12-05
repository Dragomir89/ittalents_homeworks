<?php
// ������ 24:
// ���� ����� X � ���������, a�� �� ���� ������� ������ ����� �
// ����� ������.
// �� �� ������� ��������, ����� ��������� ���� �������� ����� �
// ���������.
// ������ �����: N - ���������� ����� �� ��������� [10 .. 30000].
// ������: 17571
// �����: ������� � ���������
require_once 'readline.php';


$n = readline('enter number: ');

if ($n < 10 || $n > 3000) {
	echo 'invalid input';
	return ;
}

$numberLen = strlen($n);

$halfLen = (int)($numberLen / 2);


$currentCount = 0;


$flag = true;

while ($currentCount != $halfLen){
	
	if ($n{$currentCount} != $n{$numberLen - 1}) {
		echo 'is not palindrom';
		return ;
	}
	
	$numberLen--;
	$currentCount++;
}

echo 'is palindrom';



