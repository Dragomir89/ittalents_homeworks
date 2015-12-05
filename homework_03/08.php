<?php
// Напишете програма, която намира и извежда най-дългата редица от
// еднакви поредни елементи в даден масив.




$arr = [2,1,1,2,3,3,3,3,3,3,2,2,2,1];

$counter = 1;
$maxLength = 0;
$num = $arr[0];

$len = count($arr);

for ($i = 1; $i < $len; $i++) {
	
	if ($arr[$i] == $arr[$i - 1]){
	 		$counter++;
	 	}
	 	else{
	 		if ($counter >= $maxLength){
	 			$maxLength = $counter;
	 			$num = $arr[$i - 1];
	 			$counter = 1;
	 		}
	 	}
}

 if ($counter >= $maxLength){
	$maxLength = $counter;
	$num = $arr[$len - 1];
	$counter = 1;
}

	 
	 
$result = '';	 
	 


for ($i = 0; $i < $maxLength; $i++) {
	$result .= $num . ' ';
}

echo $result;

