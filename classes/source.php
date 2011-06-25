<?php

class source
{
	public static function get_sources($arr = array())
	{
		global $config_q;
		/*
		if (isset($arr["current_page"]))
		{
			$limit_start = ($arr["current_page"]-1)*$config_q["quotes_on_page"];
			$limit = "LIMIT ".(($arr["current_page"]-1)*$config_q["quotes_on_page"]).",".$config_q["quotes_on_page"];
		}
		if (isset($arr["char"]))
		{
			$s_where = "WHERE author_lastname_".$config_q["locale"]." LIKE '".$arr["char"]."%' ";
		}
		*/
		if ($arr["has_alias"])
		{
			$s_where = " WHERE url_friendly_name_".$config_q["locale"]." IS NOT NULL ";
		}

		if (strlen($s_where)>0)
		{
			$s_where .= "
				AND
					".$config_q["db"]["prefix"]."sources.id = ".$config_q["db"]["prefix"]."quotes.source_id
				AND
					active = 1
				AND
					lang = '".$config_q["locale"]."' ";
		}
		else
		{
			$s_where .= "
				WHERE
					".$config_q["db"]["prefix"]."sources.id = ".$config_q["db"]["prefix"]."quotes.source_id
				AND
					active = 1
				AND
					lang = '".$config_q["locale"]."' ";
		}
		
		$a_out = array();
		$q = "
			SELECT
				DISTINCT
				name_".$config_q["locale"]." AS name,
				url_friendly_name_".$config_q["locale"]." AS url_friendly_name
			FROM
				".$config_q["db"]["prefix"]."sources,
				".$config_q["db"]["prefix"]."quotes
			$s_where
			order by
				name_".$config_q["locale"]." asc
			$limit;
		";
		$r = q($q);
		$a_out = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$a_out[]  = $row;
		}
		
		return $a_out;
	}

}