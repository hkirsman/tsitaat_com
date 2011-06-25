<?php
/**
*
* acp_permissions.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-31 - phpbb.ee
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Õigused on väga täpsed ja grupeeritud nelja rühma:</p>

		<h2>Üldõigused</h2>
		<p>Neid kasutatakse tervele foorumile ligipääsu määramiseks üldisel tasemel. Nad on edasi jagatud kasutajate õigusteks, gruppide õigusteks, administraatoriteks ja üldmoderaatoriteks.</p>

		<h2>Foorumipõhised õigused</h2>
		<p>Neid kasutatakse foorumipõhise ligipääsu määramiseks. Nad on edasi jagatud foorumi õigusteks, moderaatoriteks, kasutajate foorumi õigusteks ja gruppide foorumi õigusteks.</p>

		<h2>Õiguste rollid</h2>
		<p>Neid kasutatakse, et luua õiguste komplekte, mida saab pärast terve komplektina määrata. Vaikimisi rollid peaks katma foorumi administreerimise, kuid igas neljas kategoorias saad lisada/muuta/kustutada rolle.</p>

		<h2>Õiguste maskid</h2>
		<p>Neid kasutatakse, et vaadata õigusi, mis on antud kasutajatele, moderaatoritele (k.a. üldmoderaatoritele) administraatoritele ja foorumitele.</p>
	
		<br />

		<p>Edasiseks infoks õiguste määramise kohta, vaata <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">peatükki 1.5 Alustamisjuhendist</a>.</p>
	',
	'ACL_NEVER'	=> 'Mitte kunagi',
	'ACL_SET'	=> 'Õiguste seadmine',
	'ACL_SET_EXPLAIN'	=> 'Õigused põhinevad lihtsal <samp>JAH</samp>/<samp>EI</samp> süsteemil. Valides valikuks <samp>MITTE KUNAGI</samp>, kirjutatakse üle kõik teised valikud, mis sellega seonduvad. Kui sa ei soovi määrata väärtust, vali <samp>EI</samp>. Kui väärtused sellele valikule on määratud kuskil mujal, kasutatakse eelistatuna neid, muidu on <samp>MITTE KUNAGI</samp> eeldatud. Kõik märgitud objektid (valikukastiga nende ees) kopeerivad määratud õiguste komplekti-',
	'ACL_SETTING'	=> 'Seade',
	'ACL_TYPE_A_'	=> 'Administraatori õigused',
	'ACL_TYPE_F_'	=> 'Foorumi õigused',
	'ACL_TYPE_M_'	=> 'Moderaatori õigused',
	'ACL_TYPE_U_'	=> 'Kasutaja õigused',
	'ACL_TYPE_GLOBAL_A_'	=> 'Administraatori õigused',
	'ACL_TYPE_GLOBAL_U_'	=> 'Kasutaja õigused',
	'ACL_TYPE_GLOBAL_M_'	=> 'Üldmoderaatori õigused',
	'ACL_TYPE_LOCAL_M_'	=> 'Moderaatori õigused',
	'ACL_TYPE_LOCAL_F_'	=> 'Foorumi õigused',
	'ACL_NO'	=> 'Ei',
	'ACL_VIEW'	=> 'Vaatan õigusi',
	'ACL_VIEW_EXPLAIN'	=> 'Siin saad näha õigusi, mis kasutajal/grupil on. Punane kast näitab, et seda õigust pole, roheline aga, et on.',
	'ACL_YES'	=> 'Jah',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'Siin saad määrata administraatoriõigused kasutajale või grupile. Kõik kasutajad administraatori õigustega saavad vaadata Administraatori juhtpaneeli.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'Siin saad määrata kasutajaid ja gruppe moderaatoriteks. Et määrata kasutajate ligipääs foorumitele, et määrata üldmoderaatori õigused või administraatorid, kasuta vastavat lehte.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'Siin saad muuta, millised kasutajad ja grupid pääsevad millistesse foorumitesse. Et määrata moderaatoreid või administaatoreid, kasuta vastavat lehte.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Siin saad kopeerida foorumi õigused ühelt foorumil teisele.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'Siin saad määrata kasutajaid ja gruppe üldmoderaatoriteks. Need moderaatorid erinevad vaid selle poolest, et saavad modereerida kõiki foorumeid.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Siin saad määrata foorumi õigused gruppidele.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'Siin saad määrata gruppide üldised õigused - kasutaja õigused, üldmoderaatori õigused ja administraatori õigused. Kasutajate õigused sisaldavad võimalusi nagu avataride kasutamine, privaatsõnumite saatmine jne; üldmoderaatori õigused postituste heakskiitmist, teemade haldamist bännida haldamist jne; viimaks administraatori õigused, näiteks õiguste muutmine, foorumite haldamine jne. Kasutajate õigusi peaks eraldi muutma harvadel juhtudel, eelistatum meetod on kasutaja gruppi määramine ja grupile õiguste andmine.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'Siin saad hallata administraatori õiguste rolle. Rollid on käigusolevad õigused, kui muudad rolli, muudetakse ka õigusi neil, kel see roll on.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'Siin saad hallata foorumi õiguste rolle. Rollid on käigusolevad õigused, kui muudad rolli, muudetakse ka õigusi neil, kel see roll on.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'Siin saad hallata moderaatori õiguste rolle. Rollid on käigusolevad õigused, kui muudad rolli, muudetakse ka õigusi neil, kel see roll on.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'Siin saad hallata kasutajate õiguste rolle. Rollid on käigusolevad õigused, kui muudad rolli, muudetakse ka õigusi neil, kel see roll on.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Siin saad määrata foorumi õigusi kasutajatele.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'Siin saad määrata üldisi õigusi kasutajatele - kasutajate õigusi, üldmoderaatori õigusi ja administraatori õigusi. Kasutajate õigused sisaldavad võimalusi nagu avataride kasutamine, privaatsõnumite saatmine jne; üldmoderaatori õigused postituste heakskiitmist, teemade haldamist bännida haldamist jne; viimaks administraatori õigused, näiteks õiguste muutmine, foorumite haldamine jne. Kui muudad neid õigusi korraga paljudel kasutajatel, on Grupi õiguste muutmine eelistatum. Kasutajate õigusi peaks eraldi muutma harvadel juhtudel, eelistatum meetod on kasutaja gruppi määramine ja grupile õiguste andmine.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Siin saad vaadata administraatori õigusi, mis on valitud kasutajatele/gruppidele määratud.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Siin saad vaadata üldmoderaatori õigusi, mis on valitud kasutajatele/gruppidele määratud.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Siin saad vaadata foorumi õigusi, mis on valitud kasutajatele/gruppidele ja foorumitele määratud.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Siin saad vaadata moderaatoriõigusi, mis on valitud kasutajatele/gruppidele ja foorumitele määratud.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Siin saad vaadata kasutaja õigusi, mis on valitud kasutajatele/gruppidele määratud.',
	'ADD_GROUPS'	=> 'Lisa gruppe',
	'ADD_PERMISSIONS'	=> 'Lisa õigusi',
	'ADD_USERS'	=> 'Lisa kasutajaid',
	'ADVANCED_PERMISSIONS'	=> 'Täiendatud õigused',
	'ALL_GROUPS'	=> 'Vali kõik grupid',
	'ALL_NEVER'	=> 'Kõik <samp>MITTE KUNAGI</samp>',
	'ALL_NO'	=> 'Kõik <samp>EI</samp>',
	'ALL_USERS'	=> 'Vali kõik kasutajad',
	'ALL_YES'	=> 'Kõik <samp>JAH</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'Rakenda kõik õigused',
	'APPLY_PERMISSIONS'	=> 'Rakenda õigused',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Õigused vaja valitud roll sellele objektile rakendatakse sellel objektil ja teistel valitud objektidel.',
	'AUTH_UPDATED'	=> 'Õigused on uuendatud.',
	'COPY_PERMISSIONS_CONFIRM'				=> 'Oled kindel, et soovid selle toimingu sooritada? See seade kirjutab üle kõik eelnevad õigused.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Algfoorum, kust soovid õigused kopeerida.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Sihtfoorum(id), kuhu soovid õigusi rakendada.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopeeri õigused foorumilt',
	'COPY_PERMISSIONS_TO'					=> 'Rakenda õigused foorumi(te)le',
	'CREATE_ROLE'	=> 'Loo roll',
	'CREATE_ROLE_FROM'	=> 'Kasuta seadeid',
	'CUSTOM'	=> 'Kohandatud.',
	'DEFAULT'	=> 'Vaikimisi',
	'DELETE_ROLE'	=> 'Kustuta roll',
	'DELETE_ROLE_CONFIRM'	=> 'Oled kindel, et soovid kustutada selle rolli? Objektid selle rolliga <strong>ei kaota</strong> oma õiguste seadeid.',
	'DISPLAY_ROLE_ITEMS'	=> 'Vaata objekte selle rolliga',
	'EDIT_PERMISSIONS'	=> 'Muuda õigusi',
	'EDIT_ROLE'	=> 'Muuda rolli',
	'GROUPS_NOT_ASSIGNED'	=> 'Ühtegi gruppi pole selle rolliga.',
	'LOOK_UP_GROUP'	=> 'Otsi kasutajagruppi',
	'LOOK_UP_USER'	=> 'Otsi kasutajat',
	'MANAGE_GROUPS'	=> 'Halda gruppe',
	'MANAGE_USERS'	=> 'Halda kasutajaid',
	'NO_AUTH_SETTING_FOUND'	=> 'Õiguste seaded pole määratud.',
	'NO_ROLE_ASSIGNED'	=> 'Rollita..',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Selle rolli määramine ei muuda õigusi paremal. Kui soovid keelata/eemaldada kõik õigused, peaksid kasutama "Kõik <samp>EI</samp>” linki.',
	'NO_ROLE_AVAILABLE'	=> 'Rolli pole saadaval',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Palun anna rollile nimi.',
	'NO_ROLE_SELECTED'	=> 'Rolli ei leitud.',
	'NO_USER_GROUP_SELECTED'	=> 'Sa pole valinud ühtegi kasutajat või gruppi.',
	'ONLY_FORUM_DEFINED'	=> 'Oled oma valikusse määranud ainult foorumid. Palun vali veel vähemalt üks kastuaja või grupp.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Õigused ja rollid rakendatakse kõigile valitud objektidele',
	'PLUS_SUBFORUMS'	=> '+Alafoorumid',
	'REMOVE_PERMISSIONS'	=> 'Eemalda õigused',
	'REMOVE_ROLE'	=> 'Eemalda roll',
	'RESULTING_PERMISSION'	=> 'Võrdub õigustega',
	'ROLE'	=> 'Roll',
	'ROLE_ADD_SUCCESS'	=> 'Roll lisatud.',
	'ROLE_ASSIGNED_TO'	=> 'Kasutajatele/gruppidele määratud %s',
	'ROLE_DELETED'	=> 'Roll eemaldatud.',
	'ROLE_DESCRIPTION'	=> 'Rolli kirjeldus',
	'ROLE_ADMIN_FORUM'	=> 'Foorumi administraator',
	'ROLE_ADMIN_FULL'	=> 'Täielik administraator',
	'ROLE_ADMIN_STANDARD'	=> 'Tavaline administraator',
	'ROLE_ADMIN_USERGROUP'	=> 'Kasutajate ja gruppide administraator',
	'ROLE_FORUM_BOT'	=> 'Boti ligipääs',
	'ROLE_FORUM_FULL'	=> 'Täielik ligipääs',
	'ROLE_FORUM_LIMITED'	=> 'Piiratud ligipääs',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Piiratud ligipääs + hääletused',
	'ROLE_FORUM_NOACCESS'	=> 'Ligipääsuta',
	'ROLE_FORUM_ONQUEUE'	=> 'Moderaatori järjekorras',
	'ROLE_FORUM_POLLS'	=> 'Tavaline ligipääs + hääletused',
	'ROLE_FORUM_READONLY'	=> 'Lugemise ligipääs',
	'ROLE_FORUM_STANDARD'	=> 'Tavaline ligipääs',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Vastregistreerunu',
	'ROLE_MOD_FULL'	=> 'Täielik moderaator',
	'ROLE_MOD_QUEUE'	=> 'Järjekorra moderaator',
	'ROLE_MOD_SIMPLE'	=> 'Lihtne moderaator',
	'ROLE_MOD_STANDARD'	=> 'Tavaline moderaator',
	'ROLE_USER_FULL'	=> 'Kõik võimalused',
	'ROLE_USER_LIMITED'	=> 'Piiratud võimalused',
	'ROLE_USER_NOAVATAR'	=> 'Avatar keelatud',
	'ROLE_USER_NOPM'	=> 'Privaatsõnumid keelatud',
	'ROLE_USER_STANDARD'	=> 'Tavalised võimalused',
	'ROLE_USER_NEW_MEMBER'		=> 'Vastregistreerunu',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Omab juurdepääsu foorumite haldusele ja foorumi õiguste seadetele.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Omab juurdepääsu kõigile administraatori funktsioonidele.<br />Pole soovitatav.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Omab juurdepääsu enamikele administraatori funktsioonidele, kuid ei saa muuta serveri ega süsteemi seadeid.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Saab hallata kasutajaid ja gruppe: saab muuta õigusi, seadeid, hallata bänne ja tiitleid.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'See roll on soovitatav robotitele ja otsinguämblikele.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Saab kasutada kõik foorumi funktsioone, k.a. teadaannete ja kleebiste postitamist. Saab ka ignoreerida postituste intervalli<br />Pole soovitatav tavakasutajatele.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Saab kasutada mõningaid foorumi funktsioone, kuid ei saa lisada manuseid või kasutada postituse ikoone.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Nagu limiteeritud ligipääsuga, kuid saab ka luua hääletusi.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Ei saa näha ega oma ligipääsu foorumile.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Saab kasutada enamikke foorumi funktsioone, sh manuste lisamist, kuid postitused ja teemad peab heaks kiitma moderaator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Nagu tavalisel ligipääsuga, kuid saab ka luua hääletusi.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Saab lugeda fooumit, kuid ei saa postitada ega teha teemasid.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Saab kasutada enamikke foorumi funktsioone, kuid ei saa lukustada ma teemasid ja luua hääletusi.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Vastregistreerunud kasutajate roll; ei sisalda <samp>KUNAGI</samp> õigusi sulgeda võimalusi vastregistreerunutel.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Saab kasutada kõiki moderaatori võimalusi.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Saab kasutada Modereerimise järjekorda heakskiitmiseks, kuid ei midagi muud.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Saab kasutada vaid põhilisi teema toiminguid. Ei saa anda hoiatusi ega kasutada Modereerimise järjekorda',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Saab kasutada enamikke moderaatori võimalusi, kuid ei saa bännida ega muuta postituse autorit.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Saab kasutada kõiki saadaolevaid foorumi võimalusi kasutajale, sh kasutajanime muutmist ja postituste intervalli ignoreerimist.<br />Pole soovitatav.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Saab kasutada mõningaid kasutaja võimalusi. Manused, e-kirjad ja kiirsuhtluse sõnumid on keelatud.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Omab limiteeritud võimaluste komplekti ja ei saa kasutada avatari.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Omab limiteeritud võimaluste komplekti ja ei saa saata ega vastu võtta privaatsõnumeid.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Saab kasutada enamikke, kuid mitte kõiki funktsioone. Ei saa muuta kasutajanime ja ignoreerida postituste intervalli, näiteks.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Vastregistreerunud kasutajate roll; ei sisalda <samp>KUNAGI</samp> õigusi sulgeda võimalusi vastregistreerunutel.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'Saad sisestada lühikese kirjeldus, mida see roll teeb või milleks see on mõeldud. Siinsisestatud tekst kuvatakse ka õiguste paneelis.',
	'ROLE_DESCRIPTION_LONG'	=> 'Rolli kirjeldus on liiga pikk, palun lühenda seda 4000 sümbolini.',
	'ROLE_DETAILS'	=> 'Rolli andmed',
	'ROLE_EDIT_SUCCESS'	=> 'Roll muudetud',
	'ROLE_NAME'	=> 'Rolli nimi',
	'ROLE_NAME_ALREADY_EXIST'	=> 'Roll nimega <strong>%s</strong> juba eksisteerib valitud õiguste tüübis.',
	'ROLE_NOT_ASSIGNED'	=> 'Rolli pole veel määratud.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'Valitud foorumit/foorumeid ei eksisteeri.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'Valitud gruppi/gruppe ei eksisteeri.',
	'SELECTED_USER_NOT_EXIST'	=> 'Valitud kasutajat/kasutajaid ei eksisteeri.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Siinvalitud foorum kaasab ka kõik alafoorumid valikusse.',
	'SELECT_ROLE'	=> 'Vali roll..',
	'SELECT_TYPE'	=> 'Vali tüüp',
	'SET_PERMISSIONS'	=> 'Sea õigused',
	'SET_ROLE_PERMISSIONS'	=> 'Sea rolli õigused',
	'SET_USERS_PERMISSIONS'	=> 'Sea kasutaja õigused',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Sea kasutaja foorumi õigused',
	'TRACE_DEFAULT'	=> 'Vaikimisi on iga õigus <samp>EI</samp> (määramata). Sellise õiguse saab muu seadega üle kirjutada.',
	'TRACE_FOR'	=> 'Jälita',
	'TRACE_GLOBAL_SETTING'	=> '%s (üldine)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Selle grupi foorumi õigused on <samp>MITTE KUNAGI</samp>, nagu ka koguväärtus, seega jäetakse vana väärtus.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Selle grupi foorumi õigused on <samp>MITTE KUNAGI</samp>, nagu ka koguväärtus, seega jäetakse vana väärtus.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Selle grupi foorumi õigused on määratud <samp>MITTE KUNAGI</samp> peale, millest saab uus koguväärtus, sest seda polnud veel nääratud (määratud <samp>EI</samp> peale).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Selle grupi õigused sellele foorumile on määratud <samp>MITTE KUNAGI</samp> peale, millest saab uus koguväärtus, sest seda polnud veel nääratud (määratud <samp>EI</samp> peale).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Selle grupi õigused on määratud <samp>MITTE KUNAGI</samp> peale, mis kirjutab üle varasemad väärtused.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Selle grupi õigused on määratud <samp>MITTE KUNAGI</samp> peale, mis kirjutab üle varasemad väärtused.',
	'TRACE_GROUP_NO'	=> 'Õigused on <samp>EI</samp> sellele grupile, seega jäetakse vana koguväärtus.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Õigused on <samp>EI</samp> sellele grupile selles foorumis, seega jäetakse vana koguväärtus.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Selle grupi õigused on määratud <samp>JAH</samp> valikule, kuid koguväärtuste <samp>MITTE KUNAGI</samp> valikut ei saa üle kirjutada.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Selle grupi õigused on määratud <samp>JAH</samp> valikule, kuid koguväärtuste <samp>MITTE KUNAGI</samp> valikut ei saa üle kirjutada.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Selle grupi õigused on määratud <samp>JAH</samp> peale, millest saab uus koguväärtus, sest seda polnud veel nääratud (määratud <samp>EI</samp> peale).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Selle grupi õigused selles foorumis on määratud <samp>JAH</samp> peale, millest saab uus koguväärtus, sest seda polnud veel nääratud (määratud <samp>EI</samp> peale).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Selle grupi õigused on määratud <samp>JAH</samp> peale, ja koguväärtused on ka <samp>JAH</samp> peal, seega jäetakse koguväärtus.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Selle grupi õigused sellele foorumile on määratud <samp>JAH</samp> peale, ja koguväärtused on ka <sampZJAH</samp> peal, seega jäetakse koguväärtus.',
	'TRACE_PERMISSION'	=> 'Jälita õigusi - %s',
	'TRACE_RESULT'	=> 'Jälituse tulemus',
	'TRACE_SETTING'	=> 'Jälituse seade',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Foorumi sõltumatud kasutaja õigused võrduvad <samp>JAH</samp> valikutega, kuid kogu foorumi õigused on juba <samp>JAH</samp>, seega kasutatakse koguõigusi. %sJälita üldisi õigusi%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Foorumi sõltumatud kasutaja õigused võrduvad <samp>JAH</samp> valikutega, mis kirjutavad üle praeguse lokaalse valiku <samp>MITTE KUNAGI</samp>. %sJälita üldisi õigusi%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Foorumi sõltumatud kasutaja õigused võrduvad <samp>MITTE KUNAGI</samp> valikutega, mis ei mõjuta lokaalseid õigusi. %sJälita üldisi õigusi%s',
	'TRACE_USER_FOUNDER'	=> 'Kasutaja asutas foorumi, seega administraatori õigused on alati <samp>JAH</samp>.',
	'TRACE_USER_KEPT'	=> 'Kasutaja õigused on <samp>EI</samp>, seega jäetakse vana koguväärtus.',
	'TRACE_USER_KEPT_LOCAL'	=> 'Kasutaja õigused sellel foorumil on <samp>EI</samp>, seega jäetakse vana koguväärtus.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Kasutaja õigused on määratud <samp>MITTE KUNAGI</samp> peale ja koguväärtus on ka <samp>MITTE KUNAGI</samp>, seega midagi ei muudeta.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Kasutaja õigused sellele foorumile on <samp>MITTE KUNAGI</samp> valikul ja koguväärtus on ka <samp>MITTE KUNAGI</samp>, seega midagi ei muudeta.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'Kasutaja õigused on määratud <samp>MITTE KUNAGI</samp> peale, millest saab koguväärtus, sest enne oli see "EI".',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'Kasutaja õigused sellele foorumile on <samp>MITTE KUNAGI</samp>, millest saab koguväärtus, sest enne oli see "EI".',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Kasutaja õigused on määratud <samp>MITTE KUNAGI</samp> peale ja kirjutavad üle eelnevad <samp>JAH</samp> valikud.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'Kasutaja õigused sellele foorumile on määratud <samp>MITTE KUNAGI</samp> peale ja kirjutavad üle eelnevad <samp>JAH</samp> valikud.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'Kasutaja õigused on <samp>EI</samp> valikul ja koguväärtus oli ka "EI" peale seatud, seega võrdub see <samp>MITTE KUNAGI</samp> valikuga.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'Kasutaja õigused sellele foorumile on <samp>EI</samp> valikul ja koguväärtus oli ka "EI" peale seatud, seega võrdub see <samp>MITTE KUNAGI</samp> valikuga.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Kasutaja õigused on määratud <samp>JAH</samp> valikule, kuid koguväärtuse <samp>MITTE KUNAGI</samp> valikut ei saa üle kirjutada.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'Kasutaja õigused sellele foorumile on määratud <samp>JAH</samp> valikule, kuid koguväärtuse <samp>MITTE KUNAGI</samp> valikut ei saa üle kirjutada.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'Kasutaja õigused on määratud <samp>JAH</samp> valikule, millest saab koguväärtus, sest see oli enne <samp>EI</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'Kasutaja õigused sellele foorumile on määratud <samp>JAH</samp> valikule, millest saab koguväärtus, sest see oli enne <samp>EI</samp>.',
	'TRACE_USER_YES_TOTAL_YES'	=> 'Kasutaja õigused on määratud <samp>JAH</samp> valikule ja ka koguväärtus on <samp>JAH</samp>, seega midagi ei muudeta.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'Kasutaja õigused on määratud <samp>JAH</samp> valikule ja ka koguväärtus on <samp>JAH</samp>, seega midagi ei muudeta.',
	'TRACE_WHO'	=> 'Kes',
	'TRACE_TOTAL'	=> 'Kokku',
	'USERS_NOT_ASSIGNED'	=> 'Ühtegi kasutajat pole selle rolliga',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'on liige järgnevates eelloodud kasutajagruppides',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'on liiga järgnevates kasutaja loodud gruppides',
	'VIEW_ASSIGNED_ITEMS'	=> 'Vaata seotud objekte',
	'VIEW_LOCAL_PERMS'	=> 'Lokaalsed õigused',
	'VIEW_GLOBAL_PERMS'	=> 'Üldõigused',
	'VIEW_PERMISSIONS'	=> 'Vaata õiguse',
	'WRONG_PERMISSION_TYPE'	=> 'Vale õiguste tüüp valitud',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Õiguste seaded on vales formaadis, phpBB ei suuda neid korrektselt töödelda.',
));

?>