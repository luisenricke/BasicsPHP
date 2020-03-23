<?php

$arrayIndexed = array('apple','google','facebook');
$arrayAssociative = array('name' => 'Luis', 'lastName' =>'Villalobos' );

foreach ($arrayIndexed as $element) {
	echo "element => $element <br/>";
}

echo "<br/>";

foreach ($arrayAssociative as $key => $value) {
	echo "element => key: $key value: $value <br/>";
}

echo "<br/>";

$multiArray = array('One' => array(1,2,3,4,5,6,7,8,9), 'Two' => array(10,12,13,14,15,16,17,18,19));

print_r($multiArray);

echo "<br/>";

echo "multiArray['One'][1] = ".$multiArray['One'][1];

echo "<br/> <br/>";

foreach ($multiArray as $key => $value) {
	for($loop = 0; $loop<sizeof($value); $loop++){
		echo "multiArray[{$key}][{$loop}] = {$multiArray[$key][$loop]} <br/>";
	}
}



?>