<?php
	include("config.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php

	$file = $_FILES['headimg'];
	$filename = upfile($file);
		
	move_uploaded_file($file['tmp_name'],'uploads/'.$file['name']);
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_ag = $_POST['password_ag'];
	$nick = $_POST['nickname'];
		
	if(!$username){
		exit('<script>alert("请输入用户名");history.back();</script>');
	}
	if(!$password){
		exit('<script>alert("用户密码不能为空");history.back();</script>');
	}
	if(!$password_ag){
		exit('<script>alert("请再次输入密码");history.back();</script>');
	}
	if($password!=$password_ag){
		exit('<script>alert("两次密码不一致");history.back();</script>');
	}
	if(!$nick){
		exit('<script>alert("用户昵称不能为空");history.back();</script>');
	}
	
	$sql = "select* from userlist where username = '".$username."'";
	$query = mysqli_query($db,$sql);
	if(!$query){
		exit('SQL语句错误');
		mysqli_error($db);
	}
	$user = mysqli_fetch_array($query);
	if($user){
		exit('<script>alert("用户名已被注册");history.back();</script>');
	}
	
	$sql = "insert into userlist(username,password,nickname,headimg,regtime,regip) values('".$username."','".md5($password)."','".$nick."','".$filename."',".time().",'".$_SERVER['REMOTE_ADDR']."')";
	$query = mysqli_query($db,$sql);
	
	if(!$query){
		exit('SQL语句错误');
		mysqli_error($db);
	}
	exit('<script>alert("注册成功！");window.location.href="index.php";</script>');
	
	?>
</body>
</html>