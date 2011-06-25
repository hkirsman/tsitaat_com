<?php
if(!defined('IN_PHPBB')){ exit; }
if(empty($lang) || !is_array($lang)){ $lang = array(); }
$lang = array_merge($lang, array(
'ACP_BACKUP_EXPLAIN' => 'Siin sa saad teha kõikide phpBB seotud andmete varukoopia. Sa saad salvestada tulemuse arhiivi sinu <samp>store/</samp> kausta(kataloogi) või otse allalaadida. Sinu serveri konfiguratsioonist sõltub, kas sa saad faili kokku pakkida erinevates formaatides.',
'ACP_RESTORE_EXPLAIN' => 'See teostab täistaastamise kõikidest phpBB tabelitesse salvestatud failidest. Kui sinu server toetab, saad kasutada gzip või bzip2 abil kokku pakitud teksti faili. <strong>Hoiatus</strong> See kirjutab üle olemasolevad andmed. Taastamise protsess võib võtta kaua aega, palun ära liigu sellelt lehelt minema enne, kui see on lõpetatud. Varukoopiad on salvestatud <samp>store/</samp> kausta. PhpBB eeldab, et varukoopiad on genereeritud phpBB varukoopia funktsiooniga. Varukoopiate taastamised, mis ei ole tehtud süsteemis sees võivad töötada ja võivad mitte.',
'BACKUP_DELETE' => 'Varukoopia fail on edukalt kustutatud.',
'BACKUP_INVALID' => 'Valitud varukoopia fail on vigane.',
'BACKUP_OPTIONS' => 'Varukoopia valikud',
'BACKUP_SUCCESS' => 'Varukoopia fail on edukalt tehtud.',
'BACKUP_TYPE' => 'Varukoopia tüüp',
'DATABASE' => 'Andmebaasi varud',
'DATA_ONLY' => 'Ainult andmed',
'DELETE_BACKUP' => 'Kustuta varukoopia',
'DELETE_SELECTED_BACKUP' => 'Kas sa tõesti tahad kustutada valitud varukoopia?',
'DESELECT_ALL' => 'Ära vali',
'DOWNLOAD_BACKUP' => 'Lae alla varukoopia',
'FILE_TYPE' => 'Faili tüüp',
'FILE_WRITE_FAIL'	=> 'Faili ei suudetud kausta kirjutada.',
'FULL_BACKUP' => 'Täielik',
'RESTORE_FAILURE' => 'Varukoopia fail võib olla rikutud.',
'RESTORE_OPTIONS' => 'Taastamise valikud',
'RESTORE_SUCCESS' => 'Andmebaas on edukalt taastatud.<br /><br />Sinu foorum peaks olema tagasi selles staadiumis, mis ta oli varukoopia tegemise ajal.',
'SELECT_ALL' => 'Vali kõik',
'SELECT_FILE' => 'Vali fail',
'START_BACKUP' => 'Alusta varukoopia tegemist',
'START_RESTORE' => 'Alusta taastamist',
'STORE_AND_DOWNLOAD' => 'Salvesta ja lae alla',
'STORE_LOCAL' => 'Salvesta fail serveris',
'STRUCTURE_ONLY' => 'Ainult struktuur',
'TABLE_SELECT' => 'Tabeli valik',
'TABLE_SELECT_ERROR' => 'Sa pead valima vähemalt ühe tabeli.',
));
?>