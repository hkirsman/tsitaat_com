<?php

class menu
{
	function menu()
	{
		global $user, $config_q;
		$this->menu = array();
		$this->menu[10] = array(
			"name" => "Admin",
			"link" => "#",
			"logged" => 1,
		);
		/*
		$this->menu[10] = array(
			"name" => "Lisa",
			"link" => "/?c=add_quote",
			"logged" => 1,
		);
		*/
		$this->menu[20] = array(
			"name" => "Generate indexes",
			"link" => "/?c=admin&amp;action=generate_indexes",
			"logged" => 1,
			"class" => "generate_indexes",
			"admin" => 1,
		);
		$this->menu[25] = array(
			"name" => "Man. quotations",
			"link" => "/?c=admin&amp;action=manage_not_active_quotations",
			"logged" => 1,
			"admin" => 1,
		);
		$this->menu[26] = array(
			"name" => "Find similar quotes",
			"link" => "/?c=admin&amp;action=find_similar_quotes",
			"logged" => 1,
			"admin" => 1,
		);
		
		$this->menu[100] = array(
			"name" => "Top 100",
			"link" => "/"._("quotes")."/"._("top-100-quotes"),
		);
		$this->menu[110] = array(
			"name" => "Top 100-200",
			"link" => "/"._("quotes")."/"._("top-100-200-quotes"),
		);
		$this->menu[120] = array(
			"name" => "Twitter",
			"link" => "http://twitter.com/quotebook24_com",
		);
		$this->menu[130] = array(
			"name" => "Facebook",
			"link" => "http://www.facebook.com/pages/#!/pages/QuoteBook24com-worlds-best-online-quotebook/309827022250",
			"class" => "important",
		);
		$this->menu = $config_q["menu"];
	}
	
	function out()
	{
		global $user;
		$out = array();
		
		foreach($this->menu as $key=>$var)
		{
			if($var["admin"])
			{
				if ($user->data["user_id"] == 2)
				{
					$out[] = $this->menu[$key];
				}
			}
			elseif($var["logged"])
			{
				if ($user->data["user_id"]>1)
				{
					$out[] = $this->menu[$key];
				}
			}
			else
			{
				$out[] = $this->menu[$key];
			}
		}
		return $out;
	}
}

?>
