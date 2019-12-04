<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				background: #F5F5F5FF;
			}
			.img{
				width: 100%;
				height: 100px;
				background: #38D3E0;
			}
			.box{
				margin: auto;
				margin-top: 200px;
				
			}
			.box td{
				width: 250px;
				text-align: right;
			}
			.text{
				width: 250px;
			}
		</style>
	</head>
	<body>
	<img src="background/login_bg.jpg" width="100%" height="100%" style="z-index: -100;position: absolute;left: 0;top: 0">
	<form action="login_do.php" method="post">
		<div class="box" align="center">
			<table width="500px" border="1">
				<tbody>
					<tr>
						<th colspan="2">用户登录</th>
					</tr>
					<tr>
						<td>用户名</td>
						<td><input class="text" name="username" placeholder="请填写用户名"></td>
					</tr>
					<tr>
						<td>用户密码</td>
						<td><input class="text" type="password" name="password" placeholder="请填写密码"></td>
					</tr>
				</tbody>
				
			</table>
			<input type="submit" value="登陆"/>
		</form>
			<span>没有用户？点击<a href="register.php">注册</a></span>
		</div>
	</body>

</html>