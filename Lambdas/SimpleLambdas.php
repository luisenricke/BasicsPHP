<?php

$simpleVariable = function(){
	echo 'Calling function from variable';
};

function simpleFunction() {
	echo 'Calling variable from function';
}

$simpleVariable();

echo "<br/>";

$anonymusFunction = 'simpleFunction';
$anonymusFunction();




?>