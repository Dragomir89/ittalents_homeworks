<?php
require_once 'readline.php';

// ������ 14: �� �� ������� ��������, ����� �� ��������
// ���������� ����� N �� ��������� [10..200] ������� � �������
// ��� ������ �����, ����� �� ������ �� 7 � �� ��-����� �� N.



$n = readline('enter number');

if ($n > 200 || $n < 10) {
	echo 'invalid input';
	return ;
}


for ($i = $n; $i >= 10 ; $i--) {
	
	if ($i % 7 == 0) {
		echo "$i" . PHP_EOL;
	}
	
}