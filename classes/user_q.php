<?php

class user_q
{
	public static function user_exists($username)
	{
		global $table_prefix;

		$r = q("
			SELECT
				user_id
			FROM
				".$table_prefix."users 
			WHERE
				username = '$username'
			AND
				LENGTH(user_password)>0
		");
		
		$row = mysqli_fetch_array($r);
		if ( $row["user_id"] )
		{
			//$this->uid = $row["user_id"];
			return true;
		}
		else
		{
			return false;
		}
	}

	public static function user_info($username)
	{
		global $table_prefix, $config_q;

		$q = "
			SELECT
				user_id,
				username,
				user_regdate,
				user_lastvisit,
				user_lastpost_time,
				user_posts,
				(
					SELECT COUNT(id)
					FROM 
						a_tsitaatcom2_quotes,
						phpbb_users
					WHERE
						username='".$username."'
					AND
						lang = '".$config_q["locale"]."'
					AND
						a_tsitaatcom2_quotes.created_by = phpbb_users.user_id
					AND
						active = 1
				)
					AS
				quotes_added,
				(
					SELECT
						COUNT(a_tsitaatcom2_favorite_quotes.quote_id)
					FROM
						a_tsitaatcom2_favorite_quotes,
						a_tsitaatcom2_quotes,
						phpbb_users
					WHERE
						phpbb_users.username = '".$username."'
					AND
						phpbb_users.user_id= a_tsitaatcom2_favorite_quotes.user_id
					AND
						a_tsitaatcom2_favorite_quotes.quote_id = a_tsitaatcom2_quotes.id
					AND
						active = 1
				)
				AS
					favorite_quotes,
				(
					SELECT
						COUNT(a_tsitaatcom2_quote_votes_log.id)
					FROM
						a_tsitaatcom2_quote_votes_log,
						a_tsitaatcom2_quotes,
						phpbb_users
					WHERE
						phpbb_users.username = '".$username."'
					AND
						phpbb_users.user_id= a_tsitaatcom2_quote_votes_log.user_id
					AND
						a_tsitaatcom2_quote_votes_log.quote_id = a_tsitaatcom2_quotes.id
					AND
						active = 1
				)
				AS
					votes
				FROM
					".$table_prefix."users 
				WHERE
					username = '$username'
				AND
					LENGTH(user_password)>0
			";

		$r = q($q);
		
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
		$row["user_regdate_parsed"] = date("d.m.Y", $row["user_regdate"]);
		$row["user_lastvisit_parsed"] = date("d.m.Y", $row["user_lastvisit"]);
		$row["user_lastpost_time_parsed"] = date("d.m.Y", $row["user_lastpost_time"]);

		return $row;
	}
}

?>
