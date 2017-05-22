* manual.php  
phpでの変数宣言、if文、連想配列、foreach文について  
[sample page](http://natsume.php.xdomain.jp/sample/20170522/manual.php)
* get_submit.php  
GET通信のサンプル  
[sample page](http://natsume.php.xdomain.jp/sample/20170522/get_submit.php)  
* post_submit.php
POST通信のサンプル  
[sample page](http://natsume.php.xdomain.jp/sample/20170522/post_submit.php)  
※ 今回は簡単のためパスワードをそのまま格納していますが、実際にはパスワードをハッシュ化して保存します。
* json.php  
JSONファイルの読み込み
[sample page](http://natsume.php.xdomain.jp/sample/20170522/json.php)  
※jsonファイルを連想配列にして扱います。
  
<課題>  
[sample](http://natsume.php.xdomain.jp/sample/20170522/kadai/)  
youtubeの画像版っぽいのを作りましょう。  
ページの構成について
*　ホーム  
全ての投稿（画像とタイトル）とログインボタンが表示  
*　画像の個別ページ  
投稿された画像をクリックするとこのページに飛ぶ。画像とタイトル、投稿者の情報を表示する。
* ログイン画面  
ユーザー名とパスワードを入力させるページ  
* ユーザーページ
ログイン成功したときに、ログインユーザーの名前とプロフィール紹介文、ユーザー画像と、ユーザーの全ての投稿画像を表示する。  
  
投稿とユーザーの情報  
* data.json  
投稿画像の情報を格納している。  
jsonファイルを開いて中身を確認しましょう
* user.json  
ユーザー情報を格納している。
[jsonファイルのダウンロード](http://natsume.php.xdomain.jp/sample/20170522/kadai/download.php)
