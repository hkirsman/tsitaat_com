<?php
if (strpos($_SERVER["HTTP_HOST"], "tsitaat.com")!==FALSE || strpos($_SERVER["HTTP_HOST"], "tsitaat.eestibattle.net")!==FALSE)
{
	require_once("config_tsitaat_com.php");
}
else if (strpos($_SERVER["HTTP_HOST"], "quotebook24.com")!==FALSE)
{
	require_once("config_quotebook24_com.php");
}
else if (strpos($_SERVER["HTTP_HOST"], "zitatebuch24.de")!==FALSE)
{
	require_once("config_zitatebuch24_de.php");
}
else
{
	die("no configuration for this domain " . $_SERVER["HTTP_HOST"]);
}
?>