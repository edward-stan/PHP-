<?php
	require_once("config.php");
	$content = $_POST['content'];
		//时间函数（显示时间）
	if($content == ''){
		echo("<script>alert('内容不能为空！');window.location.href='guestbook.php';</script>");
		exit;
	}
	$sql = "insert into guestbook(uid,comment,addtime,ip) values('".$_SESSION['uid']."','".$content."','".time()."','".$_SERVER['REMOTE_ADDR']."')";
	//"insert into userlist(username,password,nickname,regtime,regip) values('".$username."','".md5($password)."','".$nick."', ".time().",'".$_SERVER['REMOTE_ADDR']."')";
	
	$query = mysqli_query($db,$sql);
	if(!$query){
		echo mysqli_error($db);exit;
		echo("<script>alert('添加失败！');window.location.href='guestbook.php';</script>");
	}else{
		echo("<script>alert('添加成功！');window.location.href='guestbook.php';</script>");
	}
		
 	?>