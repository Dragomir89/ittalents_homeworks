<?php
// ������ 10: �������� ����� �� ������������ � ���������� ���� �
// ������. ������ ����� � ���� ����� �� ���� ���� �� 1 � �� ����
// ��.
require_once 'readline.php';



$n = readline('enter number: ');

for ($i = 2; $i < $n; $i++) {
	
	if ($n % $i == 0) {
		echo "$n is not prim";
		return ;
	}
	
}
echo "$n is prim";