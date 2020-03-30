<?php 


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://www.mynet.com/koronavirus?utm_campaign=Bundle&utm_medium=referral&utm_source=Bundle&utm_campaign=Bundle&utm_medium=referral&utm_source=Bundle");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt ($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19"); 
curl_setopt($curl,CURLOPT_REFERER,'https://www.worldometers.info/coronavirus/'); 
$content = curl_exec($curl);
curl_close($curl);


//Dünya İstatistikleri
$dunyatoplamvaka = '@<strong>(.*?)</strong>@';
preg_match($dunyatoplamvaka,$content,$dunyavaka);
 
$dunyatoplamolum = '@<strong>(.*?)</strong>@';
preg_match_all($dunyatoplamolum,$content,$dunyaolum);

// $dunyatoplamiyilesme = '@<div class="maincounter-number" style="color:#8ACA2B ">(.*?)</div>@';
// preg_match_all($dunyatoplamiyilesme,$content,$dunyaiyilesme);

//Türkiye İstatistikleri
$TurkiyeToplamVaka = '@<strong>(.*?)</strong>@';
preg_match_all($TurkiyeToplamVaka,$content,$TurkiyeVaka);

$TurkiyeToplamOlum = '@<strong>(.*?)</strong>@';
preg_match_all($TurkiyeToplamOlum,$content,$TurkiyeOlum);

$TurkiyeToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($TurkiyeToplamIyılesme,$content,$TurkiyeIyılesme);

// //Çin İstatistikleri
$CinToplamVaka = '@<div class="korona-div-table-cell korona-statistic-value">(.*?)</div>@';
preg_match_all($CinToplamVaka,$content,$CinVaka);

$CinToplamOlum = '@<div class="korona-div-table-cell korona-statistic-deaths">(.*?)</div>@';
preg_match_all($CinToplamOlum,$content,$CinOlum);

$CinToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($CinToplamIyılesme,$content,$CinIyılesme);

// //İtalya İstatistikleri
$ItalyaToplamVaka = '@<div class="korona-div-table-cell korona-statistic-value">(.*?)</div>@';
preg_match_all($ItalyaToplamVaka,$content,$ItalyaVaka);

$ItalyaToplamOlum = '@<div class="korona-div-table-cell korona-statistic-deaths">(.*?)</div>@';
preg_match_all($ItalyaToplamOlum,$content,$ItalyaOlum);

$ItalyaToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($ItalyaToplamIyılesme,$content,$ItalyaIyılesme);

// //ABD İstatistikleri
$ABDToplamVaka = '@<div class="korona-div-table-cell korona-statistic-value">(.*?)</div>@';
preg_match_all($ABDToplamVaka,$content,$ABDVaka);

$ABDToplamOlum = '@<div class="korona-div-table-cell korona-statistic-deaths">(.*?)</div>@';
preg_match_all($ABDToplamOlum,$content,$ABDOlum);

$ABDToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($ABDToplamIyılesme,$content,$ABDIyılesme);

// //Iran İstatistikleri
$IranToplamVaka = '@<div class="korona-div-table-cell korona-statistic-value">(.*?)</div>@';
preg_match_all($IranToplamVaka,$content,$IranVaka);

$IranToplamOlum = '@<div class="korona-div-table-cell korona-statistic-deaths">(.*?)</div>@';
preg_match_all($IranToplamOlum,$content,$IranOlum);

$IranToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($IranToplamIyılesme,$content,$IranIyılesme);

// //Fransa İstatistikleri
$FransaToplamVaka = '@<div class="korona-div-table-cell korona-statistic-value">(.*?)</div>@';
preg_match_all($FransaToplamVaka,$content,$FransaVaka);

$FransaToplamOlum = '@<div class="korona-div-table-cell korona-statistic-deaths">(.*?)</div>@';
preg_match_all($FransaToplamOlum,$content,$FransaOlum);

$FransaToplamIyılesme = '@<div class="korona-div-table-cell korona-statistic-recovered">(.*?)</div>@';
preg_match_all($FransaToplamIyılesme,$content,$FransaIyılesme);

// echo "<pre>";
// print_r($CinOlum);
 ?>