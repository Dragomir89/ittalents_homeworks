<?php
require_once 'readline.php';

// �� �� ������� ��������, ����� �� ������� ����� � �������/����� ��
// ���������� ����������� t � ������ ������.
// �������������� ��������� ��:
// ��� -20 ������ �������;
// ����� 0 � -20 - �������;
// ����� 15 � 0 - ������;
// ����� 25 � 15 - �����;
// ��� 25 � ������.
// ������ �����: ���� ����� �� ��������� [-100..100].


$temp = readline('Enter temperature:  ');


if ($temp < -100 || $temp > 100) {
	echo 'Invalid input';
	return ;
}

if ($temp <= -20) {
	echo 'Ledeno studeno';
}else if ($temp > -20 && $temp <= 0) {
	echo 'Studeno';
}else if ($temp > 0 && $temp <= 15){
	echo 'Hladno';
}else if ($temp > 15 && $temp <= 25){
	echo 'Toplo';
}else if ($temp > 25) {
	echo 'Goreshto';
}
