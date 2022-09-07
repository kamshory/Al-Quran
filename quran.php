<?php

$serverName = "localhost";
$port = 3306;
$username = "quran";
$password = "quran";
$databaseName = "quran";
$tableAyat = "quran_ayat";
$tableTranslation = "quran_translation";

class Quran{

    public $database = null;

    public $serverName = "localhost";
    public $port = 3306;
    public $username = "root";
    public $password = "alto1234";
    public $databaseName = "quran";
    public $tableAyat = "quran_ayat";
    public $tableTranslation = "quran_translation";

    public $suratName = array(
        "1"=>array("Al Fatihah", "Pembuka"),
        "2"=>array("Al Baqarah", "Sapi Betina"),
        "3"=>array("Ali Imran", "Keluarga Imran"),
        "4"=>array("An Nisa", "Wanita"),
        "5"=>array("Al Ma'idah", "Jamuan"),
        "6"=>array("Al An'am", "Hewan Ternak"),
        "7"=>array("Al-A'raf", "Tempat yang Tertinggi"),
        "8"=>array("Al-Anfal", "Harta Rampasan Perang"),
        "9"=>array("At-Taubah", "Pengampunan"),
        "10"=>array("Yunus", "Nabi Yunus"),
        "11"=>array("Hud", "Nabi Hud"),
        "12"=>array("Yusuf", "Nabi Yusu"),
        "13"=>array("Ar-Ra'd", "Guruh"),
        "14"=>array("Ibrahim", "Nabi Ibrahim"),
        "15"=>array("Al-Hijr", "Gunung Al Hijr"),
        "16"=>array("An-Nahl", "Lebah"),
        "17"=>array("Al-Isra'", "Perjalanan Malam"),
        "18"=>array("Al-Kahf", "Penghuni-penghuni Gua"),
        "19"=>array("Maryam", "Maryam"),
        "20"=>array("Ta Ha", "Ta Ha"),
        "21"=>array("Al-Anbiya", "Nabi-Nabi"),
        "22"=>array("Al-Hajj", "Haji"),
        "23"=>array("Al-Mu'minun", "Orang-orang mukmin"),
        "24"=>array("An-Nur", "Cahaya"),
        "25"=>array("Al-Furqan", "Pembeda"),
        "26"=>array("Asy-Syu'ara'", "Penyair"),
        "27"=>array("An-Naml", "Semut"),
        "28"=>array("Al-Qasas", "Kisah-kisah"),
        "29"=>array("Al-'Ankabut", "Laba-laba"),
        "30"=>array("Ar-Rum", "Bangsa Romawi"),
        "31"=>array("Luqman", "Keluarga Luqman"),
        "32"=>array("As-Sajdah", "Sajdah"),
        "33"=>array("Al-Ahzab", "Golongan-golongan yang Bersekutu"),
        "34"=>array("Saba'", "Kaum Saba'"),
        "35"=>array("Fatir", "Pencipta"),
        "36"=>array("Ya Sin", "Yaasiin"),
        "37"=>array("As-Saffat", "Barisan-barisan"),
        "38"=>array("Sad", "Shaad"),
        "39"=>array("Az-Zumar", "Rombongan-rombongan"),
        "40"=>array("Ghafir", "Yang Mengampuni"),
        "41"=>array("Fussilat", "Yang Dijelaskan"),
        "42"=>array("Asy-Syura", "Musyawarah"),
        "43"=>array("Az-Zukhruf", "Perhiasan"),
        "44"=>array("Ad-Dukhan", "Kabut"),
        "45"=>array("Al-Jasiyah", "Yang Bertekuk Lutut"),
        "46"=>array("Al-Ahqaf", "Bukit-bukit Pasir"),
        "47"=>array("Muhammad", "Nabi Muhammad"),
        "48"=>array("Al-Fath", "Kemenangan"),
        "49"=>array("Al-Hujurat", "Kamar-kamar"),
        "50"=>array("Qaf", "Qaaf"),
        "51"=>array("Az-Zariyat", "Angin yang Menerbangkan"),
        "52"=>array("At-Tur", "Bukit"),
        "53"=>array("An-Najm", "Bintang"),
        "54"=>array("Al-Qamar", "Bulan"),
        "55"=>array("Ar-Rahman", "Yang Maha Pemurah"),
        "56"=>array("Al-Waqi'ah", "Hari Kiamat"),
        "57"=>array("Al-Hadid", "Besi"),
        "58"=>array("Al-Mujadilah", "Wanita yang Mengajukan Gugatan"),
        "59"=>array("Al-Hasyr", "Pengusiran"),
        "60"=>array("Al-Mumtahanah", "Wanita yang Diuji"),
        "61"=>array("As-Saff", "Satu Barisan"),
        "62"=>array("Al-Jumu'ah", "Hari Jum'at"),
        "63"=>array("Al-Munafiqun", "Orang-orang yang Munafik"),
        "64"=>array("At-Tagabun", "Hari Dinampakkan Kesalahan-kesalahan"),
        "65"=>array("At-Talaq", "Talak"),
        "67"=>array("Al-Mulk", "Kerajaan"),
        "68"=>array("Al-Qalam", "Pena"),
        "69"=>array("Al-Haqqah", "Hari Kiamat"),
        "70"=>array("Al-Ma'arij", "Tempat Naik"),
        "71"=>array("Nuh", "Nabi Nuh"),
        "72"=>array("Al-Jinn", "Jin"),
        "73"=>array("Al-Muzzammil", "Orang yang Berselimut"),
        "74"=>array("Al-Muddassir", "Orang yang Berkemul"),
        "75"=>array("Al-Qiyamah", "Kiamat"),
        "76"=>array("Al-Insan", "Manusia"),
        "77"=>array("Al-Mursalat", "Malaikat-Malaikat Yang Diutus"),
        "78"=>array("An-Naba'", "Berita Besar"),
        "79"=>array("An-Nazi'at", "Malaikat-Malaikat Yang Mencabut"),
        "80"=>array("'Abasa", "Ia Bermuka Masam"),
        "81"=>array("At-Takwir", "Menggulung"),
        "82"=>array("Al-Infitar", "Terbelah"),
        "83"=>array("Al-Tatfif", "Orang-orang yang Curang"),
        "84"=>array("Al-Insyiqaq", "Terbelah"),
        "85"=>array("Al-Buruj", "Gugusan Bintang"),
        "86"=>array("At-Tariq", "Yang Datang di Malam Hari"),
        "87"=>array("Al-A'la", "Yang Paling Tinggi"),
        "88"=>array("Al-Gasyiyah", "Hari Pembalasan"),
        "89"=>array("Al-Fajr", "Fajar"),
        "90"=>array("Al-Balad", "Negeri"),
        "91"=>array("Asy-Syams", "Matahari"),
        "92"=>array("Al-Lail", "Malam"),
        "93"=>array("Ad-Duha", "Waktu Matahari Sepenggalahan Naik"),
        "94"=>array("Al-Insyirah", "Melapangkan"),
        "95"=>array("At-Tin", "Buah Tin"),
        "96"=>array("Al-'Alaq", "Segumpal Darah"),
        "97"=>array("Al-Qadr", "Kemuliaan"),
        "98"=>array("Al-Bayyinah", "Pembuktian"),
        "99"=>array("Az-Zalzalah", "Kegoncangan"),
        "100"=>array("Al-'Adiyat", "Berlari Kencang"),
        "101"=>array("Al-Qari'ah", "Hari Kiamat"),
        "102"=>array("At-Takasur", "Bermegah-megahan"),
        "103"=>array("Al-'Asr", "Masa"),
        "104"=>array("Al-Humazah", "Pengumpat"),
        "105"=>array("Al-Fil", "Gajah"),
        "106"=>array("Quraisy", "Suku Quraisy"),
        "107"=>array("Al-Ma'un", "Barang-barang yang Berguna"),
        "108"=>array("Al-Kausar", "Nikmat yang Berlimpah"),
        "109"=>array("Al-Kafirun", "Orang-orang Kafir"),
        "110"=>array("An-Nasr", "Pertolongan"),
        "111"=>array("Al-Lahab", "Gejolak Api"),
        "112"=>array("Al-Ikhlas", "Ikhlas"),
        "113"=>array("Al-Falaq", "Waktu Subuh"),
        "114"=>array("An-Nas", "Umat Manusia"),
        );        

    public function __construct($serverName, $port, $username, $password, $databaseName, $tableAyat, $tableTranslation)
    {
        $this->serverName = $serverName;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->databaseName = $databaseName;
        $this->tableAyat = $tableAyat;
        $this->tableTranslation = $tableTranslation;
    
    }

    public function connect()
    {

     
        try {
            $this->database = new PDO("mysql:host=$this->serverName;port=$this->port;dbname=$this->databaseName", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e) 
        {
            /**
             * Do nothing
             */
        }
    }

    public function createID()
    {
        $sql = "select * from indonesianquran";
        $data = $this->getData($sql);
        if($data != null && is_array($data))
        {
            foreach($data as $row)
            {
                $sura = $row['surat'];
                $aya = $row['ayat'];
                $index = $row['index'];
                $key = sprintf("%03d:%03d", $sura, $aya);

                $sql2 = "UPDATE indonesianquran set verse_key = '$key' where `index` = '$index' ";
                $this->execute($sql2);
                echo $sql2.";\r\n";

            }
        }
    }

    public function getData($sql)
    {
        $data = null;
        try
        {
            $rs = $this->database->prepare($sql);
            $rs->execute();
            $data = $rs->fetchAll();
        }
        catch(PDOException $e)
        {
            /**
             * Do nothing
             */
            echo $e->getMessage();
        }
        return $data;
    }

    public function execute($sql)
    {
        try
        {
            $rs = $this->database->prepare($sql);
            $rs->execute();
        }
        catch(PDOException $e)
        {
            /**
             * Do nothing
             */
        }
    }

    public function createRange($surat, $ayatFrom, $ayatTo)
    {
        $arr = array();
        if($ayatTo < $ayatFrom)
        {
            /**
             * Swap
             */
            $temp = $ayatFrom;
            $ayatFrom = $ayatTo;
            $ayatTo = $temp;
        }
        for($i = $ayatFrom; $i<=$ayatTo; $i++)
        {
            $arr[] = sprintf("'%03d:%03d'", $surat, $i);
        } 
        return $arr;
    }

    public function getAyat($surat = null, $ayatFrom = null, $ayatTo = null, $translationKey = null)
    {
        $filter = "";
        if($surat == null)
        {
            /**
             * All ayat from all surat
             */         
        }
        else if($surat != null && $ayatFrom == null)
        {
            /**
             * All ayat from specify surat
             */
            $key = sprintf("%03d:", $surat).'%';
            $filter .= " and ".$this->tableAyat.".ayat_key like '" .$key. "' ";
        }
        else if($surat != null && $ayatFrom != null && $ayatTo == null)
        {
            /**
             * ayatFrom from specify surat
             */
            $key = sprintf("%03d:%03d", $surat, $ayatFrom);
            $filter .= " and ".$this->tableAyat.".ayat_key like '" .$key. "' ";
        }
        else if($surat != null && $ayatFrom != null && $ayatTo != null) 
        {
            /**
             * Create range
             */
            $arr = $this->createRange($surat, $ayatFrom, $ayatTo);
            $filter .= "and ".$this->tableAyat.".ayat_key in(".implode(', ', $arr).") ";         
        }

        if($translationKey != null)
        {
            $sql = "select ".$this->tableAyat.".text, ".$this->tableAyat.".simple, 
            ".$this->tableAyat.".ayat, ".$this->tableAyat.".ayat_key,
            ".$this->tableTranslation.".translation
            from ".$this->tableAyat." 
            left join(".$this->tableTranslation.") 
            on(".$this->tableTranslation.".ayat_key = ".$this->tableAyat.".ayat_key and ".$this->tableTranslation.".translation_key = '".$translationKey."')
            where (1 = 1) $filter 
            order by ".$this->tableAyat.".ayat_key asc 
            ";
        }
        else
        {
            $sql = "select ".$this->tableAyat.".text, ".$this->tableAyat.".simple 
            from ".$this->tableAyat.", ".$this->tableAyat.".ayat_key 
            where (1 = 1) $filter 
            order by ".$this->tableAyat.".ayat_key asc 
            ";
        }
        
        return $this->getData($sql);
    }

    public function search($text, $translationKey, $all = false, $mark = false)
    {
        $arr = preg_split('/("[^"]*")|\h+/', $text, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
        $arr = array_unique($arr);
        if($all)
        {
 
            $field = "t.translation";

            $filter = $this->createFilter($field, $arr);
        }
        else
        {
            $filter = "";
        }

        $sql = "SELECT t.* FROM(SELECT ".$this->tableAyat.".text, ".$this->tableAyat.".simple, 
        ".$this->tableAyat.".ayat,
        ".$this->tableTranslation.".translation, ".$this->tableTranslation.".ayat_key,
        MATCH(translation) AGAINST('$text' IN NATURAL LANGUAGE MODE) as score 
        FROM ".$this->tableTranslation." 
        left join(".$this->tableAyat.") 
        on(".$this->tableTranslation.".ayat_key = ".$this->tableAyat.".ayat_key and ".$this->tableTranslation.".translation_key = '".$translationKey."')
        WHERE MATCH(".$this->tableTranslation.".translation) AGAINST('$text' IN NATURAL LANGUAGE MODE) 
        ORDER BY score desc) as t
        WHERE (1 = 1)
        $filter
        ";
  
        $data = $this->getData($sql);
        if($mark)
        {
            $data = $this->markTranslation($data, $arr);
        }
        return $data;
    }

    public function createFilter($field, $values)
    {
        $arr = array();
        foreach($values as $v)
        {
            $v = str_replace('"', '', $v);
            $v = addslashes($v);
            $arr[] = " AND LOWER(".$field.") like LOWER('%$v%')  ";
        }
        return implode("", $arr);
    }

    public function markTranslation($data, $arr)
    {
        foreach($data as $key=>$row)
        {
            foreach($arr as $v)
            {
                $v = str_replace('"', '', $v);
                $original = $data[$key]['translation'];
                $rep = "/$v/i";
                $new = preg_replace($rep, "<em>\$0</em>", $original);
                $data[$key]['translation'] = $new;
            }
        }
        return $data;
    }
    public function getAyatLabel($ayatKey)
    {
        $arr = explode(":", $ayatKey);
        return $this->suratName[(int) $arr[0]][0]. ' : '.((int) $arr[1]);
    }
    public function arabicNumber($number)
    {
        $num = sprintf("%d", $number);
        $arabic = str_replace(array(
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        ), array(
            '٠', 
            '١', 
            '٢', 
            '٣', 
            '٤', 
            '٥', 
            '٦', 
            '٧', 
            '٨', 
            '٩'
        ), $num);
        return $arabic;
    }
    public function buildMenu()
    {
        $menu = "";
        foreach($this->suratName as $number=>$names)
        {
            $menu .= '<li><a href="./?s='.$number.'">'.htmlspecialchars($names[0]).'</a></li>';
        }
        return $menu;
    }
}