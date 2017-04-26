<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$con=mysql_connect("localhost","root","root");
	mysql_select_db("huadian");
	if (!$con) {
		die("链接数据库失败".mysql_error());
	}
	?>
</body>
</html>