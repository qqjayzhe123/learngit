<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>库存显示</title>
</head>
<body>
	<?php
	include 'shujuku.php';
	$shuju="select * from huadian_xianhua ";
	$shuju1=mysql_query($shuju);
	echo "<table border='1'>";
	while ($shuju2=mysql_fetch_assoc($shuju1)) {
		echo '<tr><td>商品：'.$shuju2['name'].'</td><td>库存数量：'.$shuju2['kucun'].'</td>';

	}
	echo "</table>";
	?>
</body>
</html>