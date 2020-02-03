<?php 

class MathCalculator{
	static $num;
	function fibonacci($n){
		echo "Fibonacci series up to {$n}<br>";
	}
	static function factorial($n){
		echo self::$num = "You are now in Fibonacci Function<br>";
		echo "Factorial series up to {$n}<br>";
	}

	static function student($n){
		self::factorial(20);   //static function call
		echo "Students series up to {$n}<br>";
	}
}

$Math = new MathCalculator();  //obj
$Math->fibonacci(8);
$Math->factorial(6);




//object create charao access kora jay
MathCalculator::factorial(6); //static function access
MathCalculator::student(80); //static function access
echo MathCalculator::$num = 20; //static variable access
?>

