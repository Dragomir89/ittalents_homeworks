<?php


function recNumbers($counter = 1, $result = '') {
	
	
	if ($counter == 10) {
		return 9;
	} 
	
	
	$result .= $counter; 
	
	echo $result ,PHP_EOL;
	
	recNumbers($counter + 1, $result);
	
	
}


recNumbers();