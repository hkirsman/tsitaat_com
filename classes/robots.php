<?php

class robots
{
	private static function init()
	{
		$robotstxt = "User-Agent: *\n";
		return $robotstxt;
	}
	
	public static function generate($filename="robots.txt")
	{
		$robotstxt = robots::init();
		$robotstxt .= robots::_generate_authors();
		$robotstxt .= robots::_generate_tags();
		$myFile = $filename;
		$fh = fopen($myFile, 'w') or die("can't open file");
		$stringData = $robotstxt;
		fwrite($fh, $stringData);
		fclose($fh);
	}
	
	private static function _generate_authors()
	{
		$authors = author::get_authors();
		$current_lastname_firstchar = $robotstxt = "";
		foreach($authors as $key=>$var)
		{
			$robotstxt .= "Allow: /"._("quotes")."/"._("authors")."/".$var["url_friendly_author_name"]."\n";
		}
		$author_index = author::get_author_index();
		foreach($author_index as $key=>$var)
		{
			$robotstxt .= "Disallow: /"._("quotes")."/"._("authors")."/".$var["char"]."/\n";
		}
		return $robotstxt;
	}
	
	private static function _generate_tags()
	{
		$tags = tag::get_tags();
		$robotstxt = "";
		foreach($tags as $key=>$var)
		{
			if(strlen($var["tag_for_url"])>0)
			{
				$robotstxt .= "Allow: /"._("quotes")."/"._("tags")."/".$var["tag_for_url"]."\n";
			}
		}
	
		$tags_index = tag::get_tag_index();
		foreach($tags_index as $key=>$var)
		{
			$robotstxt .= "Disallow: /"._("quotes")."/"._("tags")."/".$var."/\n";
		}
		return $robotstxt;
	}
	
	function _generate_pages()
	{
		global $config_q;
		$cq = new quote();
		$page_count = ceil($cq->get_quotes_count()/$config_q["quotes_on_page"])+1; // just in case deny page that does not exist... or does it?
		for($i=1;$i<$page_count;$i++)
		{
			$this->robotstxt .= "Disallow: /l$i/\n";
		}
	}
	
	function _generate_pages_temp_without_slash()
	{
		global $config_q;
		$cq = new quote();
		$page_count = ceil($cq->get_quotes_count()/$config_q["quotes_on_page"])+1; // just in case deny page that does not exist... or does it?
		for($i=1;$i<$page_count;$i++)
		{
			$this->robotstxt .= "Disallow: /l$i\n";
		}
	}
	
	function _generate_users()
	{
		$cq = new user_q();
		$users = $cq -> get_all_users();
		foreach($users as $key=>$var)
		{
			$this->robotstxt .= "Disallow: /".$var["username"]."/\n";
		}
	}
	
}

?>