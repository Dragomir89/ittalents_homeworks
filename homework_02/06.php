<?php
//  �� �� ������� ����� �� ������(���������) � �� ��
// ������ ����� �� ������ ����� ����� 1 � ���������� �����.
require_once 'readline.php';

$numb = readline("number : "). PHP_EOL;

$sum = 0;
for ($i = 1; $i <= $numb; $i++) {
	$sum += $i;
}

echo "$sum";