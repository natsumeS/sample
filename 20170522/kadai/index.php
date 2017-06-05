<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
	body{
		background:grey;
	}
	.photo{
		float:left;
		margin:10px 50px;
		background:white;
	}
	</style>
</head>
<body>
	<h1>画像一覧</h1>
	<a href="login.php"><button>ログイン</button></a>
	<?php
	$dataurl="data.json";
	$json_contents=file_get_contents($dataurl);
	$json=mb_convert_encoding($json_contents,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$arr=json_decode($json,true);
	foreach($arr as $id=>$photo):?>
	<a href='photo.php?id=<?php echo $id;?>'>
	<div class="photo">
		<img src='<?php echo $photo["src"];?>'>
		<h1><?php echo $photo['title'];?></h1>
	</div>
	<?php endforeach;?>
</body>
</html>