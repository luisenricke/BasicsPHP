<?php

interface ComputerInterface{
	function process();
	function compute();
}

class Google implements ComputerInterface{

	function process(){
		echo "Google process";
	}

	function compute(){
		echo "Google compute";
	}
}

$instance = new Google();
$instance->process();

?>