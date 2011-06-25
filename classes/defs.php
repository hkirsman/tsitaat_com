<?php

function arr($arr,$die=false,$see_html=false)
{
        echo '<hr/>';
        $tmp = '';
        ob_start();
        print_r($arr);
        $tmp = ob_get_contents();
        ob_end_clean();
        echo '<pre style="text-align: left;">';
        echo $see_html?htmlspecialchars($tmp):$tmp;
        echo '</pre>';
        echo '<hr/>';
        if ($die)
        {
                die();
        }
        return $arr;
}

function htmlspecialchars2($str)
{
	switch ($str)
	{
		case "ä":
			return "%E4";
			break;
		case "õ":
			return "%F5";
			break;
		case "ü":
			return "%FC";
		default:
			return $str;
			break;
	
	}
}

function q($s_query)
{
	global $link, $config_q;
	if ($config_q["debug"])
	{
		global $dbg;
		if (stripos($s_query, "UPDATE") === false &&
			stripos($s_query, "INSERT") === false &&
			stripos($s_query, "TRUNCATE") === false &&
			stripos($s_query, "DELETE") === false
			)
		{
			$r = mysqli_query ($link, "EXPLAIN  " . $s_query);
			$row = mysqli_fetch_array($r, MYSQL_ASSOC);
			$dbg["db"][] = $row;
		}
	$i_start = microtime(1)*1000;
	}
	$return = mysqli_query ($link, $s_query);
	if ($config_q["debug"])
	{
		$dbg["db"][count($dbg["db"])-1]["exec_time"] = microtime(1)*1000-$i_start . " milliseconds";
		$dbg["db"][count($dbg["db"])-1]["query"] = $s_query;
	}
	return $return;
}


function get_current_page()
{
	global $a_path;
	if ($_SERVER['REQUEST_URI'] == "/")
	{
		//$smarty_q->assign ("page_nr", 1 );
		$current_page = 1;
	}
	else if (preg_match ("/^l([0-9]*)$/", $a_path[0], $mt))
	{
		$current_page = $mt[1];
	}
	else if ($_GET["sid"])
	{
		$current_page = 1;
	}
	else
	{
		$current_page = 1;
	}
	return $current_page;
}

function get_page_nav()
{
	global $smarty_q,$config_q;
	$current_page = get_current_page();
	$quotes_count = $smarty_q->get_template_vars("quotes_count");
	$max_pages = floor($quotes_count/$config_q["quotes_on_page"]);
	$start = $current_page-10;
	$end = $current_page+10;
	$pages = array();
	$k = 1;
	for ($i=$start;$i<$end;$i++)
	{
		if($i>0 && $i<=$max_pages)
		{
			$pages[$k] = array(
				"caption" => $i,
				"index" => $k
			);
			if ($i==$current_page)
			{
				$pages[$k]["selected"] = true;
			}
			else
			{
				$pages[$k]["selected"] = false;
			}
			$k++;
		}
		
	}
	return $pages;
}

function br2nl($string){
  $return=eregi_replace('<br[[:space:]]*/?'.
    '[[:space:]]*>',chr(13).chr(10),$string);
  return $return;
}

/* 
* This function starts out with several checks in an attempt to save time. 
*   1.  The shorter string is always used as the "right-hand" string (as the size of the array is based on its length).  
*   2.  If the left string is empty, the length of the right is returned. 
*   3.  If the right string is empty, the length of the left is returned. 
*   4.  If the strings are equal, a zero-distance is returned. 
*   5.  If the left string is contained within the right string, the difference in length is returned. 
*   6.  If the right string is contained within the left string, the difference in length is returned. 
* If none of the above conditions were met, the Levenshtein algorithm is used. 
*/ 
function LevenshteinDistance($s1, $s2) 
{ 
  $sLeft = (strlen($s1) > strlen($s2)) ? $s1 : $s2; 
  $sRight = (strlen($s1) > strlen($s2)) ? $s2 : $s1; 
  $nLeftLength = strlen($sLeft); 
  $nRightLength = strlen($sRight); 
  if ($nLeftLength == 0) 
    return $nRightLength; 
  else if ($nRightLength == 0) 
    return $nLeftLength; 
  else if ($sLeft === $sRight) 
    return 0; 
  else if (($nLeftLength < $nRightLength) && (strpos($sRight, $sLeft) !== FALSE)) 
    return $nRightLength - $nLeftLength; 
  else if (($nRightLength < $nLeftLength) && (strpos($sLeft, $sRight) !== FALSE)) 
    return $nLeftLength - $nRightLength; 
  else { 
    $nsDistance = range(1, $nRightLength + 1); 
    for ($nLeftPos = 1; $nLeftPos <= $nLeftLength; ++$nLeftPos) 
    { 
      $cLeft = $sLeft[$nLeftPos - 1]; 
      $nDiagonal = $nLeftPos - 1; 
      $nsDistance[0] = $nLeftPos; 
      for ($nRightPos = 1; $nRightPos <= $nRightLength; ++$nRightPos) 
      { 
        $cRight = $sRight[$nRightPos - 1]; 
        $nCost = ($cRight == $cLeft) ? 0 : 1; 
        $nNewDiagonal = $nsDistance[$nRightPos]; 
        $nsDistance[$nRightPos] = 
          min($nsDistance[$nRightPos] + 1, 
              $nsDistance[$nRightPos - 1] + 1, 
              $nDiagonal + $nCost); 
        $nDiagonal = $nNewDiagonal; 
      } 
    } 
    return $nsDistance[$nRightLength]; 
  } 
} 

function redirect_url($src)
{
	$sql1 = "
		SELECT
			id,
			target_url 
		FROM 
			a_tsitaatcom2_redirections
		WHERE
			original_url LIKE  '$src'
	";

	$r = q($sql1);
	if ($row = mysqli_fetch_array($r, MYSQL_ASSOC)) 
	{
		$sql2 = "
			UPDATE
				a_tsitaatcom2_redirections
			SET
				redirect_count = redirect_count+1
			WHERE
				a_tsitaatcom2_redirections.id = ".$row["id"].";
		";
		q($sql2);

		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$row["target_url"]);
		exit();
	}
	else
	{
		return false;
	}
}

function flush2() {   
		ob_flush();
    flush();
} 

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>