<?php
/**
*
* acp_search.php [Estonian]
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
        'ACP_SEARCH_INDEX_EXPLAIN'      => 'Siin saad hallata otsingu indekseid. Kuna tavaliselt kasutada sa vaid ühte backend\'i, kustuta kõik teised indeksid, mida sa ei kasuta. Pärast mõnede otsinguseadete muutmist (näiteks miinimum/maksimumsümbolite arv) võib olla soovitav indeksi taasloomine.',
        'ACP_SEARCH_SETTINGS_EXPLAIN'   => 'Siin saad määrata, millist backend\'i kasutatakse postituste indekseerimisel ja otsimisel. Võid seada mitmeid valikuid. Mõned seaded on samad kõikidele backend\'idele.',
        'COMMON_WORD_THRESHOLD' => 'Tavalise sõnalävi',
        'COMMON_WORD_THRESHOLD_EXPLAIN' => 'Sõnad, mis sisalduvad suures protsendis kõikidest postitustest, loetakse tavalisteks. Tavalisi sõnu ignoreeritakse otsingutes. Kirjuta 0, et keelata. Toimib vaid üle 100 postituse korral. Kui soovid sõnu, mis on tavalised, muuta tagasi, pead uuesti indekseerima.',
        'CONFIRM_SEARCH_BACKEND'        => 'Oled kindel, et soovid vahetada otsingu backend\'i? Pärast selle muutmist pead looma uue indeksi sellele. Kui saei kavatse minna tagasi vana backend\'i peale, võid kustutada vana otsingu indeksi, et süsteemi ressursse vabastada.',
        'CONTINUE_DELETING_INDEX'       => 'Jätka indeksi eemaldamist',
        'CONTINUE_DELETING_INDEX_EXPLAIN'       => 'Indeksi eemaldamisprotsess on käivitatud. Et pääseda otsingu lehele, pead selle lõpule viima või katkestama.',
        'CONTINUE_INDEXING'     => 'Jätka indekseerimist',
        'CONTINUE_INDEXING_EXPLAIN'     => 'Indekseerimisprotsess on käivitatud. Et pääseda otsingu lehele, pead selle lõpule viima või katkestama.',
        'CREATE_INDEX'  => 'Loo indeks',
        'DELETE_INDEX'  => 'Kustuta indeks',
        'DELETING_INDEX_IN_PROGRESS'    => 'Indeksi kustutamine käivitatud',
        'DELETING_INDEX_IN_PROGRESS_EXPLAIN'    => 'Otsingu backend puhastab hetkel oma indeksit. See võib võtta mõne minuti.',
        'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'   => 'MySQL täisteksi backend\'i saab kasutada vaid MySQL 4 või uuema versiooniga.',
        'FULLTEXT_MYSQL_NOT_MYISAM'     => 'MySQL täisteksti indekseid saab kasutada vaid MyISAM tabelitega.',
        'FULLTEXT_MYSQL_TOTAL_POSTS'    => 'Indekseeritud postituste koguarv',
        'FULLTEXT_MYSQL_MBSTRING'       => 'Tugi mitte-ladina UTF-8 sümbolitele, kasutades mbstring\'i:',
        'FULLTEXT_MYSQL_PCRE'   => 'Tugi mitte-ladina UTF-8 sümbolitele, kasutades PCRE\'d:',
        'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'       => 'Kui PCRE\'l pole unicode tähestiku seadeid, üritab backend kasutada mbstring’i tavalist väljendusmootorit.',
        'FULLTEXT_MYSQL_PCRE_EXPLAIN'   => 'See backend vajab PCRE unicode tähestiku seadeid, saadaval vaid PHP 4.4, 5.1 ja uuemates versioonides, kui soovid otsida mitte-ladina sümboleid.',
        'GENERAL_SEARCH_SETTINGS'       => 'Üldised otsingu seaded',
        'GO_TO_SEARCH_INDEX'    => 'Mine otsingulehele',
        'INDEX_STATS'   => 'Indeksi statistika',
        'INDEXING_IN_PROGRESS'  => 'Indekserimine',
        'INDEXING_IN_PROGRESS_EXPLAIN'  => 'Otsingu backend indekseerib hetkel kõiki foorumi postitusi. Selleks võib kuluda mitu minutit kuni mitu tundi, olenevalt foorumi suurusest.',
        'LIMIT_SEARCH_LOAD'     => 'Otsingulehe süsteemi laadimise limiit',
        'LIMIT_SEARCH_LOAD_EXPLAIN'     => 'Kui 1-minutiline süsteemi laadimine ületab selle väärtuse, läheb otsinguleht maha. 1.0 võrdub ~100% utilisatsiooni ühe protsessori kohta. See toimib vaid UNIX serverites.',
        'MAX_SEARCH_CHARS'      => 'Maksimumarv sümboleid, mida otsingus indekseeritakse',
        'MAX_SEARCH_CHARS_EXPLAIN'      => 'Sõnad, kus on vähem või võrdne arv sümboleid, mis siin valikus määratud, indekseeritakse otsimiseks.',
		'MAX_NUM_SEARCH_KEYWORDS'            => 'Maksimumarv lubatud otsisõnu',
        'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => 'Maksimumarv sõnu, mille järgi kasutaja saab otsida. 0 lubab piiramatul arvul sõnu.',
        'MIN_SEARCH_CHARS'      => 'Miinimumarv sümboleid, mida otsingus indekseeritakse',
        'MIN_SEARCH_CHARS_EXPLAIN'      => 'Sõnad kus on rohkem või võrdne arv sümboleid, mis siin valikus määratud, indekseeritakse otsimiseks.',
        'MIN_SEARCH_AUTHOR_CHARS'       => 'Miinimumarv autori nime sümboleid',
        'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'       => 'Kasutajad peavad sisestama vähemalt niipalju sümboleid nimesse, kui sooritavad wildcard\'iga autoriotsingut. Kui autori kasutajanimi on lühem, kui siinmääratud väärtus, saad teda otsida, sisestades tema kasutajanime.',
        'PROGRESS_BAR'  => 'Edenemisriba',
        'SEARCH_GUEST_INTERVAL' => 'Külaliste otsingu intervall',
        'SEARCH_GUEST_INTERVAL_EXPLAIN' => 'Arv sekundites, mis on otsingute intervall külalistele. Kui üks külaline otsib, peavad teised ootama selle aja möödumist.',
        'SEARCH_INDEX_CREATE_REDIRECT'  => 'Kõik postitused kuni ID\'ni %1$d on indekseeritud, millest %2$d postitust selles indekseerimises.<br />Praegune indekseerimissagedus on umbes %3$.1f postitust sekundis.<br />Indekseerimine käib...',
        'SEARCH_INDEX_DELETE_REDIRECT'  => 'Kõik postitused kuni ID\'ni %1$d on eemaldatud otsingu indeksist.<br />Kustutamine käib...',
        'SEARCH_INDEX_CREATED'  => 'Kõik postitused andmebaasis indekseeritud.',
        'SEARCH_INDEX_REMOVED'  => 'Otsinguindeks sellele backend\'ile kustutatud.',
        'SEARCH_INTERVAL'       => 'Kasutaja otsingu intervall',
        'SEARCH_INTERVAL_EXPLAIN'       => 'Arv sekundites, mis on otsingute intervall kasutjale. See intervall on eraldi igale kasutajale.',
        'SEARCH_STORE_RESULTS'  => 'Otsingutulemite vahemälu pikkus',
        'SEARCH_STORE_RESULTS_EXPLAIN'  => 'Vahemällu salvestatud otsingutulemid aeguvad peale selle aja möödumist sekundites. Kirjuta 0, kui soovid keelata vahemälu otsingutulemitel.',
        'SEARCH_TYPE'   => 'Otsingu backend',
        'SEARCH_TYPE_EXPLAIN'   => 'phpBB lubab sul valida ühe backend\'i, mida kasutatakse otsingul. Vaikimisi kasutab phpBB oma täisteksti backend\'i.',
        'SWITCHED_SEARCH_BACKEND'       => 'Vahetasid otsingu backend\'i. Et kasuada seda, peaksid olema kindel, et sellele backend\'ile on indeks.',
        'TOTAL_WORDS'   => 'Indekseeritud sõnade koguarv',
        'TOTAL_MATCHES' => 'Indekseeritud "Sõna-postituse" suhte koguarv. ',
        'YES_SEARCH'    => 'Luba mitmed otsinguvõimalused',
        'YES_SEARCH_EXPLAIN'    => 'Lubada kasutada mitut täpset otsingut, sh kasutajate otsing.',
        'YES_SEARCH_UPDATE'     => 'Luba täisteksti uuendamine',
        'YES_SEARCH_UPDATE_EXPLAIN'     => 'Täisteksti uuendamine postitades, kirjutatakse üle, kui otsing on keelatud.',
));

?>
