<?php


// https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php
// https://www.php.net/manual/en/regexp.reference.meta.php

$message = 'Hi, Luis VillaloboS';
$pattern = '/(Hi|Hello)/i';


echo preg_match($pattern, $message);

echo "<br/>";

$message = 'The win numbers are 100, 125, 225, 912';
$pattern = '/[0-9]+/';
echo preg_match_all($pattern, $message, $matches);

echo "<br/>";

print_r($matches);

echo "<br/>";

$message = 'Just * print / alphanumeric _ symbols';
$pattern = '/\w/';
echo preg_match_all($pattern, $message, $matches);

echo "<br/>";

print_r($matches);

?>