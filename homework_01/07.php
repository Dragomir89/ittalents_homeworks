<?php



// �������� 3 ���������� �� ��������� � ���, ���� ����, ���� ��� �����
// � ����� ��� �������� �� ��� ��.
// ��������� ��������, ����� ����� ������� �� ������ �� ���� ����� ��
// ������� �����:
// - ��� ��� ����� ���� �� �������
// - ��� ���� ���� �� �� ���� ���������
// - ��� ����� � �� ���� ����� � �� ��� ���
// - ��� ��� ����� �� ������ �� ���� � ��������
// - ��� ���� ��-����� �� 10 �� �� ����� �� ����
// �������� ��������� ���� ��������� � ��� ��������


$time = readline('Enter time ' . PHP_EOL);
$money = readline('Enter money ' . PHP_EOL);
$isIll = readline('Enter true or false ' . PHP_EOL);

if ($isIll && $money > 10) {
	echo 'I will buy medicines' . PHP_EOL;
	echo 'I will stay home' . PHP_EOL;
}else if ($isIll && $money < 10){
	echo 'I will drink tee' . PHP_EOL;
	echo 'I will stay home' . PHP_EOL;
}else if ( !$isIll && $money < 10){
	echo "I will go to cafe";
}else {
	echo "I will go to cinema";
}