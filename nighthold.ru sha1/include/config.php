<?
//The resource is the intellectual property of isdteam.ru
// Discord: powerpuff_io
// Telegram: powerpuff_io
//wotlk db
$lichdbip = "localhost";
$lichdbuser = "root";
$lichdbpass = "pass";
$lichdbauth = "auth";
$lichdbchar = "characters";


//web db
$webdbip = "localhost";
$webdbuser = "root";
$webdbpass = "pass";
$webdb = "website";


//forum
$forumdbip = "localhost";
$forumdbuser = "root";
$forumdbpass = "pass";
$forumdb = "forum";

include 'main.php';
$forum = "$row[forum]";
$settings = array(
  'forum' => "$forum",
  'developer' => 'ISD Team'
);


// ID merchant ENOT.IO
$merchant_id = 0000;
// Secret key 1 ( в лк енот как "Секретный пароль" )
$secret_key1 = '123';
// Secret key 2 ( в лк енот как "Дополнительный ключ" )
$secret_key2 = '123';
// Bonus valence 1 bonus = 
$colbonus = 10;
// for a store in your personal account (not used)
//$config = [
//	'dbhost' => '1123',
//	'dbuser' => 'nighthold.pro',
//	'dbpass' => '123',
//	'dbname' => 'auth',
//	'dbport' => 3306
];
?>