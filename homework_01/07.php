<?php



// Въведете 3 променливи от конзолата – час, сума пари, дали съм здрав
// – число със стойност да или не.
// Съставете програма, която взема решения на базата на тези данни по
// следния начин:
// - ако съм болен няма да излизам
// - ако имам пари ще си купя лекарства
// - ако нямам – ще стоя вкъщи и ще пия чай
// - ако съм здрав ще изляза на кино с приятели
// - ако имам по-малко от 10 лв ще отида на кафе
// Покажете резултата като съобщение в уеб страница


$time = readline('Enter time ' . PHP_EOL);
$money = readline('Enter money ' . PHP_EOL);
$isIll = readline('Enter true or false ' . PHP_EOL);

if ($isIll && $money > 10) {
	echo 'I will buy medicines' . PHP_EOL;
	echo 'I will stay home' . PHP_EOL;
}else if ($isIll && $money < 10){
	echo 'I will drink tee' . PHP_EOL;
	echo 'I will stay home' . PHP_EOL;
}else if ( !$isIll && $money < 10){
	echo "I will go to cafe";
}else {
	echo "I will go to cinema";
}