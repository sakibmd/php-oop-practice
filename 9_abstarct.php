<?php 

abstract class Shape{
	protected $name;

	function getArea(){
		echo $this->area;
	}

	abstract function calculation();
	
}

class Traingel extends Shape{
	protected $height;
	protected $base;
	function __construct($height,$base){
		$this->height = $height;
		$this->base = $base ;
		$this->calculation();
	}
	function calculation(){
		$this->area = $this->base * $this->height;
	}
}

$t1= new Traingel(5,7);
$t1->getArea();


?>