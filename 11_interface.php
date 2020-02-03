<?php 

interface BaseAnimal{
	function isAlive();
	function canEat();
	function breed();
}

class Animal implements BaseAnimal{
	function isAlive(){

	}
	function canEat(){

	}
	function breed(){

	}
}

interface BaseHuman extends BaseAnimal{
	function canTalk();
}
class Human implements BaseHuman{
	function isAlive(){

	}
	function canEat(){

	}
	function breed(){

	}
	function canTalk(){

	}
}


$h1 = new Human();
//echo $h1 instanceof Animal;
//echo $h1 instanceof BaseAnimal;
echo $h1 instanceof BaseHuman;

?>