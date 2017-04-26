<!DOCTYPE html>
<?php session_start();?>
<?php setcookie("user","Alex Porter",time()+60);?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>花店后台登录</title>
</head>
<body>
	<form action="" method="post">
	<input type="text" name="user" value="">
	<input type="text" name="pass" value="">
	<input type="submit" name="denglu" value="登录">
	</form>
	<?php
		include 'shujuku.php';
		$user=$_POST['user'];
		$pass=$_POST["pass"];
		if ($user=="admin"&&$pass=="admin") {
			header("location:http://localhost/huadian/index.php");
		}
	?>

</body>
</html>
</body>
</html>