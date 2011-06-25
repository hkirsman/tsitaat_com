<?php
/**
*
* search.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-11-30 - Amphor - phpbb.ee
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'	=> 'Kõik võimalikud',
	'ALL_RESULTS'	=> 'Kõik tulemused',
	'DISPLAY_RESULTS'	=> 'Näita tulemusi',
	'FOUND_SEARCH_MATCH'	=> 'Otsing leidis %d vaste',
	'FOUND_SEARCH_MATCHES'	=> 'Otsing leidis %d vastet',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Otsing leidis rohkem kui %d vastet',
	'GLOBAL'	=> 'Üldteadaanne',
	'IGNORED_TERMS'	=> 'ignoreeritud',
	'IGNORED_TERMS_EXPLAIN'	=> 'Järgnevaid sõnu sinu otsingus ignoreeriti, sest nad on liiga tavalised: <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'Hüppa postitusse',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Sa pead olema registreeritud ja sisse logitud, et oma postitusi vaadata.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Foorum nõuab, et oleksid sisse logitud, et vaadata oma postitusi.',
    'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => 'Sa sisestasid liiga palju otsisõnu. Palun ära sisesta üle %1$d sõna.',
	'NO_KEYWORDS'	=> 'Sa pead sisestama vähemalt ühe otsingusõna. Iga sõna peab koosnema vähemalt %d sümbolist ja ei tohi sisaldada rohkem kui %d sümbolit, välja arvatud wildcard\'id',
	'NO_RECENT_SEARCHES'	=> 'Viimasel ajal pole otsinguid sooritatud.',
	'NO_SEARCH'	=> 'Vabandame, sul pole õigusi otsida foorumitest.',
	'NO_SEARCH_RESULTS'	=> 'Sobivaid vasteid ei leitud',
	'NO_SEARCH_TIME'	=> 'Vabandame, otsing pole hetkel kasutatav. Proovi mõne aja pärast uuesti',
	'WORD_IN_NO_POST'	=> 'Postitusi ei leitud, sest sõna <strong>%s</strong> ei sisaldu üheski postituses.',
	'WORDS_IN_NO_POST'	=> 'Postitusi ei leitud, sest sõnad <strong>%s</strong> ei sisaldu üheski postituses.',
	'POST_CHARACTERS'	=> 'postituse sümbolit',
	'RECENT_SEARCHES'	=> 'Eelmised otsingud',
	'RESULT_DAYS'	=> 'Limiteeri vastuseid eelmise',
	'RESULT_SORT'	=> 'Sorteeri vastused',
	'RETURN_FIRST'	=> 'Tagasi esimese juurde',
	'RETURN_TO_SEARCH_ADV'	=> 'Tagasi täiendatud otsingusse',
	'SEARCHED_FOR'	=> 'Otsingusõna kasutatud',
	'SEARCHED_TOPIC'	=> 'Otsitud teema',
	'SEARCH_ALL_TERMS'	=> 'Otsi kõiki termineid või kasuta sõnu selles samas järjestuses',
	'SEARCH_ANY_TERMS'	=> 'Otsi kõiki termineid',
	'SEARCH_AUTHOR'	=> 'Otsi autori järgi',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Kasuta * wildcardina osalistes vastetes',
	'SEARCH_FIRST_POST'	=> 'Teemade esimesed postitused ainult',
	'SEARCH_FORUMS'	=> 'Otsi foorumitest',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Vali foorumi(id), millest soovid otsida. Alafoorumitest otsitakse automaatselt, kui sa seda valikut siin all ei keela.',
	'SEARCH_IN_RESULTS'	=> 'Otsi nendest vastetest',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pane <strong>+</strong> sõna ette, mille peab otsingusse kaasama ja <strong>-</strong> sõna ette, mida ei tohi otsingusse kaasata. Eralda sõnade nimekiri <strong>|</strong> märgiga ja pane need sulgudesse, kui  soovid, et ainult ühe sõnaga otsitaks. Kasuta * wildcardina osalistes vastetes.',
	'SEARCH_MSG_ONLY'	=> 'Ainult postitustest',
	'SEARCH_OPTIONS'	=> 'Otsingu valikud',
	'SEARCH_QUERY'	=> 'Otsingu järjestus',
	'SEARCH_SUBFORUMS'	=> 'Otsi alamfoorumitest',
	'SEARCH_TITLE_MSG'	=> 'Pealkirjadest ja postitustest',
	'SEARCH_TITLE_ONLY'	=> 'Teema pealkirjadest ainult',
	'SEARCH_WITHIN'	=> 'Otsi',
	'SORT_ASCENDING'	=> 'Kasvav',
	'SORT_AUTHOR'	=> 'Autor',
	'SORT_DESCENDING'	=> 'Kahanev',
	'SORT_FORUM'	=> 'Foorum',
	'SORT_POST_SUBJECT'	=> 'Postituse teema',
	'SORT_TIME'	=> 'Postituse aeg',
	'TOO_FEW_AUTHOR_CHARS'	=> 'Sa pead sisestama vähemalt %d sümbolit autori nimeks.',
));

?>