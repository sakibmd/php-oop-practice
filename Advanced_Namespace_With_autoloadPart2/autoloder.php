<?php 
spl_autoload_register(function($className){
 

	/*
	// check autoload connected or not
	echo $className;
	die;
	*/


	$path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";
	//$path = str_replace("\\", "/", $path);  //backSlash ke forword slash e convert
	$path = str_replace("\\", DIRECTORY_SEPARATOR, $path);  //backSlash ke forword slash e convert
	include_once($path);
	
});

 ?>