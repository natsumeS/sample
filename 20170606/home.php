<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
<body>
	<p>掲示板</p>
	<ul id="content">
		<?php
		require_once "database.php";
		$db=new Database();
		// $sql='INSERT INTO `sample_comment` (`name`,`comment`) VALUES (?,?)';
		// $db->insertData($sql,"bbc","abcdeggarharh;ajrn;");
		$sql='SELECT `title`,`img1` FROM `book`  ORDER BY publish_date DESC LIMIT ?,?' ;
		$db->setQuery($sql,0,10);
		while($post=$db->getPost()):?>
		<li class="post">
			<p><?php echo $post['title'];?></p>
			<img src="<?php echo $post['img1'];?>">
		</li><?php endwhile;?>
	</ul>
	<button id="ajaxloading">more</button>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script type="text/javascript">
	jQuery(function($){
		now_content_id=10;
		$('#ajaxloading').on('click',function(){
			$.ajax({
				type:'post',
				url:'ajaxloading.php',
				data:{
					'now_post_id':now_content_id
				},
				success:function(html){
					$('#content').append(html);
					now_content_id+=10;
				}

			});
		});
	});
	</script>
</body>
</html>