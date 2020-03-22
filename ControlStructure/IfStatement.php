<?php

$breakLine = "<br/>";

$comparison = 123;

if($comparison == 123){
	echo 'true equal comparison';
}else{
	echo 'false equal comparison';
}

echo $breakLine;

if($comparison === '123'){
	echo 'true identical comparison';
}else{
	echo 'false identical comparison';
}

echo $breakLine;

// != and <> works in the same way
if($comparison <> 123 ){
	echo 'true not equal comparison';
}else{
	echo 'false not equal comparison';
}

echo $breakLine;

if($comparison !== '123' ){
	echo 'true not identical comparison';
}else{
	echo 'false not identical comparison';
}

echo $breakLine;

if($comparison >= '123' ){
	echo 'true greater than comparison';
}else{
	echo 'false greater than comparison';
}

echo $breakLine;

echo ($comparison === 123) ? 'true ternary': 'false ternary';

echo $breakLine;

echo $comparison?:  'No value -> elvis operator';

echo $breakLine;

$comparison = null;

echo $comparison??  'null value -> null operator';

?>