<?php 

class Animal{
	public function eat(){
		echo "I am eating<br>";
	}
	public function run(){
		echo "I am running<br>";
	}
	public function sleep(){
		echo "I am sleeping<br>";
	}
	public function sayHi(){}

}

class Human extends Animal{
	public function sayHi(){
		echo "Hello Everyone<br>";
	}
}

class Cat extends Animal{
	public function sayHi(){
		echo "Meaw<br>";
	}
}



$h1 = new Human();
$h1->sayHi();
$h1->sleep();

$c1 = new Cat();
$c1->sayHi();


?>