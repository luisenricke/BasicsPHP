<?php

abstract class Person{
	public $name;
	public $bornYear;
	public $gender;

	function __construct(){
		$this->name = '';
		$this->bornYear = '';
		$this->gender = '';
	}

	// Specific constructor
	public static function withNameOnly($name){
		$instance = new self();
		$instance->name = $name;
		return $instance;
	}

	// Getter and Setter for all variables

	public function __set($attribute, $value){
		$this->$attribute = $value;
	}

	public function __get($attribute){
		return $this->$attribute;

	}

	function toString(){
		return $this->name. ' ' . $this->bornYear . ' ' . $this->gender;
	}

	abstract function overrideFunction();

	function __destruct(){
		echo "Cleaning object of Person";
	}
}

class Student extends Person{
	public $idStudent;


	// Getter and Stter for specific variable

	public function getIdStudent(){
		return $this->idStudent;
	}

	public function setIdStrudent($id){
		$this->idStudent = $id;
	}

	function toString(){
		return $this->name. ' ' . $this->bornYear . ' ' . $this->gender . ' ' . $this->idStudent;
	}

	function overrideFunction(){

	}
}

class Employee extends Person{
	public $idEmployee;

	function overrideFunction(){

	}
}


$instanceX = new Student();
$instanceZ->name = 'Luis';
$instanceX->bornYear = "A";
$instanceX->gender = "B";
$instanceX->setIdStrudent('123');
echo $instanceX->toString();

?>
