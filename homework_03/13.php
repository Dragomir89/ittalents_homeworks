<?php
// ������ 13:
// �� �� ������� ��������, ���� ����� �� ������� ����� � �� ���������
// ���� ����� � ������� ������ �������.
// ����������, ���� �����, �� ��������� �������������� ������ �����
// �� ���������� ���������� ����� � 2-���� ������ �������.
// ������: 99
// �����: 1100011
require_once 'readline.php';


$numb = readline('enter number: ');
$arrElement = 0;

$arr = [];

while ($numb >= 1){
	

	$arrElement = $numb % 2 ;
	$numb = (int)($numb / 2);
	
	array_push($arr, $arrElement);
	
}

$len = count($arr);

for ($i = $len - 1; $i >= 0; $i--) {
	echo $arr[$i];
}