<!DOCTYPE html>
<?php
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>花店</title>
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
     		$str=null; 
     		$name=$_COOKIE["user"];
     		$zhuangtai=$_POST["zhuangtai"];
     		echo $zhuangtai;
     		if($_POST['zhuangtai']==1){
     			$str=<<<MING
				<div class="shangzhongyou">
					<a >欢迎{$name}已经登录</a>
					<input type="button" name="tuichu" value="安全退出" id='tuichu' >
				</div>
MING;


     		}else{
				$str=<<<Ming
			
			<div class="shangzhongyou">
				用户名：<input type="text" name="user">
				密码：<input type="password" name="pass">
				<input type="button" name="denglu" value="登录"  id='denglu'  >
				<input type="button" name="zhuce" value="注册" id='zhuce'>
				
			</div>
Ming;
     		}
        echo $str;
     	?>

</form>



	</div>

</div>

<div class="zhongxin">
	<div class="top">
	<a> 花店欢迎您</a>
	</div>
	
	<div class="xinwen">
	<?php
	 include 'shujuku.php';
	 $shuju="select * from huadian_xinwen";
	 $shuju1=mysql_query($shuju);
	 echo "	<div class='xinwenxianshi'><a>新闻列表</a><ul>";
	 while($shuju2=mysql_fetch_assoc($shuju1)){
	 	$id=$shuju2["id"];
		echo "<li><a href='xinwen.php?id=$id'>{$shuju2['biaoti']}</a></li></li>";
		}
		echo "</ul></div>";
	?>
	</div>
	
	<div class="neirong">
	<div class="neironga">
	<a>产品展示</a>
	</div>
		<?php
		include 'shujuku.php';
		$shuju='select * from huadian_xianhua';
		$shuju1=mysql_query($shuju);
		;
		while ($shuju2=mysql_fetch_assoc($shuju1)) {
			$imageurl=$shuju2['image'];
			$huaming=$shuju2['name'];
		echo"<div class=chanpin>";
		echo " <img src='$imageurl' />&nbsp&nbsp";
		echo "<a $huaming>$huaming</a>";
		echo"</div>";
		}
	 	?>
	</div>
</div>
	<div class="di">
	<!-- <input type="button" name="zhuce" value="注册" onclick="zhuce()"> -->
	
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