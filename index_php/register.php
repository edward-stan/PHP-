<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				background: #F5F5F5FF;
			}
			.box{
				
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
		<div class="box" align="center">
		<form action="reg_dp.php" method="post" enctype="multipart/form-data">
			<table width="500px" border="1">
				<tbody>
					<tr>
						<th colspan="2">用户注册</th>
					</tr>
					<tr>
						<td>用户名</td>
						<td><input class="text" type="text" name="username" placeholder="请填写用户名"></td>
					</tr>
					<tr>
						<td>用户密码</td>
						<td><input class="text" type="password" name="password" placeholder="请填写密码"></td>
					</tr>
					<tr>
						<td>重复密码</td>
						<td><input class="text" type="password" name="password_ag" placeholder="请再次填写密码"></td>
					</tr>
					<tr>
						<td>用户昵称</td>
						<td><input class="text" type="text" name="nickname" placeholder="请填写昵称"></td>
					</tr>
					<tr>
						<td>用户头像</td>
						<td><input class="text" type="file" name="headimg"></td>
					</tr>
				</tbody>
			</table>
			
			<input type="submit" value="注册"/>
			</form>
		</div>
</body>
</html>