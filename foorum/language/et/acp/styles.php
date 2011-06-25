<?php
/**
*
* acp_styles.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-01 - phpbb.ee
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
        'ACP_IMAGESETS_EXPLAIN' => 'Pildikogu hõlmab kõikvõimalikud pildid, mida foorum kasutab. Siin saad muuta, eksportida või kustutada olemasolevaid pildikogusid ja importida või lisada uusi.',
        'ACP_STYLES_EXPLAIN'    => 'Siin saad hallata saadavalolevaid stiile foorumis. Stiil koosneb teemast, templeidist ja pildikogust. Võid ka muuta olemasolevaid stiile, kustutada, deaktiveerida, reaktiveerida, luua või importida uusi. Saad näha, milline stiil välja näeb, kasutades eelvaate funktsiooni. Praegune vaikimisi stiil on märgitud tärniga (*). Lisaks on toodud ka stiili kasutavate kasutajate arv. Stiili ülekirjutamine siin ei kajastu.',
        'ACP_TEMPLATES_EXPLAIN' => 'Templeit hõlmab kõiki märgistusi, et genereerida foorumi välimus. Siin saad muuta, kustutada importida ja vaadata olemasolevaid templeite. Võid ka muuta koodi, millega genereeritakse BBCode\'t.',
        'ACP_THEMES_EXPLAIN'    => 'Siin saad luua, installeerida, muuta, kustutada ja eksportida teemasid. Teema on kombinatsioon värvidest ja piltidest, mis määravad foorumi põhilise väljanägemise. Saadavate valikute arv sõltub serveri konfiguratsioonist ja phpBB installatsioonist. Kui lood uut teemat, ei pea võtma eelnevat teemat aluseks.',
        'ADD_IMAGESET'  => 'Loo pildikogu',
        'ADD_IMAGESET_EXPLAIN'  => 'Siin saad luua uue pildikogu. Olenevalt serveri konfiguratsioonis ja faili õigustest, võib sul siin olla mitmeid valikuid. Näiteks saad võtta uue pildikogu loomisel olemasoleva põhjaks. Võid saada ka üles laadida või importida (/store/ kaustast) pildikogu arhiivifaili. Kui laed üles või impordid, saab pildikogu nime võtta pildikogu arhiivifailist (et seda teha, jäta vastav väli tühjaks).',
        'ADD_STYLE'     => 'Loo stiil',
        'ADD_STYLE_EXPLAIN'     => 'Siin saad lisada uue stiili. Olenevalt serveri konfiguratsioonis ja faili õigustest, võib sul siin olla mitmeid valikuid. Näiteks saad võtta uue stiili loomisel olemasoleva põhjaks. Võid saada ka üles laadida või importida (/store/ kaustast) stiili arhiivifaili. Kui laed üles või impordid, määratakse stiili nimi automaatselt.',
        'ADD_TEMPLATE'  => 'Loo templeit',
        'ADD_TEMPLATE_EXPLAIN'  => 'Siin saad lisada uue templeidi. Olenevalt serveri konfiguratsioonis ja faili õigustest, võib sul siin olla mitmeid valikuid. Näiteks saad võtta uue templeidi loomisel olemasoleva põhjaks. Võid saada ka üles laadida või importida (/store/ kaustast) templeidi arhiivifaili. Kui laed üles või impordid, saab templeidi nime võtta templeidi arhiivifailist (et seda teha, jäta vastav väli tühjaks).',
        'ADD_THEME'     => 'Loo teema',
        'ADD_THEME_EXPLAIN'     => 'Siin saad lisada uue teema. Olenevalt serveri konfiguratsioonis ja faili õigustest, võib sul siin olla mitmeid valikuid. Näiteks saad võtta uue teema loomisel olemasoleva põhjaks. Võid saada ka üles laadida või importida (/store/ kaustast) teema arhiivifaili. Kui laed üles või impordid, saab teema nime võtta teema arhiivifailist (et seda teha, jäta vastav väli tühjaks).',
        'ARCHIVE_FORMAT'        => 'Arhiivifaili tüüp',
        'AUTOMATIC_EXPLAIN'     => 'Jäta tühjaks, et proovida automaatselt tuvastada.',
        'BACKGROUND'    => 'Taust',
        'BACKGROUND_COLOUR'     => 'Tausta värv',
        'BACKGROUND_IMAGE'      => 'Taustapilt',
        'BACKGROUND_REPEAT'     => 'Tausta kordus',
        'BOLD'  => 'Paks',
        'CACHE' => 'Vahemälu',
        'CACHE_CACHED'  => 'Salvestatud vahemällu',
        'CACHE_FILENAME'        => 'Templeidifail',
        'CACHE_FILESIZE'        => 'Faili suurus',
        'CACHE_MODIFIED'        => 'Muudetud',
        'CONFIRM_IMAGESET_REFRESH'      => 'Oled kindel, et soovid värskendada kõik pildikogu andmed? Seaded pildikogu konfiguratsioonifailis kirjutavad üle kõik tehtud muutused pildikogu redigeerijas.',
        'CONFIRM_TEMPLATE_CLEAR_CACHE'  => 'Oled kindel, et soovid tühjendada vahemälu templeidifailidest?',
        'CONFIRM_TEMPLATE_REFRESH'      => 'Oled kindel, et soovid värskendada kõik templeidi andmed? See kirjutab üle kõik muutused, mis on tehtud templeidi redigeerijas.',
        'CONFIRM_THEME_REFRESH' => 'Oled kindel, et soovid värskendada kõik teema andmed? See kirjutab üle kõik muutused, mis on tehtud teema redigeerijas.',
        'COPYRIGHT'     => 'Kopeerimisõigused',
        'CREATE_IMAGESET'       => 'Loo uus pildikogu',
        'CREATE_STYLE'  => 'Loo uus stiil',
        'CREATE_TEMPLATE'       => 'Loo uus templeit',
        'CREATE_THEME'  => 'Loo uus teema',
        'CURRENT_IMAGE' => 'Praegune pilt',
        'DEACTIVATE_DEFAULT'    => 'Sa ei saa deaktiveerida vaikimisi teemat.',
        'DELETE_FROM_FS'        => 'Kustuta failisüsteemist',
        'DELETE_IMAGESET'       => 'Kustuta pildikogu',
        'DELETE_IMAGESET_EXPLAIN'       => 'Siin saad eemaldada valitud pildikogu andmebaasist. Lisaks, kui sul on selleks õigused, saad valida, kas eemaldada pildikogu ka failisüsteemist. Seda tagasi võtta ei saa. Kui pildikogu on kustutatud, on see jäädavalt kadunud. On soovitav, et esmalt ekspordid kogu võimalikuks kasutamiseks tulevikus.',
        'DELETE_STYLE'  => 'Kustuta stiil',
        'DELETE_STYLE_EXPLAIN'  => 'Siin saad kustutada valitud stiili. Sa ei saa siitkaudu eemaldada kõiki stiili elemente. Need peab kustutama ühekaupa läbi selleks mõeldud väljade. Kustutamist tagasi võtta ei saa.',
        'DELETE_TEMPLATE'       => 'Kustuta templeit',
        'DELETE_TEMPLATE_EXPLAIN'       => 'Siin saad eemaldada valitud templeidi andmebaasist. Lisaks, kui sul on selleks õigused, saad valida, kas eemaldada templeit ka failisüsteemist. Seda tagasi võtta ei saa. Kui templeit on kustutatud, on see jäädavalt kadunud. On soovitav, et esmalt ekspordid templeidi võimalikuks kasutamiseks tulevikus.',
        'DELETE_THEME'  => 'Kustuta teema',
        'DELETE_THEME_EXPLAIN'  => 'Siin saad eemaldada valitud teema andmebaasist. Lisaks, kui sul on selleks õigused, saad valida, kas eemaldada teema ka failisüsteemist. Seda tagasi võtta ei saa. Kui teema on kustutatud, on see jäädavalt kadunud. On soovitav, et esmalt ekspordid teema võimalikuks kasutamiseks tulevikus.',
        'DETAILS'       => 'Andmed',
        'DIMENSIONS_EXPLAIN'    => 'Valides "Jah", lisatakse laiuse/kõrguse parameetrid',
        'EDIT_DETAILS_IMAGESET' => 'Muuda pildikogu andmeid',
        'EDIT_DETAILS_IMAGESET_EXPLAIN' => 'Siin saad muuta pildikogu andmeid, näiteks nime.',
        'EDIT_DETAILS_STYLE'    => 'Muuda stiili',
        'EDIT_DETAILS_STYLE_EXPLAIN'    => 'Kasutades välju all, saad muuta stiili. Võid muuta templeidi, teema ja pildikogu kombinatsiooni, mis moodustavadki teema. Võid ka muuta stiili vaikimis stiiliks',
        'EDIT_DETAILS_TEMPLATE' => 'Muuda templeidi andmeid',
        'EDIT_DETAILS_TEMPLATE_EXPLAIN' => 'Siin saad muuta templeidi andmeid, näiteks nime. Võib-olla saad vahetada ka  laaditabelisalvestuskohta andmebaasist failisüsteemi ja vastupidi. See valik sõltub sinu PHP konfiguratsioonist ja sellest, kas templeidifaili saab kirjutada.',
        'EDIT_DETAILS_THEME'    => 'Muuda teema andmeid',
        'EDIT_DETAILS_THEME_EXPLAIN'    => 'Siin saad muuta teema andmeid, näiteks nime. Võib-olla saad vahetada ka salvestuskohta andmebaasist failisüsteemi ja vastupidi. See valik sõltub sinu PHP konfiguratsioonist ja sellest, kas laaditabeli faili saab kirjutada.',
        'EDIT_IMAGESET' => 'Muuda pildikogu',
        'EDIT_IMAGESET_EXPLAIN' => 'Siin saad muuta pilte eraldi, mis moodustavad pildikogu. Saad ka määrata pildile mõõtmed. Mõõtmed on valikulised, nende määramine võib aidata renderdamisprobleemide puhul mõnedes brauserites. Kui sa neid ei määra, vähendad veidi andmebaasi suurust.',
        'EDIT_TEMPLATE' => 'Muuda templeiti',
        'EDIT_TEMPLATE_EXPLAIN' => 'Siin saad muut templeiti. Need muudatused on jäävad ja neid ei saa tagasi võtta, kui need on salvestatud. Kui PHP saab kirjutada templeidifaili failisüstemis, salvestatakse muudatused sinna, vastasel juhul salvestatakse muudatused andmebaasi. Palun ole hoolikas templeidi muutmisel, pea meeles sulgeda kõik käsud.',
        'EDIT_TEMPLATE_STORED_DB'       => 'Templeidi faili ei saanud kirjutada, seega templeit on nüüd salvestatud andmebaasi.',
        'EDIT_THEME'    => 'Muuda teemat',
        'EDIT_THEME_EXPLAIN'    => 'Siin saad muuta valitud teemat, muuta värve jne.',
        'EDIT_THEME_STORED_DB'  => 'Laaditabeli faili ei saanud kirjutada. Laaditabel on nüüd salvestatud andmebaasi.',
        'EDIT_THEME_STORE_PARSED'       => 'Teema nõuab, et laaditabel oleks parsitud. See on võimalik vaid siis, kui see on salvestatud andmebaasi.',
        'EDITOR_DISABLED'               => 'Teema redigeerija on keelatud.',
        'EXPORT'        => 'Ekspordi',
        'FOREGROUND'    => 'Esiplaan',
        'FONT_COLOUR'   => 'Fondi värv',
        'FONT_FACE'     => 'Fondi nägu',
        'FONT_FACE_EXPLAIN'     => 'Võid valida mitu fonti, eraldades need komadega. Kui kasutajal pole esimest fonti installeeritud, võetakse esimesest järgmine font.',
        'FONT_SIZE'     => 'Fondi suurus',
        'GLOBAL_IMAGES' => 'Üldine',
        'HIDE_CSS'      => 'Peida toores CSS',
        'IMAGE_WIDTH'   => 'Pildi laius',
        'IMAGE_HEIGHT'  => 'Pildi kõrgus',
        'IMAGE' => 'Pilt',
        'IMAGE_NAME'    => 'Pildi nimi',
        'IMAGE_PARAMETER'       => 'Parameeter',
        'IMAGE_VALUE'   => 'Väärtus',
        'IMAGESET_ADDED'        => 'Uus pildikogu lisati failisüsteemi.',
        'IMAGESET_ADDED_DB'     => 'Uus pildikogu lisati andmebaasi.',
        'IMAGESET_DELETED'      => 'Pildikogu kustutatud.',
        'IMAGESET_DELETED_FS'   => 'Pildikogu andmebaasist eemaldatud, kuid mõned failid võisid siisi veel failisüsteemi jääda.',
        'IMAGESET_DETAILS_UPDATED'      => 'Pildikogu andmed uuendatud.',
        'IMAGESET_ERR_ARCHIVE'  => 'Palun vali arhiveerimismeetod.',
        'IMAGESET_ERR_COPY_LONG'        => 'Kopeerimisõigused ei saa olla pikemad kui 60 sümbolit.',
        'IMAGESET_ERR_NAME_CHARS'       => 'Pildikogu nimi saab sisaldada vaid kirjamärke, pluss , miinust, alakriipsu ja tühikut.',
        'IMAGESET_ERR_NAME_EXIST'       => 'Sellise nimega pildikogu on juba olemas.',
        'IMAGESET_ERR_NAME_LONG'        => 'Pildikogu nimi ei tohi olla pikem kui 30 sümbolit.',
        'IMAGESET_ERR_NOT_IMAGESET'     => 'Arhiiv ei sisalda pildikogu.',
        'IMAGESET_ERR_STYLE_NAME'       => 'Pead määrama pildikogule nime.',
        'IMAGESET_EXPORT'       => 'Ekspordi pildikogu',
        'IMAGESET_EXPORT_EXPLAIN'       => 'Siin saad eksportida pildikogu arhiivifailina. See sisaldab kõiki vajalikke andmeid, et installeerida pildikogu uuele foorumile. Võid valida, kas laadida fail kohe alla või panna see FTP kausta, et pärast alla laadida.',
        'IMAGESET_EXPORTED'     => 'Pildikogu eksporditud ja salvestatud %s kausta.',
        'IMAGESET_NAME' => 'Pildikogu nimi',
        'IMAGESET_REFRESHED'    => 'Pildikogu värskendatud.',
        'IMAGESET_UPDATED'      => 'Pildikogu uuendatud.',
        'ITALIC'        => 'Kursiiv',
        'IMG_CAT_BUTTONS'       => 'Tõlgitud nupud',
        'IMG_CAT_CUSTOM'        => 'Valikulised pildid',
        'IMG_CAT_FOLDERS'       => 'Teema ikoonid',
        'IMG_CAT_FORUMS'        => 'Foorumi ikoonid',
        'IMG_CAT_ICONS' => 'Üldised ikoonid',
        'IMG_CAT_LOGOS' => 'Logod',
        'IMG_CAT_POLLS' => 'Hääletuse pildid',
        'IMG_CAT_UI'    => 'Kasutajaliidese elemendid',
        'IMG_CAT_USER'  => 'Täiendavad pildid',
        'IMG_SITE_LOGO' => 'Pealogo',
        'IMG_UPLOAD_BAR'        => 'Üleslaadimise edenemisriba',
        'IMG_POLL_LEFT' => 'Hääletuse vasak ots',
        'IMG_POLL_CENTER'       => 'Hääletuse keskosa',
        'IMG_POLL_RIGHT'        => 'Hääletuse parem ots',
        'IMG_ICON_FRIEND'       => 'Lisa sõbrana',
        'IMG_ICON_FOE'  => 'Lisa vaenlasena',
        'IMG_FORUM_LINK'        => 'Foorumi link',
        'IMG_FORUM_READ'        => 'Foorum',
        'IMG_FORUM_READ_LOCKED' => 'Suletud foorum',
        'IMG_FORUM_READ_SUBFORUM'       => 'Alafoorum',
        'IMG_FORUM_UNREAD'      => 'Uute postitustega foorum',
        'IMG_FORUM_UNREAD_LOCKED'       => 'Uute postitustega suletud foorum',
        'IMG_FORUM_UNREAD_SUBFORUM'     => 'Uute postitustega alafoorum',
        'IMG_SUBFORUM_READ'     => 'Alafoorumi legend',
        'IMG_SUBFORUM_UNREAD'   => 'Uute postitustega alafoorumi legend',
        'IMG_TOPIC_MOVED'       => 'Liigutatud teema',
        'IMG_TOPIC_READ'        => 'Teema',
        'IMG_TOPIC_READ_MINE'   => 'Postitustega teema',
        'IMG_TOPIC_READ_HOT'    => 'Populaarne teema',
        'IMG_TOPIC_READ_HOT_MINE'       => 'Populaarne postitustega teema',
        'IMG_TOPIC_READ_LOCKED' => 'Suletud teemad',
        'IMG_TOPIC_READ_LOCKED_MINE'    => 'Suletud postitustega teemad',
        'IMG_TOPIC_UNREAD'      => 'Uute postitustega teemad',
        'IMG_TOPIC_UNREAD_MINE' => 'Uus postitustega teema',
        'IMG_TOPIC_UNREAD_HOT'  => 'Uute postitustega populaarne teema',
        'IMG_TOPIC_UNREAD_HOT_MINE'     => 'Uus populaarne postitustega teema',
        'IMG_TOPIC_UNREAD_LOCKED'       => 'Uus suletud teema',
        'IMG_TOPIC_UNREAD_LOCKED_MINE'  => 'Uus suletud postitustega teema',
        'IMG_STICKY_READ'       => 'Kleebisteema',
        'IMG_STICKY_READ_MINE'  => 'Postitustega kleebisteema',
        'IMG_STICKY_READ_LOCKED'        => 'Suletud kleebisteema',
        'IMG_STICKY_READ_LOCKED_MINE'   => 'Suletud postitustega kleebisteema',
        'IMG_STICKY_UNREAD'     => 'Uute postitustega kleebisteema',
        'IMG_STICKY_UNREAD_MINE'        => 'Uus postitustega kleebisteema',
        'IMG_STICKY_UNREAD_LOCKED'      => 'Uute postitustega suletud kleebisteema',
        'IMG_STICKY_UNREAD_LOCKED_MINE' => 'Uus suletud postitustega kleebisteema',
        'IMG_ANNOUNCE_READ'     => 'Teadaanne',
        'IMG_ANNOUNCE_READ_MINE'        => 'Postitustega teadaanne',
        'IMG_ANNOUNCE_READ_LOCKED'      => 'Suletud teadaanne',
        'IMG_ANNOUNCE_READ_LOCKED_MINE' => 'Suletud postitustega teadaanne',
        'IMG_ANNOUNCE_UNREAD'   => 'Uute postitustega teadaanne',
        'IMG_ANNOUNCE_UNREAD_MINE'      => 'Uus postitustega teadaanne',
        'IMG_ANNOUNCE_UNREAD_LOCKED'    => 'Suletud uute postitustega teadaanne',
        'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'       => 'Uus suletud postitustega teadaanne',
        'IMG_GLOBAL_READ'       => 'Üldteadaanne',
        'IMG_GLOBAL_READ_MINE'  => 'Postitustega üldteadaanne',
        'IMG_GLOBAL_READ_LOCKED'        => 'Suletud üldteadaanne',
        'IMG_GLOBAL_READ_LOCKED_MINE'   => 'Suletud postitustega üldteadaanne',
        'IMG_GLOBAL_UNREAD'     => 'Uute postitustega üldteadaanne',
        'IMG_GLOBAL_UNREAD_MINE'        => 'Uus postitustega üldteadaanne',
        'IMG_GLOBAL_UNREAD_LOCKED'      => 'Suletud uute postitustega üldteadaanne',
        'IMG_GLOBAL_UNREAD_LOCKED_MINE' => 'Uus suletud postitustega üldteadaanne',
        'IMG_PM_READ'   => 'Loetud privaatsõnum',
        'IMG_PM_UNREAD' => 'Lugemata privaatsõnum',
        'IMG_ICON_BACK_TOP'     => 'Üles',
        'IMG_ICON_CONTACT_AIM'  => 'AIM',
        'IMG_ICON_CONTACT_EMAIL'        => 'Saada e-kiri',
        'IMG_ICON_CONTACT_ICQ'  => 'ICQ',
        'IMG_ICON_CONTACT_JABBER'       => 'Jabber',
        'IMG_ICON_CONTACT_MSNM' => 'MSN Messenger',
        'IMG_ICON_CONTACT_PM'   => 'Saada sõnum',
        'IMG_ICON_CONTACT_YAHOO'        => 'YIM',
        'IMG_ICON_CONTACT_WWW'  => 'Koduleht',
        'IMG_ICON_POST_DELETE'  => 'Kustuta postitus',
        'IMG_ICON_POST_EDIT'    => 'Muuda postitust',
        'IMG_ICON_POST_INFO'    => 'Näita postituse andmeid',
        'IMG_ICON_POST_QUOTE'   => 'Tsiteeri postitust',
        'IMG_ICON_POST_REPORT'  => 'Raporteeri postitusest',
        'IMG_ICON_POST_TARGET'  => 'Minipostitus',
        'IMG_ICON_POST_TARGET_UNREAD'   => 'Uus minipostitus',
        'IMG_ICON_TOPIC_ATTACH' => 'Manus',
        'IMG_ICON_TOPIC_LATEST' => 'Viimane postitus',
        'IMG_ICON_TOPIC_NEWEST' => 'Viimane lugemata postitus',
        'IMG_ICON_TOPIC_REPORTED'       => 'Raporteeritud postitus',
        'IMG_ICON_TOPIC_UNAPPROVED'     => 'Keelatud postitus',
        'IMG_ICON_USER_ONLINE'  => 'Kasutaja on online',
        'IMG_ICON_USER_OFFLINE' => 'Kasutaja on offline',
        'IMG_ICON_USER_PROFILE' => 'Kuva profiil',
        'IMG_ICON_USER_SEARCH'  => 'Otsi postitusi',
        'IMG_ICON_USER_WARN'    => 'Hoiata kasutajat',
        'IMG_BUTTON_PM_FORWARD' => 'Edasta privaatsõnum',
        'IMG_BUTTON_PM_NEW'     => 'Uus privaatsõnum',
        'IMG_BUTTON_PM_REPLY'   => 'Vasta privaatsõnumile',
        'IMG_BUTTON_TOPIC_LOCKED'       => 'Suletud teema',
        'IMG_BUTTON_TOPIC_NEW'  => 'Uus teema',
        'IMG_BUTTON_TOPIC_REPLY'        => 'Vasta teemale',
        'IMG_USER_ICON1'        => 'Kasutaja määratud pilt 1',
        'IMG_USER_ICON2'        => 'Kasutaja määratud pilt 2',
        'IMG_USER_ICON3'        => 'Kasutaja määratud pilt 3',
        'IMG_USER_ICON4'        => 'Kasutaja määratud pilt 4',
        'IMG_USER_ICON5'        => 'Kasutaja määratud pilt 5',
        'IMG_USER_ICON6'        => 'Kasutaja määratud pilt 6',
        'IMG_USER_ICON7'        => 'Kasutaja määratud pilt 7',
        'IMG_USER_ICON8'        => 'Kasutaja määratud pilt 8',
        'IMG_USER_ICON9'        => 'Kasutaja määratud pilt 9',
        'IMG_USER_ICON10'       => 'Kasutaja määratud pilt 10',
        'INCLUDE_DIMENSIONS'    => 'Kaasa mõõtmed',
        'INCLUDE_IMAGESET'      => 'Kaasa pildikogu',
        'INCLUDE_TEMPLATE'      => 'Kaasa templeit',
        'INCLUDE_THEME' => 'Kaasa teema',
        'INHERITING_FROM'         => 'Pärib',
        'INSTALL_IMAGESET'      => 'Installeeri pildikogu',
        'INSTALL_IMAGESET_EXPLAIN'      => 'Siin saad sa installeerida pildikogu. Võid muuta andmeid, kui soovid või jätkata vaikimisi andmetega.',
        'INSTALL_STYLE' => 'Installeeri stiil',
        'INSTALL_STYLE_EXPLAIN' => 'Siin saad installeerida uue stiili ja vastavaid stiili elemente. Kui sul on juba vajalikud elemendid installeeritud, ei kirjutata neid üle. Mõned stiilid nõuavad, et elemendid oleks juba varemalt installeeritud. Kui proovid installeerida sellist stiili ja sul pole elemente, teavitatakse sind sellest.',
        'INSTALL_TEMPLATE'      => 'Installeeri templeit',
        'INSTALL_TEMPLATE_EXPLAIN'      => 'Siin saad sa installeerida uue templeidi. Sõltuvalt sinu serveri konfiguratsioonist, võib sul siin olla mitmeid valikuid.',
        'INSTALL_THEME' => 'Installeeri teema',
        'INSTALL_THEME_EXPLAIN' => 'Siin saad installeerida teema. Võid muuta andmeid, kui soovid või jätkata vaikimisi andmetega.',
        'INSTALLED_IMAGESET'    => 'Installeeritud pildikogud',
        'INSTALLED_STYLE'       => 'Installeeritud stiilid',
        'INSTALLED_TEMPLATE'    => 'Installeeritud templeidid',
        'INSTALLED_THEME'       => 'Installeeritud teemad',
        'LINE_SPACING'  => 'Reasamm',
        'LOCALISED_IMAGES'      => 'Tõlgitud',
        'LOCATION_DISABLED_EXPLAIN'   => 'See seade on päritud ja seda ei saa muuta.',
        'NO_CLASS'      => 'Ei leia classi laaditabelis.',
        'NO_IMAGESET'   => 'Ei leia pildikogu failisüsteemis.',
        'NO_IMAGE'      => 'Pilti pole',
        'NO_IMAGE_ERROR'        => 'Ei leia pilti failisüsteemis.',
        'NO_STYLE'      => 'Ei leia stiili failisüsteemis.',
        'NO_TEMPLATE'   => 'Ei leia templeiti failisüsteemis.',
        'NO_THEME'      => 'Ei leia teemat failisüsteemis.',
        'NO_UNINSTALLED_IMAGESET'       => 'Ei tuvastatud installeerimata pildikogusid.',
        'NO_UNINSTALLED_STYLE'  => 'Ei tuvastatud installeerimata stiile.',
        'NO_UNINSTALLED_TEMPLATE'       => 'Ei tuvastatud installeerimata templeite.',
        'NO_UNINSTALLED_THEME'  => 'Ei tuvastatud installeerimata teemasid.',
        'NO_UNIT'       => 'Pole',
        'ONLY_IMAGESET' => 'See on ainuke pildikogu, sa ei saa seda kustutada.',
        'ONLY_STYLE'    => 'See on ainuke stiili, sa ei saa seda kustutada,',
        'ONLY_TEMPLATE' => 'See on ainuke templeit, sa ei saa seda kustutada.',
        'ONLY_THEME'    => 'See on ainuke teema, sa ei saa seda kustutada.',
        'OPTIONAL_BASIS'        => 'Valikuliselt',
        'REFRESH'       => 'Värskenda',
        'REPEAT_NO'     => 'Ei korda',
        'REPEAT_X'      => 'Ainult horisontaalselt',
        'REPEAT_Y'      => 'Ainult vertikaalselt',
        'REPEAT_ALL'    => 'Mõlemas suunas',
        'REPLACE_IMAGESET'      => 'Asenda pildikogu',
        'REPLACE_IMAGESET_EXPLAIN'      => 'See pildikogu asendab kustutatava pildkogu igas stiilis, milles see esineb.',
        'REPLACE_STYLE' => 'Asenda stiil',
        'REPLACE_STYLE_EXPLAIN' => 'See stiil asendab kustutatava stiili kasutajatel.',
        'REPLACE_TEMPLATE'      => 'Asenda templeit',
        'REPLACE_TEMPLATE_EXPLAIN'      => 'See templeit asendab kustutatava templeidi igas stiilis, milles see esineb.',
        'REPLACE_THEME' => 'Asenda teema',
        'REPLACE_THEME_EXPLAIN' => 'See teema asendab kustutatava teema igas stiilis, milles see esineb.',
        'REQUIRES_IMAGESET'     => 'See stiil nõuab %s pildikogu olemasolu.',
        'REQUIRES_TEMPLATE'     => 'See stiil nõuab %s templeidi olemasolu.',
        'REQUIRES_THEME'        => 'See stiil nõuab %s teema olemasolu.',
        'SELECT_IMAGE'  => 'Vali pilt',
        'SELECT_TEMPLATE'       => 'Vali templeidi fail',
        'SELECT_THEME'  => 'Vali teema fail',
        'SELECTED_IMAGE'        => 'Valitud pilt',
        'SELECTED_IMAGESET'     => 'Valitud pildikogu',
        'SELECTED_TEMPLATE'     => 'Valitud templeit',
        'SELECTED_TEMPLATE_FILE'        => 'Valitud templeidi fail',
        'SELECTED_THEME'        => 'Valitud teema',
        'SELECTED_THEME_FILE'   => 'Valitud teema fail',
        'STORE_DATABASE'        => 'Andmebaas',
        'STORE_FILESYSTEM'      => 'Failisüsteem',
        'STYLE_ACTIVATE'        => 'Aktiveeri',
        'STYLE_ACTIVE'  => 'Aktiivne',
        'STYLE_ADDED'   => 'Stiil lisatud.',
        'STYLE_DEACTIVATE'      => 'Deaktiveeri',
        'STYLE_DEFAULT' => 'Muuda vaikimisi stiiliks',
        'STYLE_DELETED' => 'Stiil kustutatud.',
        'STYLE_DETAILS_UPDATED' => 'Stiil muudetud.',
        'STYLE_ERR_ARCHIVE'     => 'Palun vali arhiveerimismeetod',
        'STYLE_ERR_COPY_LONG'   => 'Kopeerimisõigused ei tohi olla pikemad kui 60 sümbolit.',
        'STYLE_ERR_MORE_ELEMENTS'       => 'Pead valima vähemalt ühe stiili elemendi.',
        'STYLE_ERR_NAME_CHARS'  => 'Stiili nimi võib sisaldada vaid kirjamärke, miinust, plussi, alakriipsu ja tühikut.',
        'STYLE_ERR_NAME_EXIST'  => 'Sellise nimega stiil on juba olemas.',
        'STYLE_ERR_NAME_LONG'   => 'Stiili nimi ei tohi olla pikem kui 30 sümbolit.',
        'STYLE_ERR_NO_IDS'      => 'Pead valime templeidi, teema ja pildikogu sellele stiilile.',
        'STYLE_ERR_NOT_STYLE'   => 'Imporditud või üleslaetud fail ei sisaldanud korrektset arhiivi.',
        'STYLE_ERR_STYLE_NAME'  => 'Pead sisestama stiilile nime.',
        'STYLE_EXPORT'  => 'Ekspordi stiil',
        'STYLE_EXPORT_EXPLAIN'  => 'Siin saad eksportida stiili arhiivifailina. Stiil ei pea sisaldama kõiki elemente, kuid vähemalt ühte neist. Võid valida, kas laadida fail kohe alla või panna see FTP kausta, et pärast alla laadida.',
        'STYLE_EXPORTED'        => 'Stiil eksporditud ja salvestatud %s kausta.',
        'STYLE_IMAGESET'        => 'Pildikogu',
        'STYLE_NAME'    => 'Stiili nimi',
        'STYLE_TEMPLATE'        => 'Templeit',
        'STYLE_THEME'   => 'Teema',
        'STYLE_USED_BY' => 'Kasutajaid (koos robotitega)',
        'TEMPLATE_ADDED'        => 'Templeit lisatud ja salvestatud failisüsteemi.',
        'TEMPLATE_ADDED_DB'     => 'Templeit lisatud ja salvestatud andmebaasi.',
        'TEMPLATE_CACHE'        => 'Templeidi vahemälu',
        'TEMPLATE_CACHE_EXPLAIN'        => 'Vaikimisi salvestab phpBB templeidi vahemällu. See vähendab laadimise aega ja seega võib vähendada lehe genereerimise aega. Sin saad vaadataiga faili vahemälu hetkeseisu ja faile kustutada.',
        'TEMPLATE_CACHE_CLEARED'        => 'Templeidi vahemälu tühjendatud.',
        'TEMPLATE_CACHE_EMPTY'  => 'Pole ühtegi vahemällu salvestatud templeiti.',
        'TEMPLATE_DELETED'      => 'Templeit kustutatud.',
        'TEMPLATE_DELETE_DEPENDENT'   => 'Templeiti ei saa kustutada, sest sest on üks või mit templeiti, mis seda pärivad:',
        'TEMPLATE_DELETED_FS'   => 'Templeit andmebaasist eemaldatud, kuid mõned failid võisid jääda veel failisüsteemi.',
        'TEMPLATE_DETAILS_UPDATED'      => 'Templeidi andmed uuendatud.',
        'TEMPLATE_EDITOR'       => 'Toore HTML templeidi redigeerija',
        'TEMPLATE_EDITOR_HEIGHT'        => 'Templeidi redigeerija kõrgus',
        'TEMPLATE_ERR_ARCHIVE'  => 'Palun vali arhiveerimismeetod.',
        'TEMPLATE_ERR_CACHE_READ'       => 'Vahemälu kausta ei suudetud avada.',
        'TEMPLATE_ERR_COPY_LONG'        => 'Kopeerimisõigused ei tohi olla pikemad kui 60 sümbolit',
        'TEMPLATE_ERR_NAME_CHARS'       => 'Templeidi nimi võib sisaldada vaid kirjamärke, miinust, plussi, alakriipsu ja tühikut.',
        'TEMPLATE_ERR_NAME_EXIST'       => 'Sellise nimega templeit on juba olemas.',
        'TEMPLATE_ERR_NAME_LONG'        => 'Templeidi nimi ei tohi olla pikem kui 30 sümbolit.',
        'TEMPLATE_ERR_NOT_TEMPLATE'     => 'Valitud arhiiv ei sisalda templeiti.',
        'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Uus templeit nõuab templeiti %s ja enda mittepärimist.',
        'TEMPLATE_ERR_STYLE_NAME'       => 'Pead sisestama templeidile nime.',
        'TEMPLATE_EXPORT'       => 'Ekspordi templeidid',
        'TEMPLATE_EXPORT_EXPLAIN'       => 'Siin saad eksportide templeidi arhiivina. See arhiiv sisaldab kõiki vajalikke faile templeidi uuele foorumile installimiseks. Võid valida, kas laadida fail kohe alla või panna FTP kausta ja laadida pärast.',
        'TEMPLATE_EXPORTED'     => 'Templeidid eksporditud ja salvestaud %s kausta.',
        'TEMPLATE_FILE' => 'Templeidi fail',
        'TEMPLATE_FILE_UPDATED' => 'Templeidi fail uuendatud.',
        'TEMPLATE_INHERITS'         => 'See templeit pärib %s templeiti, seega sellel ei saa olla erinevat salvestusmeetodit.',
        'TEMPLATE_LOCATION'     => 'Salvesta templeidid',
        'TEMPLATE_LOCATION_EXPLAIN'     => 'Pildid salvestatakse alati failisüsteemi',
        'TEMPLATE_NAME' => 'Templeidi nimi',
		'TEMPLATE_FILE_NOT_WRITABLE'=> 'Templeidifaili %s ei suudetud kirjutada. Palun kontrolli õigusi.',
        'TEMPLATE_REFRESHED'    => 'Templeit värskendatud.',
        'THEME_ADDED'   => 'Uus teema lisatud failisüsteemi.',
        'THEME_ADDED_DB'        => 'Uus teema lisatud andmebaasi.',
        'THEME_CLASS_ADDED'     => 'Kohandatud class lisatud',
        'THEME_DELETED' => 'Teema kustutatud.',
        'THEME_DELETED_FS'      => 'Teema andmebaasist eemaldatud, kuid mõned failid võisid siiski veel failisüsteemi jääda.',
        'THEME_DETAILS_UPDATED' => 'Teema andmed uuendatud.',
        'THEME_EDITOR'  => 'Teema redigeerija',
        'THEME_EDITOR_HEIGHT'   => 'Teema redigeerija kõrgus',
        'THEME_ERR_ARCHIVE'     => 'Palun vali arhiveerimismeetod',
        'THEME_ERR_CLASS_CHARS' => 'Ainult kirjamärgid ja ., :, -, _ ning # on lubatud classi nimedes.',
        'THEME_ERR_COPY_LONG'   => 'Kopeerimisõigused ei tohi olla pikemad kui 60 sümbolit.',
        'THEME_ERR_NAME_CHARS'  => 'Teema nimi tohib sisaldada vaid kirjamärke, plussi, miinust, alakriipsu ja tühikut.',
        'THEME_ERR_NAME_EXIST'  => 'Sellise nimega teema on juba olemas.',
        'THEME_ERR_NAME_LONG'   => 'Teema nimi ei tohi olla pikem kui 30 sümbolit.',
        'THEME_ERR_NOT_THEME'   => 'Valitud arhiiv ei sisalda teemat.',
        'THEME_ERR_REFRESH_FS'  => 'See teema on savestatud failisüsteemi, seega seda ei pea värskendama.',
        'THEME_ERR_STYLE_NAME'  => 'Pead sisestama teemale nime',
        'THEME_FILE'    => 'Teema fail',
        'THEME_EXPORT'  => 'Ekspordi teema',
        'THEME_EXPORT_EXPLAIN'  => 'Siin saad eksportida teema arhiivina. See arhiiv sisaldab vajalikke andmeid uuele foorumile installeerimiseks. Võid valida, kas laadida fail kohe alla või salvestada FTP\'sse.',
        'THEME_EXPORTED'        => 'Teema eksporditud ja salvestatud %s kausta.',
        'THEME_LOCATION'        => 'Salvesta laaditabel',
        'THEME_LOCATION_EXPLAIN'        => 'Pildid on alati salvestatud failisüsteemi.',
        'THEME_NAME'    => 'Teema nimi',
        'THEME_REFRESHED'       => 'Teema värskendatud.',
        'THEME_UPDATED' => 'Teema uuendatud.',
        'UNDERLINE'     => 'Allajoonitud',
        'UNINSTALLED_IMAGESET'  => 'Installeerimata pidikogud',
        'UNINSTALLED_STYLE'     => 'Installeerimata stiilid',
        'UNINSTALLED_TEMPLATE'  => 'Installeerimata templeidid',
        'UNINSTALLED_THEME'     => 'Installeerimata teemad',
        'UNSET' => 'Määramata',
));

?>
