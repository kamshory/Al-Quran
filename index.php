<?php

require_once dirname(__FILE__)."/quran.php";

$q = @$_GET['q'];
$s = @$_GET['s'];
$j = @$_GET['j'];

$scroll = @$_GET['scroll'];


$q = preg_replace('/[^A-Za-z0-9\-\"\' ]/', '', $q); 
$q = str_replace("'", '"', $q);


$serverName = "localhost";
$port = 3306;
$username = "quran";
$password = "quran";
$databaseName = "quran";
$tableAyat = "quran_ayat";
$tableTranslation = "quran_translation";

$quran = new Quran($serverName, $port, $username, $password, $databaseName, $tableAyat, $tableTranslation);
$quran->connect();

if($q != '')
{
    $result = $quran->search($q, 68, true, true);
}
else if($j != '')
{
    $result = $quran->getJuz($j, 68);
}
else if($s != '')
{
    $result = $quran->getAyat($s, 68);
}
else 
{
    $result = $quran->getAyat(1, 68);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Al Quran</title>
    <meta charset="UTF-8">

    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
        color="#111" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.min.css">
    <script>
        var surat = '<?php echo $s;?>';
        var scroll = '<?php echo $scroll;?>';
    </script>
    <script src="js/js.min.js"></script>
</head>

<body translate="no">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Daftar Isi</h3>
            </div>

            <ul class="list-unstyled components">
                <div class="list-surat">
                    <h4>Daftar Surat</h4>
                    <ul>
                        <?php echo $quran->buildMenu();
                        ?>
                    </ul>
                    <h4>Daftar Juz</h4>
                    <ul>
                        <?php echo $quran->buildJuz();
                        ?>
                    </ul>
                </div>

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Link</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="https://planetbiru.com">Our Website</a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCY-qziSbBmJ7iZj-cXqmcMg">Our YouTube Channel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://planetbiru.com">About</a>
                </li>
                <li>
                    <a href="https://planetbiru.com">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://github.com/kamshory/Al-Quran" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://planetbiru.com" class="article">Our Website</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="https://planetbiru.com">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://www.youtube.com/channel/UCY-qziSbBmJ7iZj-cXqmcMg">YouTube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="search-form">
                <form action="" method="get">
                    <input type="text" name="q" id="q" value="<?php echo htmlspecialchars($q);?>" autocomplete="off">
                    <input type="submit" value="Cari" class="btn btn-sm btn-success">
                </form>
            </div>

            <?php
    foreach($result as $data)
    {
        ?>
            <div class="ayat-item" data-anchor="<?php echo str_replace(':', '', $data['ayat_key']);?>">
                <div class="text arab">
                    <?php
            echo $data['text'];
            echo ' '.$quran->arabicNumber($data['ayat']);
            ?>

                </div>
                <div class="text translation">
                    <?php
            echo $data['translation'];
            ?>
                </div>
                <div class="sound">
                    <audio onended="endAudio(this)" onplay="playAudio(this)" data-ayat-key="<?php echo str_replace(':', '', $data['ayat_key']);?>"
                        data-src="sounds/<?php echo str_replace(':', '', $data['ayat_key']);?>.mp3" controls></audio>
                </div>

                <div class="link-surat">
                    <a href="./?s=<?php echo $data['surat'];?>&scroll=<?php echo str_replace(':', '', $data['ayat_key']);?>">
                        <?php
                    echo $quran->getAyatLabel($data['ayat_key']);
                ?>
                    </a>
                </div>
            </div>
            <?php
    }
    ?>

        </div>
    </div>
</body>

</html>