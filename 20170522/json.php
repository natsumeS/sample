<?php

// jsonファイルの読み込み
$url="data.json";
$json_contents=file_get_contents($url);
$json=mb_convert_encoding($json_contents,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

// json文字列を連想配列に
$arr=json_decode($json,true);
//表示
var_dump($arr);
?>
