<?php
$link = mysqli_connect($config_q["db"]["server"], $config_q["db"]["username"], $config_q["db"]["password"]);
if (!$link) {
    die("Could not connect: " . mysql_error() );
}
mysqli_select_db($link, $config_q["db"]["db"]);
//mysql_set_charset('utf8',$link); 
//mysqli_query($this->link, "SET NAMES 'utf8'");
mysqli_set_charset($link, 'utf8'); 
?>