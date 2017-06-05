<?php
$name=$_POST["name"];
$password=$_POST["pwd"];
$dataurl="user.json";
$json_contents=file_get_contents($dataurl);
$json=mb_convert_encoding($json_contents,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr=json_decode($json,true);
$data=$arr[$name];
if(!$data["password"]){
	header("Location:login.php");
	exit;
}elseif($data["password"]!=$password){
	header("Location:login.php");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
	</style>
</head>
<body>
	<img src='<?php echo $data["photo"];?>'>
	<h1><?php echo $name;?></h1>
	<p>profile:<?php echo $data["profile"];?></p>
	<h3>投稿動画</h3>
	<?php 
	$dataurl2="data.json";
	$json_contents2=file_get_contents($dataurl2);
	$json2=mb_convert_encoding($json_contents2,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$arr2=json_decode($json2,true);
	foreach($data["photo_id"] as $id):?>
	<a href='photo.php?id=<?php echo $id;?>'>
	<div class="photo">
		<img src='<?php echo $arr2[$id]["src"];?>'>
		<h1><?php echo $arr2[$id]['title'];?></h1>
	</div>
	<?php endforeach;?>