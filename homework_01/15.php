<?php
// �� �� ������� ��������, ����� ������� ���������� ����� �� ���������
// [0..24].
// �������� �� ������ ������������� ��������� ��������� ���������
// ���.
// ��������� ��:
// [18..4] - ����� �����;
// [4..9] - ����� ����;
// [9..18] - ����� ���
// ������: 10
// �����: ����� ���
require_once 'readline.php';



$hour = readline('Enter hour');

if ($hour < 0 || $hour > 24) {
	echo 'Invalid input';
	return ;
}


if ($hour >= 4 && $hour <= 9) {
	echo 'Good morning';
}else if ($hour > 9 && $hour <= 18){
	echo 'Good day';
}else if ($hour > 18 || $hour < 4){
	echo 'Good evening';
}