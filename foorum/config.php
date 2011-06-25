<?php
require("/var/www/tsitaat/wwwdev3/config.php");

// phpBB 3.0.x auto-generated configuration file
// Do not change anything in this file!
$dbms = 'mysqli';
$dbhost = $config_q["db"]["server"];
$dbport = '';
$dbname = $config_q["db"]["db"];
$dbuser = $config_q["db"]["username"];
$dbpasswd = $config_q["db"]["password"];
$table_prefix = $config_q["db"]["phpbbprefix"];
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
?>