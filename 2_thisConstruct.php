<?php 
 //class

class Human{   
	public $name;
	public $age;

	function __construct($personName,$personAge=0){
		$this->name = $personName;
		$this->age = $personAge;
	}

	function sayHy(){
		echo "Hello Everyone"."<br>";
		$this->sayName();
	}
	function sayName(){
		if($this->age)
			echo "My name is {$this->name} and I am {$this->age} years old<br>";
		else
			echo "My name is {$this->name} and I am not interested to share my age with you<br>";
	}
}

class Dog{
	function sayHy(){
		echo "woof"."<br>";
	}
}

class Cat{
	function sayHy(){
		echo "meow"."<br>";
	}
}



$h1 = new Human('Sakib','23');  //object 
$h1->sayHy();

$h1 = new Human('Rakib');  //object 
$h1->sayHy();



?>