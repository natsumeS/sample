<?php
require_once "database.php";
$db=new Database();
$sql='SELECT `title`,`img1` FROM `book`  ORDER BY publish_date DESC LIMIT ?,?' ;
$db->setQuery($sql,$_POST['now_post_id'],10);
$html="";
while($post=$db->getPost()){
	$html.='<li class="post"><p>'.$post['title'].'</p>';
	$html.='<img src="'.$post['img1'].'"></li>';
}
echo $html;
?>