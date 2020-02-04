<?php 

class FavColor{
	public $data;
	function __construct($data){
		$this->data = $data;
	}

	function setData($data){
		$this->data = $data;
	}
}

$obj1 = new FavColor('Some Text<br>');
$obj2 =clone $obj1; //clone korar jonno alada alada data show kore
print_r($obj1);
print_r($obj2);


$obj2->data = "More Text<br>";
print_r($obj1);
print_r($obj2);

?>