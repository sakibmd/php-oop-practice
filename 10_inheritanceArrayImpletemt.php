<?php 

class Shape{

}


class Shapes{
	protected $shape;
	public function __construct(){
		$this->shape = array();
	}

	function addShape(Shape $shape){
		array_push($this->shape, $shape);
	}
	function totalShape(){
		echo count($this->shape);
	}
}

class Rectangle extends Shape{

}
class Square extends Shape{
	
}

class Student{
	
}

$s1 = new Shapes();
$s1->addShape(new Rectangle());
$s1->addShape(new Square());
//$s1->addShape(new Student();
$s1->totalShape();









?>