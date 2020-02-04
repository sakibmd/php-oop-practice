<?php 


class Color{
	public $color;
	function __construct($color){
		$this->color = $color;
	}

	function setColor($color){
		$this->color = $color;
	}
}


class FavColor{
	public $data;
	public $color;
	function __construct($data,$color){
		$this->data = $data;
		$this->color = new Color($color);
	}

	function updateColor($color){
		$this->color->setColor($color);
	}

	function __clone(){   // ei magic method use er karone different data show kortese
		$this->color = clone $this->color;
	}
}

$obj1 = new FavColor('Some Text','red');
print_r($obj1);
echo "<br>";
$obj2 =clone $obj1;
print_r($obj2);
echo "<br>";
echo "<br>";


$obj2->updateColor('green');
print_r($obj1);
echo "<br>";
print_r($obj2);
echo "<br>";
?>