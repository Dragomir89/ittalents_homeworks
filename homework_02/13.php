<?php
require_once 'readline.php';


// ������ 13: �� �� ������� ��������, ����� ������� ������
// ���������� ���������� �����, ����� ���� ���� �� ������� �����
// �� ������ �����.
// ������ : sum, ������ 2>=sum<=27.
// ������: 26
// �����: 899, 989, 998.

$sum = readline('numb: ');

if ($sum < 2 || $sum > 27) {
	echo 'invalid input';
	return ;
}

for ($i = 100; $i <= 999; $i++) {

	$x = $i / 100;
	$x = (int)$x;

	$y = $i / 10;
	$y = (int)$y;
	$y %= 10;

	$z = $i % 10;

	if ($x + $y + $z == $sum) {
		echo "$x $y $z " . PHP_EOL;
	}

}


