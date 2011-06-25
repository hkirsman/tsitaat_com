<?php
/**
*
* acp_posting.php [Estonian]
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
        'ACP_BBCODES_EXPLAIN'   => 'BBCode on HTML koodi sisestamiseks lihtsam viis. Siit lehel saad lisada, muuta või eemaldada omaloodud BBCode\'sid.',
        'ADD_BBCODE'    => 'Lisa uus BBCode',
        'BBCODE_DANGER'				=> 'BBCode, mida üritad lisada, paistab kasutavat {TEXT}-vormi HTML-atribuudi sees. See on võimalik XSS-turvaliseuse probleem. Proovi kasutada rohkem piiravat {SIMPLETEXT} või {INTTEXT} vormi. Jätka vaid siis, kui oled riskidest aru saanud.',
				'BBCODE_DANGER_PROCEED'		=> 'Jätka', //'I understand the risk',
        'BBCODE_ADDED'  => 'BBCode lisatud.',
        'BBCODE_EDITED' => 'BBCode muudetud.',
        'BBCODE_NOT_EXIST'      => 'Valitud BBCode\'t ei eksisteeri.',
        'BBCODE_HELPLINE'       => 'Abirida',
        'BBCODE_HELPLINE_EXPLAIN'       => 'See väli sisaldab teksti, mis kuvatakse, kui kursor on BBCode tag\'i kohal.',
        'BBCODE_HELPLINE_TEXT'  => 'Abirea tekst',
        'BBCODE_HELPLINE_TOO_LONG'   => 'Sisestatud abirida on liiga pikk.',
        'BBCODE_INVALID_TAG_NAME'       => 'BBCode tag\'i nimi on juba olemas.',
        'BBCODE_INVALID'        => 'Sinu BBCode ei ole korrektne.',
        'BBCODE_OPEN_ENDED_TAG' => 'BBCode peab sisaldama nii alustavat kui ka lõpetavat tag\'i',
        'BBCODE_TAG'    => 'Tag',
        'BBCODE_TAG_TOO_LONG'   => 'Sisestatud nimiimi tag\'ile on liiga pikk.',
        'BBCODE_TAG_DEF_TOO_LONG'       => 'Sisestatud tag\'i definitsioon on liiga pikk, palun lühenda seda.',
        'BBCODE_USAGE'  => 'BBCode\'i kasutus',
        'BBCODE_USAGE_EXAMPLE'  => '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
        'BBCODE_USAGE_EXPLAIN'  => 'Siin saad määrata, kuidas BBCode\'t kasutada. Asenda iga muutuja vastava vormiga (%svaata alla%s).',
        'EXAMPLE'       => 'Näide:',
        'EXAMPLES'      => 'Näited:',
        'HTML_REPLACEMENT'      => 'HTML asendus',
        'HTML_REPLACEMENT_EXAMPLE'      => '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
        'HTML_REPLACEMENT_EXPLAIN'      => 'Siin saad määrata vaikimisi HTML asenduse. Ära unusta panna tagasi vorme, mida kasutasid ülal!',
        'TOKEN' => 'Vorm',
        'TOKENS'        => 'Vormid',
        'TOKENS_EXPLAIN'        => 'Vormid on kohatäited kasutajale sisestamiseks. Sisestus on kehtiv vaid siis, kui see vastab vastavale vormile. Kui vaja, võid neid nummerdada, lisades numbri viimaseks sümboliks enne sulge, näiteks {TEXT1}, {TEXT2}.<br /><br />HTML asenduses võid ka kasutada iga keelestringi, mis on su language/ kaustas niimoodi: {L_<em>&lt;STRINGINIMI&gt;</em>} kus <em>&lt;STRINGINIMI&gt;</em> on nimi tõlgitud stringile, mida soovid lisada. näiteks, {L_WROTE} kuvatakse kui "kirjutas" või selle tõlge vastavalt kasutaja valitud keelele.<br /><br /><strong>Ainult allnimentatud vorme saab kasutada BBCode\'s.</strong>',
        'TOKEN_DEFINITION'      => 'Mis see võib olla?',
        'TOO_MANY_BBCODES'      => 'Sa ei saa luua rohkem BBCode\'sid. Palun eemaldad üks või enam BBCode\'t ja proovi uuesti.',

        'tokens'        => array(
                'TEXT'  => 'Suvaline tekst, sisaldades võõraid sümboleid, numbreid jne. Sa ei tohiks seda vormi kasutada HTML tag\'ides. Selle asemel proovi kasutada IDENTIFIER, INTTEXT või SIMPLETEXT vormi.',
                'SIMPLETEXT'    => 'sümbolid ladina tähestikust (A-Z), numbrid, tühikud, komad, punktid, plussmärgid, miinusmärgid, side- ja alakriipsud.',
                'INTTEXT'		=> 'Unicode tähesümbolid, numbrid, tühikud, komad, punktid, plussmärgid, miinusmärgid, side- ja alakriipsud.',
                'IDENTIFIER'    => 'Sümbolid ladina tähestikust (A-Z), numbrid, side- ja alakriipsud.',
                'NUMBER'        => 'Iga number.',
                'EMAIL' => 'Kehtiv e-postiaadress.',
                'URL'   => 'Kehtiv URL suvalise protokolliga (http, ftp, jne. Ei saa kasutada javascripti jaoks). Kui ühtegi pole sisestatud, on määratud protokolliks "http://"',
                'LOCAL_URL'     => 'Kohalik URL. URL, mis on suhteline teema aadressiga ja ei tohi sisaldada serveri nime või protokolli.',
                'COLOR' => 'HTML värv, saab olla kas numbrilises <samp>#FF1234</samp> või <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS värvi fraasina</a>, näiteks <samp>fuchsia</samp> või <samp>InactiveBorder</samp>',
        ),

        'ACP_ICONS_EXPLAIN'     => 'Siin lehel saad sa muuta, lisada ja kustutada ikoone, mida kasutajad saavad kasutada postitamiseks. Need ikoonid on üldiselt kuvatud teema pealkirja kõrval või postituse pealkirjas teemade nimekirjas. Võid ka lisada ja luua uusi ikoonide pakke.',
        'ACP_SMILIES_EXPLAIN'   => 'Smailid või emotikonid on enamasti väiksed, mõnikord liikuvad pildid, mida kasutatakse tunde väljendamiseks. Siin lehel saad sa lisada, muuta ja eemaldada smaile, mida kasutajad saavad kasutada. Võid ka lisada ja luua uusi smailide pakke.',
        'ADD_SMILIES'   => 'Lisa mitu smailit',
        'ADD_SMILEY_CODE'       => 'Lisa täiendav kood smailile',
        'ADD_ICONS'     => 'Lisa mitu ikooni',
        'AFTER_ICONS'   => 'Peale %s',
        'AFTER_SMILIES' => 'Peale %s',
        'CODE'  => 'Kood',
        'CURRENT_ICONS' => 'Praegused ikoonid',
        'CURRENT_ICONS_EXPLAIN' => 'Vali, mida teha praeguste ikoonidega',
        'CURRENT_SMILIES'       => 'Praegused smailid',
        'CURRENT_SMILIES_EXPLAIN'       => 'Vali, mida teha praeguste smailidega.',
        'DISPLAY_ON_POSTING'    => 'Kuva postitamise lehel',
        'DISPLAY_POSTING'       => 'On postitamise lehel',
        'DISPLAY_POSTING_NO'    => 'Pole postitamise lehel',
        'EDIT_ICONS'    => 'Muuda ikoone',
        'EDIT_SMILIES'  => 'Muuda smaile',
        'EMOTION'       => 'Emotsioon',
        'EXPORT_ICONS'  => 'Ekspordi ja lae alla ikoonid.pak',
        'EXPORT_ICONS_EXPLAIN'  => '%sSelle lingi vajutamise korral pakitakse teie ikoonide konfiguratsioon kokku<samp>ikoonid.pak failiks</samp>, millest saab allalaetuna luua <samp>.zip</samp> või <samp>.tgz</samp> faili, mis sisaldab kõiki teie ikoone ja <samp>icons.pak</samp> konfiguratsioonifaili%s.',
        'EXPORT_SMILIES'        => 'Eksporid ja lae alla smailid.pak',
        'EXPORT_SMILIES_EXPLAIN'        => '%sSelle lingi vajutamise korral pakitakse teie smailide konfiguratsioon kokku<samp>smailid.pak failiks</samp>, millest saab allalaetuna luua <samp>.zip</samp> või <samp>.tgz</samp> faili, mis sisaldab kõiki teie smaile ja <samp>smailid.pak</samp> konfiguratsioonifaili%s.',
        'FIRST' => 'Esimene',
        'ICONS_ADD'     => 'Lisa uus ikoon',
        'ICON_NONE_ADDED'       => 'Ühtegi ikooni ei lisatud.',
		'ICONS_NONE_ADDED'       => 'Ühtegi ikooni ei lisatud.',
        'ICONS_ONE_ADDED'       => 'Ikoon lisatud.',
        'ICONS_ADDED'   => 'Ikoonid lisatud.',
        'ICONS_CONFIG'  => 'Ikoonide konfiguratsioon.',
        'ICONS_DELETED' => 'Ikoon eemaldatud.',
        'ICONS_EDIT'    => 'Muuda ikooni',
        'ICONS_ONE_EDITED'      => 'Ikoon üles laetud.',
        'ICON_NONE_EDITED'      => 'Ühtegi ikooni ei uuendatud.',
		'ICONS_NONE_EDITED'      => 'Ühtegi ikooni ei uuendatud.',
        'ICONS_EDITED'  => 'Ikoonid edukalt uuendatud.',
        'ICONS_HEIGHT'  => 'Ikooni kõrgus',
        'ICONS_IMAGE'   => 'Ikooni pilt',
        'ICONS_IMPORTED'        => 'Ikoonide pakk installeeritud.',
        'ICONS_IMPORT_SUCCESS'  => 'Ikoonide pakk imporditud.',
        'ICONS_LOCATION'        => 'Ikooni asukoht',
        'ICONS_NOT_DISPLAYED'   => 'Järgnevaid ikoone ei kuvata postitamise lehel.',
        'ICONS_ORDER'   => 'Ikoonide järjekord',
        'ICONS_URL'     => 'Ikooni pildifail',
        'ICONS_WIDTH'   => 'Ikooni laius',
        'IMPORT_ICONS'  => 'Installeeri ikoonide pakk',
        'IMPORT_SMILIES'        => 'Installeeri smailide pakk',
        'KEEP_ALL'      => 'Jäta kõik',
        'MASS_ADD_SMILIES'      => 'Lisa mitu smailit',
        'NO_ICONS_ADD'  => 'Pole ikoone lisamiseks.',
        'NO_ICONS_EDIT' => 'Pole ikoone muutmiseks.',
        'NO_ICONS_EXPORT'       => 'Pole ikoone, millest luua pakk.',
        'NO_ICONS_PAK'  => 'Ikoonide pakke ei leitud.',
        'NO_SMILIES_ADD'        => 'Pole smailisid lisamiseks.',
        'NO_SMILIES_EDIT'       => 'Pole smailisid muutmiseks.',
        'NO_SMILIES_EXPORT'     => 'Pole smailisid, millest luua pakk.',
        'NO_SMILIES_PAK'        => 'Smailide pakke ei leitud.',
        'PAK_FILE_NOT_READABLE' => 'Ei suuda lugeda <samp>.pak</samp> faili.',
        'REPLACE_MATCHES'       => 'Asenda võrdsed',
        'SELECT_PACKAGE'        => 'Vali paki fail',
        'SMILIES_ADD'   => 'Lisa uus smaili',
        'SMILIES_NONE_ADDED'    => 'Ühtegi smailit ei lisatud.',
        'SMILIES_ONE_ADDED'     => 'Smaili lisatud.',
        'SMILIES_ADDED' => 'Smailid lisatud.',
        'SMILIES_CODE'  => 'Smaili kood',
        'SMILIES_CONFIG'        => 'Smailide konfiguratsioon',
        'SMILIES_DELETED'       => 'Smaili eemaldatud.',
        'SMILIES_EDIT'  => 'Muuda smailit',
        'SMILIE_NO_CODE'        => 'Smailit “%s”  ignoreeriti, sest koodi ei sisestatud.',
        'SMILIE_NO_EMOTION'     => 'Smailit “%s” ignoreeriti, sest emotsiooni ei sisestatud.',
        'SMILIES_NONE_EDITED'   => 'Ühtegi smailit ei uuendatud.',
        'SMILIES_ONE_EDITED'    => 'Smaili uuendatud.',
        'SMILIES_EDITED'        => 'Smailid uuendatud.',
        'SMILIES_EMOTION'       => 'Emotsioon',
        'SMILIES_HEIGHT'        => 'Smaili kõrgus',
        'SMILIES_IMAGE' => 'Smaili pilt',
        'SMILIES_IMPORTED'      => 'Smailide pakk installeeritud.',
        'SMILIES_IMPORT_SUCCESS'        => 'Smailide pakk improditud.',
        'SMILIES_LOCATION'      => 'Smaili asukoht',
        'SMILIES_NOT_DISPLAYED' => 'Järgnevaid smaile ei kuvata postitamise lehel',
        'SMILIES_ORDER' => 'Smailide järjekord',
        'SMILIES_URL'   => 'Smaili pildifail',
        'SMILIES_WIDTH' => 'Smaili laius',
		'TOO_MANY_SMILIES'			=> 'Maksimaalne arv smailisid (%d) ületatud.',
        'WRONG_PAK_TYPE'        => 'Valitud pakk ei sisalda vajalikke andmeid.',
        'ACP_WORDS_EXPLAIN'     => 'Siin lehel saad sa lisada, muuta ja eemaldada sõnu, mis automaatselt tsenseeritakse sinu foorumis. Kasutajad saavad siiski veel registreerida neid sõnu sisaldavate nimedega. Wildcard\'e (*) saab kasutada sõnade väljal, näiteks. *ont* tsenseerib ka sõna "kontroll", kont* tsenseerib ka sõna "kontroll", *troll tsenseerib ka sõna "kontroll".',
        'ADD_WORD'      => 'Lisa uus sõna',
        'EDIT_WORD'     => 'Muuda sõna tsensuuri',
        'ENTER_WORD'    => 'Pead sisestama sõna ja selle asenduse.',
        'NO_WORD'       => 'Ühtegi sõna ei valitud muutmiseks.',
        'REPLACEMENT'   => 'Asendus',
        'UPDATE_WORD'   => 'Uuenda sõna tsensuuri',
        'WORD'  => 'Sõna',
        'WORD_ADDED'    => 'Sõna tsensuur lisatud.',
        'WORD_REMOVED'  => 'Valitud sõna tsensuur eemaldatud.',
        'WORD_UPDATED'  => 'Valitud sõna tsensuur uuendatud.',
        'ACP_RANKS_EXPLAIN'     => 'Kasutades neid välja, saad lisada, muuta ja eemaldada tiitleid. võid ka luua eritiitleid, mida saab lisada kasutajale läbi kasutajate haldamise sektsiooni.',
        'ADD_RANK'      => 'Lisa uus tiitel',
        'MUST_SELECT_RANK'      => 'Pead valima tiitli.',
        'NO_ASSIGNED_RANK'      => 'Pole eritiitlit määratud.',
        'NO_RANK_TITLE' => 'Sa ei määranud tiitlile nime.',
        'NO_UPDATE_RANKS'       => 'Tiitel kustutatud. Seda tiitlit omavate kasutajate profiili ei uuendatud, pead seda käsitsi tegema, et kustutada tiitel nende profiilist.',
        'RANK_ADDED'    => 'Tiitel lisatud',
        'RANK_IMAGE'    => 'Tiitli pilt',
        'RANK_IMAGE_EXPLAIN'    => 'Kasuta seda, et määrata väike pilt tiitlile lisaks. Tee on suhteline phpBB juurkaustaga.',
		'RANK_IMAGE_IN_USE'		=> '(kasutusel)',
        'RANK_MINIMUM'  => 'Minimaalne arv postitusi',
        'RANK_REMOVED'  => 'Tiitel kustutatud',
        'RANK_SPECIAL'  => 'Määra eritiitlina',
        'RANK_TITLE'    => 'Tiitli nimi',
        'RANK_UPDATED'  => 'Tiitel uuendatud',
        'ACP_DISALLOW_EXPLAIN'  => 'Siin saad hallata kasutajanimesid, millega ei tohi registreerida. Keelatud kasutajanimed võivad sisaldada wildcard\'i sümbolit e. "*".Sa ei saa sisestada siin ütegi kasutajanime, millega on juba registreeritud, pead esmalt kustutama selle nime ja siis keelama.',
        'ADD_DISALLOW_EXPLAIN'  => 'Võid keelata kasutajanime, kasutades wildcard\'i, mis vastab suvalisele sümbolile.',
        'ADD_DISALLOW_TITLE'    => 'Lisa keelatud kasutajanimi',
        'DELETE_DISALLOW_EXPLAIN'       => 'Saad eemaldada kasutajanime nimekirjast, valides selle, ja vajutades "Sisesta".',
        'DELETE_DISALLOW_TITLE' => 'Eemalda keelatud kasutajanimi',
        'DISALLOWED_ALREADY'    => 'Sisestatud nime ei saa keelata. see kas juba on nimekirjas, on tsensuuri nimekirjas või selle nimega kasutaja on registreeritud.',
        'DISALLOWED_DELETED'    => 'Keelatud kasutajanimi on eemaldatud.',
        'DISALLOW_SUCCESSFUL'   => 'Keelatud kasutajanimi on lisatud.',
        'NO_DISALLOWED' => 'Pole keelatud kasutajanimesid',
        'NO_USERNAME_SPECIFIED' => 'Sa pole sisestanud kasutajanime.',
        'ACP_REASONS_EXPLAIN'   => 'Siin saad hallata põhjuseid, mida kasutatakse raportites ja postituste keelamistes. On üks vaikimisi põhjus, (märgitud tärniga) mida ei saa eemaldada. Seda põhjust kasutatakse siis, kui ükski teine põhjus ei sobi.',
        'ADD_NEW_REASON'        => 'Lisa uus põhjus',
        'AVAILABLE_TITLES'      => 'Saadaval tõlgitud põhjuste pealkirjad',
        'IS_NOT_TRANSLATED'     => 'Põhjus <strong>pole</strong> tõlgitud.',
        'IS_NOT_TRANSLATED_EXPLAIN'     => 'Põhjus <strong>pole</strong> tõlgitud. Kui soovid tõlkida, Määra sobiv võti keelefailides raporteerimispõhjuste sektsioonis.',
        'IS_TRANSLATED' => 'Põhjus on tõlgitud.',
        'IS_TRANSLATED_EXPLAIN' => 'Põhjus on tõlgitud. Kui siinsisestatud pealkiri vastab keelefailis olevale, kasutatakse tõlgitud pealkirja ja kirjeldust.',
        'NO_REASON'     => 'Põhjust ei leitud.',
        'NO_REASON_INFO'        => 'Pead määrama pealkirja ja kirjelduse põhjusele.',
        'NO_REMOVE_DEFAULT_REASON'      => 'Sa ei saa eemaldada vaikimisi põhjust "Muu".',
        'REASON_ADD'    => 'Lisa raporteerimis/keelamispõhjus',
        'REASON_ADDED'  => 'Raporteerimis/keelamispõhjus lisatud.',
        'REASON_ALREADY_EXIST'  => 'Põhjus selle pealkirjaga on juba olemas, Palun sisesta põhjusele teistsugune pealkiri.',
        'REASON_DESCRIPTION'    => 'Põhjuse kirjeldus',
        'REASON_DESC_TRANSLATED'        => 'Kuvatud põhjuse kirjeldus',
        'REASON_EDIT'   => 'Muuda raporteerimis/keelamispõhjust',
        'REASON_EDIT_EXPLAIN'   => 'Siin saad lisada või muuta põhjuseid. Kui põhjus on tõlgitud, kasutatakse tõlgitud versiooni siinsisestatud kirjelduse asemel.',
        'REASON_REMOVED'        => 'Raporteerimis/keelamispõhjus eemaldatud.',
        'REASON_TITLE'  => 'Põhjuse pealkiri',
        'REASON_TITLE_TRANSLATED'       => 'Kuvatud põhjuse pealkiri',
        'REASON_UPDATED'        => 'Raporteerimis/keelamispõhjus uuendatud.',
        'USED_IN_REPORTS'       => 'Kasutatud raportites',
));

?>
