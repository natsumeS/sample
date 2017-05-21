<?php
$name=$_POST["username"];
$password=$_POST["password"];
if($name==""){
	header("Location:post_submit.php");
	exit;
}
$userData=array(
	"taro"=>"abc","jiro"=>"def");
if(!$userData[$name]){
	echo '...username "'.$name.'" is not exist';
	header("Refresh:1;url=post_submit.php");
	exit;
}
if($userData[$name]!=$password){
	echo '...password is not correct';
	header("Refresh:1;url=post_submit.php");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>URLに注目</h1>
	<p>ログイン成功</p>
	<p><?php echo $name;?>さん、こんにちは</p>

</body>
</html>