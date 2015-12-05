<?php
// Съставете програма, която по дадено трицифренo число проверява
// дали числото се дели на всяка своя цифра. Във въведеното число да
// няма цифра 0.
require_once 'readline.php';

$numb = readline('Enter number');
$numb1 = $numb;


$a = $numb % 10;
$flag = 1;


if ($a == 0) {
	echo("Invalid input, there is number = 0");
	return ;
}
if ($numb1 % $a != 0) {
	$flag = 0;
}
$numb /= 10;
$numb = (int)$numb;
$a = $numb % 10;




if ($a == 0) {
	echo("Invalid input, there is number = 0");
	return ;
}
if ($numb1 % $a != 0) {
	$flag = 0;
}
$numb /= 10;
$numb = (int)$numb;
$a = $numb % 10;



if ($a == 0) {
	echo("Invalid input, there is number = 0");
	return ;
}
if ($numb1 % $a != 0) {
	$flag = 0;
}
$numb /= 10;
$numb = (int)$numb;




if ($flag) {
	echo 'TRUE';
	return ;
}

echo 'FALSE';


