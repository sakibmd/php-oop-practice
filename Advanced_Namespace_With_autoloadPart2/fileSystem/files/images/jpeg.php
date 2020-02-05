<?php 

namespace CloudStorage\FileSystem\Files\Images;
use CloudStorage\FileSystem\Files\Contracts\ImageContract;  //ImageContract = page
use CloudStorage\Mail\Mailer; 
use CloudStorage\FileSystem\Scanner; 
class Jpeg implements ImageContract{   //here, ImageContract = interface access
	function getDimension(){
		(new Mailer)->sendMail();
		(new Scanner)->scan();
		return "100x100";
	}
}
 
 ?>