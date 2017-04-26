<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		$denglu=$_POST["denglu"];
		$zhuce=$_POST["zhuce"];
		if($denglu=="登录"){
			header("location:http://localhost/huadian/config.php");
		}
		if($zhuce=="注册"){
			header("location:http://localhost/huadian/qian_zhuce.php");
		}
	?>
</body>
</html>