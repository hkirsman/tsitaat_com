<?php

class author
{
	public static function get_author_index()
	{
		global $config_q;

		$q = "
			SELECT
				distinct
			LOWER(SUBSTRING(author_lastname_".$config_q["locale"].",1,1)) AS author_index
			FROM
				".$config_q["db"]["prefix"]."quote_authors,
				".$config_q["db"]["prefix"]."quotes
			WHERE
				".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
			AND
				active = 1
			AND
				lang = '".$config_q["locale"]."'
			ORDER BY
				author_index ASC;";
			$r = q($q);
		
			$a_out = array();
			while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
			{
				if ($row["author_index"]=="")
				{
					$a_out[] = "-";
				}
				else
				{
					$a_out[] = $row["author_index"];
				}
			}
			return $a_out;
	}

	public static function get_authors($arr = array())
	{
		global $config_q;
		if (isset($arr["current_page"]))
		{
			$limit_start = ($arr["current_page"]-1)*$config_q["quotes_on_page"];
			$limit = "LIMIT ".(($arr["current_page"]-1)*$config_q["quotes_on_page"]).",".$config_q["quotes_on_page"];
		}
		if (isset($arr["char"]))
		{
			$s_where = "WHERE author_lastname_".$config_q["locale"]." LIKE '".$arr["char"]."%' ";
		}

		if (strlen($s_where)>0)
		{
			$s_where .= "
				AND
					".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
				AND
					active = 1
				AND
					lang = '".$config_q["locale"]."' ";
		}
		else
		{
			$s_where .= "
				WHERE
					".$config_q["db"]["prefix"]."quote_authors.id = ".$config_q["db"]["prefix"]."quotes.author_id
				AND
					active = 1
				AND
					lang = '".$config_q["locale"]."' ";
		}
		
		$a_out = array();
		$q = "
			SELECT
				DISTINCT
				".$config_q["db"]["prefix"]."quote_authors.id as author_id,
				author_name_freeform_".$config_q["locale"].",
				author_firstname_".$config_q["locale"].",
				author_midname_".$config_q["locale"].",
				author_lastname_".$config_q["locale"].",
				author_born_death_circa,
				author_born,
				author_death,
				author_profession_".$config_q["locale"].",
				author_wiki_url_".$config_q["locale"].",
				url_friendly_author_name_".$config_q["locale"]."
			FROM
				".$config_q["db"]["prefix"]."quote_authors,
				".$config_q["db"]["prefix"]."quotes
			$s_where
			order by
				author_lastname_".$config_q["locale"]." asc
			$limit;
		";
		$r = q($q);
		$a_out = array();
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$row = author::parse_author_born_death($row);
			$row = author::parse_author_name($row);
			$row = author::parse_url_friendly_author_name($row);
			$a_out[]  = $row;
		}
		return $a_out;
	}

	// check if image exist and return no image address
	public static function parse_author_image($row)
	{
		if ( strlen($row["img"])===0 )
		{
			$row["img"] = "noauthorimg.jpg";
		}
		return $row;
	}

	// return name for web
	public static function parse_author_name($row)
	{
		global $config_q;

		$out = "";

		$author_name_freeform = $row["author_name_freeform_".$config_q["locale"]];
		$author_firstname = $row["author_firstname_".$config_q["locale"]];
		$author_midname = $row["author_midname_".$config_q["locale"]];
		$author_lastname = $row["author_lastname_".$config_q["locale"]];

		if (strlen ($author_name_freeform)>0)
		{
			$out = $author_name_freeform;
		}
		else if (strlen($author_lastname)>0 && strlen($author_midname)==0 && strlen($author_firstname)==0 )
		{
			$out = $author_lastname;
		}
		else if (strlen($author_lastname)>0 && strlen($author_midname)==0 && strlen($author_firstname)>0 )
		{
			$out = $author_firstname. " " . $author_lastname;
		}
		else if (strlen($author_lastname)>0 && strlen($author_midname)>0 && strlen($author_firstname)>0)
		{
			$out = $author_firstname. " " . $author_midname . " " . $author_lastname;
		}
		//$out = str_replace(array("(", ")"), array("", ""), $out);
		$row["author_name"] = $out;
		
		// Vince(nt) (Thomas) Lombardi => Vince Lombardi 
		if (strpos($out, "(")!==FALSE)
		{
			$row["author_name_wo_brackets"] = preg_replace("/([a-zA-Z]{2})\(.*\)/sU", "\\1", $out );
			$row["author_name_wo_brackets"] = preg_replace("/([a-zA-Z]){1}\(.*\)\s/sU", "\\1. ", $row["author_name_wo_brackets"] );
			$row["author_name_wo_brackets"] = preg_replace("/([a-zA-Z]){1}\(.*\)$/sU", "\\1.", $row["author_name_wo_brackets"] );
			$row["author_name_wo_brackets"] = preg_replace("/\(.*\)/sU", "", $row["author_name_wo_brackets"] );
		}
		else
		{
			$row["author_name_wo_brackets"] = $out;
		}
		$row["author_name_wo_brackets"] = str_replace("  ", " ", $row["author_name_wo_brackets"]);
		return $row;
	}

	// returns decent year born/death. ex ca. 54 BC – ca. 39 AD
	public static function parse_author_born_death($row)
	{
		$author_born = $author_born_circa = $author_death = $author_death_circa = "";

		$author_born = $row["author_born"];
		$author_born_circa = $row["author_born_circa"];
		$author_death = $row["author_death"];
		$author_death_circa = $row["author_death_circa"];

		if ($author_born < 0 )
		{
			$author_born = $author_born*(-1) . " " . _("BC");
		}

		if ($author_death < 0 )
		{
			$author_death = $author_death*(-1) . " " . _("BC");
		}
		elseif ($row["author_death"] > 0 && $row["author_born"] < 0 )
		{
			$author_death = $author_death . " " . _("AD");
		}

		if ( strlen($row["author_born"]) > 0)
		{
			if ($row["author_born_circa"] > 0)
			{
				$author_born = _("ca.") . "  " . $author_born;
			}
		}

		if ( strlen($author_death) > 0)
		{
			if ($author_death_circa > 0)
			{
				$author_death = _("ca.") . " " . $author_death;
			}
		}

		
		if ( strlen($author_born)>0 || strlen($author_death)>0)
		{
			$out = "${author_born}-${author_death}";
		}
		else
		{
			$out = "";
		}
		
		$row["author_born_death"] = $out;
		return $row;
	}

	public static function parse_author_profession($row)
	{
		global $config_q,$context;

		$out = "";
		if ( $config_q["locale"] == "et" )
		{
			$author_profession = $row["author_profession_et"];
		}
		elseif ( $config_q["locale"] == "en" )
		{
			$author_profession = strlen($row["author_profession_".$config_q["locale"]])>0? $row["author_profession_".$config_q["locale"]] : $row["author_profession_et"];
			$prefix = " " . _("a");
			if (stripos($author_profession, "the")===0 )
			{
				$prefix = "";
			}
			else if (stripos($author_profession, "a")===0 || 
				stripos($author_profession, "e")===0 || 
				stripos($author_profession, "i")===0 || 
				stripos($author_profession, "o")===0 || 
				stripos($author_profession, "u")===0 ||
				stripos($author_profession, "y")===0
			)
			{
				$prefix = " " . _("an");
			}
		
		}
		else
		{
			$author_profession = strlen($row["author_profession_".$config_q["locale"]])>0? $row["author_profession_".$config_q["locale"]] : $row["author_profession_et"];
		}

		if (strlen($author_profession) > 0 ) 
		{
			if ( strlen($row["author_death"]) > 0 )
			{
				$out = $context["labels"]["was_clean"] . "$prefix " . $author_profession;
			}
			// just being sure
			elseif ( $row["born"] < 1850 && $row["born"] != "" )
			{
				$out = _("was") . " $prefix " . $author_profession;
			}
			else
			{
				$out = _("is") . " $prefix " . $author_profession;
			}
		}
		
		$row["author_profession_parsed"] = $out;
		return $row;
	}

	public static function parse_url_friendly_author_name($row)
	{
		global $config_q;

		$out = "";
		if ( $config_q["locale"] == "et" )
		{
			$url_friendly_author_name = $row["url_friendly_author_name_et"];
		}
		else
		{
			$url_friendly_author_name = strlen($row["url_friendly_author_name_".$config_q["locale"]])>0 ? $row["url_friendly_author_name_".$config_q["locale"]] : $row["url_friendly_author_name_et"];
		}
		
		$row["url_friendly_author_name"] = $url_friendly_author_name;
		return $row;
	}

	public static function get_author_top($arr = array())
	{
		global $config_q;
		
		$a_out = array();
		$r = q("
			SELECT
				created_by AS uid,
				username,
				count(created_by) AS quote_count
				
			FROM
			(
				".$config_q["db"]["prefix"]."quotes
			)
			LEFT JOIN
				".USERS_TABLE."
			ON 
				".$config_q["db"]["prefix"]."quotes.created_by = ".USERS_TABLE.".user_id
			WHERE lang = '".$config_q["locale"]."'
			AND
			active = 1
			GROUP BY
				created_by
			ORDER BY quote_count DESC;
		");
		$a_out = array();
		$i = 1;
		while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
		{
			$row["index"] = $i;
			$a_out[]  = $row;
			$i++;
		}
		$out = '
		<h2>'._("Quotation contributors").'</h2>
		<table class="quote_adders">
		<thead>
			<tr>
				<th>#</th>
				<th>'. _("User") . '</th>
				<th>'. _("Quotation count") . '</th>
			</tr>
		</thead>
		<tbody>';
		foreach($a_out as $key=>$var)
		{
			$out .= '<tr>';
				$out .= '<td>'.$var["index"].'</td>';
				$out .= '<td>'.$var["username"].'</td>';
				$out .= '<td>'.$var["quote_count"].'</td>';
			$out .= '</tr>';
		}
		$out .= '</tbody>
		</table>
		';

		return $out;
	}
}
?>