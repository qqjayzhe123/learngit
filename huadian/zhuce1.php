<?php
		include "shujuku.php";
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$zhuce=$_POST["zhuce"];
		if(isset($zhuce)){
		$shuju="INSERT INTO `huadian_qian_user`( `user`, `pass`) VALUES ('$user','$pass')";
		$shuju1=mysql_query($shuju);
		}
	header("location:http://localhost/huadian/zhuce.php");
?>
