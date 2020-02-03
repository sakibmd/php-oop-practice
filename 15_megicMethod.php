<?php 
class Student{
		private $name;
		private $age;
		private $class;

		function __construct($name='',$age = '', $class='' ){
			$this->name = $name;
			$this->age = $age;
			$this->class= $class;
		}

		public function __get($parameter){
			return $this->$parameter;
			//$this->$parameter;
		}

		function __set($parameter,$value){
			$this->$parameter = $value;
		}
}

$s1 = new Student('Rahim','25','10');
//$s1->name = "Kamal"; //set
echo $s1->name;


?>




