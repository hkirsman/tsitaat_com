<?php

class navi
{
	public static function get_page_navi($arr)
	{
		global $smarty_q, $config_q,$context;
		$baseurl = $arr["baseurl"];
		$max_items = $arr["max_items"];
		$current_page = navi::get_current_page();
    if ($current_page==1) {
      $previous_page = false;
    } else {
      $previous_page = $current_page-1;
    }
		$max_pages = ceil($max_items/$config_q["quotes_on_page"]);
    if ($current_page==$max_pages) {
      $next_page = false;
    } else {
      $next_page = $current_page+1;
    }
		$start = $current_page-5;
		$end = $current_page+5;
		$pages = array();
		$k = 1;
		for ($i=$start;$i<$end;$i++)
		{
			if($i>0 && $i<=$max_pages)
			{
        if($k==1 && $previous_page) {
          $pages[$k] = array(
            "previous_page" => true,
            "caption" => $context["labels"]["previous_page"],
            "index" => $k,
            "link" => $baseurl."/".$context["labels"]["page_clean"].$previous_page,
          );
          $k++;
        }
				$pages[$k] = array(
					"caption" => $i,
					"index" => $k,
					"link" => $baseurl."/".$context["labels"]["page_clean"].$i,
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
        if( ($i+1==$end || $i==$max_pages) && $next_page ) {
          $pages[$k] = array(
            "next_page" => true,
            "caption" => $context["labels"]["next_page"],
            "index" => $k,
            "link" => $baseurl."/".$context["labels"]["page_clean"].$next_page,
          );
        }
				
			}
		}
		if (count($pages)>1)
		{
			return $pages;
		}
		else
		{
			return false;
		}
	}
	
	// this maby should just regular match url with "/^page([0-9]*)$/" . dno
	public static function get_current_page()
	{
		global $a_path,$context;
		$section = detect_section::check();

		if ($section == "frontpage")
		{
			$current_page = 1;
			if (preg_match ("/^".$context["labels"]["page_clean"]."([0-9]+)$/", $a_path[0], $mt))
			{
				$current_page = $mt[1];
			}
		}
		else
		{
			if ( $section == "latest-quotes" || $section == "latest-quotes-%page%" )
			{
				if (preg_match ("/^".$context["labels"]["page_clean"]."([0-9]+)$/", $a_path[1], $mt))
				{
					$current_page = $mt[1];
				}
				else
				{
					$current_page = 1;
				}
			}
			else if ($section == "quotes-authors-%author%" || $section == "quotes-authors-%author%-%page%" || $section == "quotes-tags-%tag%" || $section == "quotes-tags-%tag%-%page%")
			{
				if (preg_match ("/^".$context["labels"]["page_clean"]."([0-9]+)$/", $a_path[3], $mt))
				{
					$current_page = $mt[1];
				}
				else
				{
					$current_page = 1;
				}
			}
		}
		return $current_page;
	}
}