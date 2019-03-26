<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>POSTのサンプル</title>
　	</head>
　	<body>
		<h1>掲示板</h1>
		<section>
			<h2>新規投稿</h2>
		<?php
		  //nameがPOSTされているなら
		  if (isset($_POST["name"])){
		  	//エスケープしてから表示
		  	$name = htmlspecialchars($_POST["name"]);
			print("あなたの名前は「${name}」です。");
		  } 
		  //commentがPOSTされているなら
		  if (isset($_POST["comment"])) {
		  	//エスケープしてから表示
		  	$comment = htmlspecialchars($_POST["comment"]);
		  	print("あなたのコメントは「${comment}」です。");
		  } else {
		 ?>
		 	<p>コメントしてください</p>
		 	<form method="POST" action="index.php">
		 		name<input name="name" type="text" value="" /><br>
		 		comment<input name="comment" type="text" value="" /><br>
		 		<input type="submit" value="送信" />
		 	</form>
		 <?php
		   }
		 ?>
		</section>
	</body>
</html>