<?php

class detect_section
{
  public static function check() {
    global $user_q, $a_path, $context;

    if( $_GET["ajax"] == 1 ) {
      return "ajax";
    } else if ( $_GET["c"] == "admin" ) {
      if ( $_GET["action"] == "manage_waitinglist" ) {
				return "manage_waitinglist";
			}
			if ( $_GET["action"] == "manage_not_active_quotations" ) {
				return "manage_not_active_quotations";
			}
			if ( $_GET["action"] == "generate_indexes" ) {
				return "generate_indexes";
			}
			if ( $_GET["action"] == "find_similar_quotes" ) {
				return "find_similar_quotes";
			}
			if ( $_GET["action"] == "get_new_quotes_from_zitate_de" ) {
				return "get_new_quotes_from_zitate_de";
			}
			return "admin";
		} else if ($a_path[0] == "") {
			return "frontpage";
		//} else if ($a_path[0] == "cache" && $a_path[1] == "images" ) {
		//	return "image";
    } else if ($a_path[0] == $context["labels"]["quotes_clean"]) {
			if ($a_path[1] ==  $context["labels"]["authors_clean"]) {
				if (strlen(utf8_decode($a_path[2])) == 1 && !isset($a_path[3])) {
					return "quotes-authors-%author_index%";
				}
				if (strlen(utf8_decode($a_path[2])) > 1 && !isset($a_path[3])) {
					return "quotes-authors-%author%";
				}
				if (strlen(utf8_decode($a_path[2])) > 0 && is_numeric($a_path[3]) && !isset($a_path[4])) {
					return "quotes-authors-%author%-%quote_id%";
				}
				if (strlen(utf8_decode($a_path[2])) > 0 && !isset($a_path[4])) {
					if (preg_match("/^".$context["labels"]["page_clean"]."[0-9]+$/U", $a_path[3])) {
						return "quotes-authors-%author%-%page%";
					}
				}
				if (!isset($a_path[2]) ) {
					return "quotes-authors";
				}
				return false;
			}
			if ($a_path[1] ==  $context["labels"]["tags_clean"]) {
				if (strlen(utf8_decode($a_path[2])) == 1 && !isset($a_path[3])) {
					return "quotes-tags-%tag_index%";
				}
				if (strlen(utf8_decode($a_path[2])) > 1 && !isset($a_path[3])) {
					return "quotes-tags-%tag%";
				}
				if (strlen(utf8_decode($a_path[2])) > 1 && !isset($a_path[4])) {
					if (preg_match("/^".$context["labels"]["page_clean"]."[0-9]+$/U", $a_path[3])) {
						return "quotes-tags-%tag%-%page%";
					}
				}
				if (!isset($a_path[2]) ) {
					return "quotes-tags";
				}
				return false;
			}


      if ($a_path[1] ==  $context["labels"]["sources_clean"]) {
        if (strlen(utf8_decode($a_path[2])) == 1 && !isset($a_path[3])) {
          return "quotes-sources-%source_index%";
        }
        if (strlen(utf8_decode($a_path[2])) > 1 && !isset($a_path[3])) {
          return "quotes-sources-%source%";
        }
        if (!isset($a_path[2]) ) {
          return "quotes-sources";
        }
        return false;
      }
    
      if ($a_path[1] == $context["labels"]["top-100-quotes_clean"]) {
        return "top-100-quotes";
      }

/*
      if ($a_path[1] == $context["labels"]["top-100-200-quotes_clean"]) {
        return "top-100-200-quotes";
      }*/
    } else if ( $a_path[0] == $context["labels"]["search_clean"] )  {
      return "search";
    } else if ( $a_path[0] == $context["labels"]["statistics_clean"] )  {
      return "statistics";
    } else if ( $a_path[0] == $context["labels"]["fans_clean"] )  {
      return "fans";
    }
		else if ( is_numeric($a_path[0]) ) {
			return "shortcut";
		} else if ($a_path[0] == $context["labels"]["latest-quotes_clean"]) {
			if(!isset($a_path[1]) ) {
				return "latest-quotes";
			}
			if(isset($a_path[1]) ) {
				if (preg_match("/^".$context["labels"]["page_clean"]."[0-9]+/U", $a_path[1])) {
					return "latest-quotes-%page%";
				}
				return false;
			}
			return false;
		} else if ( $a_path[0] == $context["labels"]["contributors_clean"] && !isset($a_path[1]) ) {
			return "contributors";
		} else if ( $a_path[0] == "rpx_auth" && !isset($a_path[1]) ) {
			return "rpx_auth";
		} else if ( user_q::user_exists($a_path[0]) ) {
        if(isset($a_path[1])) {
          if($a_path[1]==$context["labels"]["favorite-quotes_clean"]) {
            return "userprofile-favorite-quotes";
          } elseif ($a_path[1]==$context["labels"]["added-quotes_clean"]) {
            return "userprofile-added-quotes";
          }
        } else {
          return "userprofile";
        }
		}
	}
}
?>