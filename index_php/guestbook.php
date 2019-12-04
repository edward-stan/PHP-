<?php
	require_once("config.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<div>
	欢迎您：
		<img width="50px" src="<?php echo($_SESSION['headimg'])?>"/>
	<?php
		echo($_SESSION['nickname']);
	?>
</div>

<div>
	<div class="title">
		<p>PHP留言板</p>
	</div>
<div>
		<p>留言记录</p>
		<?php
			$sql = "SELECT guestbook.uid,guestbook.id, userlist.nickname,userlist.headimg,guestbook.`comment`,guestbook.addtime FROM userlist INNER JOIN
guestbook ON userlist.uid=guestbook.uid ORDER BY guestbook.addtime ASC";
			$query = mysqli_query($db,$sql);
			while($row = mysqli_fetch_array($query)){
				?>
			<img width="50px" src="<?php echo($row['headimg'])?>"/>
			<?php echo($row['nickname']."&nbsp:&nbsp&nbsp&nbsp");
			echo($row['comment']);
			echo("<br>".date('Y.m.d H:i:s',$row['addtime']));
		?>
		<?php
			if($_SESSION['uid'] ==$row['uid']){
		?>
			<a href="del.php?id=<?php echo($row['id']);?>">删除</a>
	<form action="edit.php" method="post">
				<input type="hidden" name="id" value="<?php echo($row['id']);?>">
		<input type="text" name="content">
		<input type="submit" value="提交">
	</form>
		<?php
				echo("<hr>");
			}else{
				echo("<hr>");
			}
			}
		?>	
		
	</div>
	<hr color="#22C8B6" size="2px">
	<div>
		<form action="insert.php" method="post">
			<div>
				<span>留言主题:</span><br/>
				<textarea class="tit" rows="10" name="content"></textarea>
			</div>
				<input type="submit" value="发表">
		</form>
	</div>	
</div>
<p><a href="logout.php">退出登陆</a></p>
</body>
</html>