<?php

// Get these from http://developers.facebook.com
$api_key = 'ba2dcb8481d9338e47a31627f95c03a6';
$secret  = 'bf0c8985ae30008f53138d4e45305ae1';
/* While you're there, you'll also want to set up your callback url to the url
 * of the directory that contains Footprints' index.php, and you can set the
 * framed page URL to whatever you want.  You should also swap the references
 * in the code from http://apps.facebook.com/footprints/ to your framed page URL. */

// The IP address of your database
$db_ip = 'hkirsman.db.5632799.hostedresource.com';           

$db_user = 'hkirsman';
$db_pass = 'Hk1r5man';

// the name of the database that you create for footprints.
$db_name = 'hkirsman';

/* create this table on the database:
CREATE TABLE `footprints` (
  `from` int(11) NOT NULL default '0',
  `to` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  KEY `from` (`from`),
  KEY `to` (`to`)
)
*/
