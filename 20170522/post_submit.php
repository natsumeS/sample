<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<h1>POST通信</h1>
<p>ユーザー名とパスワードを入力してください。</p>
<?php
$error=$_GET['error'];
if($error==1):?>
	<p>ユーザー名が無効です</p>
<?php elseif($error==2):?>
	<p>パスワードが間違っています</p>
<?php endif;?>

<form method="POST" action="mypage.php">
	<p>user name</p>
	<input type="text" name="username"/>
	<p>password</p>
	<input type="password" name="password"/>
	<input type="submit"/>
</form>

</body>
</html>