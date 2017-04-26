<?php
	setcookie ("user",$_POST['user'],time()-3600);
    setcookie ("pass",$_POST['pass'],time()-3600);
    header("location:http://localhost/huadian/qianduan.php")
?>