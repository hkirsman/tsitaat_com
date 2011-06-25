<?php

class desktop_wallpaper
{
	public static function generate($arr = array())
	{
		global $config_q;

		if (file_exists($config_q["basepath"]."/cache/wallpapers/".$arr["file"]))
		{
			//readfile ($config_q["basepath"]."/cache/images/".$arr["file"]);
			die("image exists but ends up in script. apache is configured wrong");
		}
		else
		{
			//header('Content-Type: image/jpeg');
		}
		/*
		if (strpos($arr["file"], "px.") > 0 )
		{
			$name_original = preg_replace("/_[0-9]*px/imsU", "", $arr["file"]);
			preg_match("/_([0-9]*)px/imsU", $arr["file"], $mt);
			list($width,$height)=getimagesize($config_q["basepath"]."/img/wallpapers/5.png");
			$newwidth = $mt[1];
		}
		else
		{*/
			$name_original = $arr["file"];
			list($width,$height)=getimagesize($config_q["basepath"]."/img/wallpapers/5.png");
			$newwidth = $width;
		//}
		
		// Create an Image from it so we can do the resize
		$src = imagecreatefrompng($config_q["basepath"]."/img/wallpapers/5.png");
		
		// Capture the original size of the uploaded image

		$black = imagecolorallocate($src, 0, 0, 0);
		$white = imagecolorallocate($src, 255, 255, 255);
		$red = imagecolorallocate($src, 152, 57, 9);
		// Path to our font file
		$font = 'fonts/georgia.ttf';

		// First we create our bounding box for the first text
		$quotation = wordwrap('Me mõtleme harva sellest, mis meil on, ent muretseme kogu aeg selle pärast, mida meil pole.', 40);

		$bbox = imagettfbbox(20, 0, $font, $quotation);
		$x = 360;
		$y = 300;
		imagettftext($src, 20, 0, $x, $y, $red, $font, $quotation);

		$width = $bbox[4] - $bbox[6]; // upper-right x minus upper-left x 
		
		
		$author = desktop_wallpaper::justify("- Arthur Schopenhauer", $width, JPAD_RIGHT);

		imagettftext($src, 20, 0, $x, $y+($bbox[0] - $bbox[6]), $red, $font, $author);
		
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

	public static function justify($input, $width, $mode = JPAD_AVERAGE)
	{
			// We want to have n characters wide of text per line.
			// Use PHP's wordwrap feature to give us a rough estimate.
			$justified = wordwrap($input, $width, "\n", false);
			$justified = explode("\n", $justified);
		 
			// Check each line is the required width. If not, pad
			// it with spaces between words.
			foreach($justified as $line)
			{
					if(strlen($line) != $width)
					{
							// Split by word, then glue together
							$words = explode(' ', $line);
							$diff  = $width - strlen($line);
						 
							while($diff > 0)
							{   
									// Process the word at this diff
									if     ($mode == JPAD_BOTH)  $words[$diff / count($words)] .= ' ';
									else if($mode == JPAD_AVERAGE) 
											$words[(($diff / count($words)) +
															($diff % count($words)) +
															(count($words) - ($diff % count($words))))
															/ 3] .= ' ';
									else if($mode == JPAD_LEFT)  $words[$diff % count($words)] .= ' ';
									else if($mode == JPAD_RIGHT) $words[count($words) - ($diff % count($words))] .= ' ';
								 
									// Next diff, please...
									$diff--;
							}
					}
					else
					{
							$words = explode(' ', $line);
					}
				 
					$final .= implode(' ',  $words) . "\n";
			}
		 
			// Return the final string
			return $final;
	}

}

?>