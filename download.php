<?php
/**
 * Download Al Quran dari Website Kemenag
 * https://quran.kemenag.go.id/cmsq/source/s01/001001.mp3
 */
for($i = 1; $i<115; $i++)
{
    for($j = 1; $j<287; $j++)
    {
        $url = sprintf("https://quran.kemenag.go.id/cmsq/source/s01/%03d%03d.mp3", $i, $j);
        $response = get($url);
        if(strlen($response) < 7000 && stripos($response, '<!DOCTYPE html>') !== false)
        {
            break;
        }
        $file = sprintf("sounds/%03d%03d.mp3", $i, $j);
        file_put_contents($file, $response);
    }
}

function get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

?>