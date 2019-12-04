<?php
if(isset($_GET['id'])){
	include_once("config.php");
	$id = $_GET['id'];
	$sql = "delete from guestbook where id = ".$id;
	
	$query = mysqli_query($db,$sql);
	if(!$query){
		exit('SQL语句错误');
		mysqli_error($db);
	}else{
		exit('<script>alert("删除成功");location.href="guestbook.php"</script>');
	}
}else{
	exit('<script>alert("删除失败");location.href="guestbook.php"</script>');
}
?>