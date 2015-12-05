<?php
// Задача 23:
// Да се състави програма, която чрез цикъл while извежда
// таблицата за умножение, но без повторение.
// Т.е. ако е изведено 4*5 не се извежда 5*4.



$count_01 = 1;
$count_02 = 1; 


while ($count_01 != 10) {
	
	
	while ($count_02 != 10) {
		
		$result = $count_01 * $count_02;
		
		echo "$count_01 * $count_02 = $result";
		
		$count_02++;
		
		echo PHP_EOL;
	}
	
	
	$count_01++;
	
	$count_02 = $count_01;
}