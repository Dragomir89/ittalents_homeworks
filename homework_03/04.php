<?php
// ������ 4:
// �� �� ������� ����� � �� �� �������� ���� � ���������.
// �������� ������ �� ���������:
// [3 7 7 3]
// [4]
// [1 55 1]
// [6 27 -1 5 7 7 5 -1 27 6]
require_once 'readline.php';

$arr = [];
for ($i = 0; $i < 5; $i++) {
	$arr = readline('enter element: ');
}




$len = count($arr);
$count = 0;

for ($i = 0; $i < $len; $i++) {
	
	$last = $len - 1;
	
	if ($arr[$i] != $arr[$last - $count]) {
		echo 'its not mirrored';
		return ;
	}
	
	$count++;
	
}

echo 'its mirrored';