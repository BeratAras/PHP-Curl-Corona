<?php 


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.worldometers.info/coronavirus/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt ($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19"); 
curl_setopt($curl,CURLOPT_REFERER,'https://www.coronatracker.com/'); 
$content = curl_exec($curl);
curl_close($curl);

//Dünya İstatistikleri
$dunyatoplamvaka = '@<div class="maincounter-number">(.*?)</div>@';
preg_match($dunyatoplamvaka,$content,$dunyavaka);
 
$dunyatoplamolum = '@<div class="maincounter-number">(.*?)</div>@';
preg_match_all($dunyatoplamolum,$content,$dunyaolum);

$dunyatoplamiyilesme = '@<div class="maincounter-number" style="color:#8ACA2B ">(.*?)</div>@';
preg_match_all($dunyatoplamiyilesme,$content,$dunyaiyilesme);

//Türkiye İstatistikleri
$TurkiyeToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($TurkiyeToplamVaka,$content,$TurkiyeVaka);

$TurkiyeToplamOlum = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($TurkiyeToplamOlum,$content,$TurkiyeOlum);

$TurkiyeToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($TurkiyeToplamIyılesme,$content,$TurkiyeIyılesme);

//Çin İstatistikleri
$CinToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($CinToplamVaka,$content,$CinVaka);

$CinToplamOlum = '@<td style="font-weight: bold; text-align:right;">(.*?)</td>@';
preg_match_all($CinToplamOlum,$content,$CinOlum);

$CinToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($CinToplamIyılesme,$content,$CinIyılesme);

//İtalya İstatistikleri
$ItalyaToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($ItalyaToplamVaka,$content,$ItalyaVaka);

$ItalyaToplamOlum = '@<td style="font-weight: bold; text-align:right;">(.*?)</td>@';
preg_match_all($ItalyaToplamOlum,$content,$ItalyaOlum);

$ItalyaToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($ItalyaToplamIyılesme,$content,$ItalyaIyılesme);

//ABD İstatistikleri
$ABDToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($ABDToplamVaka,$content,$ABDVaka);

$ABDToplamOlum = '@<td style="font-weight: bold; text-align:right;">(.*?)</td>@';
preg_match_all($ABDToplamOlum,$content,$ABDOlum);

$ABDToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($ABDToplamIyılesme,$content,$ABDIyılesme);

//Iran İstatistikleri
$IranToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($IranToplamVaka,$content,$IranVaka);

$IranToplamOlum = '@<td style="font-weight: bold; text-align:right;">(.*?)</td>@';
preg_match_all($IranToplamOlum,$content,$IranOlum);

$IranToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($IranToplamIyılesme,$content,$IranIyılesme);

//Fransa İstatistikleri
$FransaToplamVaka = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($FransaToplamVaka,$content,$FransaVaka);

$FransaToplamOlum = '@<td style="font-weight: bold; text-align:right;">(.*?)</td>@';
preg_match_all($FransaToplamOlum,$content,$FransaOlum);

$FransaToplamIyılesme = '@<td style="font-weight: bold; text-align:right">(.*?)</td>@';
preg_match_all($FransaToplamIyılesme,$content,$FransaIyılesme);

// echo "<pre>";
// print_r($FransaIyılesme);
 ?>