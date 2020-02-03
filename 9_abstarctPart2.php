<?php 

abstract class Shape{
	abstract function getArea();
	abstract function getCalculate();	
}

class Traingel extends Shape{
	protected $height;
	protected $base;
	function __construct($height,$base){
		$this->height = $height;
		$this->base = $base ;
		$this->getCalculate();
	}
	function getCalculate(){
		$this->area = $this->base * $this->height;
	}

	function getArea(){
		echo "The area of the Traingel is : ".$this->area . " ";
		echo "( Here, Height = {$this->height} and Base = {$this->base})<br>";
	}
}


class Formula extends Shape{ 
	protected $a;
	protected $b;
	 public function __construct($a, $b){
	 	$this->a = $a;
	 	$this->b = $b;
	 	$this->getCalculate();
	 }
	 function getCalculate(){
	 	$this->ans = pow($this->a, 2) + (2*$this->a*$this->b) + pow($this->b, 2) ;
	 }

	 function getArea(){
		echo "The Result is  : ".$this->ans . " ";
		echo "( Here, A = {$this->a} and B = {$this->b})<br>";
	}
}



$t1= new Traingel(5,7);
$t1->getArea();

$formula = new Formula(2,2);
$formula->getArea();


?>