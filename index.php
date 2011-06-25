<?php
// session_start();
//ob_start( 'ob_gzhandler' );
// get configuration

//ob_start("ob_gzhandler");

require("constants.php");
require("config.php");

require("init.php");

if ($_GET["desktop"] == "true" )  {
	require_once("classes/desktop_wallpaper.php");
	desktop_wallpaper::generate("test.jpg");

	die("F");
}


$i_script_start = microtime(1);

if ($section != "image")
{
	/*
	header("Content-Type: text/html; charset=utf-8");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache"); // HTTP/1.0
	*/
	$smarty->caching = 0;
}

switch ($section)
{
	case "ajax":
		new ajax();
		die();
		break;
/*
Frontpage
*/
	case "frontpage":
    $context["robots_index"] = true;
 		$context["description"] = $context["labels"]["description_default"];
    $context["keywords"] = $context["labels"]["keywords_default"];
		$context["h1"] = $context["labels"]["slogan"];
		$context["fake_h1"] = $context["labels"]["latest_quotations"];
		$quotes_temp = quote::get_quotes(array(
			"start" => 0,
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time desc",
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] = navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/".$context["labels"]["latest-quotes_clean"],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		break;
	/*case "image":
		$i = new image(array(
			"file" => $a_path[2]
		));
    break;*/
/*
Authors
*/
	case "quotes-authors":
		$smarty_q->assign("h1", _("Quotations by Author"));
		$smarty_q->assign("fake_h1", _("Quotations by Author"));
    break;
	case "quotes-authors-%author_index%":
		$context["h1"] == _("Quotations by Author");
		$context["fake_h1"] = _("Quotations by Author") . ": " . utf8_strtoupper($a_path[2]);
		$context["authors_list"] = author::get_authors(array(
			"char" => $a_path[2]));
		break;
	case "quotes-authors-%author%":
		$context["robots_index"] = true;
		$quotes_temp = quote::get_quotes(array(
			"url_friendly_author_name" => $a_path[2],
			"start" => (navi::get_current_page()-1)*$config_q["quotes_on_page"],
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time asc",
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] = navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/"._("quotes")."/"._("authors")."/".$a_path[2],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		if (strlen($quotes_temp[0]["author_born_death"])>0)
		{
			$author_born_death = " (" . $quotes_temp[0]["author_born_death"] . ")";
		}
		$context["h1"] = $quotes_temp[0]["author_name"] . " " . $context["labels"]["quotes_clean"];
		$context["fake_h1"] = $quotes_temp[0]["author_name"] . $author_born_death;
		$context["profession"] = $quotes_temp[0]["author_profession_parsed"];
		$context["title"] = $quotes_temp[0]["author_name_wo_brackets"] . " " . $context["labels"]["quotes_clean"];
		$context["description"] = $quotes_temp[0]["author_name"] . " " . $context["labels"]["quotes_clean"];
    $context["keywords"] = $smarty_q->tpl_vars['keywords']->value . ", " . tag::get_keywords_for_author_meta_description($a_path[2], $quotes_temp);
    break;
	case "quotes-authors-%author%-%page%":
		$quotes_temp = quote::get_quotes(array(
			"url_friendly_author_name" => $a_path[2],
			"start" => (navi::get_current_page()-1)*$config_q["quotes_on_page"],
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time asc",
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] =navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/".$context["labels"]["quotes_clean"]."/"._("authors")."/".$a_path[2],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		$context["h1"] = $quotes_temp[0]["author_name"].", ".$quotes_temp[0]["author_born_death"];
		$context["fake_h1"] = $quotes_temp[0]["author_name"]." ".$context["labels"]["quotes_clean"];
		$context["profession"] = $quotes_temp[0]["author_profession_parsed"];
		$context["description"] = $quotes_temp[0]["author_name"].", ".$quotes_temp[0]["author_born_death"];
    $context["keywords"] = $smarty_q->tpl_vars['keywords']->value . ", " . tag::get_keywords_for_author_meta_description($a_path[2], $quotes_temp);
    break;
	case "quotes-authors-%author%-%quote_id%":
 		$quotes_temp = quote::get_quotes(array(
			"q_id" => $a_path[3]
		));
    $context["quotes"] = $quotes_temp;

		if (strlen($quotes_temp[0]["author_born_death"])>0)
		{
			$author_born_death = " (" . $quotes_temp[0]["author_born_death"] . ")";
		}
		$context["h1"] = $quotes_temp[0]["author_name"] . " " . $context["labels"]["quotes_clean"];
		$context["fake_h1"] = $quotes_temp[0]["author_name"] . $author_born_death;
		$context["profession"] = $quotes_temp[0]["author_profession_parsed"];
		$context["title"] = $quotes_temp[0]["author_name_wo_brackets"] . " " . $context["labels"]["quotes_clean"];
    $context["keywords"] = $smarty_q->tpl_vars['keywords']->value . ", " . tag::get_keywords_for_author_meta_description($a_path[2], $quotes_temp);
    $context["comments"] = comment::get_comments(array("quote_id"=>$a_path[3]));

    /*
		$quotes_temp = quote::get_quotes(array(
			"q_id" => $a_path[3]
		));
		$smarty_q->assign("quotes", $quotes_temp);
		if (strlen($quotes_temp[0]["author_born_death"])>0)
		{
			$author_born_death = " (" . $quotes_temp[0]["author_born_death"] . ")";
		}
		$smarty_q->assign("h1", $quotes_temp[0]["author_name"] . " " . _("quotes"));
		$smarty_q->assign("fake_h1", $quotes_temp[0]["author_name"] . $author_born_death);
		$smarty_q->assign("profession",  $quotes_temp[0]["author_profession_parsed"]);
		$smarty_q->assign ("title", $quotes_temp[0]["author_name_wo_brackets"] . " " . _("quotes"));
		$smarty_q->assign("googlead01_position", quote::get_googlead01_position($quotes_temp));
    $smarty_q->assign("keywords", $smarty_q->tpl_vars['keywords']->value . ", " . tag::get_keywords_for_author_meta_description($a_path[2], $quotes_temp));
    $smarty_q->assign("comments", comment::get_comments(array("quote_id"=>$a_path[3])));
    */
		break;
/*
Tags
*/
	case "quotes-tags":
		$smarty_q->assign("h1", "Quotations by " . _("tags"));
		$smarty_q->assign("fake_h1", "Quotations by " . _("tags"));
		break;
	case "quotes-tags-%tag_index%":
		$context["h1"] = "";
		$context["fake_h1"] = _("Tag category") . ": " . utf8_strtoupper($a_path[2]);
    if($a_path[2]=="-") {
      $quotes_temp = quote::get_quotes(array(
				"tag" => ""
			)); 
      $context["quotes"] = $quotes_temp;
    } else {
      $context["taglist"] = tag::get_tags(array(
        "char" => $a_path[2],
      ));
    }
		break;
	case "quotes-tags-%tag%":
		$context["robots_index"] = true;
		$context["h1"] = str_replace("_", " ", $a_path[2]) . " - " . _("quotes");
		$context["fake_h1"] = _("Tag category") . ": " . str_replace("_", " ",$a_path[2]);
		$context["description"] = str_replace("_", " ", $a_path[2]) . " - " . _("quotations");
		$context["title"] = str_replace("_", " ", $a_path[2]) . " - " . _("quotes");
		$quotes_temp = quote::get_quotes(array(
			"start" => (navi::get_current_page()-1)*$config_q["quotes_on_page"],
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time asc",
			"tag" => $a_path[2],
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] = navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/"._("quotes")."/"._("tags")."/".$a_path[2],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		break;
	case "quotes-tags-%tag%-%page%":
		$smarty_q->assign ("robots_index", true);
		$smarty_q->assign("h1", str_replace("_", " ", $a_path[2]) . " - " . _("quotes"));
		$smarty_q->assign("fake_h1", _("Tag category") . ": " . str_replace("_", " ",$a_path[2]));
		$smarty_q->assign("description", str_replace("_", " ", $a_path[2]) . " - " . _("quotations"));
		$smarty_q->assign ("title", str_replace("_", " ", $a_path[2]) . " - " . _("quotes"));
		$quotes_temp = quote::get_quotes(array(
			"start" => (navi::get_current_page()-1)*$config_q["quotes_on_page"],
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time asc",
			"tag" => $a_path[2],
		));
		$smarty_q->assign ("quotes", $quotes_temp);
		$smarty_q->assign("navi", navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/"._("quotes")."/"._("tags")."/".$a_path[2],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		)));
		$smarty_q->assign("googlead01_position", quote::get_googlead01_position($quotes_temp));
		break;
/*
Sources
*/
	case "quotes-sources-%source_index%":
		$smarty_q->assign("h1", _("Source category:") . " " . "a");
		$smarty_q->assign("fake_h1", _("Source category:") . " " . "a" );
		break;
	case "quotes-sources-%source%":
		$quotes_temp = quote::get_quotes(array(
			"start" => 0,
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time asc",
			"url_friendly_source_name" => $a_path[2],
		));
		if (count($quotes_temp))
		{
			$smarty_q->assign("robots_index", true);
			$smarty_q->assign("h1", $quotes_temp[0]["source_title_parsed"] . " " . _("quotes"));
			$smarty_q->assign("description", $quotes_temp[0]["source_title_parsed"] . " " . _("quotations"));
      $smarty_q->assign("keywords", $smarty_q->tpl_vars['keywords']->value . ", " . $quotes_temp[0]["source_title_parsed2"]);
			$smarty_q->assign("fake_h1",	$quotes_temp[0]["source_title_parsed"] . " " . _("quotations"));
			$smarty_q->assign("title", $quotes_temp[0]["source_title_parsed"] . " " . _("quotes"));
			$smarty_q->assign("quotes", $quotes_temp);
			$smarty_q->assign("googlead01_position", quote::get_googlead01_position($quotes_temp));
			$smarty_q->assign("amazon_product_link", $quotes_temp[0]["amazon_product_link"]);
		}
		else
		{
			$smarty_q->assign("h1", "");
			$smarty_q->assign("fake_h1",	_("There is no such source."));
			//header("HTTP/1.0 404 Not Found"); 
		}
		break;
	case "quotes-sources":
		$smarty_q->assign("h1", _("Quotes by source"));
		$smarty_q->assign("fake_h1", _("Quotations by source"));
			break;
/*
Top
*/
	case "top-100-quotes":
		$quotes_temp = quote::get_quotes(array(
			"start" => 0,
			"length" => 100,
			"order_by" => "rank desc",
		));
    $context["robots_index"] = true;
    $context["h1"] = _("Top 100 quotes");
    $context["description"] = _("Best 100 quotations");
    $context["fake_h1"] = _("Top 100");
    $context["title"] = _("Top 100 quotes");
    $context["quotes"] = $quotes_temp;
    $context["enable_voting"] = false;
    break;
/*
	case "top-100-200-quotes":
		$quotes_temp = quote::get_quotes(array(
			"start" => 100,
			"length" => 100,
			"order_by" => "rank desc",
		));
		$smarty_q->assign("h1", _("Top 100-200 quotes"));
		$smarty_q->assign("description", _("Best quotations - top 100-200"));
		$smarty_q->assign("fake_h1", _("Top 100-200"));
		$smarty_q->assign("title", _("Top 100-200 quotes"));
		$smarty_q->assign("quotes", $quotes_temp);
		$smarty_q->assign("googlead01_position", quote::get_googlead01_position($quotes_temp));
		$smarty_q->assign ("enable_voting", false);
			break;
      */
	case "fans":
    $context["h1"] = _("Tsitaat.com fans");
    $context["fake_h1"] = _("Our fans");
    $context["title"] = _("Tsitaat.com fans");
			break;

/*
Latest quotations
*/
	case "latest-quotes":
	$context["robots_index"] = false;	
  $smarty_q->assign("h1", _("Latest quotes"));
		$smarty_q->assign("fake_h1", _("Latest quotes"));
		$quotes_temp = quote::get_quotes(array(
			"start" => 0,
			"length" => 10,
			"order_by" => "created_time desc",
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] = $navi->get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/".$a_path[0],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		
		break;
	case "latest-quotes-%page%":
		$context["h1"] = _("Latest quotes");
		$context["fake_h1"] = _("Latest quotes");
		$quotes_temp = quote::get_quotes(array(
			"start" => (navi::get_current_page()-1)*$config_q["quotes_on_page"],
			"length" => $config_q["quotes_on_page"],
			"order_by" => "created_time desc",
		));
		$context["quotes"] = $quotes_temp;
		$context["navi"] = navi::get_page_navi(array(
			"baseurl" => $config_q["baseurl"]."/".$a_path[0],
			"max_items" =>  $quotes_temp[0]["quotes_total_count"],
		));
		break;
/*
Search
*/
	case "search":
		$smarty_q->assign("title", _("Search"));
		$smarty_q->assign("show_sidecontent", false);
		$smarty_q->assign("content", '
			<div id="cse-search-results"></div>
			<script type="text/javascript">
				var googleSearchIframeName = "cse-search-results";
				var googleSearchFormName = "cse-search-box";
				var googleSearchFrameWidth = 900;
				var googleSearchDomain = "www.google.com";
				var googleSearchPath = "/cse";
			</script>
			<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
		');
		break;
	case "statistics":
		$context["h1"] = "";
		$context["fake_h1"] = _("Statistics");
		$content = author::get_author_top();
		$content .= "<br /><h2>"._("Other statistics")."</h2>";
		$content .= _("Quotations count") . ": ". statistics::quote_count() . "<br />";
		if ($config_q["locale"] == "et" ) {
			$content .= _("User count") . ": ". statistics::user_count() . "<br />";
		}
		$content .= _("Domain registration") . ": ". date("d.m.Y", $config_q["domain_registration_time"]) . "<br />";
		$content .= _("Quotations add rate per day") . ": ". round( statistics::quote_count()/((time()-$config_q["domain_registration_time"])/3600/24), 1 );
		$context["content"] = $content;
		break;
	case "shortcut":
		header("Location: ".quote::get_long_link_for_permalink($a_path[0]),TRUE,301);
		die();
		break;
	case "contributors":
		$smarty_q->assign("h1", _("Quotation contributors"));
		$smarty_q->assign("fake_h1", _("Quotation contributors"));
		break;
	case "rpx_auth":
		$rpx_api = new RPX("12a3cf2d8a9ac5b12ccb865e91c2a75271977bc9", "https://quotebook-24.rpxnow.com/");
		$response = $rpx_api->auth_info($_POST["token"]);
		$xpath = new DOMXPath($response);
		$displayName = $xpath->query("/rsp/profile/displayName")->item(0)->textContent;
		$identifier = $xpath->query('/rsp/profile/identifier')->item(0)->textContent;
		$email = $xpath->query('/rsp/profile/email')->item(0)->textContent;

		$profile = $xpath->query("/rsp/profile/*");

		foreach($profile as $item) {
			arr($item->nodeName);
			arr($item->textContent);
		}
		break;
	case "manage_waitinglist":
		$smarty_q->assign("h1", "");
		$smarty_q->assign("fake_h1", _("Quotation waitinglist"));
		$smarty_q->assign ("quotes", quote::get_from_waitinglist());
		arr(quote::get_from_waitinglist());
	break;
	// A temporary solution to activate quotations
	case "manage_not_active_quotations":
		acl();
		if (isset($_POST["manage_not_active_quotations"]))
		{
			quote::set_random_quote($_POST);
		}
		$smarty_q->assign("h1", "");
		$smarty_q->assign("fake_h1", _("Activate random quote"));
		$smarty_q->assign("categories", category::get_categories());
		$smarty_q->assign("manage_not_active_quotations", true);
		$quotes_temp = quote::get_random_quote();
		//arr($quotes_temp);
		$smarty_q->assign("id", $quotes_temp[0]["id"]);
		$smarty_q->assign("q_id", $quotes_temp[0]["q_id"]);
		$smarty_q->assign("quote", $quotes_temp[0]["quote"]);
		$smarty_q->assign("tag", $quotes_temp[0]["tag"]);
		$smarty_q->assign("author_id", $quotes_temp[0]["author_id"]);
		$smarty_q->assign("author_name", $quotes_temp[0]["author_name"]);
		$smarty_q->assign("category_id", $quotes_temp[0]["category_id"]);
		$smarty_q->assign("author_born_death", $quotes_temp[0]["author_born_death"]);
		$smarty_q->assign("source_title_original", $quotes_temp[0]["source_title_original"]);
		$smarty_q->assign("author_firstname_et", $quotes_temp[0]["author_firstname_et"]);
		$smarty_q->assign("author_firstname_en", $quotes_temp[0]["author_firstname_en"]);
		$smarty_q->assign("author_firstname_de", $quotes_temp[0]["author_firstname_de"]);
		$smarty_q->assign("author_midname_et", $quotes_temp[0]["author_midname_et"]);
		$smarty_q->assign("author_midname_en", $quotes_temp[0]["author_midname_en"]);
		$smarty_q->assign("author_midname_de", $quotes_temp[0]["author_midname_de"]);
		$smarty_q->assign("author_lastname_et", $quotes_temp[0]["author_lastname_et"]);
		$smarty_q->assign("author_lastname_en", $quotes_temp[0]["author_lastname_en"]);
		$smarty_q->assign("author_lastname_de", $quotes_temp[0]["author_lastname_de"]);
		$smarty_q->assign("author_profession_et", $quotes_temp[0]["author_profession_et"]);
		$smarty_q->assign("author_profession_en", $quotes_temp[0]["author_profession_en"]);
		$smarty_q->assign("author_profession_de", $quotes_temp[0]["author_profession_de"]);
		$smarty_q->assign("author_name_freeform_et", $quotes_temp[0]["author_name_freeform_et"]);
		$smarty_q->assign("author_name_freeform_en", $quotes_temp[0]["author_name_freeform_en"]);
		$smarty_q->assign("author_name_freeform_de", $quotes_temp[0]["author_name_freeform_de"]);
		$smarty_q->assign("url_friendly_author_name_et", $quotes_temp[0]["url_friendly_author_name_et"]);
		$smarty_q->assign("url_friendly_author_name_en", $quotes_temp[0]["url_friendly_author_name_en"]);
		$smarty_q->assign("url_friendly_author_name_de", $quotes_temp[0]["url_friendly_author_name_de"]);
		$smarty_q->assign("author_wiki_url_et", $quotes_temp[0]["author_wiki_url_et"]);
		$smarty_q->assign("author_wiki_url_en", $quotes_temp[0]["author_wiki_url_en"]);
		$smarty_q->assign("author_wiki_url_de", $quotes_temp[0]["author_wiki_url_de"]);
		break;
	case "generate_indexes":
		acl();
		tag::generate_index();
		robots::generate("robots_".$config_q["locale"].".txt");
		sitemap::generate("sitemap_".$config_q["locale"].".xml");
		die("done");
		break;
	case "find_similar_quotes":
		acl();
		quote::find_similar_quotes();
		break;
	case "get_new_quotes_from_zitate_de":
		acl();
		quote::get_new_quotes_from_zitate_de();
		break;
	case "admin":
		acl();
		echo "admin";
		break;
	case "userprofile":
		$context["h1"] = "";
		$context["fake_h1"] = _("User") ." ". $a_path[0];

		$userinfo = user_q::user_info($a_path[0]);

		if ($config_q["locale"] == "et")
		{
			$content = ucwords($a_path[0]) . " on olnud tsitaat.com kasutaja alates ".$userinfo["user_regdate_parsed"].'. Ta on '.
      ($userinfo["quotes_added"]?'<a href="'.$user->data["username_clean"]."/".$context["labels"]["added-quotes_clean"].'">':'').
        'lisanud '.$userinfo["quotes_added"].' tsitaati'.
      ($userinfo["quotes_added"]?'</a>':'').
      ', hääletanud '.$userinfo["votes"].' korda ja talle '.
      ($userinfo["favorite_quotes"]?'<a href="'.$user->data["username_clean"]."/".$context["labels"]["favorite-quotes_clean"].'">':'').
        'meeldib '.$userinfo["favorite_quotes"].' tsitaati'.
      ($userinfo["favorite_quotes"]?'</a>.':'');
		}
		else if ($config_q["locale"] == "en")
		{
			$content = $a_path[0] . " has been ".str_replace("http://", "", $config_q["baseurl"])." member since ".$userinfo["user_regdate_parsed"].". He has added ".$userinfo["quotes_added"]." quotations, voted ".$userinfo["votes"]." times and has ".$userinfo["favorite_quotes"]." favourite quotes.";
		}
		else if ($config_q["locale"] == "de")
		{
			$content = $a_path[0] . " has been ".str_replace("http://", "", $config_q["baseurl"])." member since ".date("d.m.Y", $userinfo["user_regdate"]).". He has added 12 quotations, voted 12 times and has 3 favourite quotes.";
		}
		$context["content"] = $content;
		break;
  case "userprofile-favorite-quotes":
    $context["h1"] = "";
		$context["fake_h1"] = _("User") ." ". $a_path[0];

    break;
  case "userprofile-added-quotes":
    echo "lisatud tsitaadid";
    die();
    break;
	default:
		if (!redirect_url($_SERVER["REDIRECT_SCRIPT_URI"]))
		{
			header("HTTP/1.0 404 Not Found"); 
			$context["h1"] = _("");
			$context["fake_h1"] = _("Sorry, but the page was not found!");

			error::log_error($_SERVER["HTTP_HOST"], $_SERVER["SCRIPT_URI"], $_SERVER["HTTP_REFERER"]);
			
			$to = $config_q["admin_email"];
			$subject = "Katkine link " . $_SERVER["HTTP_HOST"] . "'s";
			$body = "Hei, avastasin katkise lingi,\n\n".
			"Täpsemalt:\n".
			"domeen -> " . $_SERVER["HTTP_HOST"] . "\n".
			"katkine link -> " . $_SERVER["SCRIPT_URI"] . "\n".
			"http_referer -> " . $_SERVER["HTTP_REFERER"];
			mail($to, $subject, $body);
		}

/*
		foreach($redirects as $key=>$var)
		{ 
			if ($_SERVER["REDIRECT_SCRIPT_URI"] == $var["from"]) { 
				header("HTTP/1.1 301 Moved Permanently");
				
				header("Location: ".$var["to"]);
				exit();
			}
		}
		*/
}

$context["page_load_took"] = sprintf(_("Page load took %s seconds."), microtime(1) - $i_script_start);

/*
if ($section=="manage_not_active_quotations") {
  $smarty_q->display("pages/manage_not_active_quotations.tpl");
} elseif ($section=="quotes-authors-%author_index%") {
  $smarty_q->display("pages/authors.tpl");
} elseif ($section=="quotes-tags-%tag_index%" && $a_path[2]!="-") {
  $smarty_q->display("pages/tags.tpl");
} elseif ($section=="fans") {
  $smarty_q->display("pages/fans.tpl");
} else {
  $tenjin_template = $config_q["template_dir"].'/frontpage.phtml';
}
*/

$tenjin_template = $config_q["template_dir"].'/frontpage.phtml';
$output = $tenjin->render($tenjin_template, $context);

// static cache
//supercache::write_file($_SERVER["SERVER_NAME"], $_SERVER["REQUEST_URI"], $output, "cache/supercache/");

if ($config_q["compress_content"]) {
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
	ob_start("ob_gzhandler");
	} else {
		ob_start();
	}
}
echo($output);

?>