<?php 
//vvi vvi vvi vvi vvi
class One{
	static function echoName(){
		//echo self::getName();	   //earth     (early binding)
		echo static::getName();    //earth from  two (late binding)
	}
	static function getName(){
		return "Earth<br>";
	}
}
class Two extends One{
	static function getName(){
		echo "Earth from Two<br>";
	}
} 

//Two::getName();

Two::echoName();  //self thakar karone tar class er function er value print korche. Er solve holo self er poriborte static. --static::getname()-- self er jonno case = Early binding && static er jonno case = late binding;


?>