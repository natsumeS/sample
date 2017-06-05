1. データベースを扱うDatabaseクラスについて  
database_process.phpを導入することでDatabaseクラスが利用できるようになります。  
* function __construct()  
データベースに関連するクラスPDOを作成。  
例)  
$db=new Database();  
* function setQuery($sql,$args)  
SQL文を実行します。SELETやUPDATEなど  
$sql:SQL文  
$args:SQL文内に変数を含める場合、ここに変数を入れる  
例)  
$id=3;  
$pas="abc";  
$sql="SELECT `name` FROM `user` where `id`=? AND `pas`=?";  
$db->setQuery($sql,$id,$pas);  
* function getPost()  
setQueryメソッドで実行したsql文の結果を一つ出力  
例)  
while($post=$db->getPost()){  
echo $post['name'];  
}  
* function insertData($sql,$args)  
データを挿入し、そのときのidを返す。INSERT_INTOなど  
* function countQuery($sql,$args)  
条件を満たすデータ数を取得し、その数を返す。SELECT (*)など 
