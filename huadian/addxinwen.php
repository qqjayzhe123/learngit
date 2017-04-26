<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加新闻</title>
</head>
<body>
<form action="" method="post">
<a>标题:</a>&nbsp<input type="text" name="biaoti" value=""><br><br>
<a>来源:</a>&nbsp<input type="text" name="laiyuan" value=""><br><br>
<a>内容:</a>&nbsp<textarea  name="neirong"  value="";></textarea><br><br>

<input type="submit" name="tijiao" value="提交">
</form>
<?php 
	$biaoti=$_POST['biaoti'];
	$laiyuan=$_POST["laiyuan"];
	$neirong=$_POST["neirong"];
	if(empty($biaoti)||empty($laiyuan)||empty($neirong)) {
		echo "温馨提示：请填写完整内容";
	}
	else{
	include 'shujuku.php';
	$shuju="insert into huadian_xinwen(biaoti,laiyuan,neirong) values ('$biaoti','$laiyuan','$neirong')";
	$shuju1=mysql_query($shuju);
	}
?>
	
</body>
</html>