<?php
$arr = [
		[1, 2, 3, 4, 5],
		[6, 7, 8, 9, 10],
		[11,12,13,14,15]
];


function binarySearch($arr, $needle, $left, $right) {

	$middle = (int)(($left + $right) / 2);


	if ($left > $right) {
		return -1;
	}


	if ($arr[$middle] == $needle) {
		return $middle;
	}

	if ($arr[$middle] < $needle) {
		
		return binarySearch($arr, $needle, $middle + 1, $right);

	}elseif ($arr[$middle] > $needle){
		
		return binarySearch($arr, $needle, $left, $middle - 1);

	}else{
		return $middle;
	}

}


function array2DBunarysearch($arr2D, $needle) {

	$len = count($arr2D);
	
	$currentMin;
	
	
	for ($i = 0; $i < $len; $i++) {
	
		$currentMin = $arr2D[$i][0];
		
		if ($currentMin > $needle) {
			continue;
		}
		
		$j = binarySearch($arr2D[$i], $needle, 0, count($arr2D[$i]) - 1);
		
		if ($j != -1) {
			return $i . ' ' . $j;
		}
	}	
}


var_dump(array2DBunarysearch($arr, 10));
