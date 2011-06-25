<?php

class category
{
	public static function get_categories()
	{
		global $config_q;

		if ($config_q["locale"]=="et")
		{
			$q = "
				SELECT
					id,
					name_et AS name
				FROM
					".$config_q["db"]["prefix"]."categories
				ORDER BY
					name_et
				ASC;";
		}
		else
		{
			$q = "
				SELECT
					id,
					name_".$config_q["locale"]."  AS name
				FROM
					".$config_q["db"]["prefix"]."categories
				ORDER BY
					name_".$config_q["locale"]."
				ASC;";
		}
		$r = q($q);
		$out = array();
		
		while (list($id, $name) = mysqli_fetch_array($r))
		{
			if ($id != 0)
			{
				$out[] = array(
					"id" => $id,
					"name" => $name
				);
			}
			else
			{
				$no_category = array();
				$no_category[] = array(
					"id" => $id,
					"name" => $name
				);
				$out = array_merge($no_category, $out);
			}
		}
		return $out;
	}

/*
	public function get_category($arr)
	{
		global $config_q;
		$q = "
			SELECT
				id
			FROM
				".$config_q["db"]["prefix"]."categories
			WHERE
				q_id = ".$arr["q_id"];
		echo $q;
	}

	public function set_category($arr)
	{
		global $config_q;
		if(!isset($arr["q_id"]))
		{
			return false;
		}
		$q = "
			UPDATE
				".$config_q["db"]["prefix"]."quotes
			SET
				category = ".$arr["category_id"]."
			WHERE
				".$config_q["db"]["prefix"]."quotes.id = ".$arr["q_id"];
		q($q);
	}
*/
	
}

?>