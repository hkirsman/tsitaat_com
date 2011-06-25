<?php
require $config_q["basepath"].'/classes/Tenjin/Tenjin.php';
$tenjin = new Tenjin_Engine();

$locale = $config_q["locale"];
putenv("LC_ALL=$locale");
switch ($locale)
{
	case "et":
		$foo = setlocale(LC_ALL, "et_EE");
		break;
	case "en":
		$foo = setlocale(LC_ALL, "en_US");
		break;
	case "de":
		$foo = setlocale(LC_ALL, "de_DE");
		break;
	
}
bindtextdomain("messages", "./locale");
textdomain("messages");
bind_textdomain_codeset("messages", 'UTF-8');

$context = array();

// init phpbb session and logout
{
	//phpbb3 login, user session management
	$phpbb_root_path = $config_q["basepath"].$config_q["forum_base"]."/";
  $context["returnAddress"] = "http://".$_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  $context["returnAddressEncoded"] = urlencode($context["returnAddress"]);
	//including phpBB3 stuff   
	define('IN_PHPBB', true);
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	include($phpbb_root_path . 'common.' . $phpEx);
	include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

  if ($_GET["mode"]=="logout") {
    $user->session_kill();
    $user->session_begin();
    $redirect = urldecode($_GET["redirect"]);
    $redirect = explode("?", $redirect);
    header("Location: ".$redirect[0]);
    die();
  } else {
    // Start phpbb3 session management
    $user->session_begin();
    $auth->acl($user->data);
    $user->setup('viewforum');
  }
	

}

function apacheversion()
{
	//$ver = split("[/ ]", $_SERVER['SERVER_SOFTWARE']);
	$ver = preg_split  ( '/\//', $_SERVER['SERVER_SOFTWARE'] );
	$apver = "$ver[1] $ver[2]";
	return $apver;
}

function can_access()
{
	global $user;
	if ($user->data["user_id"]==2) {
		return true;
	}
	return false;
}

function acl()
{
	global $config_q;
	if (!can_access())
	{
		header("HTTP/1.0 404 Not Found");
		header("Location: ".$config_q["baseurl"]); 
	}
}

if ($config_q["detect_section_method"] == DETECT_SECTION_METHOD_NORRIS ) {
	$a_path = explode('/', trim($_SERVER['PHP_SELF'], "/"));
} elseif ($config_q["detect_section_method"] == DETECT_SECTION_METHOD_GODADDY ) {
	$a_path = explode('/', trim($_SERVER['SCRIPT_URL'], "/"));
} else {
	$a_path = explode('/', trim($_SERVER["REDIRECT_URL"], "/"));
}

require_once("classes/db.php");
require_once("labels.php");
require_once("classes/utf8/trim.php");
require_once("classes/ajax.php");
require_once("classes/supercache.php");
require_once("classes/image.php");
require_once("classes/date.php");
require_once("classes/defs.php");
//require_once("error.php");
require_once("classes/user_q.php");
//$user_q = new user_q();
require_once("classes/detect_section.php");
$section = detect_section::check();
#require_once("tag.php");
require_once("classes/author.php");
require_once("classes/quote.php");
require_once("classes/tag.php");
#require_once("autosuggest.php");
#require_once("robots.php");
#require_once("sitemap.php");
require_once("classes/menu.php");
$menu = new menu();
#require_once("vote.php");
#require_once("tinyurl.php");
#require_once("twitter.php");
#include_once('twitter_quote.php');
include_once('classes/category.php');
$category = new category();
require_once("classes/rpx.php");
require_once("classes/localization.php");
$localization = new localization();
require_once("classes/navi.php");
require_once("classes/robots.php");
require_once("classes/sitemap.php");
require_once("classes/source.php");
require_once("classes/facebook.php");
require_once("classes/statistics.php");
require_once("classes/error.php");
require_once("classes/comment.php");

// global vars

{
	//$smarty_q->assign ("title", _("QuoteBook24.com - Worlds best online quotebook"));
  $context["title"] = $context["labels"]["site_title"];
	//$smarty_q->assign ("keywords", _("quote quotes world translations"));
	//$smarty_q->assign ("description", _("QuoteBook24.com is best online source for quotes and quote translations"));


  //$smarty_q->assign ("menu", $menu->out());
  $context["nav"] = $menu->out();
	//$cu = new user_q();
	//$smarty_q->assign ("last_active_users", $cu->get_last_active_users());
	

	//$smarty_q->assign ("slogan", _("Next generation online quotationsbook"));
	//$smarty_q->assign ("baseurl", $config_q["baseurl"]  );
  $context["baseurl"] = $config_q["baseurl"];
	//$smarty_q->assign ("baseurl_static", $config_q["baseurl_static"]  );
  $context["baseurl_static"] = $config_q["baseurl_static"];

	//$smarty_q->assign ("baseurl_static2", $config_q["baseurl_static2"]  );
  $context["baseurl_static2"] = $config_q["baseurl_static2"];
	//$smarty_q->assign ("locale", $config_q["locale"] );
  $context["locale"] = $config_q["locale"];

	//$smarty_q->assign ("tags", _("Tags"));
	//$smarty_q->assign ("category", _("Category"));
	//$smarty_q->assign ("vote", _("Vote"));
	//$smarty_q->assign ("authors", _("Authors"));
	//$smarty_q->assign ("label_username", _("Username"));
	//$smarty_q->assign ("password", _("Password"));
	//$smarty_q->assign ("stay_signed_in", _("stay_signed_in"));
	//$smarty_q->assign ("new_here", _("New here?"));
  //smarty_q->assign ("user_activity", _("User activity"));
	//$smarty_q->assign ("for_nerds", _("For nerds :)"));
  $context["for_nerds"] = _("For nerds :)");
	//$smarty_q->assign ("lang", substr($config_q["locale"], 0, 2));
  $context["lang"] = substr($config_q["locale"], 0, 2);
	//$smarty_q->assign ("rpx_language_preference", $config_q["rpx"]["language_preference"]);
	//$smarty_q->assign ("quotes2", _("quotes"));
	//$smarty_q->assign ("authors2", _("authors"));
	//$smarty_q->assign ("sources2", _("sources"));
  //$smarty_q->assign ("tags2", _("tags"));
	//$smarty_q->assign ("about_quotebook", _("About QuoteBook24.com "));
	//$smarty_q->assign ("section", $section);
  $context["section"] = $section;
	if ($user->data["user_id"]==2)
	{
    $context["admin"] = true;
    $context["categories"] = $category->get_categories();
	}
  $context["username"] = $user->data["username"];
  $context["username_clean"] = $user->data["username_clean"];
  $context["user_id"] = $user->data["user_id"];
  //$smarty_q->assign ("user_type", $user->data["user_type"]);
  //$smarty_q->assign ("group_id", $user->data["group_id"]);
	//$smarty_q->assign ("robots_index", false);

	//$smarty_q->assign ("keywords", _("quotes, quotations, world"));
	//$smarty_q->assign ("author_index", author::get_author_index());
  $context["author_index"] = author::get_author_index();
	//$smarty_q->author_index ("tag_index", tag::get_tag_index());
  $context["tag_index"] = tag::get_tag_index();
  //$smarty_q->assign ("category_index", category::get_categories());
	//$smarty_q->assign ("a_path", $a_path);
  $context["a_path"] = $a_path;
	//$smarty_q->assign ("enable_voting", true);
  $context["enable_voting"] = true;
	//$smarty_q->assign ("show_sidecontent", true);
	//$smarty_q->assign ("search_return_url", $config_q["baseurl"] . "/" . _("search"));
	//$smarty_q->assign ("config_q", $config_q);
	//$smarty_q->assign ("analytics", $config_q["analytics"]);
	////$smarty_q->assign ("label_previous_page", _("Previous page"));
	////$smarty_q->assign ("label_next_page", _("Next page"));
	////$smarty_q->assign ("label_share_on_facebook", _("Share on Facebook"));
	//$smarty_q->assign ("google_site_verification", $config_q["google_site_verification"]);
  //$smarty_q->assign ("current_url", curPageURL());
  $context["session_id"] = $user->data["session_id"];
  if ($user->data['user_id'] == ANONYMOUS) {
    $context["logged"] = false;
  } else {
    $context["logged"] = true;
  }
	$context["compress_css"] = $config_q["compress_css"];

}


?>