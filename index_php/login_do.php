<?php
	require_once("config.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if(!$username){
		exit('<script>alert("请输入用户名");history.back();</script>');
	}
	if(!$password){
		exit('<script>alert("用户密码不能为空");history.back();</script>');
	}
	
	$sql="select*from userlist where username = '".$username."'";
	$query = mysqli_query($db,$sql);
	if(!$query){
		exit('SQL语句错误');
		mysqli_error($db);
	}
	if($user = mysqli_fetch_array($query)){
		if($user['password'] == md5($password)){
			$_SESSION['uid'] = $user['uid'];
			$_SESSION['nickname'] = $user['nickname'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['headimg'] = $user['headimg'];
			exit('<script>alert("登陆成功");location.href="guestbook.php"</script>');
		}else{
			exit('<script>alert("用户密码错误");history.back();</script>');
		}
	}else{
		exit('<script>alert("用户名不存在");history.back();</script>');
	}
	?>
	
</body>
</html>