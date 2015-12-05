<?php
require_once 'readline.php';

// Да се състави програма, която да отгатне колко е студено/топло по
// въведената температура t в градус Целзий.
// Температурните интервали са:
// под -20 ледено студено;
// между 0 и -20 - студено;
// между 15 и 0 - хладно;
// между 25 и 15 - топло;
// над 25 – горещо.
// Входни данни: цяло число от интервала [-100..100].


$temp = readline('Enter temperature:  ');


if ($temp < -100 || $temp > 100) {
	echo 'Invalid input';
	return ;
}

if ($temp <= -20) {
	echo 'Ledeno studeno';
}else if ($temp > -20 && $temp <= 0) {
	echo 'Studeno';
}else if ($temp > 0 && $temp <= 15){
	echo 'Hladno';
}else if ($temp > 15 && $temp <= 25){
	echo 'Toplo';
}else if ($temp > 25) {
	echo 'Goreshto';
}
