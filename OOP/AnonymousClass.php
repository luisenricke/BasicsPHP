<?php

$anonymous = new class(100){

	public $value;

	public function __construct($value){
		$this->value = $value;
	}

	public function simple(){
		echo "Anonymous class with value: {$this->value}";
	}
};

$anonymous->simple();

?>