<?php
// ������ 3:
// �� �� ������� ��������, ����� ��������� ���� �������� ����������
// ����� � ������.
// ������: 101
// �����: ������

require_once 'readline.php';

$n = readline('enter numb: ');

function isPrimNumber($n) {
	
	if ($n == 2) return true;
	
	for ($i = 2; $i < $n; $i++) {
		if ($n % 2 == 0) {
			return false;
		}
	}
	
	return true;
	
}


var_dump(isPrimNumber($n));