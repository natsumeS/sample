<?php

class Database{
	//データベース
	public $pdo;
	//クエリに対する結果を一時的に格納
	public $posts;
	
	//データベースにアクセス
	public function __construct(){
		$this->pdo = new PDO('mysql:host=?????;dbname=?????;charset=utf8','??????','???????',array(PDO::ATTR_EMULATE_PREPARES => false));
	}
	//クエリを実行
	public function QueryProcess($sql,$args){
		array_shift($args);
		$this->posts=$this->pdo->prepare($sql);
		$counter=1;
		foreach($args as $key){
			$this->posts->bindValue($counter,$key,PDO::PARAM_STR);
			$counter++;
		}
		$this->posts->execute();
	}
	/*  ここから  */
	public function setQuery($sql){
		$args=func_get_args();
		$this->QueryProcess($sql,$args);
	}
	public function getPost(){
		return $this->posts->fetch(PDO::FETCH_ASSOC);
	}
	public function insertData($sql){
		$args=func_get_args();
		$this->QueryProcess($sql,$args);
		$id=$this->pdo->lastInsertId('id');
		// $this->pdo->commit();
		return $id;
	}
	public function countQuery($sql){
		$args=func_get_args();
		$this->QueryProcess($sql,$args);
		$count=$this->posts->fetchColumn();
		return $count;
	}
}

?>