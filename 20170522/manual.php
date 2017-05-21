<ul>
<li>phpの場合分け例</li>

	<?php

	$x=5;
	$string;
	if($x>0){
		$string='x is positive number';
	}else if($x<0){
		$string='x is negative number';
	}else{
		$string='x is zero';
	}
	?>
	<p>出力-><?php echo $string; ?></p>

<li>htmlのなかにphpを埋め込む</li>

	<?php if($x==0):?>
	<p>変数xが0のときのみ表示されます</p>
	<?php elseif($x!=0):?>
	<p>変数xが0でないときに表示されます</p>
	<?php endif;?>

<li>配列</li>

	<?php
	$list=array(1,"abc","taro");
	?>
	<p><?php echo $list[0];?></p>
	<p><?php echo $list[1];?></p>
	<p><?php echo $list[2];?></p>
<li>連想配列の利用例</li>

<?php
$y=array("name"=>"Taro",
	"id"=>321,
	"email"=>"taro@g.com",
	"image"=>"../20170508/1.png");
	?>
	<p>username:<?php echo $y["name"];?></p>
	<p>id:<?php echo $y["id"];?></p>
	<img src='<?php echo $y["image"];?>'>

<li>(応用)多次元連想配列</li>

	<?php 
	$data=array("user1"=>array("name"=>"Taro","image"=>"../20170508/1.png"),
		"user2"=>array("name"=>"Jiro","image"=>"../20170508/2.png"));
	?>
	<p><?php echo $data["user2"]["name"];?></p>

<li>foreach文</li>

	<?php foreach($data as $user):?>
	<p>name:<?php echo $user["name"];?></p>
	<img src='<?php echo $user["image"];?>'>
	<p>----------------------</p>
	<?php endforeach;?>

<p>キーも取得する</p>

	<?php foreach($y as $key=>$value):?>
	<p><?php echo $key;?>:<?php echo $value;?></p>
	<?php endforeach;?>

</ul>

