<?php
if(!defined('IN_PHPBB')){ exit; }
if(empty($lang) || !is_array($lang)){ $lang = array(); }
$lang = array_merge($lang, array(
'ACP_MASS_EMAIL_EXPLAIN' => 'Siin saad saata e-mail kirja kõigile kasutajatele või valitud grupile, <strong>millel on valikus lubatud mass e-maile vastu võtta</strong> Pimekoopia saadetakse ka administraatori e-posti aadressile. Kui üritad saata kirja väga paljudele kasutajatele, siis ära lahku enne lehelt, kui skript on lõpetanud saatmise, sest saatmisega lähebki kaua aega.',
'ALL_USERS' => 'Kõik kasutajad',
'COMPOSE' => 'Kirjuta uus kiri',
'EMAIL_SEND_ERROR' => 'E-posti saatmisel tekkis üks või mitu viga. Palun kontrolli %sVeateadete logi%s täpsema errori kirjelduse saamiseks.',
'EMAIL_SENT' => 'Kiri on saadetud.',
'EMAIL_SENT_QUEUE' => 'Kiri on järjekorras.',
'LOG_SESSION' => 'Logi kirja sessioon kriitikalisse logisse',
'SEND_IMMEDIATELY' => 'Saada koheselt',
'SEND_TO_GROUP' => 'Saada grupile',
'SEND_TO_USERS' => 'Saada kasutajatele',
'SEND_TO_USERS_EXPLAIN' => 'Siia nimesid kirjutades võid üle kirjutada eelnevalt valituid gruppe.',
'MAIL_HIGH_PRIORITY' => 'Kõrge',
'MAIL_LOW_PRIORITY' => 'Madal',
'MAIL_NORMAL_PRIORITY' => 'Normaalne',
'MAIL_PRIORITY' => 'Kirja tähtsus',
'MASS_MESSAGE' => 'Sinu sõnum',
'MASS_MESSAGE_EXPLAIN' => 'Sa võid sisestada ainult puhast teksti, kõik koodi märgistused eemaldatakse enne saatmist.',
'NO_EMAIL_MESSAGE' => 'Sa pead sisestama ka sõnumi.',
'NO_EMAIL_SUBJECT' => 'Sa pead sisestama ka pealkirja.',
));
?>
