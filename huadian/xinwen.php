<!DOCTYPE html>
<?php
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻显示</title>
<link rel="stylesheet" type="text/css" href="qianduan.css" />
</head>
<body>
<div class="shang">
	<div class="shangzhong">
		<div class="shangzhongzuo">
			<a>欢迎来到花店！</a>
		</div>

		<!-- <?php  if($_GET['info']==1) {?>
		<div class="shangzhongyou">
			用户名：<input type="text" name="user">
			密码：<input type="password" name="pass">
			<a href="www.baidu.com">我已经登录</a>
			
		</div>
			
		<?php  }else{ ?>
			<div class="shangzhongyou">
			用户名：<input type="text" name="user">
			密码：<input type="password" name="pass">
			<a href="www.baidu.com">登录</a>
			<a href="zhuce.php">注册</a>
			<a href="zhuce.php">安全退出</a>
		</div>
		
		<?php   }?> -->
		
	<form action="" method="post">
     	<?php
     	include "cookie.php";
     	?>
</form>



	</div>

</div>

<div class="zhongxin">
	<div class="top">
	<a> 花店欢迎您</a>
	</div>
	
	<div class="neirong">
	<div class="xinwen_xinwen">
	<?php

		include "shujuku.php";
		$id=$_GET["id"];
		$shuju="select * from huadian_xinwen where id='$id'";
		$shuju1=mysql_query($shuju);
		$shuju2=mysql_fetch_assoc($shuju1);
		$str="null";
		$str=<<<haha
		<h1>{$shuju2["biaoti"]}</h1>
		<p>{$shuju2["neirong"]}</p>
		<p class="laiyuan">{$shuju2["laiyuan"]}</p>

haha;
echo $str;
	?>
	</div>
</div>	
</div>
	<div class="di">
	
	<a class="banquan">版权归刘诗哲所有</a>
	</div>
<script>
window.onload=function(){
		
		var denglu=document.getElementById('denglu')
		var forms=document.getElementsByTagName('form')[0];
		var zhuce=document.getElementById('zhuce')
		///alert(forms[0])
		var tuichu=document.getElementById('tuichu')
		if(denglu!=null){
		denglu.onclick=function(){
				//alert("欢迎您登录成功");
				forms.setAttribute('action','config.php');
				forms.submit()
				//alert(forms.getAttribute('action'));
	   	}
	   	}
	   	if(denglu!=null){
		zhuce.onclick=function(){
				alert("恭喜您注册成功");
				forms.setAttribute('action','qian_zhuce.php');
				forms.submit();
			}
		}
		if(tuichu!=null){
		tuichu.onclick=function(){
				alert("您已安全退出");
				forms.setAttribute('action','tuichu.php');
				forms.submit();
		}
		}
	
}		
</script>
</body>
</html>