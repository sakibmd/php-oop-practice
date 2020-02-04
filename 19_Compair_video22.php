<?php 
class Planet{
	public $name;
	function __construct($name){
		$this->name = $name;
	}
}

$p1 = new Planet('Earth');
$p2 = new Planet('Earth');
$p3 = new Planet('Mars');
if($p1 === $p2){   //(===) value check kore type o check kore btw (==) just value check kore
	echo "Similar Planets<br>";
}
else{
	echo "Not Similar Planets<br>";
}



 ?>