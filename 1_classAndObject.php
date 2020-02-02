<?php 
 //class

class Human{   
	public $name;
	function sayHy(){
		echo "Hello Everyone"."<br>";
	}
	function sayName(){
		echo "My name is {$this->name}"."<br>";
	}
}

/*class Human{   
	public $name;
	function sayHy(){
		echo "Salam"."<br>";
		$this->sayName();
	}
	function sayName(){
		echo "My name is {$this->name}";
	}
}*/

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

$h1 = new Human();  //object 
$d1 = new Dog();
$c1 = new Cat();


$h1->sayHy();
$h1->name = 'Sakib';
echo $h1->name;
echo "<br>";




/*$h1->name = 'Tamim';
$h1->sayHy(); //Hello Everyone
$h1->sayName(); //My name is Tamim
*/




$d1->sayHy();
$c1->sayHy();




?>