<?php

namespace OOP;

class NamespaceClass
{
	public $name;
	public $lastName;
	static $value = 'SimpleClass';

	function simpleFunction(){
		return "Calling simple function from OOP";
	}

	function run(){
		echo "trigger run instance: {$this->name} static: ". self::$value;

		$this->simpleFunction();

	}

}
?>