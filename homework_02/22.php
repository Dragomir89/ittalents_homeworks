<?php
// ������ 22:
// �� �� ������� ��������, ����� ������� ������� 10 ���-�����
// �����, ����� �� ����� �� 2, 3 ��� �� 5 � ����� �� ��-������ ��
// �������� ���������� �����.
// ������� �� ��������, ������ � ������ ������� �����.
// ������ �����: ����� �� ��������� [1..999]
// ������: 1
// �����: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
require_once 'readline.php';


$n = readline('number: ');

if ($n < 1 || $n > 999) {
	echo 'invalid input';
	return ;
}

$result = '';

$counter = 0;


while ($counter != 10) {
	$n++;
	
	if ($n % 2 == 0) {
		$counter++;
		
		$result .= "$counter:$n ";
	}elseif ($n % 3 == 0){
		
		$counter++;
		
		$result .= "$counter:$n ";
	}elseif ($n % 5 == 0){
		
		$counter++;
		
		$result .= "$counter:$n ";
		
	}
}

echo $result;


















