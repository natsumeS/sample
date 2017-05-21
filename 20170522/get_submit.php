<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
	.img{
		width:25%;
		float:left;
	}
	</style>
</head>
<body>

<h1>get通信</h1>
<p>ここで画像idを「display.php」におくり表示します。画像をクリックしてください。</p>
<?php
$imageData=array("1"=>array("title"=>"security","src"=>"../20170508/1.png"),
	"2"=>array("title"=>"relationship","src"=>"../20170508/2.png"),
	"3"=>array("title"=>"device","src"=>"../20170508/3.png"),
	"4"=>array("title"=>"rocket","src"=>"../20170508/4.png"));
	foreach($imageData as $id=>$image):?>
	<a href='display.php?id=<?php echo $id;?>&title=<?php echo $image["title"];?>'>
		<div class="img">
			<img src='<?php echo $image["src"];?>'>
			<h3><?php echo $image["title"];?></h3>
		</div>
	</a>
	<?php endforeach;?>

</body>
</html>

