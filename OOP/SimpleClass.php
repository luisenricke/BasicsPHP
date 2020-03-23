<?php
/**
 * This is a simple Class
 */
class SimpleClass
{
	public $name;
	public $lastName;
	static $value = 'SimpleClass';

	function simpleFunction(){
		echo "Calling simple function";
	}

	function run(){
		echo "trigger run instance: {$this->name} static: ". self::$value;

		$this->simpleFunction();

	}

}


?>