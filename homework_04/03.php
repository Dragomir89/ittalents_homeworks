<?php
// ������ 3:
// ����� �������� ����� �� �����, ����� ��������� �� ��������
// �������������. �� �� ��������� ������ �� ���������� �� ������,
// ����� � ������������������� �� ���� �����.

$arr = [
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
		[1,2,3,4],
];


$sum = 0 ;

$average = 0;

$count = 0;

foreach ($arr as $key => $arr1) {
	foreach ($arr1 as $key => $value) {

		$count++;
		
		$sum += $value;
	
	};
}

$average = $sum / $count;

echo 'sum = ' . $sum . PHP_EOL;

echo 'average = ' . $average . PHP_EOL;
