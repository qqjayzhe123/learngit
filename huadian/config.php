<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action='qianduan.php' method='post' name="zhuangtai">


<?php
	include "shujuku.php";
	setcookie ("user",$_POST['user'],time()+3600);
    setcookie ("pass",$_POST['pass'],time()+3600);

	$user=$_POST["user"];
	$pass=$_POST["pass"];
	echo $user;
	$shuju="select id from huadian_qian_user where user='$user' and pass='$pass'";
	$shuju1=mysql_query($shuju);
	$shuju2=mysql_num_rows($shuju1);
		
	if(!empty($shuju2)){
		echo "欢迎登录";
		$zhuangtai=$_POST["zhuangtai"];
		echo "<input type='text' name='zhuangtai' value='1'>";
	
		/*header("location:http://localhost/huadian/qianduan.php");*/
	}
	else{
		echo "账号密码不正确";
	}
?>
</form>
<script>
function sub(){
document.zhuangtai.submit();
}
setTimeout(sub,100);//以毫秒为单位的.1000代表一秒钟.根据你需要修改这个时间.
//-->
</script>
</body>
</html>
