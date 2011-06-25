<?php

class image
{
	function image($arr = array())
	{
		global $config_q;

		if (file_exists($config_q["basepath"]."/cache/images/".$arr["file"]))
		{
			//readfile ($config_q["basepath"]."/cache/images/".$arr["file"]);
			die("image exists but ends up in script. apache is configured wrong");
		}
		else
		{
			header('Content-Type: image/jpeg');
		}
		
		if (strpos($arr["file"], "px.") > 0 )
		{
			$name_original = preg_replace("/_[0-9]*px/imsU", "", $arr["file"]);
			preg_match("/_([0-9]*)px/imsU", $arr["file"], $mt);
			list($width,$height)=getimagesize($config_q["basepath"]."/img/content/author_photos/".$name_original);
			$newwidth = $mt[1];
		}
		else
		{
			$name_original = $arr["file"];
			list($width,$height)=getimagesize($config_q["basepath"]."/img/content/author_photos/".$name_original);
			$newwidth = $width;
		}
		
		// Create an Image from it so we can do the resize
		$src = imagecreatefromjpeg($config_q["basepath"]."/img/content/author_photos/".$name_original);
		
		// Capture the original size of the uploaded image
		
		
		// For our purposes, I have resized the image to be
		// 600 pixels wide, and maintain the original aspect
		// ratio. This prevents the image from being "stretched"
		// or "squashed". If you prefer some max width other than
		// 600, simply change the $newwidth variable
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		
		// this line actually does the image resizing, copying from the original
		// image into the $tmp image
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
		// now write the resized image to disk. I have assumed that you want the
		// resized, uploaded image file to reside in the ./images subdirectory.
		$filename = $config_q["basepath"]."/cache/images/". $arr["file"];
		imagejpeg($tmp,$filename,100);
		imagejpeg($tmp,NULL,100);

		//readfile($filename);

		imagedestroy($src);
		imagedestroy($tmp); // NOTE: PHP will clean up the temp file it created when the request
		// has completed.
		die();
	}	

}

?>