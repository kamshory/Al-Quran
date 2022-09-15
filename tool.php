<?php
require_once dirname(__FILE__)."/config.php";
require_once dirname(__FILE__)."/quran.php";

$quran = new Quran($serverName, $port, $username, $password, $databaseName, $tableAyat, $tableTranslation);
$quran->connect();

$quran->createNumber();

