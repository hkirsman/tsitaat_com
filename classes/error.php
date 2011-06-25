<?php

class error
{
	public static function log_error($domain, $url, $http_referer="")
	{
		global $q_config;

		if (strlen($http_referer))
		{
			$http_referer = "'".$http_referer."'";
		}
		else
		{
			$http_referer = "NULL";
		}

	
		$q = "
		INSERT INTO
			a_tsitaatcom2_broken_urls
			(
				domain,
				url,
				http_referer,
				logtime
			)
		VALUES
			(
				'$domain',
				'$url',
				$http_referer,
				NOW()
			);
		";
		q($q);
	}
}

?>