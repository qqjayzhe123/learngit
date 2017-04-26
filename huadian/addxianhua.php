<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	名字：<input type="text" name="name" value=""><br><br>
	类别：<select name="leibie">
			<option value="meiguihua">玫瑰花</option>
			<option value="yuejihua">月季花</option>
			<option value="baihe">百合花</option>
		  </select><br><br>
	价格：<input type="text" name="pic" value="">元<br><br>
	库存：<input type="text" name="kucun" value=""><br><br>
	介绍：<textarea name="jieshao" value=""></textarea><br><br>
		<label for="file"></label>
		<label for="submit"></label>
		<input type="file" name="file" value="file"><br><br>
		<input type="submit" name="tijiao" value="提交">
	
	</form>
<?php
	include 'shujuku.php';
	$name=$_POST['name'];
	$leibie=$_POST["leibie"];
	$jieshao=$_POST["jieshao"];
	$tijiao=$_POST["tijiao"];
	$pic=$_POST["pic"];
	$kucun=$_POST["kucun"];
	if (file_exists("image/".$_FILES["file"]["name"])&&!empty($_FILES["file"]["name"])) {
		echo "图片已存在";
	}

	else{
		move_uploaded_file($_FILES["file"]["tmp_name"], "image/".$_FILES["file"]["name"]);
		$imageurl='image/'.$_FILES['file']['name'];
			if ($tijiao=="提交") {
				$shuju="INSERT INTO huadian_xianhua( name, leibie, jieshao ,image,pic,kucun) VALUES ('$name','$leibie','$jieshao','$imageurl','$pic','$kucun')";
				$shuju1=mysql_query($shuju);
				echo "提交成功";
			}
		}
	
?>
</body>
</html>