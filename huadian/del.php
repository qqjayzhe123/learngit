<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include'shujuku.php';
	$id=$_GET["id"];
	$shuju="delete from huadian_user where id=$id";
	$shuju1=mysql_query($shuju);
	header("location:http://localhost/huadian/user.php");
	?>
</body>
</html>