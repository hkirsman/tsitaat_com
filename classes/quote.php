<?php

class quote extends author
{
	public static function get_quotes($arr = array())
	{
		global $config_q, $table_prefix, $user;
		$s_where = $from = $original_translations = $original_sources = "";
		
		if (!isset($arr["order_by"]))
		{
			$order_by = " created_time desc ";
		}
		else
		{
			$order_by = $arr["order_by"];
		}

		if (isset($arr["tag"]))
		{
			$s_where = "
				AND
					".$config_q["db"]["prefix"]."quotes.id = ".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"].".qid
				AND
					".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"].".tag LIKE '".addslashes($arr["tag"])."' ";

			$s_from = $config_q["db"]["prefix"]."_tag_index_".$config_q["locale"].",";
		}
		if (isset($arr["start"]) && isset($arr["length"]))
		{
			$limit = "LIMIT ".$arr["start"].",".$arr["length"];
		}
		if (isset($arr["current_page"]))
		{
			$limit = "LIMIT ".(($arr["current_page"]-1)*$config_q["quotes_on_page"]).",".$config_q["quotes_on_page"];
		}
		if (isset($arr["url_friendly_author_name"]))
		{
			$db_field_name_for_url_friendly_author_name = quote::get_db_field_name_for_url_friendly_author_name($arr["url_friendly_author_name"]);
			$s_where = " AND $db_field_name_for_url_friendly_author_name = \"" . $arr["url_friendly_author_name"] . "\" ";
		}
		if (isset($arr["users_favorite_quotes"]))
		{
			if (isset($arr["uid"]))
			{
				$r = q("
					SELECT
						quote_id
					FROM
						".$config_q["db"]["prefix"]."favorite_quotes
					WHERE
						user_id=".$arr["uid"]
				);
				
				if (mysqli_num_rows($r)>0)
				{
					$s_where = " AND (";
					while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
					{
						$s_where .= " ".$config_q["db"]["prefix"]."quotes.id = ".$row["quote_id"]." OR ";
					}
					$s_where = substr($s_where, 0, -3).")";
				}
				else
				{
					return false;
				}
			}
		}
		if (isset($arr["users_added_quotes"]))
		{
			if (isset($arr["uid"])) 
			{
				$s_where = "AND ".USERS_TABLE.".user_id = '".$arr["uid"]."' ";
			}
		}
		if(isset($arr["q_id"]))
		{
			$s_where = " AND ".$config_q["db"]["prefix"]."quotes.id = ".$arr["q_id"];
		}

		if (isset($arr["url_friendly_source_name"]))
		{
			$s_where = "AND ".$config_q["db"]["prefix"]."sources.url_friendly_name_".$config_q["locale"]." = ". "\"".urldecode($arr["url_friendly_source_name"])."\" ";
		}

		if ($config_q["locale"] == "et" )
		{
			$author_wiki_url_et = "author_wiki_url_".$config_q["locale"].", ";
		}

		if ($config_q["locale"] != "et" )
		{
			$original_sources = $config_q["db"]["prefix"]."sources.url_friendly_name_et as url_friendly_source_name_et,";
		}
		
		$q = "
			SELECT
				".$config_q["db"]["prefix"]."quotes.id as quotes_id,
				quote,
				rank,
				".$config_q["db"]["prefix"]."sources.name_et as source_title_et,
				".$config_q["db"]["prefix"]."sources.name_en as source_title_en,
				".$config_q["db"]["prefix"]."sources.name_en as source_title_fr,
				".$config_q["db"]["prefix"]."sources.name_en as source_title_hu,
				$original_sources
				".$config_q["db"]["prefix"]."sources.url_friendly_name_".$config_q["locale"]." as url_friendly_source_name_".$config_q["locale"].",
				".$config_q["db"]["prefix"]."sources.source_year_start as source_year_start,
				".$config_q["db"]["prefix"]."sources.source_year_start_circa as source_year_start_circa,
				".$config_q["db"]["prefix"]."sources.source_year_end as source_year_end,
				".$config_q["db"]["prefix"]."sources.source_year_end_circa as source_year_end_circa,
				".$config_q["db"]["prefix"]."sources.amazon_product_link_".$config_q["locale"]." as amazon_product_link,
				".$config_q["db"]["prefix"]."quotes.source_title_extra_prefix AS source_title_extra_prefix,
				".$config_q["db"]["prefix"]."quotes.source_title_extra_sufix AS source_title_extra_sufix,
				$original_translations
				author_id,
				author_firstname_".$config_q["locale"].",
				author_midname_".$config_q["locale"].",
				author_lastname_".$config_q["locale"].",
				author_profession_".$config_q["locale"].",
				author_name_freeform_".$config_q["locale"].",
				$author_wiki_url_et
				author_wiki_url_".$config_q["locale"].",
				url_friendly_author_name_".$config_q["locale"].",
				author_born,
				author_death,
				author_born_circa,
				author_death_circa,
				username,
				created_by,
				created_time,
				".$config_q["db"]["prefix"]."categories.name_".$config_q["locale"]." as category,
				".$config_q["db"]["prefix"]."quotes.tag as tag,
				".$config_q["db"]["prefix"]."favorite_quotes.quote_id as is_favorite
			FROM
			(
				$s_from
				".$config_q["db"]["prefix"]."quotes,
				".$config_q["db"]["prefix"]."quote_authors,
				".USERS_TABLE.",
				".$config_q["db"]["prefix"]."categories
			)
			LEFT JOIN
				".$config_q["db"]["prefix"]."favorite_quotes
			ON 
				".$config_q["db"]["prefix"]."quotes.id = ".$config_q["db"]["prefix"]."favorite_quotes.quote_id
			AND
				".$config_q["db"]["prefix"]."favorite_quotes.user_id = ".$user->data["user_id"]."
			LEFT JOIN
				".$config_q["db"]["prefix"]."sources
			ON
				".$config_q["db"]["prefix"]."quotes.source_id = ".$config_q["db"]["prefix"]."sources.id 
			WHERE
				".USERS_TABLE.".user_id = ".$config_q["db"]["prefix"]."quotes.created_by
			AND
				".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
			AND
				lang = '".$config_q["locale"]."'
			AND
				active = 1
			AND
				".$config_q["db"]["prefix"]."categories.id = ".$config_q["db"]["prefix"]."quotes.category
			$s_where
			ORDER BY
				$order_by
			$limit;
		";
		$r = q($q);
		
		$a_out = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
				$row = quote::parse_quote($row);
				$row = author::parse_author_image($row);
				$row = quote::parse_created_time($row);
				$row = author::parse_author_name($row);
				$row = author::parse_author_born_death($row);
				$row = author::parse_author_profession($row);
				$row = author::parse_url_friendly_author_name($row);
				$row = quote::parse_tags($row);
				$row = quote::parse_sources($row);
				//$row = $this->mk_urls($row);

				/*$row["source_year"] = $this->_source_year($row);
				$row["author_nicename_for_title_and_h1"] = $this->get_author_name2($row);
				$row["author_death_born"] = $this->get_author_death_born($row);
				$row["author_profession"] = $this->get_author_profession($row);
				$row["langs"] = $this->get_langs($row["q_id"]);
				$row["tags"] = $this->get_tags($row);
				//$row["source_year_start"] = $row["source_year_start"]<0 ? $row["source_year_start"]*(-1) : $row["source_year_start"];
				$source_title_google = preg_replace("/^.*\"(.*)\".*$/imsU", "\"\\1\"", $row["source_title"]);
				$source_title_google = str_replace("'", "", $source_title_google);
				$row["source_title_google"] = str_replace(" ", "+", $source_title_google);
				$row["source_title_user"] = preg_replace("/\"(.*)\"/imsU", "&#8220;\\1&#8221;", $row["source_title"]);
				*/
				$a_out[] = $row;
		}
		$a_out = quote::get_quote_count($a_out, $q); // get quote count for certain query, maby should not
														// be here but maby faster though, and more
														// convenient
		$a_out = quote::parse_author_photos($a_out);
		return $a_out;
	}

	// replace some symbols with cooler ones
	function parse_quote($row)
	{
		$row["quote"] = preg_replace("/(\S) - /imsU", "\\1 &#8212; ", $row["quote"]); // some weird hidden char that block finding dash
		$row["quote"] = str_replace(array("\r\n", "\n", " -", "[-]", "  "), array("<br />", "<br />", "&nbsp;&#8212;", "[&#8212;]", "&nbsp;&nbsp;"), $row["quote"]);
		$row["quote"] = preg_replace("/\"(.*)\"/imsU", "&#8220;\\1&#8221;", $row["quote"]);
		return $row;
	}
	
	

	function parse_created_time($row)
	{
		global $date;

		$s_date = $row["created_time"];
		$ts = date::convert_datetime($s_date);

		$time_between = (time()-$ts)/60;

		if ( $time_between<1 )
		{
			$out = _("minute ago");
		}
		else if ($time_between>=1 && $time_between<59	)
		{
			$out = round($time_between, 0) . " " . _("minutes ago");
		}
		else if ($time_between>=60 && $time_between<60*2 )
		{
			$out = round($time_between/60, 0) . " " . _("hours ago");
		}
		else if ($time_between>=60 && $time_between<60*24	)
		{
			$out = round($time_between/60, 0) . " " . _("hours ago");
		}
		else
		{
			$out = date("j.m.Y", $ts);	
		}
		
		$row["created_time"] = $out;
		return $row;
	}

	

	function parse_author_photos($arr)
	{
		if(count($arr)==0)
		{
			return $arr;
		}
	
		global $config_q;
		$out = array();
		$ids = "";
		
		foreach($arr as $key=>$var)
		{
			$ids .= "value = " . $var["author_id"]." or ";
		}
		$ids = trim($ids,"or ");
		$r = q("SELECT id, name,value FROM ".$config_q["db"]["prefix"]."images WHERE id in (select id from ".$config_q["db"]["prefix"]."images where ($ids) and name=\"author_id\")");
		$images = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$images[$row["id"]][$row["name"]] = $row["value"];
		}
		
		foreach($arr as $key=>$var)
		{	
			foreach($images as $key2 => $var2)
			{
				if ($var["author_id"] == $var2["author_id"])
				{
					$arr[$key]["author_img"] = $var2;
          $arr[$key]["author_img"]["nice_name_thumb"] = str_replace(".jpg", "_90px.jpg", $var2["nice_name"]);
					$arr[$key]["author_img"]["alt"] = $arr[$key]["author_name"];
          $thumbratio = 90/$var2["width"];
          $arr[$key]["author_img"]["height_thumb"] = round($var2["height"]*$thumbratio);
					//$arr[$key]["author_nicename1"] = $this->get_author_name2($arr[$key]);
				}
			}
			if (!isset($arr[$key]["author_nicename1"]))
			{
				//$arr[$key]["author_nicename1"] = $this->get_author_name1($arr[$key]);
			}
		}
		return $arr;
	}

	function parse_tags($arr)
	{
		$arr["tags_as_links"] = tag::format_tags_as_links($arr["tag"]);
		return $arr;
	}

  // returns quote source in a nice way for bc, ca, from-to, alose ads good quotemarks
  // ex. “The Rebel”, 1951
  function parse_sources($arr)
  {
    global $config_q;
    $arr["source_title_parsed"] = $arr["source_year_start_end_parsed"] = $source_year_start = $source_year_end = "";
		$arr["url_friendly_source_name"] = "";

    // name
    if ($config_q["locale"] == "et" )
		{
      $arr["source_title_parsed"] = $arr["source_title_et"];
			$arr["source_title_parsed2"] =  $arr["source_title_et"] . $arr["source_title_extra_sufix"];
      if ( strlen($arr["source_title_extra_prefix"])>0)
      {
        $arr["source_title_parsed2"] = $arr["source_title_extra_prefix"] . " " . $arr["source_title_parsed2"];
      }
    }
    else
    {
      if (strlen($arr["source_title_".$config_q["locale"]])>0)
      {
				$arr["source_title_parsed"] = $arr["source_title_".$config_q["locale"]];
        $arr["source_title_parsed2"] = $arr["source_title_".$config_q["locale"]] . $arr["source_title_extra_sufix"];
        if ( strlen($arr["source_title_extra_prefix"])>0)
        {
        $arr["source_title_parsed2"] = $arr["source_title_extra_prefix"] . " " . $arr["source_title_parsed2"];
        }
      }
    }

		// url
		if (strlen($arr["url_friendly_source_name_".$config_q["locale"]])>0)
		{
			$arr["url_friendly_source_name"] = $arr["url_friendly_source_name_".$config_q["locale"]];
			$arr["url_friendly_source_name_for_url"] = urlencode($arr["url_friendly_source_name_".$config_q["locale"]]);
		}

    // time
    {
      if (strlen($arr["source_year_start"])>0)
      {
        $source_year_start = $arr["source_year_start"];

        if ($source_year_start<0)
        {
           $source_year_start = ($source_year_start * (-1)) . " " . _("BC");
        }

        if ($arr["source_year_start_circa"])
        {
          $source_year_start = _("ca") . " " . $source_year_start;
        }

        $arr["source_year_start_end_parsed"] = $source_year_start;
      }

      if (strlen($arr["source_year_end"])>0)
      {
        $source_year_end = $arr["source_year_end"];

        if ($source_year_end<0)
        {
          $source_year_end = ($source_year_end * (-1)) . " " . _("BC");
        }

        if ($arr["source_year_end_circa"])
        {
          $source_year_end = _("ca") . " " . $source_year_end;
        }

        $arr["source_year_start_end_parsed"] .= " - ".$source_year_end;
      }
    }

    if (strlen($arr["source_title_parsed"])>0)
    {
      $arr["source_title_parsed"] = preg_replace("/\"(.*)\"/imsU", "“\\1”", $arr["source_title_parsed"]);
			$arr["source_title_parsed2"] = preg_replace("/\"(.*)\"/imsU", "“\\1”", $arr["source_title_parsed2"]); 
      $arr["source_parsed"] = $arr["source_title_parsed"];
			$arr["source_parsed2"] = $arr["source_title_parsed2"];

      if (strlen($arr["source_year_start_end_parsed"])>0)
      {
        $arr["source_parsed"] .= ", " . $arr["source_year_start_end_parsed"];
				$arr["source_parsed2"] .= ", " . $arr["source_year_start_end_parsed"];
      }
    }

    return $arr;
  }

	// selects correct db field according to current language and which is filled
	function get_db_field_name_for_url_friendly_author_name($url_friendly_author_name)
	{
		global $config_q;

		if ( $config_q["locale"] == "et" )
		{
			return "url_friendly_author_name_et";
		}
		else 
		{
			$q = "
			SELECT
				url_friendly_author_name_et,
				url_friendly_author_name_".$config_q["locale"]."
			FROM
			(
				".$config_q["db"]["prefix"]."quote_authors
			)
			WHERE
				url_friendly_author_name_".$config_q["locale"]." = '$url_friendly_author_name'
			";
			$r = q($q);
			$row = mysqli_fetch_array($r, MYSQL_ASSOC);
			if ( isset($row["url_friendly_author_name_".$config_q["locale"]]) )
			{
				return "url_friendly_author_name_".$config_q["locale"];
			}
			else
			{
				return "url_friendly_author_name_et";
			}
		}
	}

	function get_quote_count($a_out, $q)
	{
		$q_count = preg_replace("/SELECT(.*)FROM/msU", "SELECT COUNT(*) AS quotes_total_count FROM", $q);
		$q_count = preg_replace("/ORDER BY(.*)$/ms", "", $q_count);
		$r = q($q_count);
		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		foreach($a_out as $key => $var) {
			$a_out[$key]["quotes_total_count"] = $row["quotes_total_count"];
		}
		return $a_out;
	}

	function _source_year()
	{

	}

	function get_author_name2()
	{

	}

	function get_author_death_born()
	{

	}

	function get_author_profession()
	{

	}

	function get_langs()
	{

	}

	// q_id required quote id
	// tags required
	function set_tags($arr)
	{
		global $config_q;
		$arr["tags"] = trim($arr["tags"], " ,");
		$arr["tags"] = str_replace("  ", " ", $arr["tags"]);
		$arr["tags"] = strtolower($arr["tags"]);
		$q = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				tag = '".$arr["tags"]."'
			WHERE
				".$config_q["db"]["prefix"]."quotes.id = ".$arr["q_id"];
		q($q);
	}

	// q_id required quote id
	// tags required
	function get_tags($arr)
	{
		global $config_q;
		$q = "
			SELECT
				tag
			FROM
				".$config_q["db"]["prefix"]."quotes
			WHERE
				q_id =".$arr["q_id"];
		echo $q;
	}

	// q_id required quote id
	// category_id required
	function set_category($arr)
	{
		global $config_q;
		if(!isset($arr["q_id"]))
		{
			return false;
		}
		$arr["tags"] = strtolower($arr["tags"]);
		$q = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				category = '".$arr["category_id"]."'
			WHERE
				".$config_q["db"]["prefix"]."quotes.id = ".$arr["q_id"];
		q($q);
	}

	// q_id required quote id
	// category_id required
	function get_category($arr)
	{
		global $config_q;
		if(!isset($arr["q_id"]))
		{
			return false;
		}
		$q = "
			SELECT
				category
			FROM
				".$config_q["db"]["prefix"]."quotes
			WHERE
				q_id =".$arr["q_id"];
		$r = q($q);
		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		echo $row["category"];
	}

	public static function get_random_quote($arr = array())
	{
		global $config_q, $table_prefix, $user;
		$s_where = $original_translations = $original_sources = "";
		
		if (isset($arr["url_friendly_author_name"]))
		{
			$db_field_name_for_url_friendly_author_name = quote::get_db_field_name_for_url_friendly_author_name($arr["url_friendly_author_name"]);
			$s_where = " AND $db_field_name_for_url_friendly_author_name = \"" . $arr["url_friendly_author_name"] . "\" ";
		}
		if (isset($arr["users_favorite_quotes"]))
		{
			if (isset($arr["uid"]))
			{
				$r = q("
					SELECT
						quote_id
					FROM
						".$config_q["db"]["prefix"]."favorite_quotes
					WHERE
						user_id=".$arr["uid"]
				);
				
				if (mysqli_num_rows($r)>0)
				{
					$s_where = " AND (";
					while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
					{
						$s_where .= " ".$config_q["db"]["prefix"]."quotes.id = ".$row["quote_id"]." OR ";
					}
					$s_where = substr($s_where, 0, -3).")";
				}
				else
				{
					return false;
				}
			}
		}
		if (isset($arr["users_added_quotes"]))
		{
			if (isset($arr["uid"])) 
			{
				$s_where = "AND ".USERS_TABLE.".user_id = '".$arr["uid"]."' ";
			}
		}
		if(isset($arr["q_id"]))
		{
			$s_where = " AND ".$config_q["db"]["prefix"]."quotes.id = ".$arr["q_id"];
		}

		if (isset($arr["url_friendly_source_name"]))
		{
			$s_where = "AND ".$config_q["db"]["prefix"]."sources.url_friendly_name_".$config_q["locale"]." = ". "'".$arr["url_friendly_source_name"]."' ";
		}

		if ($config_q["locale"] != "et" )
		{
			$original_translations = "
			author_firstname_et,
			author_midname_et,
			author_lastname_et,
			author_profession_et,
			author_name_freeform_et,
			url_friendly_author_name_et,
			";
		}

		if ($config_q["locale"] != "et" )
		{
			$original_sources = $config_q["db"]["prefix"]."sources.url_friendly_name_et as url_friendly_source_name_et,";
		}
		
		$q = "
			SELECT
				".$config_q["db"]["prefix"]."quotes.id as id,
				".$config_q["db"]["prefix"]."quotes.q_id as q_id,
				quote,
				rank,
				".$config_q["db"]["prefix"]."quotes.source_title as source_title_original,
				".$config_q["db"]["prefix"]."sources.name_et as source_title,
        ".$config_q["db"]["prefix"]."sources.name_en as source_title_en,
        ".$config_q["db"]["prefix"]."sources.name_en as source_title_fr,
        ".$config_q["db"]["prefix"]."sources.name_en as source_title_hu,
				$original_sources
				".$config_q["db"]["prefix"]."sources.url_friendly_name_".$config_q["locale"]." as url_friendly_source_name_".$config_q["locale"].",
				".$config_q["db"]["prefix"]."sources.source_year_start as source_year_start,
				".$config_q["db"]["prefix"]."sources.source_year_start_circa as source_year_start_circa,
				".$config_q["db"]["prefix"]."sources.source_year_end as source_year_end,
        ".$config_q["db"]["prefix"]."sources.source_year_end_circa as source_year_end_circa,
				author_id,
				author_firstname_et,
				author_firstname_en,
				author_firstname_de,
				author_midname_et,
				author_midname_en,
				author_midname_de,
				author_lastname_et,
				author_lastname_en,
				author_lastname_de,
				author_profession_et,
				author_profession_en,
				author_profession_de,
				author_name_freeform_et,
				author_name_freeform_en,
				author_name_freeform_de,
				url_friendly_author_name_et,
				url_friendly_author_name_en,
				url_friendly_author_name_de,
				author_wiki_url_et,
				author_wiki_url_en,
				author_wiki_url_de,
				author_born,
				author_death,
				author_born_circa,
				author_death_circa,
				username,
				created_by,
				created_time,
				".$config_q["db"]["prefix"]."quotes.category as category_id,
				".$config_q["db"]["prefix"]."categories.name_".$config_q["locale"]." as category,
				tag,
				".$config_q["db"]["prefix"]."favorite_quotes.quote_id as is_favorite
			FROM
			(
				".$config_q["db"]["prefix"]."quotes,
				".$config_q["db"]["prefix"]."quote_authors,
				".USERS_TABLE.",
				".$config_q["db"]["prefix"]."categories
			)
			LEFT JOIN
				".$config_q["db"]["prefix"]."favorite_quotes
			ON 
				".$config_q["db"]["prefix"]."quotes.id = ".$config_q["db"]["prefix"]."favorite_quotes.quote_id
			AND
				".$config_q["db"]["prefix"]."favorite_quotes.user_id = ".$user->data["user_id"]."
			LEFT JOIN
				".$config_q["db"]["prefix"]."sources
			ON
				".$config_q["db"]["prefix"]."quotes.source_id = ".$config_q["db"]["prefix"]."sources.id 
			WHERE
				".USERS_TABLE.".user_id = ".$config_q["db"]["prefix"]."quotes.created_by
			AND
				".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
			AND
				lang = '".$config_q["locale"]."'
			AND
				active = 0
			AND
				".$config_q["db"]["prefix"]."categories.id = ".$config_q["db"]["prefix"]."quotes.category
			AND
				url_friendly_author_name_en is NULL
			ORDER BY created_time
			LIMIT 0, 1;
		";
		// AND 
		//a_tsitaatcom2_quote_authors.id = 167
		$r = q($q);

		$a_out = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			foreach($row as $key=>$var)
			{
				$row[$key] = str_replace('"', "&quot;", $var);
			}

			$row = quote::parse_quote($row);
			$row = author::parse_author_image($row);
			$row = quote::parse_created_time($row);
			$row = author::parse_author_name($row);
			$row = author::parse_author_born_death($row);
			$row = author::parse_author_profession($row);
			$row = author::parse_url_friendly_author_name($row);
			$row = quote::parse_tags($row);
			$row = quote::parse_sources($row);
			$a_out[] = $row;
		}
		return $a_out;
	}

	// not quite set random quote. it's part of get_random_quote() but it actually activates quote with current date and also sets some specific fields
	public static function set_random_quote($arr = array())
	{
		global $config_q;

		foreach($arr as $key=>$var)
		{
			$var = utf8_trim($var);
			$arr[$key] = br2nl($var);
			if(strlen($var)>0)
			{
				$arr[$key] = "'".$var."'";
			}
			else
			{
				$arr[$key] = "NULL";
			}
		}
		if ($arr["tag"]!="NULL") 
		{
			$arr["tag"] = strtolower($arr["tag"]);
		}

		// update quote table
		{
			$q = "
				UPDATE
					".$config_q["db"]["prefix"]."quotes
				SET
					quote = ".$arr["quote"].",
					category = ".$arr["category"].",
					tag = ".$arr["tag"].",
					created_time = '".date::get_current_time()."',
					active = 1
				WHERE
					".$config_q["db"]["prefix"]."quotes.id = ".$arr["id"]."
				LIMIT 1;";
				q($q);
		}

		// update author table
		{
			$q = "
				UPDATE
					".$config_q["db"]["prefix"]."quote_authors
				SET
					author_name_freeform_et = ".$arr["author_name_freeform_et"].",
					author_name_freeform_en = ".$arr["author_name_freeform_en"].",
					author_name_freeform_de = ".$arr["author_name_freeform_de"].",
					author_firstname_et = ".$arr["author_firstname_et"].",
					author_firstname_en = ".$arr["author_firstname_en"].",
					author_firstname_de = ".$arr["author_firstname_de"].",
					author_midname_et = ".$arr["author_midname_et"].",
					author_midname_en = ".$arr["author_midname_en"].",
					author_midname_de = ".$arr["author_midname_de"].",
					author_lastname_et = ".$arr["author_lastname_et"].",
					author_lastname_en = ".$arr["author_lastname_en"].",
					author_lastname_de = ".$arr["author_lastname_de"].",
					author_profession_et = ".$arr["author_profession_et"].",
					author_profession_en = ".$arr["author_profession_en"].",
					author_profession_de = ".$arr["author_profession_de"].",
					author_nationality = ".$arr["author_nationality"].",
					author_wiki_url_et =  ".$arr["author_wiki_url_et"].",
					author_wiki_url_en =  ".$arr["author_wiki_url_en"].",
					author_wiki_url_de =  ".$arr["author_wiki_url_de"].",
					url_friendly_author_name_en =  ".$arr["url_friendly_author_name_en"].",
					url_friendly_author_name_de =  ".$arr["url_friendly_author_name_de"]."
				WHERE
					".$config_q["db"]["prefix"]."quote_authors.id = ".$arr["author_id"]." LIMIT 1 ;
				";
				q($q);
		}
	}

	public static function find_similar_quotes()
	{
		global $config_q;
		$q = "
			SELECT
				".$config_q["db"]["prefix"]."quotes.id as quotes_id,
				quote
			FROM
			(
				".$config_q["db"]["prefix"]."quotes,
				".$config_q["db"]["prefix"]."quote_authors
			)
			WHERE
				".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
			AND
				lang = '".$config_q["locale"]."'
			AND author_id = 525
		";
		$r = q($q);
		$quotes = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$row["quote"] = utf8_trim($row["quote"]);
			$quotes[] = $row;
		}

		$quotes_length = count($quotes);
		for($i=0;$i<$quotes_length;$i++)
		{
			for($k=0;$k<$quotes_length;$k++)
			{
				if ($i!=$k)
				{
					$diff = @levenshtein($quotes[$i]["quote"], $quotes[$k]["quote"]);
					if ($diff!==-1)
					{
						$diff = similar_text($quotes[$i]["quote"],$quotes[$k]["quote"]);
						if (strlen($quotes[$k]["quote"])==$diff)
						{
							arr($diff);
							arr($quotes[$i]);
						}
					}
					else
					{
						if ($diff<30)
						{
							arr($diff);
							arr($quotes[$i]);
						}
					}


					
				}
			}
		}
	}

	public static function get_googlead01_position($arr)
	{
		global $config_q;
		$googlead01_position = 0;
		$max_items = $arr[0]["quotes_total_count"];
		$current_page = navi::get_current_page();
		$max_pages = ceil($max_items/$config_q["quotes_on_page"]);

		// if there is only 1 page of quotes
		if ($arr[0]["quotes_total_count"]<=$config_q["quotes_on_page"])
		{
			$items_on_page = $arr[0]["quotes_total_count"];
			if ($items_on_page>2)
			{
				$googlead01_position = rand(3,$items_on_page);
			}
			else
			{
				$googlead01_position = $items_on_page;
			}
		}
		elseif ($current_page < $max_pages)
		{
			$items_on_page = $config_q["quotes_on_page"];
			$googlead01_position = rand(3,$items_on_page);
		}
		else
		{
			$items_on_page = $max_items-(($current_page-1)*$config_q["quotes_on_page"]);
			if ($items_on_page>2)
			{
				$googlead01_position = rand(3,$items_on_page);
			}
			else
			{
				$googlead01_position = $items_on_page;
			}
		}
		return $googlead01_position - 1;
	}

	function check_if_can_vote($arr)
	{
		global $config_q;
		$q = "
			SELECT
				id
			FROM
				".$config_q["db"]["prefix"]."quote_votes_log
			WHERE
				quote_id = ".$arr["quote_id"]."
			AND
				ip = '".$arr["ip"]."'
		";
		$r = q($q);
		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		if ($row["id"])
		{
			echo _("You can only vote once for quotation!");
			return false;	
		}
		else
		{
			return true;
		}
	}
	
	public static function vote_for($arr)
	{
		if (!quote::check_if_can_vote($arr))
		{
			return false;
		}
		
		global $config_q;
		$q1 = "
			INSERT INTO
			".$config_q["db"]["prefix"]."quote_votes_log
			(
				quote_id,
				vote,
				user_id,
				ip,
				time
			)
			VALUES
			(
				'".$arr["quote_id"]."',
				1,
				'".$arr["user_id"]."',
				'".$arr["ip"]."',
				NOW()
			);
		";
		q($q1);
		$q2 = "
			SELECT
				rank
			FROM
				".$config_q["db"]["prefix"]."quotes
			WHERE
				id = ".$arr["quote_id"]
		;
		$r = q($q2);
		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		$current_rank = $row["rank"];
		$new_rank = $current_rank+1;
		$q3 = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				rank = ".$new_rank."
			WHERE
				id = ".$arr["quote_id"]
		;
		q($q3);
		return $new_rank;
	}
	
	public static function vote_against($arr)
	{
		if (!quote::check_if_can_vote($arr))
		{
			return false;
		}
		
		global $config_q;
		$q1 = "
			INSERT INTO
			".$config_q["db"]["prefix"]."quote_votes_log
			(
				quote_id,
				vote,
				user_id,
				ip,
				time
			)
			VALUES
			(
				'".$arr["quote_id"]."',
				-1,
				'".$arr["user_id"]."',
				'".$arr["ip"]."',
				NOW()
			);
		";arr($q1);
		//q($q1);
		$q2 = "
			SELECT
				rank
			FROM
				".$config_q["db"]["prefix"]."quotes
			WHERE
				id = ".$this->quote_id
		;
				arr($q2);
		die();
		$r = q($q2);
		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		$current_rank = $row["rank"];
		$new_rank = $current_rank-1;
		$q3 = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				rank = ".$new_rank."
			WHERE
				id = ".$this->quote_id
		;
		q($q3);
		//echo "Vastuhääl antud!";
	}

	public static function get_long_link_for_permalink($quote_id)
	{
		global $config_q;
		
		$q = "
			SELECT
				url_friendly_author_name_".$config_q["locale"]."
			FROM
			(
				".$config_q["db"]["prefix"]."quotes,
				".$config_q["db"]["prefix"]."quote_authors
			)
			WHERE
				".$config_q["db"]["prefix"]."quotes.author_id = ".$config_q["db"]["prefix"]."quote_authors.id
			AND
				".$config_q["db"]["prefix"]."quotes.id = $quote_id
		";
		$query = q($q);
		$row = mysqli_fetch_array($query, MYSQL_ASSOC);
		return $config_q["baseurl"]."/"._("quotes")."/"._("authors")."/".$row["url_friendly_author_name_".$config_q["locale"]]."/".$quote_id;
	}

	public static function add_to_waiting_list($arr)
	{
		global $user, $config_q;
		$q = "
			INSERT
			INTO
				".$config_q["db"]["prefix"]."quotes_waiting_approval
				(
					author_id,
					author_name,
					author_profession_et,
					author_born,
					author_death,
					quote,
					category,
					tag,
					source_title,
					source_year_start,
					created_by,
					date_inserted
				)
			VALUES
				(
					'".$arr["author_id"]."',
					".(strlen($arr["author_name"]) > 0 ? "'".$arr["author_name"]."'" : "NULL").",
					".(strlen($arr["author_profession_et"]) > 0 ? "'".$arr["author_profession_et"]."'" : "NULL").",
					".(strlen($arr["author_born"]) > 0 ? "'".$arr["author_born"]."'" : "NULL").",
					".(strlen($arr["author_death"]) > 0 ? "'".$arr["author_death"]."'" : "NULL").",
					'".$arr["quote"]."',
					'".$arr["category"]."',
					".(strlen($arr["tags"]) > 0 ? "'".$arr["tags"]."'" : "NULL").",
					".(strlen($arr["source_title"]) > 0 ? "'".$arr["source_title"]."'" : "NULL").",
					".(strlen($arr["source_year_start"]) > 0 ? "'".$arr["source_year_start"]."'" : "NULL").",
					'".$user->data["user_id"]."',
					NOW()
				);
		";
		q($q);
	}
	
	public static function get_from_waitinglist()
	{
		global $user, $config_q, $table_prefix;

		$q = "
			SELECT
				".$config_q["db"]["prefix"]."quotes_waiting_approval.id AS waiting_quote_id,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_id AS author_id,

				".$config_q["db"]["prefix"]."quote_authors.author_name_freeform_et AS author_name_freeform_et,
				".$config_q["db"]["prefix"]."quote_authors.author_lastname_et AS author_lastname_et,
				".$config_q["db"]["prefix"]."quote_authors.author_midname_et AS author_midname_et,
				".$config_q["db"]["prefix"]."quote_authors.author_firstname_et AS author_firstname_et,
				".$config_q["db"]["prefix"]."quote_authors.url_friendly_author_name_".$config_q["locale"].",

				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_name AS waiting_author_name,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_profession_et AS waiting_author_profession_et,

				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_born AS waiting_author_born,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_death AS waiting_author_death,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.quote AS quote,
				".$config_q["db"]["prefix"]."categories.name_".$config_q["locale"]." as category,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.tag AS tag,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.source_title AS waiting_source_title,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.source_year_start AS waiting_source_year_start,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.created_by AS waiting_created_by,
				".$config_q["db"]["prefix"]."quotes_waiting_approval.date_inserted AS waiting_date_inserted,
				".USERS_TABLE.".username AS username
			FROM
			(
				".$config_q["db"]["prefix"]."quotes_waiting_approval,
				".USERS_TABLE.",
				".$config_q["db"]["prefix"]."categories
			)
			LEFT JOIN
				".$config_q["db"]["prefix"]."quote_authors
			ON
				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_id = ".$config_q["db"]["prefix"]."_quote_authors.id
			WHERE
				".USERS_TABLE.".user_id = ".$config_q["db"]["prefix"]."quotes_waiting_approval.created_by
				AND
				".$config_q["db"]["prefix"]."quotes_waiting_approval.author_id != 0
				AND
				status = 0
				AND
				".$config_q["db"]["prefix"]."categories.id = ".$config_q["db"]["prefix"]."quotes_waiting_approval.category
			ORDER BY 
				date_inserted
			ASC
		;";
		$r = q($q);
		$a_out = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$row = quote::parse_tags($row);
			$row = author::parse_author_name($row);
			$row = author::parse_author_born_death($row);
			$row = author::parse_author_profession($row);
			$row = author::parse_url_friendly_author_name($row);
			$a_out[] = $row;
		}
		//$a_out = $this->get_author_img_data2($a_out);
		$a_out = quote::parse_author_photos($a_out);
		return $a_out;
	}
	
	public static function activate_from_waitinglist($arr)
	{
		global $config_q;
		foreach($arr["quote_ids"] as $key=>$var)
		{
			$q = "
				SELECT
					*
				FROM
					".$config_q["db"]["prefix"]."quotes_waiting_approval
				WHERE
					id = $key
			";
			$r = q($q);
			$row = mysqli_fetch_array($r, MYSQL_ASSOC);
			$this->insert_quote(array(
				"author_id" => $row["author_id"],
				"quote" => $row["quote"],
				"category" => $row["category"],
				"tag" => $row["tag"],
				"source_title" => $row["source_title"],
				"source_year_start" => $row["source_year_start"],
				"created_by" => $row["created_by"],
				"created_time" => $row["date_inserted"],
				"active" => 1,
			));
			$this->delete_from_waitinglist($key);
		}
	}

	// gets all quotes from a_tsitaatcom2_zitate_de_import to which author_url corresponds in our database
	public static function get_new_quotes_from_zitate_de() {
		while(quote::zitate_de__check_if_can_fetch_quotes() /*&& $i<2*/) { 
			$quote = quote::zitate_de__get_1_new_quote_from_zitate_de();
			arr($quote);
			quote::zitate_de__insert_quote_to_database($quote);
			flush2();
			//$i++;
		}
	}

	private static function zitate_de__insert_quote_to_database($arr) {
		global $config_q, $link;
		$q1 = "
			INSERT INTO ".$config_q["db"]["prefix"]."quotes (
				id,
				q_id,
				lang,
				rank,
				quote,
				category,
				tag,
				author_id,
				author2_id,
				source_id,
				source_title,
				source_title_extra_sufix,
				source_title_extra_prefix,
				source_year_start,
				source_year_start_circa,
				source_year_end,
				created_by,
				created_time,
				revision,
				active
			)
			VALUES (
				NULL,
				'0',
				'de',
				'0',
				'".mysqli_real_escape_string($link, $arr["quote"])."',
				'0',
				'".mysqli_real_escape_string($link, $arr["tags_as_string"])."',
				'".$arr["author_id"]."',
				NULL,
				NULL,
				NULL,
				NULL,
				NULL,
				NULL,
				NULL,
				NULL,
				'2',
				'".date::get_current_time()."',
				'1',
				'1'
		);";
		q($q1);

		$insert_id =  mysqli_insert_id($link);
		$q2 = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				q_id = '$insert_id'
			WHERE ".$config_q["db"]["prefix"]."quotes.id = $insert_id";
		q($q2);
		
		$q3 = "
			UPDATE
				".$config_q["db"]["prefix"]."zitate_de_import
			SET
				import_complete = 1
			WHERE
				".$config_q["db"]["prefix"]."zitate_de_import.id = ".$arr["zitate_de_import_id"].";
		";

		q($q3);
	}

	private static function zitate_de__check_if_can_fetch_quotes() { 
		global $config_q;
		$q1 = "
			SELECT
				".$config_q["db"]["prefix"]."zitate_de_import.id as id
			FROM
				".$config_q["db"]["prefix"]."zitate_de_import,
				".$config_q["db"]["prefix"]."quote_authors
			WHERE
				url_author_name = url_friendly_author_name_de
			AND
				".$config_q["db"]["prefix"]."quote_authors.author_born = ".$config_q["db"]["prefix"]."zitate_de_import.author_born
			AND
				import_complete =0
			LIMIT 1
		";
		$r = q($q1);

		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
				return true;
		}
		return false;
	}

	private static function zitate_de__get_1_new_quote_from_zitate_de() {
		global $config_q, $link;
		$q1 = "
			SELECT
				".$config_q["db"]["prefix"]."zitate_de_import.id AS zitate_de_import_id,
				".$config_q["db"]["prefix"]."quote_authors.id AS author_id,
				category,
				".$config_q["db"]["prefix"]."zitate_de_import.quote,
				url_author_name,
				tags_as_string
			FROM
				".$config_q["db"]["prefix"]."zitate_de_import,
				".$config_q["db"]["prefix"]."quote_authors
			WHERE url_author_name = url_friendly_author_name_de
			AND
				".$config_q["db"]["prefix"]."quote_authors.author_born = ".$config_q["db"]["prefix"]."zitate_de_import.author_born
			AND
				import_complete = 0
			ORDER BY RAND() 
			LIMIT 1
		";
		echo mysqli_error($link);
		$r = q($q1);

		$quote_to_import = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
				$row["quote"] = str_replace('/ ', "\n", $row["quote"]);
				return $row;
		}
		return false;
	}

	// as json
	public static function get_random_quotes_for_facebook($arr = array()) {
		global $config_q, $link;
		$count = 439;
		$q1 = "
			SELECT quote, author_lastname_de as author
			FROM  ".$config_q["db"]["prefix"]."quotes, ".$config_q["db"]["prefix"]."quote_authors
			WHERE  lang LIKE 'en'
			AND rank >0
			AND active = 1
			AND ".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
			ORDER BY RAND( ) 
			LIMIT $count
		";
		$r = q($q1);
		echo '{"quotes": ['."\n";
		$i=0;
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC)) {
			$i++;
			$row["quote"] = str_replace(array("\n", "\r"), "<br>", $row["quote"]);
			if($i<$count) {
				echo '{"quote": "'.addslashes($row["quote"]).'", "author": "'.addslashes($row["author"]).'"},'."\n";
			} else {
				echo '{"quote": "'.addslashes($row["quote"]).'", "author": "'.addslashes($row["author"]).'"}'."\n";
			}
		}
		echo "]}";

	}
}
?>