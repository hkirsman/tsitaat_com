<?php

/**

*

* acp_board.php [Estonian]

*

* @package language

* @version $Id: $

* @copyright (c) 2008 phpBB Group

* @author 2008-10-26 - phpbb.ee

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

        'ACP_BOARD_SETTINGS_EXPLAIN'    => 'Siin saad sa määrata oma foorumi põhiseadeid, anda sellele nimi ja kirjeldus, ja lisaks teistele seadetele määrata vaikeväärtused ajatsoonile ja keelele',

        'CUSTOM_DATEFORMAT'     => 'Kohandatud',

        'DEFAULT_DATE_FORMAT'   => 'Ajaformaat',

        'DEFAULT_DATE_FORMAT_EXPLAIN'   => 'Ajaformaat on sama, mis PHP <code>date</code> funktsioonis.',

        'DEFAULT_LANGUAGE'      => 'Vaikimisi keel',

        'DEFAULT_STYLE' => 'Vaikimisi stiil',

        'DISABLE_BOARD' => 'Keela foorum',

        'DISABLE_BOARD_EXPLAIN' => 'See teeb foorumi kasutajatele kättesaamatuks. Võid ka sisestada lühikese (255 sümbolit) informatsiooni kasutajatele selle kohta, kui soovid.',

        'OVERRIDE_STYLE'        => 'Muuda kasutajate valitud stiil',

        'OVERRIDE_STYLE_EXPLAIN'        => 'Asendab kasutajate stiili vaikimisi stiiliga.',

        'SITE_DESC'     => 'Foorumi kirjeldus',

        'SITE_NAME'     => 'Foorumi nimi',

        'SYSTEM_DST'    => 'Luba suveajale üleminek/<a href="http://et.wikipedia.org/wiki/Suveaeg">DST</a>',

        'SYSTEM_TIMEZONE'       => 'Süsteemi ajatsoon',

        'WARNINGS_EXPIRE'       => 'Hoiatuse pikkus',

        'WARNINGS_EXPIRE_EXPLAIN'       => 'Päevade arv, mille möödudes kasutaja profiilist hoiatus kaob.',

        'ACP_BOARD_FEATURES_EXPLAIN'    => 'Siin saad sa lubada/keelata foorumi võimalusi.',

        'ALLOW_ATTACHMENTS'     => 'Luba manused',

        'ALLOW_BIRTHDAYS'       => 'Luba sünnipäevad',

        'ALLOW_BIRTHDAYS_EXPLAIN'       => 'Luba sünnpäevade sisestamisi ja vanuse kuvamist profiilis. Sünnipäevade nimekiri foorumi pealehel juhitakse erinevast laadimisseadest.',

        'ALLOW_BOOKMARKS'       => 'Luba teemadele järjehoidjate lisamine',

        'ALLOW_BOOKMARKS_EXPLAIN'       => 'Kasutaja saab lisada teemadele järjehoidjaid.',

        'ALLOW_BBCODE'  => 'Luba BBCode',

        'ALLOW_FORUM_NOTIFY'    => 'Luba foorumite tellimine',

        'ALLOW_NAME_CHANGE'     => 'Luba kasutajanimede vahetamine',

        'ALLOW_NO_CENSORS'      => 'Luba tsensuuri keelamine',

        'ALLOW_NO_CENSORS_EXPLAIN'      => 'Kasutajad saavad valida, kas keelata automaatne tsensuur postitustes ja privaatsõnumites.',

        'ALLOW_PM_ATTACHMENTS'  => 'Luba manused privaatsõnumites',

				'ALLOW_PM_REPORT'			=> 'Luba kasutajatel raporteerida privaatsõnumitest',

				'ALLOW_PM_REPORT_EXPLAIN'	=> 'Kui see on lubatud, on kasutajatel võimalus raporteerida saadud või saadetud privaatsõnumist moderaatoritele. Need privaatsõnumid on siis nähtavad moderaatori juhtpaneelis.',

				'ALLOW_QUICK_REPLY'			=> 'Luba kiirvastamine',

				'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'See valik lubab keelata kiirvastamise ülefoorumiliselt. Kui lubatud, kasutatakse iga foorumi puhul tema õigustes määratud seadet kiirvastamise lubamise kohta.',

				'ALLOW_QUICK_REPLY_BUTTON'	=> 'Luba kiirvastamine kõigis foorumites',

        'ALLOW_SIG'     => 'Luba signatuurid',

        'ALLOW_SIG_BBCODE'      => 'Luba BBCode signatuurides',

        'ALLOW_SIG_FLASH'       => 'Luba <code>[FLASH]</code> tag kasutajate signatuurides',

        'ALLOW_SIG_IMG' => 'Luba <code>[IMG]</code> tag kasutajate signatuurides',

        'ALLOW_SIG_LINKS'       => 'Luba lingid signatuurides',

        'ALLOW_SIG_LINKS_EXPLAIN'       => 'Kui see on keelatud, <code>[URL]</code>  tag ja automaatsed URLid on keelatud.',

        'ALLOW_SIG_SMILIES'     => 'Luba smailid signatuurides',

        'ALLOW_SMILIES' => 'Luba smailid',

        'ALLOW_TOPIC_NOTIFY'    => 'Luba teemade tellimine',

        'BOARD_PM'      => 'Privaatsõnumid',

        'BOARD_PM_EXPLAIN'      => 'Luba või keela privaatsõnumid kasutajatele.',

        'ACP_AVATAR_SETTINGS_EXPLAIN'   => 'Avatarid on üldiselt väikesed, unikaalsed pildid, mida kasutaja saab endale määrata. Sõltuvalt stiilist on nad tavaliselt kuvatud kasutajanime all. Siin saad sa määrata, kuidas kasutajad saavad avatare endale lisada. Et lubada üleslaadimist, peab sul olema selleks eraldi kaust, kuhu veebiserver saab kirjutada. Faili suuruse limiidid kehtivad vaid üleslaetud avataride puhul, limiit ei rakendu lingitud avatarile.',

				'ALLOW_AVATARS'					=> 'Luba avatarid',

				'ALLOW_AVATARS_EXPLAIN'			=> 'Luba avataride üldkasutus;<br />Kui keelad kas kõik või osad avatarid, ei kuvata neid foorumil, kuid kasutajatel on siiski võimalus juhtpaneelis avatare laadida',

        'ALLOW_LOCAL'   => 'Luba galerii avatarid',

        'ALLOW_REMOTE'  => 'Luba lingitud avatarid',

        'ALLOW_REMOTE_EXPLAIN'  => 'Avatarid, mis on lingitud teiselt veebilehelt.',

				'ALLOW_REMOTE_UPLOAD'			=> 'Luba avataride üleslaadimine',

				'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Luba avataride üleslaadimien teisel veebilehelt.',

        'ALLOW_UPLOAD'  => 'Luba avataride üleslaadimine',

        'AVATAR_GALLERY_PATH'   => 'Avatari galerii tee',

        'AVATAR_GALLERY_PATH_EXPLAIN'   => 'Tee sinu phpBB kaustas, kus on avataride galerii, nt. <samp>images/avatars/gallery</samp>.',

        'AVATAR_STORAGE_PATH'   => 'Avataride üleslaadimiskaust',

        'AVATAR_STORAGE_PATH_EXPLAIN'   => 'Tee sinu PhpBB kaustas, kuhu avatare üles laetakse, nt. <samp>images/avatars/upload</samp>.',

        'MAX_AVATAR_SIZE'       => 'Maksimaalsed avatarimõõtmed',

        'MAX_AVATAR_SIZE_EXPLAIN'       => 'Kõrgus X Laius pikslites.',

        'MAX_FILESIZE'  => 'Maksimaalne avatari failisuurus',

        'MAX_FILESIZE_EXPLAIN'  => 'Maksimaalne avatari failisuurus üleslaetud avataridele.',

        'MIN_AVATAR_SIZE'       => 'Minimaalsed avatari mõõtmed',

        'MIN_AVATAR_SIZE_EXPLAIN'       => 'Kõrgus X Laius pikslites.',

        'ACP_MESSAGE_SETTINGS_EXPLAIN'  => 'Siin saad sa määrata privaatsõnumite seadeid',

        'ALLOW_BBCODE_PM'       => 'Luba BBCode\'i privaatsõnumites',

        'ALLOW_FLASH_PM'        => 'Luba <code>[FLASH]</code> BBCode tag',

        'ALLOW_FLASH_PM_EXPLAIN'        => 'Võimalus kasutada flash\'i sõltub ka kasutaja õigustest',

        'ALLOW_FORWARD_PM'      => 'Luba privaatsõnumite edastamine',

        'ALLOW_IMG_PM'  => 'Luba <code>[IMG]</code> BBCode tag',

        'ALLOW_MASS_PM' => 'Luba privaatsõnumite saatmist korraga mitmele kasutajale/grupile',

        'ALLOW_MASS_PM_EXPLAIN'      => 'Gruppidele saatmist saab muuta gruppide halduses.',

        'ALLOW_PRINT_PM'        => 'Luba prindivaadet privaatsõnumitel',

        'ALLOW_QUOTE_PM'        => 'Luba tsitaatid privaatsõnumites',

        'ALLOW_SIG_PM'  => 'Luba signatuurid privaatsõnumites',

        'ALLOW_SMILIES_PM'      => 'Luba smailid privaatsõnumites',

        'BOXES_LIMIT'   => 'Maksimaalne arv privaatsõnumeid kausta kohta',

        'BOXES_LIMIT_EXPLAIN'   => 'Kasutajatel ei ole võimalik saada rohkem siinmääratud arvust igasse privaatsõnumite kausta. Sea väärtus 0\'ks, et lubada piiramatu arv sõnumeid.',

        'BOXES_MAX'     => 'Maksimaalne arv privaatsõnumite kaustu',

        'BOXES_MAX_EXPLAIN'     => 'Kasutajad saavad luua just nii palju kaustu privaatsõnumitele',

        'ENABLE_PM_ICONS'       => 'Luba kasutada teemaikoone privaatsõnumites',

        'FULL_FOLDER_ACTION'    => 'Toimingu täitunud kausta korral',

        'FULL_FOLDER_ACTION_EXPLAIN'    => 'Vaikimise sooritatud toiming, kui kasutaja kaust on täis, eeldusel, et kasutaja poolt määratud toiming, kui see üldse on määratud, pole võimalik. Ainus erand on "Saadetud sõnumite" kaust, kus vaikimisi toiming on alati kustutada vanad sõnumid.',

        'HOLD_NEW_MESSAGES'     => 'Hoia uusi sõnumeid',

        'PM_EDIT_TIME'  => 'Limiteeri aeg muutmiseks',

        'PM_EDIT_TIME_EXPLAIN'  => 'Limiteerib aja, mis on lubatud privaatsõnumi muutmiseks, kui see pole kohale jõudnud. Väärtuse 0\'ks määramine muudab piirangu kehtetuks',

        'PM_MAX_RECIPIENTS'         => 'Maksimaalne arv saajaid',

        'PM_MAX_RECIPIENTS_EXPLAIN'   => 'Lubatud maksimaalne arv saajaid. Kui seade on 0, piirangut pole. Selle seade saab määrata igale grupile eraldi gruppide halduses.',

        'ACP_POST_SETTINGS_EXPLAIN'     => 'Siin saad sa määrata kõik postitamisega seanduvad seaded.',

        'ALLOW_POST_LINKS'      => 'Luba linke postitustes/privaatsõnumites',

        'ALLOW_POST_LINKS_EXPLAIN'      => 'Kui see on keelatud, <code>[URL]</code> BBCode tag ja automaatsed lingid on keelatud.',

        'ALLOW_POST_FLASH'      => 'Luba <code>[FLASH]</code> BBCode tag postitustes',

        'ALLOW_POST_FLASH_EXPLAIN'      => 'Kui see on keelatud <code>[FLASH]</code> BBCode tag on postitustes keelatud. Kui on lubatud, saab kasutaja postitada flash\'i, kui tal on selleks õigused.',

        'BUMP_INTERVAL' => 'Tõstatamisintervall',

        'BUMP_INTERVAL_EXPLAIN' => 'Päevade, tundide või minutite arv, mis jääb viimase postituse ja teema tõstatamise võimaluse vahele. Kui valid 0, keelatakse see võimalus.',

        'CHAR_LIMIT'    => 'Maksimaalselt sümboleid postituse kohta',

        'CHAR_LIMIT_EXPLAIN'    => 'maksimaalne arv sümboleid, mis on lubatud postituses. Määra 0\'ks, et saaks postitada piiramatult sümboleid.',

				'DELETE_TIME'					=> 'Piira kustutamise aega',

				'DELETE_TIME_EXPLAIN'			=> 'Piirab aega, mille jooksul on lubaud postitus kustutada. Väärtus "0" keelab selle valiku.',

        'DISPLAY_LAST_EDITED'   => 'Kuva viimase muutmise teadet',

        'DISPLAY_LAST_EDITED_EXPLAIN'   => 'Vali, kas kuvada teadet, kes muutis viimasena postitust.',

        'EDIT_TIME'     => 'Limiteeri aeg muutmiseks',

        'EDIT_TIME_EXPLAIN'     => 'Limiteerib aja uue postituse muutmiseks. Väärtuse 0\'ks määramine lubab muuta piiramatult kaua.',

        'FLOOD_INTERVAL'        => 'Postituste intervall',

        'FLOOD_INTERVAL_EXPLAIN'        => 'Arv sekundeid, mida kasutaja peab ootama, et postitada uus postitus. Et lubada kasutajatel sellest üle astuda, muuda nende õigusi.',

        'HOT_THRESHOLD' => 'Populaarse teema lävi',

        'HOT_THRESHOLD_EXPLAIN' => 'Postitusi teema kohta, alates millest muutub teema populaarseks. Määra 0\'ks, et keelata populaarsed teemad.',

        'MAX_POLL_OPTIONS'      => 'Maksimaalne arv hääletuse valikuid',

        'MAX_POST_FONT_SIZE'    => 'Maksimaalne fondi suurus postituse kohta',

        'MAX_POST_FONT_SIZE_EXPLAIN'    => 'Määra 0\'ks, et lubada piiramatut fondi suurust.',

        'MAX_POST_IMG_HEIGHT'   => 'Maksimaalne pildi kõrgus postituse kohta',

        'MAX_POST_IMG_HEIGHT_EXPLAIN'   => 'Maksimaalne kõrgus pildi või flash-faili puhul postitustes. Määra 0\'ks, et lubada piiramatut kõrgust.',

        'MAX_POST_IMG_WIDTH'    => 'Maksimaalne pildi laius postituse kohta',

        'MAX_POST_IMG_WIDTH_EXPLAIN'    => 'Maksimaalne laius pildi või flash-faili puhul postitustes. Määra 0\'ks, et lubada piiramatut laiust.',

        'MAX_POST_URLS' => 'Maksimaalselt linke postituse kohta',

        'MAX_POST_URLS_EXPLAIN' => 'Määra 0\'ks, et piirangut poleks',

		'MIN_CHAR_LIMIT'				=> 'Minimaalne sümbolite arv sõnumi kohta',

		'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimaalne sümbolite arv, mille kasutajad peavad sisestama sõnumis.',

        'POSTING'       => 'Postitamine',

        'POSTS_PER_PAGE'        => 'Postitusi lehekülje kohta',

        'QUOTE_DEPTH_LIMIT'     => 'Maksimaalne arv tsitaate postituse kohta',

        'QUOTE_DEPTH_LIMIT_EXPLAIN'     => 'Määra 0\'ks, et piirangut poleks.',

        'SMILIES_LIMIT' => 'Maksimaalne arv smailisid postituse kohta',

        'SMILIES_LIMIT_EXPLAIN' => 'Määra 0\'ks, et piirangut poleks.',

		'SMILIES_PER_PAGE'				=> 'Smailide arv lehe kohta',

        'TOPICS_PER_PAGE'       => 'Teemasid lehekülje kohta',

        'ACP_SIGNATURE_SETTINGS_EXPLAIN'        => 'Siin saad sa määrata signatuuride vaikeseaded',

        'MAX_SIG_FONT_SIZE'     => 'Maksimaalne fondi suurus signatuuris',

        'MAX_SIG_FONT_SIZE_EXPLAIN'     => 'Määra 0\'ks, et piirangut poleks.',

        'MAX_SIG_IMG_HEIGHT'    => 'Maksimaalne pildi kõrgus signatuuris',

        'MAX_SIG_IMG_HEIGHT_EXPLAIN'    => 'Maksimaalne pildi/flashfaili kõrgus signatuuris. Määra 0\'ks, et piirangut poleks.',

        'MAX_SIG_IMG_WIDTH'     => 'Maksimaalne pildi laius signatuuris',

        'MAX_SIG_IMG_WIDTH_EXPLAIN'     => 'Maksimaalne pildi/flashfaili laius signatuuris. Määra 0\'ks, et piirangut poleks.',

        'MAX_SIG_LENGTH'        => 'Maksimaalne signatuuri pikkus',

        'MAX_SIG_LENGTH_EXPLAIN'        => 'Maksimaalne arv sümboleid signatuurides',

        'MAX_SIG_SMILIES'       => 'Maksimaalne arv smailisid signatuurides',

        'MAX_SIG_SMILIES_EXPLAIN'       => 'Määra 0\'ks, et piirangut poleks.',

        'MAX_SIG_URLS'  => 'Maksimaalne arv linke signatuurides',

        'MAX_SIG_URLS_EXPLAIN'  => 'Määra 0\'ks, et piirangut poleks.',

        'ACP_REGISTER_SETTINGS_EXPLAIN' => 'Siin saad sa määrata registreerimise ja profiiliga seotud seaded',

        'ACC_ACTIVATION'        => 'Konto aktiveerimine',

        'ACC_ACTIVATION_EXPLAIN'        => 'Siin saab määrata, kas kasutajad saavad kohe foorumit kasutada või peavad nad enne oma konto aktiveerima. Võid ka keelata registreerimise.',

		'NEW_MEMBER_POST_LIMIT'			=> 'Uue kasutaja postituste arv',

		'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Uued kasutajad on grupis <em>Vastregistreerunud kasutajad</em> kuni selle arv postituste täitumiseni. Võid kasutada seda gruppi, et keelata nendel privaatsõnumid või postituste eelvaade. <strong>Väärtus "0" tühistab selle valiku.</strong>',

		'NEW_MEMBER_GROUP_DEFAULT'		=> 'Määra Vastregistreerunud kasutajad vaikegrupiks',

		'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Kui on lubatud ja postituste arv määratud, ei panda uusi kasutajaid mitte ainult gruppi <em>Vastregistreerunud kasutajad</em>, vaid määratakse see grupp ka vaikegrupiks. See võib osutuda kasulikuks, kui soovid määrata grupile tiitli/avatari, mille kasutaja omandab.',

        'ACC_ADMIN'     => 'Administraatori poolt',

        'ACC_DISABLE'   => 'Keela',

        'ACC_NONE'      => 'Pole',

        'ACC_USER'      => 'Kasutaja poolt',

        'ALLOW_EMAIL_REUSE'     => 'Luba e-postiaadressi taaskasutamist',

        'ALLOW_EMAIL_REUSE_EXPLAIN'     => 'Erinevad kasutajad võivad registreerida sama e-postiaadressiga',

        'COPPA' => 'COPPA',

        'COPPA_FAX'     => 'COPPA faks',

        'COPPA_MAIL'    => 'COPPA e-post',

        'COPPA_MAIL_EXPLAIN'    => 'See on aadress, kuhu vanemad saadavad registreerimisvorme',

        'ENABLE_COPPA'  => 'Luba COPPA',

        'ENABLE_COPPA_EXPLAIN'  => 'See nõuab, et kasutajad määraksid, kas nad on üle 13 aasta vanad U.S COPPA jaoks. Kui see on keelatud, COPPA gruppe ei näidata',

        'MAX_CHARS'     => 'Maksimaalne',

        'MIN_CHARS'     => 'Minimaalne',

        'NO_AUTH_PLUGIN'        => 'Ei leitud autoriseerimise pluginat',

        'PASSWORD_LENGTH'       => 'Parooli pikkus',

        'PASSWORD_LENGTH_EXPLAIN'       => 'Minimaalne ja maksimaalne arv sümboleid paroolides.',

        'REG_LIMIT'     => 'Registreerimiskatseid',

        'REG_LIMIT_EXPLAIN'     => 'Arv katseid, mida kasutaja saab kinnituskoodi korrektseks sisestamiseks enne, kui tal sellel sessioonil registreerida ei lubata.',

        'USERNAME_ALPHA_ONLY'   => 'Ainult kirjamärgid',

        'USERNAME_ALPHA_SPACERS'        => 'Kirjamärgid ja tühikud',

        'USERNAME_ASCII'        => 'ASCII',

        'USERNAME_LETTER_NUM'   => 'Tähed ja numbrid ',

        'USERNAME_LETTER_NUM_SPACERS'   => 'Tähed, numbrid ja tühikud',

        'USERNAME_CHARS'        => 'Piira kasutajanime sümboleid',

        'USERNAME_CHARS_ANY'    => 'Kõik sümbolid',

        'USERNAME_CHARS_EXPLAIN'        => 'Määra sümbolid, mida võib kasutada kasutajanimes, tühikud on: tühik, -, +, _, [ ja ].',

        'USERNAME_LENGTH'       => 'Kasutajanime pikkus',

        'USERNAME_LENGTH_EXPLAIN'       => 'Minimaalne ja maksimaalne arv sümboleid kasutajanimes',

        'ACP_VC_SETTINGS_EXPLAIN'				=> 'Siin saad valida ja konfigureerida CAPTCHA lisasid, mis takistavad robotite liitumist.',

		'AVAILABLE_CAPTCHAS'					=> 'Saadavalolevad lisad',

		'CAPTCHA_UNAVAILABLE'					=> 'CAPTCHA-t ei saa valida, sest tingimused pole täidetud.',

		'CAPTCHA_GD'							=> 'GD CAPTCHA',

		'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',	

        'CAPTCHA_GD_FOREGROUND_NOISE'   => 'GD CAPTCHA esiplaani müra',

        'CAPTCHA_GD_EXPLAIN'    => 'Kasuta GD\'d, et teha täiustatum CAPTCHA',

        'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'   => 'Kasuta esiplaani müra, et teha CAPTCHA raskemaks.',

        'CAPTCHA_GD_X_GRID'     => 'GD CAPTCHA taustamüra x-telg',

        'CAPTCHA_GD_X_GRID_EXPLAIN'     => 'Kasuta madalamaid seadeid, et teha CAPTCHA raskemaks. 0 keelab x-telje taustamüra.',

        'CAPTCHA_GD_Y_GRID'     => 'GD CAPTCHA taustamüra y-telg',

        'CAPTCHA_GD_Y_GRID_EXPLAIN'     => 'Kasuta madalamaid seadeid, et teha CAPTCHA raskemaks. 0 keelab y-telje taustamüra.',

		'CAPTCHA_GD_WAVE'                  => 'GD CAPTCHA laine moonutus',

        'CAPTCHA_GD_WAVE_EXPLAIN'            => 'See lisab CAPTHCA-le laine moonutuse.',

        'CAPTCHA_GD_3D_NOISE'               => 'Lisa 3d müra objektid',

        'CAPTCHA_GD_3D_NOISE_EXPLAIN'         => 'See lisab CAPTCHA-l tähtede kohale lisaobjektid.',

        'CAPTCHA_GD_FONTS'                  => 'Kasuta erinevaid fonte',

        'CAPTCHA_GD_FONTS_EXPLAIN'            => 'See määrang kontrollib, mitut erinevat tähekuju kasutatakse. Võid kasutada vaikimisi kujusid või sisse tuua uue. Ka on võimalik lisada väiketähti.',

        'CAPTCHA_FONT_DEFAULT'               => 'Vaikimisi',

        'CAPTCHA_FONT_NEW'                  => 'Uued kujud',

        'CAPTCHA_FONT_LOWER'               => 'Kasuta ka väiketähti',

        'CAPTCHA_NO_GD'							=> 'CAPTCHA ilma GD-ta',

		'CAPTCHA_PREVIEW_MSG'					=> 'Sinu seadeid visuaalkinnitusele ei salvestatud. See on lihtsalt eelvaade.',

		'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHA praeguste seadetega.',



		'CAPTCHA_SELECT'						=> 'Installeeritud CAPTCHA lisad',

		'CAPTCHA_SELECT_EXPLAIN'				=> 'rippmenüüs sisalduvad kõik foorumi poolt tunnistatud CAPTCHA lisad. Hallid pole hetkel saadaval ja vajavad konfigureerimist.',

		'CAPTCHA_CONFIGURE'						=> 'Konfigureeri CAPTCHA-sid',

		'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Muuda valitud CAPTCHA seadeid.',

		'CONFIGURE'								=> 'Konfigureeri',

		'CAPTCHA_NO_OPTIONS'					=> 'Sellel CAPTCHA-l pole konfiguratsioonivalikuid.',



		'VISUAL_CONFIRM_POST'					=> 'Luba visuaalkinnitus külaliste postitamisel',

		'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Nõuab anonüümsetelt kasutajatelt kinnituskoodi sisestamist.',

		'VISUAL_CONFIRM_REG'					=> 'Luba visuaalkinnitus registreerumisel',

		'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Nõuab uutelt kasutajatelt kinnituskoodi sisestamist.',

		'VISUAL_CONFIRM_REFRESH'				=> 'Luba kasutajatel kinnituspilt värskendada',

		'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Luba kasutajatel soovida uut kinnituskoodi, kui nad ei suuda lugeda olemasolevat. Mõned lisad ei pruugi seda valikut toetada.',

		));

		

		// Vood

		$lang = array_merge($lang, array(

		'ACP_FEED_MANAGEMENT'				=> 'Voo seaded',

		'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'See moodul muudab kättesaadavaks mitmed ATOM vood, tundes ära BBCode postitustes, et muuta postitused loetavaks välistes voogudes.',

    'ACP_FEED_GENERAL'					=> 'Üldiste voogude seaded',

		'ACP_FEED_POST_BASED'				=> 'Postitusepõhiste voogude seaded',

		'ACP_FEED_TOPIC_BASED'				=> 'Teemapõhiste voogude seaded',

		'ACP_FEED_SETTINGS_OTHER'			=> 'Teised vood ja seaded',

		'ACP_FEED_ENABLE'					=> 'Luba vood',

		'ACP_FEED_ENABLE_EXPLAIN'			=> 'Lülitab ATOM voogude kasutamise sisse või välja.<br />Valiku keelamine lülitab välja kõik vood olenemata allolevatest valikutest.',

		'ACP_FEED_LIMIT'					=> 'Üksuste arv',

		'ACP_FEED_LIMIT_EXPLAIN'			=> 'Maksimaalne arv kuvatavaid vooüksusi.',



		'ACP_FEED_OVERALL_FORUMS'			=> 'Luba kõikide foorumite voog',

		'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Lubab “Kõik foorumid” voo, mis kuvab kõik foorumid.',

		'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Maksimaalne arv kuvatavaid vooüksusi',



		'ACP_FEED_OVERALL_TOPIC'			=> 'Luba kõikide teemade voog',

		'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Lubab voo "Kõik teemad"',

		'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Maksimaalne arv kuvatavaid vooüksusi',

	 	'ACP_FEED_OVERALL'					=> 'Luba ülefoorumiline voog',

		'ACP_FEED_OVERALL_EXPLAIN'			=> 'Ülefoorumilsed uued postitused.',

		'ACP_FEED_FORUM'					=> 'Luba foorumipõhised vood',

		'ACP_FEED_FORUM_EXPLAIN'			=> 'Üheainsa foorumi uued postitused.',

		'ACP_FEED_TOPIC'					=> 'Luba teemapõhised vood',

		'ACP_FEED_TOPIC_EXPLAIN'			=> 'Üheainsa teema uued postitused.',

		'ACP_FEED_TOPICS_NEW'				=> 'Luba uute teemade voog',

		'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Lubab “Uued teemad” voo, mis kuvab viimati loodud teemad koos esimese postitusega.',

		'ACP_FEED_TOPICS_ACTIVE'			=> 'Luba aktiivsete teemade voog',

		'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Lubab “Aktiivsed teemad” voo, mis kuvab viimaseid aktiivseid teemasid koos viimase postitusega.',

		'ACP_FEED_NEWS'						=> 'Uudistevood',

		'ACP_FEED_NEWS_EXPLAIN'				=> 'Võta esimene postitus neist foorumitest. Ära vali ühtegi foorumit selle valiku keelamiseks.<br />Vali mitu foorumit, kasutades <samp>CTRL</samp>-klahvi.',





    	'ACP_FEED_HTTP_AUTH'				=> 'Luba HTTP Autentimine',

		'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Lubab HTTP autentimise, mis lubab kasutajatel saada sisu, mis on külalistele varjatud, lisades <samp>auth=http</samp> parameetri voo URL\'i. Mõned PHP seaded nõuavad lisamuudatusi .htaccess failis.  Õpetuse võib leida selles failis.',

		'ACP_FEED_ITEM_STATISTICS'			=> 'Üksuste statistika',

		'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Kuva eraldi statistika üksuste all<br />(Postitaja, kuupäev ja kellaaeg, vasutseid, vaatamisi)',

		'ACP_FEED_EXCLUDE_ID'				=> 'Jäta välja need foorumid',

		'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Nende foorumite sisu <strong>ei näidata voogudes</strong>. Ära vali ühtegi foorumit, et voog võtaks andmed kõikidest foorumitest.<br />Vali/vabasta mitu foorumit, kasutades <samp>CTRL</samp>-klahvi.',

));



	// Visual Confirmation Settings

	$lang = array_merge($lang, array(

        'ACP_COOKIE_SETTINGS_EXPLAIN'   => 'Need seaded määravad küpsiste saatmise kasutajate brauseritesse. Enamikel juhtudel piisab küpsiste vaikeseadetest. Kui pead midagi muutma, tee seda hoolikalt, Ebakorrektsed seaded võivad takistada kasutajate sisselogimist.',

        'COOKIE_DOMAIN' => 'Küpsise domeen',

        'COOKIE_NAME'   => 'Küpsise nimi',

        'COOKIE_PATH'   => 'Küpsise tee',

        'COOKIE_SECURE' => 'Küpsisekindel',

        'COOKIE_SECURE_EXPLAIN' => 'Kui su server jookseb läbi SSL\'i, määra see lubatuks, vastasel juhul jäta keelatuks. Kui see on lubatud ja server ei jookse läbi SSL\'i, põhjustab see tõrkeid ümbersuunamistel. ',

        'ONLINE_LENGTH' => 'Foorumiloleku aeg',

        'ONLINE_LENGTH_EXPLAIN' => 'Arv minutites, mille möödudes eemalolevaid kasutajaid ei näidata enam foorumilolevate nimekirjas. Mida kõrgem väärtus, seda suuremat tööd nõuab see serverilt.',

        'SESSION_LENGTH'        => 'Sessiooni pikkus',

        'SESSION_LENGTH_EXPLAIN'        => 'Sessioonid aeguvad peale selle aja möödumist, sekundites.',

        'ACP_LOAD_SETTINGS_EXPLAIN'     => 'Siin saad sa lubada ja keelata foorumi funktsioone, et vähendada serveri tööd. Enamikes serverites pole see vajalik.',

        'CUSTOM_PROFILE_FIELDS' => 'Kohandatud profiiliväljad',

        'LIMIT_LOAD'    => 'Limiteeri süsteemi laadimist',

        'LIMIT_LOAD_EXPLAIN'    => 'Kui süsteemi 1 minuti laadimiskeskmine ületab selle väärtuse, muutub foorum automaatselt kättesaamatuks.',

        'LIMIT_SESSIONS'        => 'Limiteeri sessioone',

        'LIMIT_SESSIONS_EXPLAIN'        => 'Kui sessioonide arv ületab selle väärtuse ühes minutis, muutub foorum kättesaamatuks. Määra 0\'ks, et piirangut poleks.',

        'LOAD_CPF_MEMBERLIST'   => 'Luba stiilidel kuvada kohandatud profiilivälju kasutajate nimekirjas',

        'LOAD_CPF_VIEWPROFILE'  => 'Kuva kohandatud profiiliväljad profiilis',

        'LOAD_CPF_VIEWTOPIC'    => 'Kuva kohandatud profiiliväljad teemades',

        'LOAD_USER_ACTIVITY'    => 'Näita kasutajate aktiivsust',

        'LOAD_USER_ACTIVITY_EXPLAIN'    => 'Kuvab aktiivse foorumi/teema profiilis. On soovitatav see valik keelata foorumites, kus on üle miljoni postituse.',

        'RECOMPILE_STYLES'      => 'Uuenda stiili',

        'RECOMPILE_STYLES_EXPLAIN'      => 'Kontrolli stiili uuendatud komponente süsteemis ja lisa need stiilile',

        'YES_ANON_READ_MARKING' => 'Luba teemade markeerimine külalistel',

        'YES_ANON_READ_MARKING_EXPLAIN' => 'Salvest loetud/lugemata teemade info. Kui see on keelatud, näevad külalised teemasid alati loetuna.',

        'YES_BIRTHDAYS' => 'Luba sünnipäevade nimekiri',

        'YES_BIRTHDAYS_EXPLAIN' => 'Kui see on keelatud, ei kuvata sünnipäevade nimekirja.  Et see valik saaks toimida, peavad ka sünnipäevade määramine olema lubatud.',

        'YES_JUMPBOX'   => 'Luba jumpbox\'i kuvamine',

        'YES_MODERATORS'        => 'Luba moderaatorite kuvamine',

        'YES_ONLINE'    => 'Luba foorumilolevate kasutajate nimekiri',

        'YES_ONLINE_EXPLAIN'    => 'Kuva foorumilolevad kasutajad pealehel, foorumites ja teemades.',

        'YES_ONLINE_GUESTS'     => 'Luba foorumilolevate külaliste nimekiri',

        'YES_ONLINE_GUESTS_EXPLAIN'     => 'Luba foorumilolevate külaliste kuvamine.',

        'YES_ONLINE_TRACK'      => 'Luba kasutajate foorumil/eemal kuvamist',

        'YES_ONLINE_TRACK_EXPLAIN'      => 'Kuva info, kas kasutaja on foormil või foorumilt eemal.',

        'YES_POST_MARKING'      => 'Luba märgistatud teemad',

        'YES_POST_MARKING_EXPLAIN'      => 'Näitab, kas kasutaja on teemasse postitanud.',

        'YES_READ_MARKING'      => 'Luba serveripoolset teema märgistamist',

        'YES_READ_MARKING_EXPLAIN'      => 'Salvestab loetud/lugemata info andmebaasis, mitte küpsistes.',

        'ACP_AUTH_SETTINGS_EXPLAIN'     => 'phpBB toetab autenditud pluginaid või mooduleid. Need lubavad sul näha, palju kasutajaid on autenditud, kui nad logivad sisse foorumisse. Vaikimisi on määratud kolm pluginat; DB, LDAP ja Apache. Kõik meetodid ei vaja lisainformatsiooni, seega täida lüngad ainult seal, kus on vajalik sinu meetodile.',

        'AUTH_METHOD'   => 'Vali autentimise meetod',

        'APACHE_SETUP_BEFORE_USE'       => 'Sa pead enne üles seadma Apache autentimise, kui lülitad ümber phpBB sellele autentimise meetodile. Jäta meelde, et Apache autentimise kasutajanimi peab olema sama, mis sul phpBB kasutajanimigi. Apache autentimist saab kasutada ainult, kui mod_php (mitte-CGI versioon) ja safe_mode on keelatud.',

        'LDAP_DN'       => 'LDAP baas <var>dn</var>',

        'LDAP_DN_EXPLAIN'       => 'See on eristatud nimi, mis suunab kasutaja informatsiooni, nt <samp>o=Minuf Firma,c=EST</samp>.',

        'LDAP_EMAIL'    => 'LDAP e-posti atribuut',

        'LDAP_EMAIL_EXPLAIN'    => 'Määra see nimeks oma sisestatud e-posti atribuudil (kui sul on see), et automaatselt määrata e-postiaadress uutele kasutajatele. Kui jätad selle lahtri tühjaks, siis jäävad ka uute kasutajate e-postiaadressid tühjaks.',

        'LDAP_INCORRECT_USER_PASSWORD'  => 'Sidumine LDAP serveriga ebaõnnestus vale kasutajanime/salasõna tõttu.',

        'LDAP_NO_EMAIL' => 'Valitud e-posti atribuut ei eksisteeri.',

        'LDAP_NO_IDENTITY'      => 'Ei suutnud logida kasutajat %s.',

        'LDAP_PASSWORD' => 'LDAP salasõna',

        'LDAP_PASSWORD_EXPLAIN' => 'Jäta tühjaks, et kasutada anonüümset sidumist. Muidu täida ära salasõna lahter järgnevale kasutajale. Vajalik Active Directory Servers´ite jaoks. <strong>HOIATUS:</strong> See salasõna säilitatakse tekstina andmebaasis ja on nähtav kõigile, kellel on sinu andmebaasi luba või näevad seda seadete lehte siin.',

        'LDAP_PORT'     => 'LDAP serveri port',

        'LDAP_PORT_EXPLAIN'     => 'Valikuliselt võid sa valida pordi, mis peaks olema kasutatud LDAP serveri ühendamiseks, mitte vaikimisi port 389.',

        'LDAP_SERVER'   => 'LDAP server nimi',

        'LDAP_SERVER_EXPLAIN'   => 'Kui sa kasutad LDAP, siis see on LDAP serveri hostijanimi või IP aadress. Alternatiivselt võid ka kasutada URL, nt ldap://hostname:port/',

        'LDAP_UID'      => 'LDAP <var>uid</var>',

        'LDAP_UID_EXPLAIN'      => 'See on kasutajate otsimise võti, nt <var>uid</var>, <var>sn</var>, jne.',

        'LDAP_USER'     => 'LDAP kasutaja <var>dn</var>',

        'LDAP_USER_EXPLAIN'     => 'Jäta tühjaks, et kasutada anonüümset sidumist. Kui on täidetud, siis kasutab phpBB spetsiaalset eristatud nime login katseteks, et leida õige kasutaja, nt <samp>uid=Kasutajanimi,ou=MinuÜhendus,o=MinuFirma,c=EST</samp>. Vajalik Active Directory Servers´ite jaoks.',

        'LDAP_USER_FILTER'      => 'LDAP kasutaja filter',

        'LDAP_USER_FILTER_EXPLAIN'      => 'Võid piirata otsitavaid objekte filtritega. Näiteks, <samp>objectClass=posixGroup</samp> annab tulemuse ka <samp>(&(uid=$username)(objectClass=posixGroup))</samp> kasutades.',

        'ACP_SERVER_SETTINGS_EXPLAIN'   => 'Siin saad sa määrata serveri ja domeeniga seotud seaded. Palun ole kindel, et sisestatavad andmed on täpsed, vead ilmnevad e-postides, mis sisaldavad väärinfot. domeeninime sisestades pea meeles, et see ei sisaldaks protokolli http://. Muuda pordi numbrit vaid siis, kui oled kindel, et server jookseb teisel pordil peale 80-ne.',

        'ENABLE_GZIP'   => 'Luba GZip pakkimine',

        'ENABLE_GZIP_EXPLAIN'   => 'Sisu pakitakse enne kasutajale saatmist. See võib vähendada võrgu koormust, kuid suurendab nii kasutaja kui ka saatja protsessori kasutust.',

        'FORCE_SERVER_VARS'     => 'Kirjuta üle serveri URL seaded',

        'FORCE_SERVER_VARS_EXPLAIN'     => 'Kui see on lubatud, kasutatakse siinsisestatud seadeid eelistatuna vaikimisi seadetele.',

        'ICONS_PATH'    => 'Postituse ikoonide kaust',

        'ICONS_PATH_EXPLAIN'    => 'Tee suhtes foorumi juurkaustaga, näiteks <samp>images/icons</samp>.',

        'PATH_SETTINGS' => 'Tee seaded',

        'RANKS_PATH'    => 'Tiitlipiltide kaust',

        'RANKS_PATH_EXPLAIN'    => 'Tee suhtes foorumi juurkaustaga, näiteks <samp>images/ranks</samp>.',

        'SCRIPT_PATH'   => 'Skriptide kaust',

        'SCRIPT_PATH_EXPLAIN'   => 'Tee, kus asuvad foorumi failid suhtes domeeninimega, näiteks <samp>/phpBB3</samp>.',

        'SERVER_NAME'   => 'Domeeninimi',

        'SERVER_NAME_EXPLAIN'   => 'Domeeninimi, kust see foorum jookseb (näiteks <samp>www.example.com</samp>).',

        'SERVER_PORT'   => 'Serveri port',

        'SERVER_PORT_EXPLAIN'   => 'Port, mille pealt su server jookseb, tavaliselt 80.',

        'SERVER_PROTOCOL'       => 'Serveri protokoll',

        'SERVER_PROTOCOL_EXPLAIN'       => 'Seda kasutatakse serveri protokollina, kui seaded on sunnitud. Kui see on tühi või pole sunnitud, määratakse protokoll küpsisete seadete järgi: (<samp>http://</samp> või <samp>https://</samp>).',

        'SERVER_URL_SETTINGS'   => 'Serveri URLi seaded',

        'SMILIES_PATH'  => 'Smailide kaust',

        'SMILIES_PATH_EXPLAIN'  => 'Tee phpBB juurkaustast alates, näiteks <samp>images/smilies</samp>.',

        'UPLOAD_ICONS_PATH'     => 'Laiendigruppide ikoonide kaust',

        'UPLOAD_ICONS_PATH_EXPLAIN'     => 'Tee phpBB juurkaustast alates, näiteks <samp>images/upload_icons</samp>.',

        'ACP_SECURITY_SETTINGS_EXPLAIN' => 'Siin saad määrata sessiooni ja logimisega seotud seaded',

        'ALL'   => 'Kõik',

        'ALLOW_AUTOLOGIN'       => 'Luba automaatseid logimisi',

        'ALLOW_AUTOLOGIN_EXPLAIN'       => 'Määrab, kas kasutajad saavad olla automaatselt sisselogitud, kui külastavad foorumit.',

        'AUTOLOGIN_LENGTH'      => 'Kindlate logimisvõtme aegumise aeg (päevades)',

        'AUTOLOGIN_LENGTH_EXPLAIN'      => 'Arv päevades, pärast mida kindlad logimisvõtmed eemaldatakse või nullitakse.',

        'BROWSER_VALID' => 'Valideeri brauser',

        'BROWSER_VALID_EXPLAIN' => 'Lubab brauseri valideerimist igal sessioonil turvalisuse parendamiseks.',

        'CHECK_DNSBL'   => 'Kontrolli IP\'d DNS musta augu listist',

        'CHECK_DNSBL_EXPLAIN'   => 'Kui on lubatud, kontrollitakse kasutaja IP\'d registreerimisel ja postitamisel.',

        'CLASS_B'       => 'A.B',

        'CLASS_C'       => 'A.B.C',

        'EMAIL_CHECK_MX'        => 'Kontrolli e-posti domeenil kehtiva MX kirje olemasolu',

        'EMAIL_CHECK_MX_EXPLAIN'        => 'Kui lubatud, kontrollitakse e-postiaadressil, mis sisestatakse registreerimisel ja profiili muutmisel, kehtivat MX kirjet.',

        'FORCE_PASS_CHANGE'     => 'Sunni paroolivahetus',

        'FORCE_PASS_CHANGE_EXPLAIN'     => 'Sunni kasutajat oma parooli vahetama peale määratud arvu päevi. Seades selle nulliks, paroolivahetust ei toimu.',

        'FORM_TIME_MAX' => 'Maksimaalne aeg väljade täitmiseks',

        'FORM_TIME_MAX_EXPLAIN' => 'Aeg, mille piires peab kasutaja sisestama andmed. kasuta arvu -1, et keelata. Väljad võivad muutuda kehtetuks, kui sessioon aegub, sõltumata sellest seadest.',

        'FORM_SID_GUESTS'       => 'Seo vormid külalissessioonidele',

        'FORM_SID_GUESTS_EXPLAIN'       => 'Kui lubatud, Vormimärgid külalistele on ainult sessioonile. See põhjustab mõnede ISP\'de puhul probleeme.',

        'FORWARDED_FOR_VALID'   => 'Valideeritud <var>X_FORWARDED_FOR</var> päis',

        'FORWARDED_FOR_VALID_EXPLAIN'   => 'Sessioone jätkatakse vaid siis, kui nad on saadetud <var>X_FORWARDED_FOR</var> päisega, mis on võrdne sellega, mis oli saadetud eelmisena. IP\'de bänne kontrollitakse ka <var>X_FORWARDED_FOR</var> seest.',

        'IP_VALID'      => 'Sessiooni IP valideerimine',

        'IP_VALID_EXPLAIN'      => 'Määrab, kui palju kasutaja IP\'d kasutatakse sessiooni valideerimiseks; <samp>Kõik</samp> võrdleb tervet aadressi, <samp>A.B.C</samp> esimest kolme x.x.x., <samp>A.B</samp> Esimest kahte x.x, <samp>Pole</samp> keelab kontrollimise. IPv6 aadresside puhul <samp>A.B.C</samp> võrdleb esimest nelja osa <samp>A.B</samp> esimest kolme.',

        'MAX_LOGIN_ATTEMPTS'    => 'Maksimaalne arv sisselogimiskatseid',

        'MAX_LOGIN_ATTEMPTS_EXPLAIN'    => 'Pärast seda arvu ebaõnnestunud sisselogimiskatseid peab kasutaja lisaks nimele ja paroolile sisestama ka visuaalkinnituskoodi sisse logides.',

        'NO_IP_VALIDATION'      => 'Pole',

        'NO_REF_VALIDATION'            => 'Pole',

        'PASSWORD_TYPE' => 'Parooli keerukus',

        'PASSWORD_TYPE_EXPLAIN' => 'Määrab kui keerukas peab parool olema, järgnevad valikud sisaldavad eelmisi.',

        'PASS_TYPE_ALPHA'       => 'Peab sisaldama tähti ja numbreid',

        'PASS_TYPE_ANY' => 'Nõueteta',

        'PASS_TYPE_CASE'        => 'Peab sisaldama nii suuri kui ka väikeseid tähti',

        'PASS_TYPE_SYMBOL'      => 'Peab sisaldama sümboleid',

        'REF_HOST'                  => 'Ainult valideeri host',

        'REF_PATH'                  => 'Lisaks valideeri teei',

         'REFERER_VALID'               => 'Valideeri viitaja',

        'REFERER_VALID_EXPLAIN'         => 'Kui lubatud, kontrollitakse viitajat host  skripti/tee seadetega. See võib põhjustada probleeme foorumitel, mis kasutavad mitut domeeni ja/või välist logimist.',

        'TPL_ALLOW_PHP' => 'Luba php stiilides',

        'TPL_ALLOW_PHP_EXPLAIN' => 'Kui see on lubatud, <code>PHP</code> ja <code>INCLUDEPHP</code> fraasid tuntakse ära ja analüüsitakse templeitides.',

        'ACP_EMAIL_SETTINGS_EXPLAIN'    => 'Seda infot kasutatakse, kui foorum saadab e-kirja kasutajale. Palun ole kindel, et siinsisestatud e-postiaadress on kehtiv, kõik tagasipõrkuvad või kohaletoimetamata e-kirjad lähevad sinna. Kui su teenusepakkuja ei paku kohalikku (PHP põhist) e-posti teenust , võid saata sõnumeid otse läbi SMTP. See nõuab serveri aadressi (küsi pakkujalt, kui vaja). Kui server nõuab autentimist, (ja vaid sellisel juhul) sisesta vajalik kasutajanimi, parool ja autentimismeetod.',

        'ADMIN_EMAIL'   => 'Vastamise aadress',

        'ADMIN_EMAIL_EXPLAIN'   => 'Seda kasutatakse vastamise aadressina kõigis e-kirjades ja see on tehnilise toe aadress. Seda kasutatakse <samp>Vastamise-tee</samp> ja <samp>Saatja</samp> aadressina e-kirjades.',

        'BOARD_EMAIL_FORM'      => 'Kasutajad saadavad e-kirju läbi foorumi',

        'BOARD_EMAIL_FORM_EXPLAIN'      => 'Selle asemel, et näidata kasutaja e-posti aadressi, saab saata e-kirju kasutajale läbi foorumi.',

        'BOARD_HIDE_EMAILS'     => 'Peida e-postiaadressid',

        'BOARD_HIDE_EMAILS_EXPLAIN'     => 'See funktsioon peidab täielikult e-postiaadressid.',

        'CONTACT_EMAIL' => 'Kontakti e-postiaadress',

        'CONTACT_EMAIL_EXPLAIN' => 'Seda aadressi kasutatakse, kui mingit kontakti on vaja, näiteks spämm, veateated jne. Seda kasutatakse <samp>Kellelt</samp> ja <samp>Kellele</samp> aadressina e-kirjades.',

        'EMAIL_FUNCTION_NAME'   => 'E-posti funktsiooni nimi',

        'EMAIL_FUNCTION_NAME_EXPLAIN'   => 'E-posti funktsioon, mis saadab kirju läbi PHP',

        'EMAIL_PACKAGE_SIZE'    => 'E-posti paki suurus',

        'EMAIL_PACKAGE_SIZE_EXPLAIN'    => 'See on maksimaalsete e-kirjade arv, mis saadetakse ühes pakis. See seade jõustub siseses sõnumijärjekorras; määra 0\'ks, kui sul on probleeme väljasaatmata e-kirjadega.',

        'EMAIL_SIG'     => 'E-posti signatuur',

        'EMAIL_SIG_EXPLAIN'     => 'See tekst lisatakse kõikidele e-kirjadele, mida foorum saadab',

        'ENABLE_EMAIL'  => 'Luba e-kirju läbi foorumi',

        'ENABLE_EMAIL_EXPLAIN'  => 'Kui see on keelatud, ei saadeta ühtegi e-kirja läbi foorumi. <em>Kasutajate e-kirja teel aktiveerimise töötamiseks peab see seade olema lubatud. Kui praegu on kasutusel "kasutaja" või "administraator" aktiveerimisseadetes, ei nõuta selle seade keelamisel kasutajatelt e-kirja teel aktiveerimist.</em>.',

        'SMTP_AUTH_METHOD'      => 'Autentimismeetod SMTP jaoks',

        'SMTP_AUTH_METHOD_EXPLAIN'      => 'Kasutatakse vaid siis, kui kasutajanimi/parool on määratud, küsi oma teenusepakkujalt, kui sa pole kindel, millist meetodit kasutada.',

        'SMTP_CRAM_MD5' => 'CRAM-MD5',

        'SMTP_DIGEST_MD5'       => 'DIGEST-MD5',

        'SMTP_LOGIN'    => 'LOGIN',

        'SMTP_PASSWORD' => 'SMTP parool',

        'SMTP_PASSWORD_EXPLAIN' => 'Sisesta parool vaid siis, kui SMTP server seda nõuab.',

        'SMTP_PLAIN'    => 'PLAIN',

        'SMTP_POP_BEFORE_SMTP'  => 'POP-ENNE-SMTP',

        'SMTP_PORT'     => 'SMTP serveri port',

        'SMTP_PORT_EXPLAIN'     => 'Muuda seda vaid siis, kui tead, et SMTP server jookseb teisel pordil',

        'SMTP_SERVER'   => 'SMTP serveri aadress',

        'SMTP_SETTINGS' => 'SMTP seaded',

        'SMTP_USERNAME' => 'SMTP kasutajanimi',

        'SMTP_USERNAME_EXPLAIN' => 'Sisesta kasutajanimi vaid siis, kui server seda nõuab',

        'USE_SMTP'      => 'Kasuta SMTP serverit e-posti jaoks',

        'USE_SMTP_EXPLAIN'      => 'Vali “Jah”, kui soovid või pead e-maili saatma oma serverist phpBB3 e-posti funktsiooni asemel.',

        'ACP_JABBER_SETTINGS_EXPLAIN'   => 'Siin saad lubada ja kontrollida Jabberi seadeid. Jabber on avatud lähtekoodiga protokoll ja seega saadaval kõigile. Mõned Jabberi serverid sisaldavad lüüse, mis lubavad kontakteeruda kasutajatega teistest võrkudest. Palun sisesta juba registreeritud kasutaja andmed - phpBB kasutab neid andmeid, nagu need siin kirjas on.',

        'JAB_ENABLE'    => 'Luba Jabber',

        'JAB_ENABLE_EXPLAIN'    => 'Lubab Jabberi sõnumid ja teated',

        'JAB_GTALK_NOTE'        => 'GTalk ei tööta',

        'JAB_PACKAGE_SIZE'      => 'Jabberi paki suurus',

        'JAB_PACKAGE_SIZE_EXPLAIN'      => 'See on sõnumite arv, mis saadetakse ühes pakis. Kui on määratud 0\'ks, saadetakse sõnumid automaatselt.',

        'JAB_PASSWORD'  => 'Jabberi parool',

        'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Hoiatus:</strong> see parool on andmebaasi salvestatud tekstina.</em>',

        'JAB_PORT'      => 'Jabberi port',

        'JAB_PORT_EXPLAIN'      => 'Jäta tühjaks, kui sa ei tea, et see oleks midagi muud kui 5222.',

        'JAB_SERVER'    => 'Jabberi server',

        'JAB_SERVER_EXPLAIN'    => 'Vaata %sjabber.org%s, et leida serverite nimekiri.',

        'JAB_SETTINGS_CHANGED'  => 'Jabberi seaded muudetud',

        'JAB_USE_SSL'   => 'Kasuta ühendamiseks SSL\'i',

        'JAB_USE_SSL_EXPLAIN'   => 'Kui lubatud, üritatakse turvaliselt ühenduda. Port muudetakse 5223, kui algne port on 5222.',

        'JAB_USERNAME'  => 'Jabberi kasutajanimi või JID',

        'JAB_USERNAME_EXPLAIN'  => 'Määra registreeritud kasutajanimi või JID. Kasutajanime korrektsusust ei kontrollita. Kui määrad vaid kasutajanime, on sinu JID\'ks sinu kasutajanimi ja server, mis on määratud ülal. Muul juhul määra kehtiv JID, näiteks kasutaja@jabber.org .',

));



?>