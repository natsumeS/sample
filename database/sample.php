<?php
//データベースをphpから操作できるようにするためdatabase.phpを導入します。
//下の文章を書くことで、database.phpを利用できるようになります。
require_once "database.php";

/*
database.phpを利用できるようにするため、database.phpにある???の部分を
自分のデータベースの情報に書き換えましょう
データベースの情報はロリポップのwebサービス->データベースのところにあります、

最初の??? -> データベースのホスト名
2つ目の??? -> データベース名
3つ目の??? -> ユーザー名
4つ目の??? -> データベースのパスワード


*/

//データベース接続の初期化。最初に一回書けばよい
$db=new Database();

//データベースのテーブル「user」から、全てのユーザーのidとnameとemailを取得する。
//SQL文
$sql="SELECT `id`,`name`,`email` FROM `user`";
//SQL文を実行
$db->setQuery($sql);
//データを取り出す。
//データは連想配列として、一行ずつ吐き出されます。
//下の例では、データテーブル[user]に格納されている最初のユーザーの情報が変数dataに入ります。
$data=$db->getPost();
echo $data['id'];
echo $data['name'];
//次のユーザーを取得する場合は、続けて下のようにする
$data=$db->getPost();
echo $data['id'];
echo $data['name'];
//これを、条件を満たすデータの数だけ繰り返すか、while文を用いてまとめて処理することもできる。
while($data=$db->getPost()){
	echo $data['id'];
}

//データを追加する場合も上のsetQueryを用いてSQL文を実行できますが、データを追加した場所(id)を取得したい場合は、下のようにしましょう
//下の例は、userテーブルにユーザーを追加するとともにname、emailの値を設定します。
$name="abc";
$email="abc@gmail.com";
$sql="INSERT INTO `user` (`name`,`email`) VALUES (?,?)";
$id=$db->insertData($sql,$name,$email);
//idを取得しなくてもいいのであれば次のようにしてもよい。
$name="abc";
$email="abc@gmail.com";
$sql="INSERT INTO `user` (`name`,`email`) VALUES (?,?)";
$id=$db->setQuery($sql,$name,$email);

//データを更新する
//データテーブル「user」にあるid=3のデータのnameを変更する
$name="qwe";
$id=3;
$sql="UPDATE `user` SET `name`=? WHERE `id`=?";
$db->setQuery($sql,$name,$id);


/*
まとめ

1.require_onceを用いてdatabase.phpを読み込む。

2.データベース接続を初期化を
$db=new Database();
でおこなう

3.SQL文をsetQueryで実行

・よく使うsql文
SELECT 条件を満たすデータを取り出す
INSERT　INTO　データを追加する
UPDATE　データを書き換える

・条件を絞るsql
FROM　　テーブルを指定
WHERE　　取り出すデータの条件を指定
ORDER BY　　データを並び替える
LIMIT　　何番目のデータからいくつ取り出すか指定
INNER JOIN　　テーブルの結合
など

詳細については各自調べてください



*/


?>