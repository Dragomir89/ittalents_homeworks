<?php
// ������ 4:
// �� �� ������� ��������, ����� �� ����� �����, ����� � �������� ���
// �������� ��� � ����� ������� ������ ������� �� ���������� ��
// �����. ���� �������� �� �� ������ ��� ����� � �� �� ������.
// ������:
// 1 3 5 7 9 11 45
// 6
// �����:
// 1 3 5 6 7 9 11 45


$arr = [1, 3, 5, 7, 9, 11, 45];
$n = 2;


function insertElement($arr, $n) {
	
	$len = count($arr);
	$arr1 = [];
	$flag = true;
	
	if ($flag && $arr[0] >= $n){
		array_push($arr1, $n);
		$flag = false;
	}
	
	array_push($arr1, $arr[0]);
	
	
	for ($i = 1; $i < $len; $i++) {
		
		if ($arr[$i - 1] < $n && $arr[$i] > $n && $flag) {
			array_push($arr1, $n);
			$i--;
			$flag = false;
			continue;
		}
		array_push($arr1, $arr[$i]);
	}
	
	if ($flag && $arr1[$len - 1] <= $n) {
		
		array_push($arr1, $n);
	}
	
	
	
	return $arr1;	
	
}

print_r(insertElement($arr, $n));
