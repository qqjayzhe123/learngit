<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include "shujuku.php";
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		if(!empty($user)&&!empty($pass)){
		$shuju="insert into huadian_qian_user (user,pass)values('$user','$pass')";
		$shuju1=mysql_query($shuju);
		}
		header("location:http://localhost/huadian/qianduan.php");
	?>
</body>
</html>