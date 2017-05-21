<?php 
$id=$_GET["id"];
$title=$_GET["title"];
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<?php if($id==""):?>
		<p>画像がありません</p>
	<?php else:?>
		<h1>URLに注目!</h1>
		<img src='../20170508/<?php echo $id;?>.png'>
		<h2><?php echo $title;?></h2>
	<?php endif;?>
</body>
</html>
