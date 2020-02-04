<?php  

class districtCollection implements IteratorAggregate{
	private $districts;

	function __construct(){
		$this->districts = array();
	}

	function add($district){
		array_push($this->districts, $district);
	}

	function getDistrict(){
		return $this->districts;
	}

	function getIterator(){
		return new ArrayIterator($this->districts);
	}
}

$d1 = new districtCollection;
$d1->add('Sylhet');
$d1->add('Dhaka');
$d1->add('Rajshahi');

foreach ($d1 as $district) {
	echo $district."<br>";
}



?>


