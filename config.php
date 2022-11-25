<?php

$serverName = "localhost";
$port = 3306;
$username = "root";
$password = "pass";
$databaseName = "quran";
$tableAyat = "quran_ayat";
$tableTranslation = "quran_translation";

require_once dirname(__FILE__)."/audio.php";

$cdn = CDN_ALQURAN_CLOUD;
