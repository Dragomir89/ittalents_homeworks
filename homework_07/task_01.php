<?php
// Задача 1:
// Да се състави програма, която сортира по метода на мехурчето
// предварително въведен двумерен масив с естествени числа.
// Сортирането да се извърши по редове/колони.
// Пример:
// 15; 16; 8; 1;
// 2; 3; 4; 7;
// 9; 11; 19; 6;
// Изход:
// 1; 2; 3; 4;
// 6; 7; 8; 9;
// 11; 15; 16; 19;



$arr = [
		[15,16,8,1],
		[2, 3, 4, 7],
		[9,11,19, 6]
];


function bubbleSort2DArray($arr) {
	
	function transformArray($arr) {
	
		$len = count($arr);
		$result = [];
		for ($i = 0; $i < $len; $i++) {
			$len1 = count($arr[$i]);
			for ($j = 0; $j < $len1; $j++) {
				array_push($result, $arr[$i][$j]);
			}
		}
		return $result;
	}
	
	function bubbleSort($arr) {
	
		$len = count($arr);
	
		for ($i = 0; $i < $len; $i++) {
	
			for ($j = 0; $j < $len - 1 - $i; $j++) {
	
				if ($arr[$j] > $arr[$j + 1]) {
						
					$temp = $arr[$j];
						
					$arr[$j] = $arr[$j + 1];
						
					$arr[$j + 1] = $temp;
						
				}
	
			}
	
		}
		return $arr;
	}
	
	function create2DArray($arr) {
		$arr2 = [];
		$len = count($arr);
		$arr3 = [];
		$counter = 0;
	
		for ($i = 0; $i < $len; $i++) {
	
	
			$arr3[$counter] = $arr[$i];
	
			$counter++;
	
	
			if (($i + 1) % 4 == 0) {
	
				array_push($arr2, $arr3);
					
				$arr3 = [];
				$counter = 0;
			}
	
		}
		return $arr2;
	}
	
	return  create2DArray(bubbleSort(transformArray($arr)));
}


print_r(bubbleSort2DArray($arr));








