<?php  
     		$str=null; 
     		$name=$_COOKIE["user"];


     		if($name!=null){
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
