<?php 
 
namespace CloudStorage;
//include "mail/mailer.php";


include "autoloder.php";



use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;
class Main{
	function __construct(){
		//$mailer = new Mail\Mailer;
		//$mailer = new \CloudStorage\Mail\Mailer;  //alternative way
		$mailer = new Mailer();  //alternative way || use deyar karone eita possible hoyeche
		$mailer->sendMail();


		$scanner = new Scanner();
		$scanner->scan();


		$jpeg = new Jpeg();
		echo $jpeg->getDimension();
	}
}


new Main();

 ?>