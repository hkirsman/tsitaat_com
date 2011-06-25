<?php
/**
*
* memberlist.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-30 - phpbb.ee
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
        'ABOUT_USER'    => 'Profiil',
        'ACTIVE_IN_FORUM'       => 'Kõige aktiivsem foorum',
        'ACTIVE_IN_TOPIC'       => 'Kõige aktiivsem teema',
        'ADD_FOE'       => 'Lisa vaenlasena',
        'ADD_FRIEND'    => 'Lisa sõbrana',
        'AFTER' => 'Pärast',
        'ALL'   => 'Kõik',
        'BEFORE'        => 'Enne',
        'CC_EMAIL'      => 'Saada koopia sellest e-kirjast endale.',
        'CONTACT_USER'  => 'Võta ühendust kasutajaga',
        'DEST_LANG'     => 'Keel',
        'DEST_LANG_EXPLAIN'     => 'Vali keel selle sõnumi saaja jaoks.',
        'EMAIL_BODY_EXPLAIN'    => 'Sõnum saadetakse tekstina, ära lisa HTML\'i või BBcode\'t. Tagasisaatmisaadressiks määratakse sinu e-posti aadress.',
        'EMAIL_DISABLED'        => 'Vabandame, kõik e-postiga seotud funktsioonid on keelatud.',
        'EMAIL_SENT'    => 'E-kiri on saadetud.',
        'EMAIL_TOPIC_EXPLAIN'   => 'Sõnum saadetakse tekstina, ära lisa HTML\'i või BBcode\'t. Teema info on juba sõnumis. Tagasisaatmisaadreassiks määratakse sinu e-posti aadress.',
        'EMPTY_ADDRESS_EMAIL'   => 'Pead sisestama korrektse saaja aadressi.',
        'EMPTY_MESSAGE_EMAIL'   => 'Pead sisestama sõnumi.',
        'EMPTY_MESSAGE_IM'      => 'Pead sisestama sõnumi.',
        'EMPTY_NAME_EMAIL'      => 'Pead sisestama saaja õige nime.',
        'EMPTY_SUBJECT_EMAIL'   => 'Pead sisestama pealkirja.',
        'EQUAL_TO'      => 'Võrdne',
        'FIND_USERNAME_EXPLAIN' => 'Kasuta seda vormi, et otsida kindlaid kasutajaid. Sa ei pea täitma kõiki välju. Osalise sobivuse jaoks kasuta * . Kui sisestad kuupäevi, kasuta formaati <kbd>YYYY-MM-DD</kbd>, nt <samp>1990-04-04</samp> Kasuta märkimise kaste, et valida ühte või mitmeid kasutajanimesid ja kliki Vali Märgitud nupule, et minna tagasi eelmisele vormile.',
        'FLOOD_EMAIL_LIMIT'     => 'Praegu ei saa rohkem e-maile saata, proovi hiljem uuesti.',
        'GROUP_LEADER'  => 'Grupi liider',
        'HIDE_MEMBER_SEARCH'    => 'Peida kasutajate otsingust',
        'IM_ADD_CONTACT'        => 'Lisa kontakt',
        'IM_AIM'        => 'Sul peab olema AOL Messenger installeeritud, et kasutada seda.',
        'IM_AIM_EXPRESS'        => 'AIM Ekspress',
        'IM_DOWNLOAD_APP'       => 'Lae programm alla',
        'IM_ICQ'        => 'Kasutajad võivad olla määranud võõrastelt sõnumite vastuvõtmise.',
        'IM_JABBER'     => 'Kasutajad võivad olla määranud võõrastelt sõnumite vastuvõtmise.',
        'IM_JABBER_SUBJECT'     => 'See on automaatne sõnum, ära sellele vasta! Sõnum kasutajalt%1$s, %2$s.',
        'IM_MESSAGE'    => 'Sinu sõnum',
        'IM_MSNM'       => 'Sul peab olema installeeritud Windows Messenger, et seda funktsiooni kasutada.',
        'IM_MSNM_BROWSER'       => 'Sinu brauser ei toeta seda.',
        'IM_MSNM_CONNECT'       => 'MSNM pole sees.\\nPead MSN messengeri sisse logima.',
        'IM_NAME'       => 'Sinu nimi',
        'IM_NO_DATA'    => 'Sellel kasutajal pole sobivat kontakteerumisinfot',
        'IM_NO_JABBER'  => 'Vabandame, otsene sõnumite saatmine Jabberi kaudu siin serveris on keelatud. Sul peab olema Jabberi programm installeeritud, et võtta kasutajaga ühendust.',
        'IM_RECIPIENT'  => 'Saaja',
        'IM_SEND'       => 'Saada sõnum',
        'IM_SEND_MESSAGE'       => 'Saada sõnum',
        'IM_SENT_JABBER'        => 'Sinu sõnum kasutajale %1$s on edukalt saadetud.',
        'IM_USER'       => 'Saada kiirsõnum',
        'LAST_ACTIVE'   => 'Viimati foorumil',
        'LESS_THAN'     => 'Vähem kui',
        'LIST_USER'     => '1 kasutaja',
        'LIST_USERS'    => '%d kasutajat',
        'LOGIN_EXPLAIN_LEADERS' => 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne juhtkonna vaatamist.',
        'LOGIN_EXPLAIN_MEMBERLIST'      => 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne kasutajate nimekirja vaatamist.',
        'LOGIN_EXPLAIN_SEARCHUSER'      => 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne kasutajate otsimist.',
        'LOGIN_EXPLAIN_VIEWPROFILE'     => 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne profiilide vaatamist.',
        'MORE_THAN'     => 'Rohkem kui',
        'NO_EMAIL'      => 'Sul pole lubatud saata e-kirja sellele kasutajale.',
        'NO_VIEW_USERS' => 'Sul pole lubatud vaadata kasutajate nimekirja või profiile.',
        'ORDER' => 'Järjestus',
        'OTHER' => 'Muu',
        'POST_IP'       => 'Postituse IP/domeen',
        'RANK'  => 'Tiitel',
        'REAL_NAME'     => 'Saaja nimi',
        'RECIPIENT'     => 'Saaja',
        'REMOVE_FOE'    => 'Eemalda vaenlane',
        'REMOVE_FRIEND' => 'Eemalda sõber',
        'SEARCH_USER_POSTS'     => 'Otsi kasutaja postitusi',
        'SELECT_MARKED' => 'Vali märgitud',
        'SELECT_SORT_METHOD'    => 'Vali sorteerimisviis',
        'SEND_AIM_MESSAGE'      => 'Saada AIM sõnum',
        'SEND_ICQ_MESSAGE'      => 'Saada ICQ sõnum',
        'SEND_IM'       => 'Messengerid',
        'SEND_JABBER_MESSAGE'   => 'Saada Jabberi sõnum',
        'SEND_MESSAGE'  => 'Sõnum',
        'SEND_MSNM_MESSAGE'     => 'Saada MSN Messengeri sõnum',
        'SEND_YIM_MESSAGE'      => 'Saada YIM sõnum',
        'SORT_EMAIL'    => 'e-postiaadressi järgi',
        'SORT_LAST_ACTIVE'      => '"viimati foorumil" kuupäeva järgi',
        'SORT_POST_COUNT'       => 'postituste arvu järgi',
        'USERNAME_BEGINS_WITH'  => 'Kasutajanimi algab',
        'USER_ADMIN'    => 'Administreeri kasutajat',
        'USER_BAN'            => 'Bännimine',
        'USER_FORUM'    => 'Kasutaja statistika',
		'USER_LAST_REMINDED'	=> array(
		0		=> 'Meeldetuletust pole saadetud',
		1		=> '%1$d meeldetuletus saadetud<br />» %2$s',
	),
        'USER_ONLINE'   => 'Foorumil',
        'USER_PRESENCE' => 'Foorumil',
        'VIEWING_PROFILE'       => 'Vaatan profiili - %s',
        'VISITED'       => 'Viimane külastus',
        'WWW'   => 'Veebileht',
));

?>
