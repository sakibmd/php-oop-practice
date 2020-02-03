<?php 
class Bangladesh{
	const city = "Sylhet<br>";
	//protected const city = "Sylhet<br>";
	function sayHi(){
		echo "I live in ".self::city;
		echo "I live in ".$this::city;
	}
	function student(){
		echo "I am a student<br>";
	}
}

class Maths{
	function subject(){
		echo "My fev subject is Chemistry<br>";
	}
}


/*$BD = new Bangladesh();
echo $BD::city;
echo Bangladesh::city;
echo $BD->sayHi();
//echo Bangladesh::sayHi();  //eita diye this access kora jay na
echo Bangladesh::student();
echo Maths::subject();*/



//for protected const
$Ban = new Bangladesh();
$Ban->sayHi();
Bangladesh::student();
Maths::subject();


?>