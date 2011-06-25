<?php
/**
*
* help_bbcode.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-11-26 - Amphor - phpbb.ee
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
$help = array(
        array(
                0       => '--',
                1       => 'Sissejuhatus',
        ),
        array(
                0       => 'Mis on BBCode?',
                1       => 'BBCode on lihtsam viis HTML koodi kirjutamiseks. See, kas sa saad kasutada BBCode-i foorumis, on otsustatud saidi administraatori poolt. Igal postitusel võib ka ükshaaval keelata BBCode-i. BBCode on sarnane keel HTML-iga, kuid tagid on nurksulgudes [ ja ] see annab parema kontrolli selle üle, kuidas ja mis on kuvatud. BBCode lisamine klikitavate nuppude (sõnumi ankeedi kohal) abil on aga veelgi lihtsam. Alljärgnev õpetus õpetab kuidas BBCode-i kasutada.',
        ),
        array(
                0       => '--',
                1       => 'Teksti kujundamine',
        ),
        array(
                0       => 'Kuidas luua bold (rasvane kiri), italic (kaldkiri) ja underlined (allajoonitud) teksti?',
                1       => 'BBCode sisaldab käske (tag´e) mis lubavad sul kiiresti muuta teksti stiili. See toimib järgmiselt: <ul><li>Kui tahate teha mõnda osa tekstist rasvaseks (bold) siis toimige järgmiselt <strong>[b][/b]</strong>, nt. <br /><br /><strong>[b]</strong>Tere<strong>[/b]</strong><br /><br />saab olema <strong>Tere</strong></li><li>allajoonitud teksti tegemiseks  <strong>[u][/u]</strong>, näiteks:<br /><br /><strong>[u]</strong>Tere hommikust<strong>[/u]</strong><br /><br />saab olema <span style="text-decoration: underline">Tere hommikust</span></li><li>kui on vaja kaldus (italic) teksti, kasuta <strong>[i][/i]</strong>, nt.<br /><br />See on <strong>[i]</strong>Suurepärane!<strong>[/i]</strong><br /><br />annab sulle See on <i>suurepärane!</i></li></ul>',
        ),
        array(
                0       => 'Kuidas muuta teksti värvi ja suurust?',
                1       => 'Et muuta teksti värvi või suurust, on vajalikud järgnevad tag´id. Arvesta, et see, kuidas kasutajatele su postitus näib, oleneb ka tema op süsteemist ja veebibrauserist: <ul><li>Muutes teksti värvi, toimi nii, et paned teksti nende tag´ide vahele <strong>[color=][/color]</strong>. Sa võid ka inglisekeeles kirjutada vastava värvi nime (nt. red, blue, yellow, jne.) või kasutada "hexadecimal triplet" alternatiivi, nt. #FFFFFF, #000000. Näiteks, kui tahad teha punast teksti, peaksid kasutama:<br /><br /><strong>[color=red]</strong>Tere!<strong>[/color]</strong><br /><br />või<br /><br /><strong>[color=#FF0000]</strong>Tere!<strong>[/color]</strong><br /><br /> Mõlemate väljund on sama <span style="color:red">Tere!</span></li><li> Teksti suurust muutes, kasuta sarnast moodust <strong>[size=][/size]</strong>. See tag sõltub kasutaja valitud stiilist, aga vajalik formaat on numbriline suurus, esitledes teksti suurust protsentides, alustades 20 (väga pisike) kuni 200 (väga suur). Näiteks: <br /><br /><strong>[size=30]</strong>PISIKE<strong>[/size]</strong><br /><br />on tavaliselt <span style="font-size:30%;">PISIKE</span><br /><br />ning <br /><br /><strong>[size=200]</strong>HIIGLASUUR!<strong>[/size]</strong><br /><br />on tavaliselt <span style="font-size:200%;">HIIGLASUUR!</span></li></ul>',
        ),
        array(
                0       => 'Kas ma saan kombineerida tag´e?',
                1       => 'Jah, muidugi; näiteks kellegi tähelepanu äratamiseks võid kirjutada:<br /><br /><b>[size=18][color=red][b]</b>VAATA SIIA!<b>[/b][/color][/size]</b><br /><br />see kuvab <span style="color:red;font-size:18px"><b>VAATA SIIA!</b></span><br /><br />Me ei soovita siiski palju sellist teksti kirjutada! Pea meeles, et sa pead jälgima, et tag´id oleksid korralikult suletud:<br /><br /><b>[b][u]</b>See on vale<b>[/b][/u]</b>',
        ),
        array(
                0       => '--',
                1       => 'Tsiteerimine ja kindlaksmääratud laiusega teksti kuvamine',
        ),
        array(
                0       => 'Tsiteerimine postitustes',
                1       => 'Tsiteerida saab viitega autorile või mitte.<ul><li>Kui sa kasutad foorumis viitamise nuppu, siis pannakse postituse tekst nende tag´ide vahele: <b>[quote=""][/quote]</b>. See lubab sul määrata, kes on teksti autor. Näiteks kui sa tahad tsiteerida midagi, mida Jõmm kirjutas, siis kasutad koodi:<br /><br /><b>[quote="Jõmm"]</b>Tekst, mida Jõmm kirjutas<b>[/quote]</b><br /><br />Tulemuses kuvatakse automaatselt juurde: Jõmm kirjutas: enne õiget teksti. Sa <b>pead</b> panema jutumärgid \"\" autori nime ümber.</li><li>Teise meetodiga saad sa pimesi kedagi tsiteerida. Selleks pane tekst <b>[quote]</b> ja <b>[/quote]</b> tag´ide vahele. Teadet vaadates on lihtsalt näha: Tsitaat: enne õiget teadet.</li></ul>',
        ),
        array(
                0       => 'Koodi kuvamine',
                1       => 'Kui sa tahad kuvada koodi või midagi muud, mis nõuab kindlaksmääratud tekstilaiust, kasuta <b>[code]</b> ja <b>[/code]</b> tag´e, näiteks<br /><br /><b>[code]</b>echo "siin on natuke koodi";<b>[/code]</b><br /><br />Teksti formaat <b>[code][/code]</b> tag´ide vahe säilitatakse. PHP süntaksi esile tõstmist saab kasutada järgnevalt: <strong>[code=php][/code]</strong> see on soovitatav kui postitad PHP koodide näiteid, et paraneks koodi loetavus.',
        ),
        array(
                0       => '--',
                1       => 'Nimekirjade tegemine',
        ),
        array(
                0       => 'Järjestamata nimekirja tegemine',
                1       => 'Järjestamata nimekirja loomiseks kasuta <b>[list][/list]</b> ja defineeri iga osa kasutades <b>[*]</b>. Näiteks värvide nimekirja tegemiseks kasuta:<br /><br /><b>[list]</b><br /><b>[*]</b>Punane<br /><b>[*]</b>Sinine<br /><b>[*]</b>Kollane<br /><b>[/list]</b><br /><br />See teeb järgneva nimekirja:<ul><li>Punane</li><li>Sinine</li><li>Kollane</li></ul>',
				// See blokk vahetab KKK-küsimused teise tulpa.
		array(
				0 => '--',
				1 => '--'
	),
        ),
        array(
                0       => 'Järjestatud nimekirja tegemine',
                1       => 'Sellega saad kontrollida, mis on iga nimekirja punkti ees. Kasuta <b>[list=1][/list]</b> et nimekiri nummerdada või <b>[list=a][/list]</b>, et seda tähtedega tähistada. Iga punkti ette peab samuti panema <b>[*]</b>. Näiteks:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Poodi<br /><b>[*]</b>Uue arvuti ostmine<br /><b>[*]</b>Arvuti sõimamine, kui see kokku jookseb<br /><b>[/list]</b><br /><br />kuvab järgneva:<ol type=\"1\"><li>Poodi</li><li>Uue arvuti ostmine</li><li>Arvuti sõimamine, kui see kokku jookseb</li></ol>Tähtedega nimekirja puhul kasutaksid sa:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Vastus1<br /><b>[*]</b>Vastus2<br /><b>[*]</b>Vastus3<br /><b>[/list]</b><br /><br /> ning selle tulemus oleks <ol type="a"><li>Vastus1</li><li>Vastus2</li><li>Vastus3</li></ol>',
        ),
        array(
                0       => '--',
                1       => 'Linkide loomine',
        ),
        array(
                0       => 'Linkimine teisele lehele',
                1       => 'Phpbb toetab mitmeid viise linkide ja URLide tegemiseks.<ul><li>Esiteks on võimalik kasutada <b>[url=][/url]</b> tag´i; kõik, mis sa peale = trükid, kuvatakse URLina. Näiteks link phpBB kodulehele näeks href="email välja:<br /><br /><b>[url=http://www.phpbb.ee/]</b>phpBB<b>[/url]</b><br /><br />See looks järgneva lingi: <a href="http://www.phpbb.ee/" target=\"_blank\">phpBB</a>. Lingid avanevad uues aknas, et see ei segaks foorumi lugemist.</li><li>URLi enda näitamist lingina tuleb seda teha nii:<br /><br /><b>[url]</b>http://www.phpbb.ee/<b>[/url]</b><br /><br />See kuvab järgneva lingi: <a href="http://www.phpbb.ee/" target="_blank">http://www.phpbb.ee/</a></li><li>phpBB oskab ka ise korrektselt kirjutatud aadresse linkideks muuta. Näiteks kirjutades www.phpbb.ee teatesse, kuvatakse see automaatselt <a href="http://www.phpbb.ee/" target="_blank">www.phpbb.ee</a>.</li><li>Sama asi kehtib ka mailiaadresside kohta; sa saad ise maili täpsustada, näiteks:<br /><br /><b>[email]</b>mitte.kellegi@domeen.adr<b>[/email]</b><br /><br />mille tulemus on <a href="mailto:mitte.kellegi@domeen.adr">mitte.kellegi@domeen.adr</a> või siis kirjuta lihtsalt mitte.kellegi@domeen.adr oma postitusse ja see muudetakse automaatselt.</li></ul>Linke saab vabalt panna ka piltide ümber (loe järgmist paragrahvi). Ka siin pead ise kontrollima, et tag´id oleksid korrektselt suletud. Näiteks:<br /><br /><b>[url=http://www.phpbb.ee/][img]</b>http://www.phpbb.ee/images/logo.gif<b>[/url][/img]</b><br /><br /> <u>ei</u> ole õige!',
        ),
        array(
                0       => '--',
                1       => 'Piltide näitamine postituses',
        ),
        array(
                0       => 'Pildi lisamine postitusse',
                1       => 'BBCode´i abil saad automaatselt oma postitusse pilte kuvada. Pilt peab juba olema kuskil serveris olemas (sa ei saa pilte kuvada oma arvutist). Pildi näitamiseks pead sa URLi ümbritsema <b>[img][/img]</b> tag´idega. Näiteks:<br /><br /><b>[img]</b>http://phpbb.ee/styles/prosilver/imageset/452logo_studio61265.png<b>[/img]</b><br /><br />Nagu üleval märgitud saad sa pildist ka lingi teha, näiteks<br /><br /><b>[url=http://www.phpbb.ee/][img]</b>http://phpbb.ee/images/logo/phpbbeesti1.png<b>[/img][/url]</b><br /><br />kuvab:<br /><br /><a href="http://www.phpbb.ee/" target="_blank"><img src="http://phpbb.ee/images/logo/phpbbeesti1.png" border="0" alt=""></a><br />',
        ),
        array(
                0       => 'Manuste lisamine postitusse',
                1       => 'Nüüd saad manuseid postitada igasse postituse osasse kasutades uut <strong>[attachment=][/attachment]</strong> BBCode koodi, kui manuste funktsionaalsus on võimaldatud foorumi administraatori poolt ja kui sul on õigus teha manused. Postitamise lehel on eraldi koht manuste postitamiseks (Tavaliselt nupuna või menüüna)',
        ),
        array(
                0       => '--',
                1       => 'Muud küsimused',
        ),
        array(
                0       => 'Kas ma saan lisada oma tag´e?',
                1       => 'Kui sa oled foorumi administraator ja sul on kindlad õigused, siis peaksid saama lisada BBCode koode läbi Custom BBCode sektsiooni.',
        ),
);

?>
