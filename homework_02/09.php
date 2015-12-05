<?php
// Да се прочетат 2 числа от клавиатурата А и В.
// Да се изведат всички числа от А до В на степен 2(разделени с
// 		запетая).Ако някое число е кратно на 3, да се изведе съобщение че
// 		числото се пропуска „skip 3“.Ако сумата от всички изведени числа (без
// 				пропуснатите) стане по-голяма от 200, да се прекрати извеждането.

require_once 'readline.php';


$a = readline('A = ');
$b = readline('B = ');

$sum = 0;

$result = '';

for ($i = $a; $i <= $b; $i++) {
	
	$currentNumb = pow($i, 2);
	
	if ($currentNumb % 3 == 0) {
		
		if ($i == $b) {
			$result .= 'skip ';
		}else {
			$result .= 'skip, ';
		}
	}else {
		$sum += $currentNumb;
		if ($sum >= 200) {
			echo "$result";
			return;
		}
		if ($i == $b) {
			$result .= $currentNumb;
		}else {
			$result .= $currentNumb .', ';
		}
	}
	
	
}

echo "$result";
