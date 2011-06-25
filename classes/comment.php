<?php

class comment
{
	public static function get_comments($arr)
	{
		global $config_q;
    $s_where = "WHERE";

    if (isset($arr["quote_id"]))
    {
       $s_where .= " `quote_id` = " . $arr["quote_id"];
    }

    if($s_where == "WHERE") {
      $s_where = "";
    }

    $q = "
      SELECT
        not_logged_username,
        username,
        username_clean,
        ".$config_q["db"]["prefix"]."comments.user_id AS user_id, 
        comment,
        datetime
      FROM
        (
          `".$config_q["db"]["prefix"]."comments` 
        )
      LEFT JOIN
				phpbb_users
			ON
        `".$config_q["db"]["prefix"]."comments`.`user_id` = `phpbb_users`.`user_id`
      $s_where
      ORDER BY datetime ASC
      ";
		$r = q($q);
		$out = array();
		
		while (list($not_logged_username, $username, $username_clean, $user_id, $comment, $datetime) = mysqli_fetch_array($r))
		{
      $out[] = array(
        "not_logged_username" => $not_logged_username,
        "username" => $username,
        "username_clean" => $username_clean,
        "user_id" => $user_id,
        "comment" => $comment,
        "comment_html" => str_replace(array("\n"), "<br />", $comment),
        "datetime" => $datetime
      );
		}
		return $out;
	}

	public static function add_comment($arr)
	{
		global $config_q, $link;
    $s_where = "WHERE";

    if($arr["user_id"]==1 && strlen($arr["username"])) {
      $username = "'".mysqli_real_escape_string($link,trim($arr["username"]))."'";
    } else {
      $username = "NULL";
    }

    $q = "
      INSERT INTO  `".$config_q["db"]["prefix"]."comments`
      (
        `quote_id` ,
        `not_logged_username` ,
        `user_id` ,
        `comment` ,
        `datetime`
      )
      VALUES
      (
        ".$arr["quote_id"].",
        ".$username.",
        ".$arr["user_id"].",
        '".mysqli_real_escape_string($link,$arr["comment"])."',
        NOW()
      );
    ";
    $r = q($q);
	}
	
}

?>