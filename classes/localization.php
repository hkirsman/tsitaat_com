<?php

class localization
{
	function localization()
	{
		global $config_q;
		$locale = $config_q["locale"];
		putenv("LC_ALL=$locale");
		setlocale(LC_ALL, $locale);
		bindtextdomain("messages", "./locale");
		textdomain("messages");
		bind_textdomain_codeset("messages", 'UTF-8');
	}
}

?>
