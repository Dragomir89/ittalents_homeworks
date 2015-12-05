<?php


for ($i = 100; $i <= 987; $i++) {
	
	$x = $i / 100;
	$x = (int)$x;
	
	$y = $i / 10;
	$y = (int)$y;
	$y %= 10; 
	
	$z = $i % 10;
	
	if ($x != $y && $x != $z && $z != $y ) {
		echo "$x $y $z " . PHP_EOL;
	}
	
	
}


