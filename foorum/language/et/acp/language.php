<?php
/**
*
* acp_language [Estonian]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
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
	'ACP_FILES'						=> 'ACP keelefailid',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Siin on sul võimalik paigaldada/eemaldada keelepakke. Vaikimisi keelepakk on märgitud tärniga (*)',

	'EMAIL_FILES'			=> 'E-posti mallid',

	'FILE_CONTENTS'				=> 'Faili sisukord',
	'FILE_FROM_STORAGE'			=> 'Fail hoiuskaustast(kataloogist)',

	'HELP_FILES'				=> 'Abifailid',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paigaldatud keelepakid',
	'INVALID_LANGUAGE_PACK'		=> 'Valitud keele pakk tundub mitte sobivat. Palun kontrolli see keelepakk üle ja kui vaja, siis lae see uuesti üles.',
	'INVALID_UPLOAD_METHOD'		=> 'Valitud üleslaadimise meetod ei sobi, palun vali mõni muu meetod.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Keele detailid on edukalt uuendatud.',
	'LANGUAGE_ENTRIES'					=> 'Keele sisestused',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Siin on sul võimalik muuta olemasoleva keelepaketi sisestusi või mitte-tõlgitud sisestusi.<br /><strong>Märge:</strong> Kui sa muudad oma keelefaili, siis see fail pannakse eraldi kausta sinu jaoks allalaadimiseks. Muutused ei ole näha enne kasutajatele, kui sa oled selle faili sealt manuaalselt oma keele kausta üleslaadinud.',
	'LANGUAGE_FILES'					=> 'Keelefailid',
	'LANGUAGE_KEY'						=> 'Keele võti',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'See keelepakk on juba paigaldatud.',
	'LANGUAGE_PACK_DELETED'				=> 'Keelepakk <strong>%s</strong> on edukalt eemaldatud. Kõikide kasutajate keel, kellel oli valitud see keel, on asendatud vaikimisi keelega.',
	'LANGUAGE_PACK_DETAILS'				=> 'Keelepaki detailid',
	'LANGUAGE_PACK_INSTALLED'			=> 'Keelepakk <strong>%s</strong> on edukalt paigaldatud.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokaalne nimi',
	'LANGUAGE_PACK_NAME'				=> 'Nimi',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valitud keelepakki pole olemas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kasutatud: (k.a robotid)',
	'LANGUAGE_VARIABLE'					=> 'Keele muutuja',
	'LANG_AUTHOR'						=> 'Keelepaki autor',
	'LANG_ENGLISH_NAME'					=> 'Inglisekeelne nimi',
	'LANG_ISO_CODE'						=> 'ISO kood',
	'LANG_LOCAL_NAME'					=> 'Lokaalne nimi',

	'MISSING_LANGUAGE_FILE'		=> 'Puudub keele fail: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Puuduvad keele muutujad',
	'MODS_FILES'				=> 'MODide keele failid',

	'NO_FILE_SELECTED'				=> 'Sa pole valinud keelefaili.',
	'NO_LANG_ID'					=> 'Sa pole valinud keelepakki.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Sa pole võimeline eemaldama vaikimisi seatud keelepakki.<br />Kui sa tahad eemaldada seda keelepakki, vaheta enne oma foorumi vaikimisi seatud keel.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Pole ühtegi eemaldatud keelepakki',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Eemalda hoiuskaust(kataloog)',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Vali allalaadimise formaat',
	'SUBMIT_AND_DOWNLOAD'		=> 'Saada ära ja lae alla fail',
	'SUBMIT_AND_UPLOAD'			=> 'Saada ära ja lae üles fail',

	'THOSE_MISSING_LANG_FILES'			=> 'Järgnevad keelefailid puuduvad %s keele kaustas(kataloogis)',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Järgnevad keele muutujad puuduvad <strong>%s</strong> keelepakis',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Eemaldatud keelepakid',

	'UNABLE_TO_WRITE_FILE'		=> 'Faili ei saa kirjutada ümber: %s.',
	'UPLOAD_COMPLETED'			=> 'Üleslaadimine on edukalt lõpetatud.',
	'UPLOAD_FAILED'				=> 'Üleslaadimine nurjus tundmatutel põhjustel. Sa pead asendama selle faili käsitsi.',
	'UPLOAD_METHOD'				=> 'Üleslaadimise meetod',
	'UPLOAD_SETTINGS'			=> 'Üleslaadimise seaded',

	'WRONG_LANGUAGE_FILE'		=> 'Valitud keelefail ei sobi.',
));

?>