<?php 
namespace Astronomy;
include "planet.php";
include "earth.php";
$planet =new  \Astronomy\Planets\Earth(); //qualified
$planet =new  Planets\Earth();  //unqualified
$planet->getName();
$planet =new  \Astronomy\Planets\Planet();
$planet->getName();

 ?>