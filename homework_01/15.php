<?php
// Да се състави програма, която въвежда естествено число от интервала
// [0..24].
// Програма да изведе съответстващо съобщение съобразно въведения
// час.
// Периодите са:
// [18..4] - Добър вечер;
// [4..9] - Добро утро;
// [9..18] - Добър ден
// Пример: 10
// Изход: Добър ден
require_once 'readline.php';



$hour = readline('Enter hour');

if ($hour < 0 || $hour > 24) {
	echo 'Invalid input';
	return ;
}


if ($hour >= 4 && $hour <= 9) {
	echo 'Good morning';
}else if ($hour > 9 && $hour <= 18){
	echo 'Good day';
}else if ($hour > 18 || $hour < 4){
	echo 'Good evening';
}