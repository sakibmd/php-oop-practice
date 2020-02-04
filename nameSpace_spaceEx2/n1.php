<?php 
namespace Project;
include "c1.php";
include "c2.php";

use \Project\Motorcycles\Bike as Hornet; //alising 
  
$b = new Bike();
$b->getName();

$h = new Hornet();
$h->getName();

 ?>