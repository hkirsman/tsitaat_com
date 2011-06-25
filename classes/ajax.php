<?php

class ajax
{
	function ajax() {
		global $user, $tenjin, $config_q;

		if ($_GET["vote_for"]==1)
		{
			echo quote::vote_for(array(
				"quote_id" => $_GET["q_id"],
				"user_id" => $user->data["user_id"],
				"ip" => $_SERVER['REMOTE_ADDR'],
			));
		}
		else if ($_GET["vote_against"]==1)
		{
			echo quote::vote_against(array(
				"quote_id" => $_GET["q_id"],
				"user_id" => $user->data["user_id"],
				"ip" => $_SERVER['REMOTE_ADDR'],
			));
			/*
			$cv = new vote(array(
				"quote_id" => $_GET["q_id"],
				"user_id" => $user->data["user_id"],
				"ip" => $_SERVER['REMOTE_ADDR'],
			));
			$cv->vote_for();
			*/
		}
    if ($_GET["get_quote_for_facebook"]==1)
    {
      echo ajax::get_quote_for_facebook($_GET["q_id"]);
    }

		if ($_GET["get_quotes_for_facebook"]==1)
		{
			quote::get_random_quotes_for_facebook();
			die();
		}

		/* a strange kind of acl but ok
			from here on you have to have permissions
		*/
		if(!can_access())
		{
			return true;
		}

    if ($_GET["dialog__add_quote"]==1)
    {
      $tenjin_template = $config_q["template_dir"].'/dialog__add_quote.phtml';
      $output = $tenjin->render($tenjin_template, $context);
      echo $output;
    }
		elseif ($_GET["get_tags"]==1)
		{
			/*$this->format_tags_as_links(array(
				"tags" => $_POST["tags"],
			));*/
		}
		elseif ($_GET["format_tags_as_links"]==1)
		{
			$tag = new tag();
			echo $tag->format_tags_as_links($_POST["tags"]);
		}
		elseif ($_GET["set_tags"]==1)
		{
			$this->set_tags(array(
				"tags" => $_POST["tags"],
				"q_id" => $_POST["q_id"],
			));
		}
		elseif ($_GET["get_quote"]==1)
		{
			echo "get_quote";	
		}
		elseif ($_GET["set_quote"]==1)
		{
			echo "set_quote";	
		}
		elseif ($_GET["get_category"]==1)
		{
			$this->get_category(array(
				"category_id" => $_POST["category_id"],
				"q_id" => $_POST["q_id"],
			));
		}
		elseif ($_GET["set_category"]==1)
		{
			$this->set_category(array(
				"category_id" => $_POST["category_id"],
				"q_id" => $_POST["q_id"],
			));
		}
	}

	function get_tags($arr)
	{
		arr($arr);
	}

	function set_tags($arr)
	{
		$tag = new quote();
		$tag->set_tags($arr);
	}

	function get_category($arr)
	{
		$category = new quote();
		$category->get_category($arr);
	}

	function set_category($arr)
	{
		$category = new quote();
		$category->set_category($arr);
	}

  function get_quote_for_facebook($q_id)
	{
    global $config_q;

    $a_quote = quote::get_quotes(array(
        "q_id" => $q_id
    ));
    
    $author_name = str_replace('"', '\"', $a_quote[0]["author_name"]);

    if (strlen($a_quote[0]["author_born_death"])) {
      $author_born_death = ", " . $a_quote[0]["author_born_death"];
    } else {
      $author_born_death = "";
    }
    $quote = str_replace('"', '\"', $a_quote[0]["quote"]);

    if (isset($a_quote[0]["author_img"])) {
      $author_img = $config_q["baseurl_static2"]."/cache/images/".str_replace(".jpg", "_90px.jpg", $a_quote[0]["author_img"]["nice_name"]);
    } else {
      $author_img = $config_q["baseurl_static2"]."/img/noauthorimg.jpg";
    }

    $quote_url = $config_q["baseurl"]."/"._("quotes")."/"._("authors")."/".$a_quote[0]["url_friendly_author_name"];
    $quote_url2 = $config_q["baseurl"]."/"._("quotes")."/"._("authors")."/".$a_quote[0]["url_friendly_author_name"]."/".$a_quote[0]["quotes_id"];
    
    $out = "var attachment = {";
    $out .= "'name' : \"".$author_name.$author_born_death."\",";
    //$out .= "'caption' : \"".$quote."\",";
		$out .= "'description': \"".$quote."\",";
    $out .= "'media': [{'type': 'image', 'src': '".$author_img."', 'href': '".$quote_url."'}] };";
    
    $out .= "var action_links = [{'text':'"._("Go to quotation")."', 'href':'".$quote_url2."'}];";
    
    return $out;
	}
}

?>