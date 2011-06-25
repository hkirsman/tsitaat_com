<?php
/**
*
* acp_permissions_phpbb.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-27 - phpbb.ee
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

        'permission_cat'        => array(
                'actions'       => 'Toimingud',
                'content'       => 'Sisu',
                'forums'        => 'Foorumid',
                'misc'  => 'Muu',
                'permissions'   => 'Õigused',
                'pm'    => 'Privaatsõnumid',
                'polls' => 'Hääletused',
                'post'  => 'Postitused',
                'post_actions'  => 'Postituse toimingud',
                'posting'       => 'Postitamine',
                'profile'       => 'Profiil',
                'settings'      => 'Seaded',
                'topic_actions' => 'Teema toimingud',
                'user_group'    => 'Kasutajad &amp; grupid',
        ),


        'permission_type'       => array(
                'u_'    => 'Kasutaja õigused',
                'a_'    => 'Administraatori õigused',
                'm_'    => 'Moderaatori õigused',
                'f_'    => 'Foorumi õigused',

                'global'        => array(
                        'm_'    => 'Üldmoderaatori õigused',
                ),

        ),


        'acl_u_viewprofile'     => array(
                'lang'  => 'Saab vaadata profiile, kasutajate nimekirja ja foorumilolevate nimekirja',
                'cat'   => 'profile',
        ),


        'acl_u_chgname' => array(
                'lang'  => 'Saab muuta kasutajanime',
                'cat'   => 'profile',
        ),


        'acl_u_chgpasswd'       => array(
                'lang'  => 'Saab muuta parooli',
                'cat'   => 'profile',
        ),


        'acl_u_chgemail'        => array(
                'lang'  => 'Saab muuta e-postiaadressi',
                'cat'   => 'profile',
        ),


        'acl_u_chgavatar'       => array(
                'lang'  => 'Saab muuta avatari',
                'cat'   => 'profile',
        ),


        'acl_u_chggrp'  => array(
                'lang'  => 'Saab muuta vaikimisi kasutajagruppi',
                'cat'   => 'profile',
        ),


        'acl_u_attach'  => array(
                'lang'  => 'Saab lisada manuseid',
                'cat'   => 'post',
        ),


        'acl_u_download'        => array(
                'lang'  => 'Saab alla laadida manuseid',
                'cat'   => 'post',
        ),


        'acl_u_savedrafts'      => array(
                'lang'  => 'Saab salvestada mustandeid',
                'cat'   => 'post',
        ),


        'acl_u_chgcensors'      => array(
                'lang'  => 'Saab keelata tsensuuri',
                'cat'   => 'post',
        ),


        'acl_u_sig'     => array(
                'lang'  => 'Saab kasutada signatuuri',
                'cat'   => 'post',
        ),


        'acl_u_sendpm'  => array(
                'lang'  => 'Saab saata privaatsõnumeid',
                'cat'   => 'pm',
        ),


        'acl_u_masspm'  => array(
                'lang'  => 'Saab saata privaatsõnumeid korraga mitmele kasutajale.',
                'cat'   => 'pm'),

        'acl_u_masspm_group'=> array(
                'lang' => 'Saab saata privaatsõnumeid gruppidele',
                'cat' => 'pm'),


        'acl_u_readpm'  => array(
                'lang'  => 'Saab lugeda privaatsõnumeid',
                'cat'   => 'pm',
        ),


        'acl_u_pm_edit' => array(
                'lang'  => 'Saab muuta oma privaatsõnumeid',
                'cat'   => 'pm',
        ),


        'acl_u_pm_delete'       => array(
                'lang'  => 'Saab emaldada privaatsõnumeid oma kaustast',
                'cat'   => 'pm',
        ),


        'acl_u_pm_forward'      => array(
                'lang'  => 'Saab edastada privaatsõnumeid',
                'cat'   => 'pm',
        ),


        'acl_u_pm_emailpm'      => array(
                'lang'  => 'Saab saata privaatsõnumeid e-postiga',
                'cat'   => 'pm',
        ),


        'acl_u_pm_printpm'      => array(
                'lang'  => 'Saab printida privaatsõnumeid',
                'cat'   => 'pm',
        ),


        'acl_u_pm_attach'       => array(
                'lang'  => 'Saab lisada manuseid privaatsõnumitesse',
                'cat'   => 'pm',
        ),


        'acl_u_pm_download'     => array(
                'lang'  => 'Saab all laadida manuseid privaatsõnumites',
                'cat'   => 'pm',
        ),


        'acl_u_pm_bbcode'       => array(
                'lang'  => 'Saab kasutada BBCode\'t privaatsõnumites',
                'cat'   => 'pm',
        ),


        'acl_u_pm_smilies'      => array(
                'lang'  => 'Saab kasutada smailisid privaatsõnumites',
                'cat'   => 'pm',
        ),


        'acl_u_pm_img'  => array(
                'lang'  => 'Saab kasutada [img]-koodi privaatsõnumites',
                'cat'   => 'pm',
        ),


        'acl_u_pm_flash'        => array(
                'lang'  => 'Saab postitada [Flash]-koodi privaatsõnumites',
                'cat'   => 'pm',
        ),


        'acl_u_sendemail'       => array(
                'lang'  => 'Saab saata e-kirju',
                'cat'   => 'misc',
        ),


        'acl_u_sendim'  => array(
                'lang'  => 'Saab saata kiirsuhtluse sõnumeid',
                'cat'   => 'misc',
        ),


        'acl_u_ignoreflood'     => array(
                'lang'  => 'Saab ignoreerida postituste intervalli',
                'cat'   => 'misc',
        ),


        'acl_u_hideonline'      => array(
                'lang'  => 'Saab peita foorumiloleku',
                'cat'   => 'misc',
        ),


        'acl_u_viewonline'      => array(
                'lang'  => 'Saab vaadata peidetud foorumilolevaid kasutajaid',
                'cat'   => 'misc',
        ),


        'acl_u_search'  => array(
                'lang'  => 'Saab otsida foorumitest',
                'cat'   => 'misc',
        ),


        'acl_f_list'    => array(
                'lang'  => 'Saab vaadata foorumeid',
                'cat'   => 'post',
        ),


        'acl_f_read'    => array(
                'lang'  => 'Saab lugeda foorumeid',
                'cat'   => 'post',
        ),


        'acl_f_post'    => array(
                'lang'  => 'Saab teha uue teema',
                'cat'   => 'post',
        ),


        'acl_f_reply'   => array(
                'lang'  => 'Saab vastata teemadele',
                'cat'   => 'post',
        ),


        'acl_f_icons'   => array(
                'lang'  => 'Saab kasutada teema/postituse ikoone',
                'cat'   => 'post',
        ),


        'acl_f_announce'        => array(
                'lang'  => 'Saab postitada teadaandeid',
                'cat'   => 'post',
        ),


        'acl_f_sticky'  => array(
                'lang'  => 'Saab postitada kleebiseid',
                'cat'   => 'post',
        ),


        'acl_f_poll'    => array(
                'lang'  => 'Saab luua hääletusi',
                'cat'   => 'polls',
        ),


        'acl_f_vote'    => array(
                'lang'  => 'Saab hääletada',
                'cat'   => 'polls',
        ),


        'acl_f_votechg' => array(
                'lang'  => 'Saab muuta oma hääletuse valikut',
                'cat'   => 'polls',
        ),


        'acl_f_attach'  => array(
                'lang'  => 'Saab lisada manuseid',
                'cat'   => 'content',
        ),


        'acl_f_download'        => array(
                'lang'  => 'Saab alla laadida manuseid',
                'cat'   => 'content',
        ),


        'acl_f_sigs'    => array(
                'lang'  => 'Saab kasutada signatuuri',
                'cat'   => 'content',
        ),


        'acl_f_bbcode'  => array(
                'lang'  => 'Saab kasutada BBCode\'t',
                'cat'   => 'content',
        ),


        'acl_f_smilies' => array(
                'lang'  => 'Saab postitada smailisid',
                'cat'   => 'content',
        ),


        'acl_f_img'     => array(
                'lang'  => 'Saab kasutada [img]-koodi',
                'cat'   => 'content',
        ),


        'acl_f_flash'   => array(
                'lang'  => 'Saab kasutada [flash]-koodi',
                'cat'   => 'content',
        ),


        'acl_f_edit'    => array(
                'lang'  => 'Saab muuta oma postitusi',
                'cat'   => 'actions',
        ),


        'acl_f_delete'  => array(
                'lang'  => 'Saab kustutada oma postitusi',
                'cat'   => 'actions',
        ),


        'acl_f_user_lock'       => array(
                'lang'  => 'Saab sulgeda oma teemad',
                'cat'   => 'actions',
        ),


        'acl_f_bump'    => array(
                'lang'  => 'Saab tõstatada teemasid',
                'cat'   => 'actions',
        ),


        'acl_f_report'  => array(
                'lang'  => 'Saab raporteerida postitustest',
                'cat'   => 'actions',
        ),


        'acl_f_subscribe'       => array(
                'lang'  => 'Saab tellida foorumit',
                'cat'   => 'actions',
        ),


        'acl_f_print'   => array(
                'lang'  => 'Saab printida teemasid',
                'cat'   => 'actions',
        ),


        'acl_f_email'   => array(
                'lang'  => 'Saab saata teemasid e-kirjaga',
                'cat'   => 'actions',
        ),


        'acl_f_search'  => array(
                'lang'  => 'Saab otsida foorumist',
                'cat'   => 'misc',
        ),


        'acl_f_ignoreflood'     => array(
                'lang'  => 'Saab ignoreerida postituste intervalli',
                'cat'   => 'misc',
        ),


        'acl_f_postcount'       => array(
                'lang'  => 'Võimalda postituste loendamine<br /><em>See mõjub vaid uutele postitustele.</em>',
                'cat'   => 'misc',
        ),


        'acl_f_noapprove'       => array(
                'lang'  => 'Saab postitada ilma heakskiiduta',
                'cat'   => 'misc',
        ),


        'acl_m_edit'    => array(
                'lang'  => 'Saab muuta postitusi',
                'cat'   => 'post_actions',
        ),


        'acl_m_delete'  => array(
                'lang'  => 'Saab kustutada postitusi',
                'cat'   => 'post_actions',
        ),


        'acl_m_approve' => array(
                'lang'  => 'Saab heaks kiita postitusi',
                'cat'   => 'post_actions',
        ),


        'acl_m_report'  => array(
                'lang'  => 'Saab kustutada ja sulgeda raporteid',
                'cat'   => 'post_actions',
        ),


        'acl_m_chgposter'       => array(
                'lang'  => 'Saab muuta postituse autorit',
                'cat'   => 'post_actions',
        ),


        'acl_m_move'    => array(
                'lang'  => 'Saab liigutada teemasid',
                'cat'   => 'topic_actions',
        ),


        'acl_m_lock'    => array(
                'lang'  => 'Saab sulgeda teemasid',
                'cat'   => 'topic_actions',
        ),


        'acl_m_split'   => array(
                'lang'  => 'Saab poolitada teemasid',
                'cat'   => 'topic_actions',
        ),


        'acl_m_merge'   => array(
                'lang'  => 'Saab ühendada teemasid',
                'cat'   => 'topic_actions',
        ),


        'acl_m_info'    => array(
                'lang'  => 'Saab vaadata postituse andmeid',
                'cat'   => 'misc',
        ),


        'acl_m_warn'    => array(
                'lang'  => 'Saab anda hoiatusi<br /><em>See jõustub kõigis foorumites korraga.</em>',
                'cat'   => 'misc',
        ),


        'acl_m_ban'     => array(
                'lang'  => 'Saab hallata bänne<br /><em>See jõustub kõigis foorumites korraga.</em>',
                'cat'   => 'misc',
        ),


        'acl_a_board'   => array(
                'lang'  => 'Saab muuta foorumi seadeid/kontrollida uuendusi',
                'cat'   => 'settings',
        ),


        'acl_a_server'  => array(
                'lang'  => 'Saab muuta serveri/ühendumise seadeid',
                'cat'   => 'settings',
        ),


        'acl_a_jabber'  => array(
                'lang'  => 'Saab muuta Jabberi seadeid',
                'cat'   => 'settings',
        ),


        'acl_a_phpinfo' => array(
                'lang'  => 'Saab vaadata PHP seadeid',
                'cat'   => 'settings',
        ),


        'acl_a_forum'   => array(
                'lang'  => 'Saab hallata foorumeid',
                'cat'   => 'forums',
        ),


        'acl_a_forumadd'        => array(
                'lang'  => 'Saab lisada foorumeid',
                'cat'   => 'forums',
        ),


        'acl_a_forumdel'        => array(
                'lang'  => 'Saab kustutada foorumeid',
                'cat'   => 'forums',
        ),


        'acl_a_prune'   => array(
                'lang'  => 'Saab kärpida foorumeid',
                'cat'   => 'forums',
        ),


        'acl_a_icons'   => array(
                'lang'  => 'Saab muuta teema/postituse ikoone ja smailisid',
                'cat'   => 'posting',
        ),


        'acl_a_words'   => array(
                'lang'  => 'Saab muuta tsensuuri',
                'cat'   => 'posting',
        ),


        'acl_a_bbcode'  => array(
                'lang'  => 'Saab luua BBCode\'t',
                'cat'   => 'posting',
        ),


        'acl_a_attach'  => array(
                'lang'  => 'Saab muuta manuste seadeid',
                'cat'   => 'posting',
        ),


        'acl_a_user'    => array(
                'lang'  => 'Saab hallata kasutajaid<br /><em>Sellega saab vaadatta ka kasutajate brauserite agenti foorumilolevate kasutajate nimekirjas.</em>',
                'cat'   => 'user_group',
        ),


        'acl_a_userdel' => array(
                'lang'  => 'Saab kustutada/kärpida kasutajaid',
                'cat'   => 'user_group',
        ),


        'acl_a_group'   => array(
                'lang'  => 'Saab hallata gruppe',
                'cat'   => 'user_group',
        ),


        'acl_a_groupadd'        => array(
                'lang'  => 'Saab lisada uue grupi',
                'cat'   => 'user_group',
        ),


        'acl_a_groupdel'        => array(
                'lang'  => 'Saab kustutada gruppe',
                'cat'   => 'user_group',
        ),


        'acl_a_ranks'   => array(
                'lang'  => 'Saab hallata tiitleid',
                'cat'   => 'user_group',
        ),


        'acl_a_profile' => array(
                'lang'  => 'Saab hallata omaloodud profiilivälju',
                'cat'   => 'user_group',
        ),


        'acl_a_names'   => array(
                'lang'  => 'Saab hallata keelatud kasutajanimesid',
                'cat'   => 'user_group',
        ),


        'acl_a_ban'     => array(
                'lang'  => 'Saab hallata bänne',
                'cat'   => 'user_group',
        ),


        'acl_a_viewauth'        => array(
                'lang'  => 'Saab vaadata õiguste maske',
                'cat'   => 'permissions',
        ),


        'acl_a_authgroups'      => array(
                'lang'  => 'Saab muuta õigusi igal grupil eraldi',
                'cat'   => 'permissions',
        ),


        'acl_a_authusers'       => array(
                'lang'  => 'Saab muuta õigusi igal kasutajal eraldi',
                'cat'   => 'permissions',
        ),


        'acl_a_fauth'   => array(
                'lang'  => 'Saab muuta foorumi õiguste klassi',
                'cat'   => 'permissions',
        ),


        'acl_a_mauth'   => array(
                'lang'  => 'Saab muuta moderaatori õiguste klassi',
                'cat'   => 'permissions',
        ),


        'acl_a_aauth'   => array(
                'lang'  => 'Saab muuta administraatori õiguste klassi',
                'cat'   => 'permissions',
        ),


        'acl_a_uauth'   => array(
                'lang'  => 'Saab muuta kasutaja õiguse klassi',
                'cat'   => 'permissions',
        ),


        'acl_a_roles'   => array(
                'lang'  => 'Saab hallata rolle',
                'cat'   => 'permissions',
        ),


        'acl_a_switchperm'      => array(
                'lang'  => 'Saab kasutada teisi õigusi',
                'cat'   => 'permissions',
        ),


        'acl_a_styles'  => array(
                'lang'  => 'Saab hallata stiile',
                'cat'   => 'misc',
        ),


        'acl_a_viewlogs'        => array(
                'lang'  => 'Saab vaadata logisid',
                'cat'   => 'misc',
        ),


        'acl_a_clearlogs'       => array(
                'lang'  => 'Saab tühjendada logisid',
                'cat'   => 'misc',
        ),


        'acl_a_modules' => array(
                'lang'  => 'Saab hallata mooduleid',
                'cat'   => 'misc',
        ),


        'acl_a_language'        => array(
                'lang'  => 'Saab hallata keelepakke',
                'cat'   => 'misc',
        ),


        'acl_a_email'   => array(
                'lang'  => 'Saab saata masskirju',
                'cat'   => 'misc',
        ),


        'acl_a_bots'    => array(
                'lang'  => 'Saab hallata botte',
                'cat'   => 'misc',
        ),


        'acl_a_reasons' => array(
                'lang'  => 'Saab hallata raporteerimise/keelamise põhjuseid',
                'cat'   => 'misc',
        ),


        'acl_a_backup'  => array(
                'lang'  => 'Saab teha koopie/taastada andmebaasi',
                'cat'   => 'misc',
        ),


        'acl_a_search'  => array(
                'lang'  => 'Saab hallata otsingu seadeid',
                'cat'   => 'misc',
        ),

));

?>
