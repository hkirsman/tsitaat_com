<?php
session_start();

// get configuration
require_once("config.php");
require $config_q["basepath"].'/init.php';
require_once($config_q["basepath"].'/classes/twitter.php');
require_once($config_q["basepath"].'/classes/twitter_quote.php');

// twitter
{
	$datetime_today = date("Y-m-d") . " 00:00:00";
	$q = "
	SELECT
		".$config_q["db"]["prefix"]."quotes.id as quote_id,
		".$config_q["db"]["prefix"]."quotes.quote,
		".$config_q["db"]["prefix"]."quotes.rank,
		".$config_q["db"]["prefix"]."quotes.tag,
		".$config_q["db"]["prefix"]."quotes.author_id,
		".$config_q["db"]["prefix"]."quote_authors.author_name_freeform_".$config_q["locale"].",
		".$config_q["db"]["prefix"]."quote_authors.author_firstname_".$config_q["locale"].",
		".$config_q["db"]["prefix"]."quote_authors.author_midname_".$config_q["locale"].",
		".$config_q["db"]["prefix"]."quote_authors.author_lastname_".$config_q["locale"].",
		".$config_q["db"]["prefix"]."quote_authors.url_friendly_author_name_".$config_q["locale"]."
	FROM
		".$config_q["db"]["prefix"]."quotes,
		".$config_q["db"]["prefix"]."quote_authors
	WHERE
		".$config_q["db"]["prefix"]."quotes.id
	NOT IN
	(
		SELECT 
			quote_id
		FROM
			".$config_q["db"]["prefix"]."twitter_log
	)
	AND
		rank > 0
	AND
		".$config_q["db"]["prefix"]."quotes.author_id = ".$config_q["db"]["prefix"]."quote_authors.id
	AND
		".$config_q["db"]["prefix"]."quotes.lang = '".$config_q["locale"]."'
	ORDER BY
		".$config_q["db"]["prefix"]."quotes.created_time
	ASC
	LIMIT 1
	";
	echo $q;
	$r = q($q);
	$i=0;
	$a_out = array();
	$row = mysqli_fetch_array($r, MYSQL_ASSOC);
	{
		$row["quote"] = str_replace(array(" -", "[-]", "  "), array("&nbsp;&#8212;", "[&#8212;]", "&nbsp;&nbsp;"), $row["quote"]);
		if (strpos($row["quote"] , '"')!==false)
		{
			$row["quote"] = preg_replace("/\"(.*)\"/imsU", "“\\1”", $row["quote"]); 
		}
		else
		{
			$row["quote"] = "“" . $row["quote"] . "”";
		}
		
		$row = author::parse_author_name($row);
		$a_out[] = $row;
	}
	$a_out = quote::parse_author_photos($a_out);
	$row = $a_out[0];

	{
		$first_tag = explode(",", $row["tag"]);
		$first_tag = str_replace("_", " ", trim($first_tag[0]));
		$facebook_attachment = array(
			'name' => $row["author_name_wo_brackets"].' '._('quotations'),
			'href' => $config_q["baseurl"].'/'._("quotes").'/'._("authors").'/'.$row["url_friendly_author_name_".$config_q["locale"]],
			'caption' => str_replace("http://", "", $config_q["baseurl"]),
			'description' => $row["author_name_wo_brackets"].' '._('quotations'),
			'properties' => array(
				_('Tag') => array(
					'text' => $first_tag,
					'href' => $config_q["baseurl"].'/'._("quotes").'/'._("tags").'/'.$first_tag
				),
				_('Rating') => $row["rank"]
			),
		);
		if (strlen($row["author_img"]["nice_name"])>0)
		{
			$facebook_attachment['media'] = array(
					array(
						'type' => 'image',
						'src' => $config_q["baseurl"].'/cache/images/'.str_replace(".jpg", "_90px.jpg", $row["author_img"]["nice_name"]),
						'href' => $config_q["baseurl"].'/'._("quotes").'/'._("authors").'/'.$row["url_friendly_author_name_".$config_q["locale"]]
					)
				);
		}

		facebook_wrapper::publish_to_wall(
			$row["quote"],
			$facebook_attachment,
			array(
				array(
					'text' => _('Go to quotation'),
					'href' => $config_q["baseurl"] . "/" . $row["quote_id"]
			)),
			$config_q["facebook"]["wall_id"]
		);
	}

	$ct = new twitter_quote($config_q["twitter"]["username"], $config_q["twitter"]["password"]);
	$url = str_replace("http://", "", $config_q["baseurl"]) . "/" . $row["quote_id"];
	if($ct->set_status($row["quote"] ." ".$row["author_name_wo_brackets"], $url) != true)
	{
		die("Twitter is unavailable at this time");
	}

	q("
	INSERT INTO
		".$config_q["db"]["prefix"]."twitter_log
		(
			quote_id
		)
	VALUES
		(
			'".$row["quote_id"]."'
		);
	");
	ob_flush();
	flush();
	die;
}


?>