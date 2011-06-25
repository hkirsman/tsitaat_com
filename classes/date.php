<?php

class date
{
	/*
	* Function to turn a mysql datetime (YYYY-MM-DD HH:MM:SS) into a unix timestamp
	* @param str
	* The string to be formatted
	*/
	public static function convert_datetime($str)
	{
		list($date, $time) = explode(' ', $str);
		list($year, $month, $day) = explode('-', $date);
		list($hour, $minute, $second) = explode(':', $time);
	
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);

		return $timestamp;
	}

	/*
	* Function to get a mysql datetime (YYYY-MM-DD HH:MM:SS)
	*/
	public static function get_current_time()
	{
		global $config_q;
		return date('Y-m-d H:i:s', time()+$config_q["date_timezone_fix"]*60*60);
	}

}

?>