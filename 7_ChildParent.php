<?php 

class parentClass{
	protected $name;
	public function __construct($name){
		$this->name = $name;
		$this->sayHi();		
	}
	public function sayHi(){
		echo "Hi from {$this->name}<br>";
	}
}

class childClass extends parentClass{
	public function sayHi(){
		parent::sayHi();	
		echo "Hello<br>";
	}
}

$cc = new childClass('Kamal');




?>