<?php
// �� �� �������� 2 ����� �� ������������ � � �.
// �� �� ������� ������ ����� �� � �� � �� ������ 2(��������� �
// 		�������).��� ����� ����� � ������ �� 3, �� �� ������ ��������� ��
// 		������� �� �������� �skip 3�.��� ������ �� ������ �������� ����� (���
// 				������������) ����� ��-������ �� 200, �� �� �������� �����������.

require_once 'readline.php';


$a = readline('A = ');
$b = readline('B = ');

$sum = 0;

$result = '';

for ($i = $a; $i <= $b; $i++) {
	
	$currentNumb = pow($i, 2);
	
	if ($currentNumb % 3 == 0) {
		
		if ($i == $b) {
			$result .= 'skip ';
		}else {
			$result .= 'skip, ';
		}
	}else {
		$sum += $currentNumb;
		if ($sum >= 200) {
			echo "$result";
			return;
		}
		if ($i == $b) {
			$result .= $currentNumb;
		}else {
			$result .= $currentNumb .', ';
		}
	}
	
	
}

echo "$result";
