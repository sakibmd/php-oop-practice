<?php 

namespace CloudStorage;
//include "mail/mailer.php";
 
spl_autoload_register(function($className){


	/*
	// check autoload connected or not
	echo $className;
	die;
	*/

	$path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";
	$path = str_replace("\\", "/", $path);  //backSlash ke forword slash e convert
	include_once($path);
	
});



use \CloudStorage\Mail\Mailer as M;
class Main{
	function __construct(){
		//$mailer = new Mail\Mailer;
		//$mailer = new \CloudStorage\Mail\Mailer;  //alternative way
		$mailer = new M;  //alternative way || use deyar karone eita possible hoyeche
		$mailer->sendMail();
	}
}


new Main();

 ?>