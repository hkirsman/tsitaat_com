<?php

class statistics
{
	public static function quote_count()
	{
		global $config_q;

		$q = "
			SELECT COUNT( id ) AS quote_count 
			FROM 
				a_tsitaatcom2_quotes
			WHERE  lang = '".$config_q["locale"]."'
			AND
			active = 1
		";
		$r = q($q);

		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		return $row["quote_count"];
	}

	public static function user_count()
	{
		global $config_q;

		$q = "
			SELECT count(*) AS user_count
			FROM  phpbb_users
			WHERE
				user_type =0
			OR
				group_id = 5
		";
		$r = q($q);

		$row = mysqli_fetch_array($r, MYSQL_ASSOC);
		return $row["user_count"];
	}
}

?>