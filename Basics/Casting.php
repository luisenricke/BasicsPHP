<?php

$breakLine = "<br/>";


$dynamic = "PHP is dynamic typing, the value depend of the context";
echo "content: " . $dynamic . " :: variable: ". gettype($dynamic) . $breakLine;

$dynamic = 0;
echo "content: " . $dynamic . " :: variable: ". gettype($dynamic) . $breakLine;

$dynamic = 0.5;
echo "content: " . $dynamic . " :: variable: ". gettype($dynamic) . $breakLine;

$dynamic = true;
echo "content: " . $dynamic . " :: variable: ". gettype($dynamic) . $breakLine;

$dynamic = ['a','b'];
echo "content: " . print_r($dynamic) . " :: variable: ". gettype($dynamic) . $breakLine;

$dynamic = 0.5;
$forceCast = (int) $dynamic;
echo "Force Casting -> content: " . $forceCast . " :: variable: ". gettype($forceCast) . $breakLine;

var_dump($forceCast);

echo $breakLine;

$dynamic = 0.5;
$forceCastByFunction = intval($dynamic);
echo "Force Casting by Function -> content: " . $forceCast . " :: variable: ". gettype($forceCast) . $breakLine;

?>