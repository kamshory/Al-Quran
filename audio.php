<?php
define('CDN_KEMENAG_RI', 'KEMENAG_RI');
define('CDN_ALQURAN_CLOUD', 'ALQURAN_CLOUD');
define('CDN_LOCAL', 'LOCAL');

class Audio {
    public $cdn = CDN_LOCAL;

    public function __construct($cdn)
    {
        $this->cdn = $cdn;
    }
    public function createAudio($data)
    {
        $url = "";
        switch($this->cdn)
        {
            case CDN_KEMENAG_RI:
                $url = $this->createAudioKemenagRI($data);
                break;
            case CDN_ALQURAN_CLOUD:
                $url = $this->createAudioAlQuranCloud($data);
                break;
            case CDN_LOCAL:
            default:
            $url = $this->createAudioLocal($data);
                break;
        }
        return $url;
    }

    public function createAudioKemenagRI($data)
    {
        $urlFormat = "https://quran.kemenag.go.id/cmsq/source/s01/%03d%03d.mp3";
        return sprintf($urlFormat, $data['surat'], $data['ayat']);
    }

    public function createAudioAlQuranCloud($data)
    {
        $bitrate = 128;
        $urlFormat = "https://cdn.islamic.network/quran/audio/%d/ar.alafasy/%d.mp3";
        return sprintf($urlFormat, $bitrate, $data['ayat_number']);
    }

    public function createAudioLocal($data)
    {
        $urlFormat = "sounds/%03d%03d.mp3";
        return sprintf($urlFormat, $data['surat'], $data['ayat']);
    }
}




