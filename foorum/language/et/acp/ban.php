<?php
/**
*
* acp_ban.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-25 - phpbb.ee
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
	'1_HOUR'	=> '1 tund',
	'30_MINS'	=> '30 minutit',
	'6_HOURS'	=> '6 tundi',
	'ACP_BAN_EXPLAIN'	=> 'Siin sa saad hallata kasutaja bännimist kasutades: nime, IP-aadresse või e-postiaadresse. Need meetodid hoiavad ära kasutajate ligipääsu ükskõik millisele foorumi osale. Sa saad panna lühikese (maksimum 3000 tähtmärki) bännimise põhjuse kui sa tahad. Seda näidatakse administraatori logis. Sa saad ka märgistada bänni kestvuse. Kui sa tahad, et bänn lõpeks mingil kindlal kuupäeval, siis vali <span style=',
	'BAN_EXCLUDE'	=> 'Välistada bännimisest',
	'BAN_LENGTH'	=> 'Bänni pikkus',
	'BAN_REASON'	=> 'Bänni põhjus',
	'BAN_GIVE_REASON'	=> 'Põhjus, mida näidatakse bännitule',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Bännide nimekiri on edukalt uuendatud.',
	'BANNED_UNTIL_DATE'		=> 'kuni %s', // Näiteks: "kuni E 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (kuni %2$s)', // Näide: "7 päeva (kuni T 14.Jul.2009, 14:44)"
	'EMAIL_BAN'	=> 'Bänni üks või mitu e-posti aadressi',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistaks kõik sisestatud e-postiaadressid kõikidest bännidest.',
	'EMAIL_BAN_EXPLAIN'	=> 'Et täpsustada mitut erinevat e-postiaadressi, sisesta igaüks uuele reale. Et sisestada osalisi aadresse kasuta * sümbolit, nt. <samp>*@hotmail.com</samp>, <samp>*@*.domeenb.tld</samp>, jne.',
	'EMAIL_NO_BANNED'	=> 'Pole bännitud e-postiaadresse',
	'EMAIL_UNBAN'	=> 'Võta bänn või välistus maha e-postiaadressidelt',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Sa saad bänni maha võtta (või välistamist maha võtta) mitmelt e-postiaadressilt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud e-postiaadressid on kirjas paksult.',
	'IP_BAN'	=> 'Bänni üks või mitu IP-aadressi',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistaks kõik sisestatud IP-aadressid kõikidest bännidest.',
	'IP_BAN_EXPLAIN'	=> 'Et näidata erinevaid IP aadresse või serverinimesid, sisesta igaüks uuele reale. Et täpsustada IP-aadresside vahemikku eralda algus ja lõpp sidekriipsuga (-), et täpsustada kasuta “*” märki.',
	'IP_HOSTNAME'	=> 'IP-aadressid või serverinimed',
	'IP_NO_BANNED'	=> 'Pole bännitud IP-aadresse',
	'IP_UNBAN'	=> 'Võta bänn või välistamine maha IP-aadressidelt',
	'IP_UNBAN_EXPLAIN'	=> 'Sa saad bänni maha võtta (või välistamist maha võtta) mitmelt IP-aadressilt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud IP-aadressid on paksult.',
	'LENGTH_BAN_INVALID'	=> 'Kuupäev peab olema <kbd>YYYY-MM-DD</kbd>formaadis.',
	'PERMANENT'	=> 'Jääv',
	'UNTIL'	=> 'Kuni',
	'USER_BAN'	=> 'Bänni üks või mitu kasutajanime',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistada sisestatud kasutajanimed kõikidest bännidest.',
	'USER_BAN_EXPLAIN'	=> 'Sa saad bännida mitut kasutajat korraga, sisestades iga kasutajanime uuele reale. Kasuta <span style="text-decoration: underline;">Otsi kasutajat</span> võimalust, et üles leida ja lisada mitut kasutajat korraga automaatselt.',
	'USER_NO_BANNED'	=> 'Pole bännitud kasutajanimesid',
	'USER_UNBAN'	=> 'Võta bänn või välistamine maha kasutajanimedelt',
	'USER_UNBAN_EXPLAIN'	=> 'Sa saad bänni maha võtta (või välistuse maha võtta) mitmelt kasutajanimelt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud kasutajanimed on paksult.',
));

?>