<?php
require_once("/home/content/99/5632799/html/www.quotebook24.com/config.php");
require_once("/home/content/99/5632799/html/www.quotebook24.com/init.php");
require_once($config_q["basepath"].'/classes/facebook-platform/php/facebook.php');

/*
de
-------------------------
Array
(
    [session_key] => 16e38d489ee23fdf8f11758c-706418514
    [uid] => 706418514
    [expires] => 0
    [secret] => 56bc805265036e5b174c2cbd87aa6269
)
16e38d489ee23fdf8f11758c-706418514

german
------------------------
Array
(
    [session_key] => 4d46faabe92e5b921d17bdcf-706418514
    [uid] => 706418514
    [expires] => 0
    [secret] => 6f3f0bdc5efa2ff894eaeff7d02d7511
)
4d46faabe92e5b921d17bdcf-706418514
*/



$fb = new FacebookRestClient("edb10ef1662aa239e336dfd66f838d6f", "a65c24679d7b3897c5d345cf436bf24d");

$testtoken= "035X35"; // Replace this value with your Token Value

$result = $fb->call_method('facebook.auth.getSession',

array('auth_token' => $testtoken, 'generate_session_secret' => true));

echo "<br /><pre>";
	 
print_r($result);
 
echo $session_key = $result['session_key'];
	 

echo "post on facebook wall";




?>