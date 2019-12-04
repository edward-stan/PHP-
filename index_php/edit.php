<?php
	include_once("config.php");

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$content = $_POST['content'];
		$sql = "UPDATE guestbook SET comment='".$content."' WHERE id=".$id;
		$query = mysqli_query($db,$sql);
		if(!$query){
			exit('<script>alert("SQL语句错误");location.href="guestbook.php"</script>');
			mysqli_error($db);
		}else{
			exit('<script>alert("更改成功");location.href="guestbook.php"</script>');
		}
	}
?>