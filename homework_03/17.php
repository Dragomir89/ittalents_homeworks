<?php
// ������ 17:
// ���� ������ �� ���������� ����� �� �������� �������������� ������,
// ��� �� ���������� � �� ���������� ���������:
// N1 < N2 > N3 < N4 > N5 <..
// ��������� ��������, ����� ��������� ���� �������� � ���������
// ����� ������ �� ����� ���������� ������� ����������.
// ������: 1 3 2 4 3 7
// �����: ��������� ������������ �� �������������� ������ ������



$arr = [1, 3, 2, 4, 3, 7];


$len = count($arr);

for ($i = 1; $i < $len - 1; $i++) {
	if ($i % 2 != 0) {
		if ($arr[$i - 1] < $arr[$i] && $arr[$i] > $arr[$i + 1]) {
		
		}else{
			echo ' false';
			return ;
		}
	}else {
		if ($arr[$i - 1] > $arr[$i] && $arr[$i] < $arr[$i + 1]) {
		
		}else{
			echo ' false';
			return ;
		}
	}
	
	
}

echo '��������� ������������ �� �������������� ������ ������';
