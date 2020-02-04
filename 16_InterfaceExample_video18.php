<?php  

class districtCollection{
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

}

$d1 = new districtCollection;
$d1->add('Sylhet');
$d1->add('Dhaka');
$d1->add('Rajshahi');

$_districts = $d1->getDistrict();
print_r($_districts);
echo "<br><br>";

print_r($d1->getDistrict());
echo "<br><br>";

foreach ($_districts as $district) {
	echo $district."<br>";
}






?>


