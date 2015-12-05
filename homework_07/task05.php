<?php


$arr = [1, 3, 5, 7, 9, 11, 45 ];
$n = 2;

function insertNumb($arr , $n , $result = [], $index = 1 ) {
	
	if ($index == count($arr)) {
	   return $result;
	};
	
	if ($index == 1) {
		array_push($result, $arr[0]);
	}

	if ($arr[$index - 1] < $n && $arr[$index] > $n) {
	
		array_push($result, $n);
		array_push($result, $arr[$index]);
	}else{
		
		array_push($result, $arr[$index]);
		
	}

	$index += 1;
	
	return insertNumb($arr , $n  , $result, $index);	
}



print_r(insertNumb($arr, $n));
