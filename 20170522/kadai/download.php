<?php
// ダウンロードさせるファイル名
$tmp_file = "kadai20170522.zip";
$j_file   = "kadai20170522.zip";
$j_file   = mb_convert_encoding($j_file, "SJIS", "EUC");
// ヘッダ
header("Content-Type: application/octet-stream");
// ダイアログボックスに表示するファイル名
header("Content-Disposition: attachment; filename=$j_file");
// 対象ファイルを出力する。
readfile($tmp_file);
exit;
?>