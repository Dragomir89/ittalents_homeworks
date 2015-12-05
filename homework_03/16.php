<?php
// �� �� ������� ��������, ���� ����� ������������� �������� 10
// ������ ����� �� ��������� �� ���������� �� ������� �����:
// 1. ������� �������������� �����.
// 2. ������ �������� ��� �������� ��-����� �� -0.231 �� ������� ���
// ������ �� �������� �� ������� �� + ������� 41.25, � ������ ��������
// �������� �� ������� � �������������� ����� ����� ������� �
// �������� ������� �����
// 3. �� �� ������� ���������� �� �������� � ��������������� �����.
// 4. �� �� ������� �������� �������� �� ������ �������� �� ������
// ������, ����� �� �������� �� 0.
// ������: -1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4
// �����: 42.25, 45.25, 9.3, 16.8, 0, 38.4, 90.25, 68.8, 81.9,141.25

$arr = [-1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4];

$len = count($arr);

$average = 0;
$count = 0;
$sum = 0;

$array_1 = '';
$array_2 = '';

for ($i = 0; $i < $len; $i++) {

	$n = $arr[$i];
	
	if ($arr[$i] < -0.231) {
	
		
		$n = pow($i + 1, 2) + 41.25;
		
		$array_1 .= $arr[$i] . ' ';
		$array_2 .= pow($i + 1, 2) + 41.25 . ' ';
		
		 
	}else {
		
		$n = ($i + 1) * $n;
		
		$array_1 .= $arr[$i] . ' ';
		$array_2 .= ($i + 1) * $arr[$i] . ' ';
	
		
	}
	if ($n) {
		
		$count++;
		$sum += $n;
		
	}
}
$average = $sum / $count;

echo $array_1 . PHP_EOL;
echo $array_2 . PHP_EOL;
echo "average = $average";