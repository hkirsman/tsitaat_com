<?php

class sitemap
{
	public static function generate($filename="sitemap.xml")
	{
		$sitemapxml = self::header();
		$sitemapxml .= self::_generate_authors();
		$sitemapxml .= self::_generate_tags();
		$sitemapxml .= self::_generate_sources();
		$sitemapxml .= self::footer();

		$myFile = $filename;
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $sitemapxml);
		fclose($fh);
	}
	
	private static function header()
	{
		global $config_q;
		$out = "";
		$out .= '<?xml version="1.0" encoding="utf-8"?>'."\n";
		$out .= "<urlset\n";
		$out .= '      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"'."\n";
		$out .= '      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"'."\n";
		$out .= '      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9'."\n";
		$out .= '            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\n";
		$out .= '<!-- '.$config_q["baseurl"].' -->'."\n\n";
		$out .= "<url>\n";
		$out .= "  <loc>".$config_q["baseurl"]."</loc>\n";
		$out .= "  <priority>1.00</priority>\n";
		$out .= "  <lastmod>".date("Y-m-d\T07:28:24+00:00", time())."</lastmod>\n";
		$out .= "  <changefreq>daily</changefreq>\n";
		$out .= "</url>\n";
		//$this->count_links = 1;
		return $out;
	}
	
	private static function footer()
	{
		//$out = "<!-- link count: ".$this->count_links." -->";
		$out .= "</urlset>";
		return $out;
	}
	
	function _generate_authors()
	{
		global $config_q;
		$out = "";
		$authors = author::get_authors();
		$current_lastname_firstchar = $robotstxt = "";
		foreach($authors as $key=>$var)
		{
			$out .= "<url>"."\n";
			$out .= "  <loc>".$config_q["baseurl"]."/"._("quotes")."/"._("authors")."/".$var["url_friendly_author_name"]."</loc>\n";
			$out .= "  <priority>0.80</priority>\n";
			$out .= "  <lastmod>".date("Y-m-d\T07:28:24+00:00", time())."</lastmod>\n";
			$out .= "  <changefreq>daily</changefreq>\n";
			$out .= "</url>\n";
			//$this->count_links++;
		}
		return $out;
	}
	
	function _generate_tags()
	{
		global $config_q;
		$out = "";
		$ca = new tag();
		$tags = tag::get_tags();
		foreach($tags as $key=>$var)
		{
			$out .= "<url>"."\n";
			$out .= "  <loc>".$config_q["baseurl"]."/"._("quotes")."/"._("tags")."/".$var["tag_for_url"]."</loc>\n";
			$out .= "  <priority>0.80</priority>\n";
			$out .= "  <lastmod>".date("Y-m-d\T07:28:24+00:00", time())."</lastmod>\n";
			$out .= "  <changefreq>daily</changefreq>\n";
			$out .= "</url>\n";
		}
		return $out;
	}

	function _generate_sources()
	{
		global $config_q;
		$out = "";
		$ca = new tag();
		$tags = source::get_sources(array(
			"has_alias" => true,
		));
		foreach($tags as $key=>$var)
		{
			$out .= "<url>"."\n";
			$out .= "  <loc>".$config_q["baseurl"]."/"._("quotes")."/"._("sources")."/".$var["url_friendly_source_name_for_url"]."</loc>\n";
			$out .= "  <priority>0.80</priority>\n";
			$out .= "  <lastmod>".date("Y-m-d\T07:28:24+00:00", time())."</lastmod>\n";
			$out .= "  <changefreq>daily</changefreq>\n";
			$out .= "</url>\n";
		}
		return $out;
	}
	
}	
	
?>