<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	include 'shujuku.php';
	$shuju="select * from huadian_user";
	$shuju1=mysql_query($shuju);
	echo "<table border='1' >";
	while ($shuju2=mysql_fetch_assoc($shuju1)) {
		echo "<tr><td>用户名是：$shuju2[user]</td><td>密码是：$shuju2[pass]</td><td><a href='del.php?id=$shuju2[id]'>删除</a></td><td><a href='xiugai.php?id=$shuju2[id]'>修改</a></td><tr>";
	}
	echo "<table>";
	?>
</body>
</html>