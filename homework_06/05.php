<?php
// ������ 5:
// �� �� ������� ��������, ���� ����� �� ������� ���������� ����� N.
// ���������� �� ������� �����, ����� ����� �� �������� � ��� �������
// �� ���������� �����.
// �� �� ������� ��������� ���� ���������� ����� � ���������.
// ������: 12321
// �����: 12321 ��.
// ������: 12578
// �����: 87521 ��.
// ����������� ��������







$result = '';
$number = 12121;



function isPalindrom($number) {
	
	$inputNumber = $number;
	$number = (string)$number;
	$len  = strlen($number);
	
	function reverse($number, $len) {
		if ($len == 0) {
			return '';
		}
	
		$len  = strlen($number);
	
		$result = $number % 10;
	
		$number = (int)($number/10);
	
		$len--;
	
		$number = (string)$number;
	
	
		return  $result . reverse($number, $len);
	
	}
	
	$reverseNumber = (int)reverse($number, $len);
	
	//var_dump($reverseNumber);
	
	return $inputNumber == $reverseNumber ? "����� $reverseNumber ��" : "����� $reverseNumber ��";
	
	
}

echo isPalindrom($number);
