<?php
require_once($config_q["basepath"].'/classes/facebook-platform/php/facebook.php');

class facebook_wrapper
{
	public static function publish_to_wall($message, $attachment=NULL, $action_links=NULL, $target_id=NULL)
	{
		global $config_q;
		try {
			$facebook = new Facebook($config_q["facebook"]["api_key"], $config_q["facebook"]["secret"]);
			$facebook->api_client->session_key = $config_q["facebook"]["session"];
			if ($attachment!==NULL)
			{
				$attachment = json_encode($attachment);
			}
			if ($attachment!==NULL)
			{
				$action_links = json_encode($action_links); 
			}
			//arr($attachment);
			//arr($action_links);
			$facebook->api_client->stream_publish($message, $attachment, $action_links, NULL, $target_id);
		} catch(Exception $e) {
			echo $e . "<br />";
		}
	}
}

?>