<?php 

class Fund{
	private $fund;
	function __construct($doller=0){
		$this->fund = $doller;
	}
	function cashInFund($money){
		$this->fund+=$money;
	}
	function cashOutFund($money){
		$this->fund-=$money;
	}
	function getTotal(){
		echo $this->fund;
	}
}

$f1 = new Fund(100);  //value pathano constructor er upor depend kore
$f1-> cashInFund(20);
$f1-> cashOutFund(12);
$f1-> getTotal();




/*$f1 = new Fund(100);
$f1->fund = 75; // access kora  jabe na. Public hole only access kora jabe.
echo  $f1->getTotal();*/




?>