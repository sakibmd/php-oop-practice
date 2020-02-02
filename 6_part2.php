<?php 

class Animal{

	protected $name;
	public function __construct($name=0){
		$this->name = $name;
	}

	public function eat(){
		echo "{$this->name} is eating<br>";
	}
	public function run(){
		echo "{$this->name} is running<br>";
	}
	public function sleep(){
		echo "{$this->name} is sleeping<br>";
	}
	public function sayHi(){}

	protected function addTitle($title){
		$this->name = $title . " " . $this->name;
	}

}

class Human extends Animal{
	public function sayHi(){
		$this->addTitle('Mr.');
		echo "{$this->name} says Hello<br>";
	}
}

class Cat extends Animal{
	public function sayHi(){
		echo "{$this->name} says Meaw<br>";
	}
}


$h1 = new Human('Rasel');
$h1->sayHi();
$h1->run();

$c1 = new Cat('Tom');
$c1->run();


?>