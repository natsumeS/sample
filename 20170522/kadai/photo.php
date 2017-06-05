<?php
$id=$_GET["id"];
if($id==""){
	header("Location:index.php");
	exit;
}
$dataurl="data.json";
$json_contents=file_get_contents($dataurl);
$json=mb_convert_encoding($json_contents,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr=json_decode($json,true);
$data=$arr[$id];
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<img src='<?php echo $data["src"];?>'>
	<h1><?php echo $data["title"];?></h1>
	<div id="auth">
		<p>投稿者:<?php echo $data["auth"];?></p>
	</div>
</body>
</html>