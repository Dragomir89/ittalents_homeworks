<?php
// ������ 15:
// �� �� ������� ��������, ����� ������� � ��������� ����� ������
// �����.
// ���� �����: �������� ������� ����� 3 �������� �����, �����
// ��������� �������� ������� ������������ ���� ����.



$arr = [7.13, 0.2, 4.9, 5.1, 6.34, 1.12 ];


$len = count($arr);
$count = 0;
$result = '';

for ($i = 0; $i < $len; $i++) {
	$arr[$i] = abs($arr[$i]);
}


arsort($arr);


foreach ($arr as $value){
	$count++;
	$result .= $value . ' ';
	
	if ($count % 3 == 0) {
		break;
	}
}
echo $result;
