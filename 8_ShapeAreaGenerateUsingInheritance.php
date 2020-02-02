<?php

class Shape{
	protected $name;
	protected $area;
	public function __construct($name){
		$this->name = $name;
		$this->calculateArea();
	}

	public function getArea(){
		echo "This {$this->name}'s area is {$this->area}<br>";
	}

	public function calculateArea(){

	}
}

class Triangle extends Shape{
	private $base;
	private $heigth;
	public function __construct($base, $heigth){
		$this->base = $base;
		$this->heigth = $heigth;
		parent::__construct("Triangle");
	}

	public function calculateArea(){
		$this->area = 0.5 * $this->heigth * $this->base;
	}
}

class Rectangle extends Shape{
	private $length;
	private $width;
	public function __construct($length, $width){
		$this->length = $length;
		$this->width = $width;
		parent::__construct("Rectangle");
	}

	public function calculateArea(){
		$this->area =  $this->length * $this->width;
	}
}

$t1 = new Triangle(5,5);
$t1->getArea();

$r1 = new Rectangle(5,5);
$r1->getArea();





?>
