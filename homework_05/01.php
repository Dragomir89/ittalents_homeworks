<?php
// ������ 1:
// �� �� ������� ��������, ���� ����� �� �������� ��� ���� ���������
// �� 40 ������ � ����� �����.
// ���� �������� �� ������ �� �� �������� �������� ���� � ������ � ����
// � ����� �����.
// ������: Abcd Efgh
// �����: ABCD abcd EFGH efgh
require_once 'readline.php';

$str1 = '';
$str2 ='';
$result = '';

do {
	
	$input = readline('char for str1: ');
	
	$str1 .= $input;
	
	$strLen = strlen($str1);
	
	
}while ($input != '' || $strLen >= 40);



do {

	$input = readline('char for str2: ');

	$str2 .= $input;

	$strLen = strlen($str2);


}while ($input != '' || $strLen >= 40);




$str1 = strtolower($str1);

$result .= $str1;

$str1 = strtoupper($str1);

$result .= ' ' . $str1;


$result .= '   ';

$str2 = strtolower($str2);

$result .= $str2;

$str2 = strtoupper($str2);

$result .= ' ' . $str2;


echo $result;

