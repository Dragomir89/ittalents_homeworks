<?php
// �� �� ������� ��������, ���� ����� �� ������������� �������� 7
// ����� � ��������� ����� �� �������� ������� �� �������� � �������:
// - 0 � 1 ���� ����� ����������;
// - 2 � 3 ���� ��������;
// - 4 � 5 ���� ���������.

// ������: 1,2,3,4,5,6,7
// �����: 2,1,4,3,6,5,7



$arr = [1,2,3,4,5,6,7];

$n = $arr[0];

$arr[0] = $arr[1];

$arr[1] = $n;


$arr[2] += $arr[3];


$arr[3] = $arr[2] - $arr[3];


$arr[2] = $arr[2] - $arr[3];


$arr[4] *= $arr[5];

$arr[5] = $arr[4] / $arr[5];

$arr[4] = $arr[4] / $arr[5];


print_r($arr);

