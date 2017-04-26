<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form>
	<input type="text" name="xiugaimima" value="">
	<input type="submit" name="tijiao" value="确认修改密码">
	<input type="hidden" name="abc" value="<?php echo $_GET['id'] ?>;">
	<?php
	include 'shujuku.php';
	$abc=$_GET["abc"];
	$xiugaimima=$_GET["xiugaimima"];
	$tijiao=$_GET["tijiao"];
	if ($tijiao=="确认修改密码") {
	$shuju="update huadian_user set pass='$xiugaimima' where id='$abc'";
	echo $shuju;
	$shuju1=mysql_query($shuju);
	header("location:http://localhost/huadian/user.php");
	}
	?>
</form>
</body>
</html>