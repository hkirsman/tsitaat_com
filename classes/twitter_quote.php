<?php
/* 
	File: twitter.php
	
	Description:
		The following class is for using twitter.com
		
		This class was based off the work of Antonio Lupetti. Original Work can be found at:
			http://woork.blogspot.com/2007/10/twitter-send-message-from-php-page.html
	
	Contributing Author( s): 
		Antonio Lupetti < antonio.lupetti@gmail.com >
		Scott Sloan < scott@aimclear.com > 
		
	Date: January 4th, 2008
	License: Creative Commons
	
*/

class twitter_quote extends twitter
{
	private $ct;
	private $twitter_message_max_length;

	public function __construct($username, $passwd)
	{
		$this->ct = new twitter($username, $passwd);
		$this->twitter_message_max_length = 140; // although 171 seems to be max in some cases
	}
	public function set_status($stat, $url)
	{
		//$ct = new tinyurl($url);
		//$tiny_url = $ct->get_tinyurl();
	
		$stat_len = strlen($stat);
		$url_len = strlen($url);
		$new_stat_max = $stat . " " . $url;
		if(strlen($new_stat_max)>$this->twitter_message_max_length)
		{
			$new_stat = utf8_substr($stat, 0, $this->twitter_message_max_length-($url_len+1+2)); // 1 is space before url, 2 are dots after the message
			$new_stat .= "..".$url;
		}
		else
		{
			$new_stat = $new_stat_max;
		}
		
		return $this->ct->set_status($new_stat);
	}
}
?>
