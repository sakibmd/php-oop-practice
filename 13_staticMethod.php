<?php  

class A{
	protected static $name;
	static function sayHi(){
		self::$name = 'Sakib<br>';
		echo "Say from A<br>";
	}
}

class B extends A{
	static function sayHi(){
		parent::sayHi();
		echo parent::$name;
		echo "Say from B<br>";
	}
}

B::sayHi();

 ?>