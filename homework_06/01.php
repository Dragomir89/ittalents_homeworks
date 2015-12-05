<?php
require_once 'readline.php';

$n = readline('fibo num: ');
function fiboNumbs($n) {
	
	if ($n > 0 && $n < 3) return 1;
	
	if ($n == 0) return 0;
	
	if ($n < 0) return false;
	
	
	$arr = [0, 1, 1];
	
	
	
	for ($i = 3; $i < $n; $i++) {
		
		$arr[$i] = $arr[$i - 1] + $arr[$i - 2];
		
	}
	
	$len = count($arr);
	
	return $arr[$len - 1];
	
}

var_dump(fiboNumbs($n));