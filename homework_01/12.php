<?php
// ��������� ������ �� ������ ������ ������ �� 4 � ����������
// ����������, �� ��� �������� ������ �� 400, �.�. 1900 �� � ���������,
// �� 1600 � 2000 �� ���������.
// ��������� ��������, ����� �� ������ ���, �����, ������ ���������
// ���������� ����.
// ������ �����: ��� ����� �� ���, �����, ������.
// ������: 28, 2, 2000
// �����: 1,3,2000
require_once 'readline.php';



$day = readline('Enter day' . PHP_EOL);

$month = readline('Enter month' . PHP_EOL);

$year = readline('Enter year' . PHP_EOL);


if ($month < 8 && $day == 31 && $month % 2 != 0) {
	$day = 1;
	$month ++;
	echo"$day , $month, $year";  
	return ;
}
if ($month < 8 && $day == 30 && $month % 2 == 0 && $month != 2) {
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ;
}


if ($month >= 8 && $month < 12 && $month % 2 == 0 && $day == 31) {
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ;
	
}
if ($month >= 8 && $month == 12 && $month % 2 == 0 && $day == 31) {
	$day = 1;
	$month = 1;
	$year++;
	echo"$day , $month, $year";
	return ;
	
}
if ($month > 8 && $month < 12 && $month % 2 != 0 && $day == 30) {
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ;
}

if ($year % 100 == 0 && $year % 400 == 0 && $month == 2 && $day == 28) {
	$day ++;
	echo"$day , $month, $year";
	return ;
}else if ($year % 100 == 0 && $year % 400 != 0 && $month == 2 && $day == 28){
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ;
}else if ($year % 100 != 0 && $year % 4 == 0 && $month == 2 && $day == 28){
	$day ++;
	echo"$day , $month, $year";
	return ;
}else if ($year % 100 != 0 && $year % 4 != 0 && $month == 2 && $day == 28){
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ; 
}else if($year % 100 != 0 && $year % 4 == 0 && $month == 2 && $day == 29){
	$day = 1;
	$month++;
	echo"$day , $month, $year";
	return ;
}
else if ($year % 100 == 0 && $year % 400 == 0 && $month == 2 && $day == 29){
	$day = 1;
	$month ++;
	echo"$day , $month, $year";
	return ;
}
else {
	$day++;
	echo"$day , $month, $year";
}





