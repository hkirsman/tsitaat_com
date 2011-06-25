<?php

class supercache
{
	public static function write_file($domain, $request_uri, $content, $cache_dir="") {
    $a_path = explode("/", trim($domain.$request_uri,"/"));
    $total_path = $cache_dir;
    for($i=0;$i<count($a_path);$i++){
      $total_path .= utf8_decode($a_path[$i])."/";
      mkdir($total_path,0777 );
    }

    $myFile = $total_path."/index.html";
    $fh = fopen($myFile, 'w') or die("can't open file");
    fwrite($fh, $content);
    fclose($fh);
    
  }
}