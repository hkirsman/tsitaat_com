<?php
$api_key = 'ba2dcb8481d9338e47a31627f95c03a6';
$secret  = 'bf0c8985ae30008f53138d4e45305ae1';
$testtoken= "N9OXWH"; // Replace this value with your Token Value

// the facebook client library
include_once $config_q["basepath"].'/classes/facebook-platform/php/facebook.php';
$fb = new FacebookRestClient($api_key, $secret);


$result = $fb->call_method('facebook.auth.getSession', array(
		'auth_token' => $testtoken,
		'generate_session_secret' => true)
	);
 
echo "<br /><pre>";
 
print_r($result);
	 
echo $session_key = $result['session_key'];

die();

$message = 'Check out this cute pic.';
$attachment = array(
	'name' => 'i\'m bursting with joy',
	'href' => 'http://icanhascheezburger.com/2009/04/22/funny-pictures-bursting-with-joy/',
	'caption' => '{*actor*} rated the lolcat 5 stars',
	'description' => 'a funny looking cat',
	'properties' => array('category' => array( 'text' => 'humor', 'href' => 'http://www.icanhascheezburger.com/category/humor'),
	'ratings' => '5 stars'),
	'media' => array(array('type' => 'image', 'src' => 'http://icanhascheezburger.files.wordpress.com/2009/03/funny-pictures-your-cat-is-bursting-with-joy1.jpg', 'href' => 'http://icanhascheezburger.com/2009/04/22/funny-pictures-bursting-with-joy/')),
	'latitude' => '41.4', //Let's add some custom metadata in the form of key/value pairs
	'longitude' => '2.19');
	$action_links = array(
		array(
			'text' => 'Recaption this',
			'href' => 'http://mine.icanhascheezburger.com/default.aspx?tiid=1192742&recap=1#step2'));
	$attachment = json_encode($attachment);
	$action_links = json_encode($action_links);
	$facebook->api_client->stream_publish($message, $attachment, $action_links);
?>