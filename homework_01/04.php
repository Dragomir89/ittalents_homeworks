<?php
require_once 'readline.php';

// �������� 2 �������� ����� �� ��������� � �� ������������ �
// ��������� ���.


$a = readline('Enter a ' . PHP_EOL);
$b = readline('Enter b ' . PHP_EOL);

echo min($a , $b) . ' ' . max($a, $b);
 