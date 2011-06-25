<?php

class tag
{
	public static function format_tags_as_links($tags)
	{
    global $context;
		$out = "";
		$tags = split(",", $tags);
		$i=0;
		$tagCount = count($tags);
		for($i=0;$i<$tagCount;$i++)
		{
			$tag = trim($tags[$i]);
			$tag = str_replace(" ", "_", $tag);
			$out .= '<a href="/'.$context["labels"]["quotes_clean"].'/'.$context["labels"]["tags_clean"].'/'.$tag.'">'.urldecode($tag).'</a>';
			if ($i+1!=$tagCount)
			{
				$out .= ', ';
			}
		}
		return $out;
	}

	public static function generate_index()
	{
		global $config_q;
		
		$q = "
			SELECT
				id,
				tag
			FROM
				".$config_q["db"]["prefix"]."quotes
			WHERE
				lang = '".$config_q["locale"]."'
			AND
				active = 1;
		";
		$r = q($q);
		q("truncate ".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"]);
		while (list($id, $tags) = mysqli_fetch_array($r))
		{
			$a_tags = explode(",", $tags);
			
			foreach($a_tags as $key => $tag)
			{
				$tag = utf8_trim(addslashes($tag));
				if (strpos($tag, "  ")===false)
				{
					$tag = str_replace(" ", "_", $tag);
					$a_temp[]  = $tag;
					q("insert into ".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"]." (qid,tag) values ($id, '$tag')");
				}
				else
				{
					die("$tag on kahe tyhikuga... fixi 2ra. RUTTU");
				}
			}
		}
	}

	public static function get_tag_index()
	{
		global $config_q;

		$q = "
			SELECT
				distinct
			LOWER(SUBSTRING(tag,1,1)) AS tag
			FROM
				".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"]."
			ORDER BY
				tag ASC;";
			$r = q($q);
		
			$a_out = array();
			while ($row = mysqli_fetch_array($r, MYSQL_ASSOC))
			{
				if($row["tag"]=="")
				{
					$a_out[] = "-";
				}
				else
				{
					$a_out[] = $row["tag"];
				}
			}
			return $a_out;
	}

	public static function get_tags($arr = array())
	{
		global $config_q;

		if (isset($arr["char"]))
		{
			$s_where = "WHERE ".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"].".tag like '".$arr["char"]."%' ";
		}
		
		$a_out = array();
		$q = "
			SELECT
			DISTINCT
				tag
			FROM
				".$config_q["db"]["prefix"]."_tag_index_".$config_q["locale"]."
				$s_where
			ORDER BY
				tag asc
			$limit;
		";
		$r = q($q);
		
		$a_out = array();
		while (list($tag) = mysqli_fetch_array($r))
		{
			$tag_for_user = str_replace("_", " ", $tag);
			$a_out[]  = array(
				"tag_for_user" => $tag_for_user,
				"tag_for_url" => $tag,
			);
		}
		return $a_out;
	}

  public static function get_keywords_for_author($url_friendly_author_name)
	{
		global $config_q;
		$out = array();
		$q = "
			SELECT
				tag
			FROM
				".$config_q["db"]["prefix"]."quotes
			RIGHT
				join ".$config_q["db"]["prefix"]."quote_authors
			ON
				".$config_q["db"]["prefix"]."quotes.author_id = ".$config_q["db"]["prefix"]."quote_authors.id
			WHERE
        ".$config_q["db"]["prefix"]."quotes.lang = '".$config_q["locale"]."'
      AND
				url_friendly_author_name_".$config_q["locale"]." = '$url_friendly_author_name';
		";
		$r = q($q);
		while (list($tag) = mysqli_fetch_array($r))
		{
			$tags = explode(",", $tag);
			foreach($tags as $key=>$var)
			{
				$var = trim($var);
				if(strlen($var)>0)
				{
					$out[$var] = "";
				}
			}
		}
		return $out;
	}
	
	public static function get_keywords_for_author_meta_description($url_friendly_author_name, $quotes=array())
	{
		$out = "";
    $a_temp = array();
    if (count($quotes)) {
      foreach($quotes as $key=>$quote)
      {
        $tags = explode(",", $quote["tag"]);
        foreach($tags as $key=>$tag) {
          $tag = utf8_trim($tag);
          if (strlen($tag)) {
            $a_temp[$tag] = "";
          }
        }
      }
      foreach($a_temp as $key=>$tag)
      {
        $out .= $key . ", ";
      }
    } else {
      $tags = tag::get_keywords_for_author($url_friendly_author_name);
      foreach($tags as $key=>$var)
      {
        $out .= "$key ";
      }
      $out = substr($out, 0, -1);
    }
    $out = utf8_trim($out, ", ");
		return $out;
	}

}