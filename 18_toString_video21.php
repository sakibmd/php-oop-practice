<?php 

//object ke echo kora jay na. Sanitize kora jay.
//Echo korar jonno __toString magic method use korte hobe


class Color{
	public $color;
	function __construct($color){
		$this->color = $color;
	}

	function setColor($color){
		$this->color = $color;
	}
	function __toString(){  //magic method to echo an object
		return "I have choosen {$this->color}<br>";
	}
}

$c = new Color('red');
echo $c;
?>