<?php
/**
*
* acp_profile.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-14 - phpbb.ee
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
        'ADDED_PROFILE_FIELD'   => 'Omaloodud profiiliväli lisatud.',
        'ALPHA_ONLY'    => 'Ainult tähtarvud',
        'ALPHA_SPACERS' => 'Tähtarvud ja tühikud',
        'ALWAYS_TODAY'  => 'Alati hetkeses kuupäevas',
        'BOOL_ENTRIES_EXPLAIN'  => 'Sisesta valikud nüüd',
        'BOOL_TYPE_EXPLAIN'     => 'Määra tüüp, kas valikukast või raadionupp. Valikukast kuvatakse vaid siis, kui see on kasutajal valitud. Seljuhul kasutatakse <strong>teist</strong> keelevalikut. Raadionupud kuvatakse sõltumata nende väärtusest.',
        'CHANGED_PROFILE_FIELD' => 'Profiiliväli on muudetud.',
        'CHARS_ANY'     => 'Iga sümbol',
        'CHECKBOX'      => 'Valikukast',
        'COLUMNS'       => 'Tulbad',
        'CP_LANG_DEFAULT_VALUE' => 'Vaikeväärtus',
        'CP_LANG_EXPLAIN'       => 'Välja kirjeldus',
        'CP_LANG_EXPLAIN_EXPLAIN'       => 'Välja seletus, mis kuvatakse kasutajale.',
        'CP_LANG_NAME'  => 'Välja nimi/pealkiri, mis kuvatakse kasutajale.',
        'CP_LANG_OPTIONS'       => 'Valikud',
        'CREATE_NEW_FIELD'      => 'Loo uus väli',
        'CUSTOM_FIELDS_NOT_TRANSLATED'  => 'Vähemalt üks omaloodud profiiliväli pole veel tõlgitud. Palun sisesta vajalik informatsioon, vajutades "Tõlgi" linki.',
        'DEFAULT_ISO_LANGUAGE'  => 'Vaikimisi keel [%s]',
        'DEFAULT_LANGUAGE_NOT_FILLED'   => 'Keele sisestusi vaikimisi keelele ei täideta selles profiiliväljas.',
        'DEFAULT_VALUE' => 'Vaikeväärtus',
        'DELETE_PROFILE_FIELD'  => 'Eemalda profiiliväli',
        'DELETE_PROFILE_FIELD_CONFIRM'  => 'Oled kindel, et soovid kustutada selle profiilivälja?',
        'DISPLAY_AT_PROFILE'    => 'Kuva kasutaja juhtpaneelis',
        'DISPLAY_AT_PROFILE_EXPLAIN'    => 'Kasutaja saab muuta seda profiilivälja oma juhtpaneelis.',
        'DISPLAY_AT_REGISTER'   => 'Kuva registreerimisel',
        'DISPLAY_AT_REGISTER_EXPLAIN'   => 'Kui see valik on lubatud, kuvatakse väli registreerimisel.',
		'DISPLAY_ON_VT'					=> 'Kuvatakse teema vaatamisel',
		'DISPLAY_ON_VT_EXPLAIN'			=> 'Kui see valik on lubatud, kuvatakse väli mini-profiilis teema kuvamisel.',
        'DISPLAY_PROFILE_FIELD' => 'Kuva profiiliväli avalikult',
        'DISPLAY_PROFILE_FIELD_EXPLAIN' => 'Profiiliväli kuvatakse kõigis lubatud kohtades. Valides "Ei", peidetakse väli, teemalehtedel, profiilis ja kasutajate nimekirjas.',
        'DROPDOWN_ENTRIES_EXPLAIN'      => 'Sisesta oma valikud siin, iga valik eraldi reale.',
        'EDIT_DROPDOWN_LANG_EXPLAIN'    => 'Saad oma valikuid muuta ja ka juurde lisada. Pole soovitav lisada uusi valikud teiste valikute vahele  - see võib põhjustada kasutajate vale valiku. See võib ka juhtuda, kui eemaldada vahepealt valikud. Eemaldades valikud lõpust, muudetakse seda valikut kasutavate kasutajate valik vaikevalikuks.',
        'EMPTY_FIELD_IDENT'     => 'Tühja välja nimi',
        'EMPTY_USER_FIELD_NAME' => 'Sisesta välja nimi/pealkiri.',
        'ENTRIES'       => 'Sisestused',
        'EVERYTHING_OK' => 'Kõik OK',
        'FIELD_BOOL'    => 'Buulean (Jah/Ei)',
        'FIELD_DATE'    => 'Kuupäev',
        'FIELD_DESCRIPTION'     => 'Välja kirjeldus',
        'FIELD_DESCRIPTION_EXPLAIN'     => 'Seletus väljale kasutajatele.',
        'FIELD_DROPDOWN'        => 'Rippvalikud',
        'FIELD_IDENT'   => 'Välja nimi',
        'FIELD_IDENT_ALREADY_EXIST'     => 'Valitud välja nimi juba eksisteerib. Palun vali mõni muu.',
        'FIELD_IDENT_EXPLAIN'   => 'Välja nimi on andmebaasis ja templeitides välja identifitseerimiseks.',
        'FIELD_INT'     => 'Numbrid',
        'FIELD_LENGTH'  => 'Sisestuskasti pikkus',
        'FIELD_NOT_FOUND'       => 'Profiilivälja ei leitud.',
        'FIELD_STRING'  => 'Üksiku teksti väli',
        'FIELD_TEXT'    => 'Tekstiväli',
        'FIELD_TYPE'    => 'Välja tüüp',
        'FIELD_TYPE_EXPLAIN'    => 'Hiljem sa ei saa muuta välja tüüpi.',
        'FIELD_VALIDATION'      => 'Välja valideerimine',
        'FIRST_OPTION'  => 'Esimene valik',
        'HIDE_PROFILE_FIELD'    => 'Peida profiiliväli',
        'HIDE_PROFILE_FIELD_EXPLAIN'    => 'Peidab profiilivälja teiste kasutajate eest v.a. selle kasutaja, administraatorite ja moderaatorite eest, kes saavad seda välja näha. Kui juhtpaneelis kuvamise valik on keelatud, ei saa kasutaja näha ega muuta seda välja, seda saavad vaid administraatorid. ',
        'INVALID_CHARS_FIELD_IDENT'     => 'Välja nimi saab sisaldada vaid tähti a-z ja alakriipsu.',
        'INVALID_FIELD_IDENT_LEN'       => 'Välja nimi saab olla vaid 17 sümbolit pikk.',
        'ISO_LANGUAGE'  => 'Keel [%s]',
        'LANG_SPECIFIC_OPTIONS' => 'Keelepõhised valikud [<strong>%s</strong>]',
        'MAX_FIELD_CHARS'       => 'Maksimaalne arv sümboleid',
        'MAX_FIELD_NUMBER'      => 'Suurim lubatud number',
        'MIN_FIELD_CHARS'       => 'Miinimumarv sümboleid',
        'MIN_FIELD_NUMBER'      => 'Madalaim lubatud number',
        'NO_FIELD_ENTRIES'      => 'Sisestusi pole määratud',
        'NO_FIELD_ID'   => 'Välja ID\'d pole määratud.',
        'NO_FIELD_TYPE' => 'Välja tüüpi pole määratud.',
        'NO_VALUE_OPTION'       => 'Valik, mis on võrdne sisestamata väärtusega.',
        'NO_VALUE_OPTION_EXPLAIN'       => 'Väärtus täitmata väljale. Kui väli on nõutud, saab kasutaja veateate, kui ta valib valiku, mis on siin määratud.',
        'NUMBERS_ONLY'  => 'Ainult numbrid (0-9)',
        'PROFILE_BASIC_OPTIONS' => 'Põhilised valikud',
        'PROFILE_FIELD_ACTIVATED'       => 'Profiiliväli aktiveeritud.',
        'PROFILE_FIELD_DEACTIVATED'     => 'Profiiliväli deaktiveeritud.',
        'PROFILE_LANG_OPTIONS'  => 'Keelepõhised valikud',
        'PROFILE_TYPE_OPTIONS'  => 'Profiili tüübi põhised valikud',
        'RADIO_BUTTONS' => 'Raadionupud',
        'REMOVED_PROFILE_FIELD' => 'Profiiliväli eemaldatud',
        'REQUIRED_FIELD'        => 'Nõutud väli',
        'REQUIRED_FIELD_EXPLAIN'        => 'Sunni profiilivälja täitma või määrama kasutaja või administraatori poolt. kui registreerimisväljal kuvamise valik on keelatud, on välja täitmine nõutav vaid profiili muutmisel.',
        'ROWS'  => 'Ridu',
        'SAVE'  => 'Salvesta',
        'SECOND_OPTION' => 'Teine valik',
        'STEP_1_EXPLAIN_CREATE' => 'Siin saad sisestada esmased põhilised parameetrid väljale. See info on vajalik teise sammu jaoks, kus sa saad seada ülejäänud valikud ja muuta oma välja edasi.',
        'STEP_1_EXPLAIN_EDIT'   => 'Siin saad muuta põhilisi parameetreid väljal. Seotud valikud arvestatakse uuesti teises sammus.',
        'STEP_1_TITLE_CREATE'   => 'Lisa profiiliväli',
        'STEP_1_TITLE_EDIT'     => 'Muuda profiilivälja',
        'STEP_2_EXPLAIN_CREATE' => 'Siin saad määrata mõned tavalised valikud, mida saad muuta.',
        'STEP_2_EXPLAIN_EDIT'   => 'Siin saad muuta mõndasi tavalisi valikuid.<br /><strong>Profiilivälja muudatused ei mõjuta praeguseid profiilivälju, mida kasutajad on täitnud.</strong>',
        'STEP_2_TITLE_CREATE'   => 'Profiili tüübi põhised valikud',
        'STEP_2_TITLE_EDIT'     => 'Profiili tüübi põhised valikud',
        'STEP_3_EXPLAIN_CREATE' => 'Kuna sul on foorumis rohkem kui üks keel, pead täitma ka ülejäänud keelevalikud. Profiiliväli töötab vaikekeelega, Saad muuta ülejäänud keeleobjekte ka hiljem.',
        'STEP_3_EXPLAIN_EDIT'   => 'Kuna sul on foorumis rohkem kui üks keel, pead muutma või lisama nüüd ka ülejäänud keelevalikud. Profiiliväli töötab vaikekeelega.',
        'STEP_3_TITLE_CREATE'   => 'Ülejäänud keeleobjektid',
        'STEP_3_TITLE_EDIT'     => 'Keeleobjektid',
        'STRING_DEFAULT_VALUE_EXPLAIN'  => 'Sisesta kuvatav vaikefraas, vaikeväärtus. Jäta tühjaks, kui soovid selle kuvada tühjana.',
        'TEXT_DEFAULT_VALUE_EXPLAIN'    => 'Sisesta kuvatav vaiketekst, vaikeväärtus. Jäta tühjaks, kui soovid selle kuvada tühjana.',
        'TRANSLATE'     => 'Tõlgi',
        'USER_FIELD_NAME'       => 'Välja nimi/pealkiri, mis kuvatakse kasutajale.',
        'VISIBILITY_OPTION'     => 'Nähtavuse valikud',
));

?>
