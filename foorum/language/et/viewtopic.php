<?php
/**
*
* viewtopic.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-04-12 - Amphor - phpbb.ee
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
        'ATTACHMENT'    => 'Manus',
        'ATTACHMENT_FUNCTIONALITY_DISABLED'     => 'Manuste lisamine on keelatud',
        'BOOKMARK_ADDED'        => 'Teemale järjehoidja lisatud.',
        'BOOKMARK_ERR'         => 'Teemale järjehoidja lisamine ebaõnnestus. Palun proovi uuesti.',
        'BOOKMARK_REMOVED'      => 'Teemalt järjehoidja eemaldatud.',
        'BOOKMARK_TOPIC'        => 'Pane teemale järjehoidja',
        'BOOKMARK_TOPIC_REMOVE' => 'Eemalda järjehoidja',
        'BUMPED_BY'     => 'Viimati tõstis%1$s, %2$s.',
        'BUMP_TOPIC'    => 'Tõsta teemat',
        'CODE'  => 'Kood',
		'COLLAPSE_QR'			=> 'Peaida kiirvastamine',
        'DELETE_TOPIC'  => 'Kustuta teema',
        'DOWNLOAD_NOTICE'       => 'Sul pole õigusi, et siin postituses manuseid näha',
        'EDITED_TIMES_TOTAL'    => 'Viimati muutis %1$s, %2$s, muudetud %3$d korda kokku.',
        'EDITED_TIME_TOTAL'     => 'Viimati muutis %1$s, %2$s, muudetud %3$d kord kokku.',
        'EMAIL_TOPIC'   => 'Saada sõbrale e-kiri',
        'ERROR_NO_ATTACHMENT'   => 'Valitud manust ei ole enam.',
        'FILE_NOT_FOUND_404'    => 'Faili <strong>%s</strong> ei eksisteeri.',
        'FORK_TOPIC'    => 'Kopeeri teema',
		'FULL_EDITOR' => 'Täiendatud redigeerija',
        'LINKAGE_FORBIDDEN'     => 'Sul ei ole õigusi vaadata, alla laadida ega linkida siit lehelt või siia lehele',
        'LOGIN_NOTIFY_TOPIC'    => 'Sind on teatatud sellest teemast, logi sisse, et seda vaadata.',
        'LOGIN_VIEWTOPIC'       => 'Sa pead olema registreeritud ja sisse logitud, et seda teemat vaadata.',
        'MAKE_ANNOUNCE' => 'Muuda teadaandeks',
        'MAKE_GLOBAL'   => 'Muuda üldteadaandeks',
        'MAKE_NORMAL'   => 'Muuda tavaliseks teemaks',
        'MAKE_STICKY'   => 'Muuda kleebiseks',
        'MAX_OPTIONS_SELECT'    => 'Sa võid valida kuni <strong>%d</strong> valikut.',
        'MAX_OPTION_SELECT'     => 'Sa võid valida kuni <strong>1</strong> valiku.',
        'MISSING_INLINE_ATTACHMENT'     => 'Manus <strong>%s</strong> pole enam saadaval.',
        'MOVE_TOPIC'    => 'Liiguta teema',
        'NO_ATTACHMENT_SELECTED'        => 'Sa pole valinud manust, mida alla laadida või vaadata.',
        'NO_NEWER_TOPICS'       => 'Siin foorumis pole uuemaid teemasid.',
        'NO_OLDER_TOPICS'       => 'Siin foorumis pole vanemaid teemasid.',
        'NO_UNREAD_POSTS'       => 'Selles teemas pole uusi lugemata postitusi.',
        'NO_VOTE_OPTION'        => 'Sa pead valima valiku hääletamiseks.',
        'NO_VOTES'      => 'Pole hääli',
        'POLL_ENDED_AT' => 'Hääletus lõppes %s',
        'POLL_RUN_TILL' => 'Hääletus kestab kuni %s',
        'POLL_VOTED_OPTION'     => 'Sa hääletasid selle valiku poolt',
        'PRINT_TOPIC'   => 'Printerivaade',
        'QUICK_MOD'     => 'Kiire modereerimine',
		'QUICKREPLY'			=> 'Kiirvastamine',
        'QUOTE' => 'Tsiteeri',
        'REPLY_TO_TOPIC'        => 'Vasta teemale',
        'RETURN_POST'   => '%sTagasi postituse juurde%s',
		'SHOW_QR'				=> 'Kiirvastamine',
        'SUBMIT_VOTE'   => 'Anna hääl',
        'TOTAL_VOTES'   => 'Hääli kokku',
        'UNLOCK_TOPIC'  => 'Ava teema',
        'VIEW_INFO'     => 'Postituse andmed',
        'VIEW_NEXT_TOPIC'       => 'Järgmine teema',
        'VIEW_PREVIOUS_TOPIC'   => 'Eelmine teema',
        'VIEW_RESULTS'  => 'Vaata tulemusi',
        'VIEW_TOPIC_POST'       => '1 postitus',
        'VIEW_TOPIC_POSTS'      => '%d postitust',
        'VIEW_UNREAD_POST'      => 'Esimene lugemata postitus',
        'VISIT_WEBSITE' => 'Veebileht',
        'VOTE_SUBMITTED'        => 'Sinu hääl on arvesse võetud',
        'VOTE_CONVERTED'                => 'Häält ei saa muuta konverditud hääletuste puhul.',
));

?>
