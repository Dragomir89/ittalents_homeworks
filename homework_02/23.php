<?php
// ������ 23:
// �� �� ������� ��������, ����� ���� ����� while �������
// ��������� �� ���������, �� ��� ����������.
// �.�. ��� � �������� 4*5 �� �� ������� 5*4.



$count_01 = 1;
$count_02 = 1; 


while ($count_01 != 10) {
	
	
	while ($count_02 != 10) {
		
		$result = $count_01 * $count_02;
		
		echo "$count_01 * $count_02 = $result";
		
		$count_02++;
		
		echo PHP_EOL;
	}
	
	
	$count_01++;
	
	$count_02 = $count_01;
}