<?php 


//different file theke access


function autoload($name){
	include strtolower("{$name}.php");
}
spl_autoload_register('autoload');

(new Spaceship)->launch();
(new Color)->myFav();
(new Bike)->myFav();

?>