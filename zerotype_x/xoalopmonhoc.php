<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>quản lý môn học</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
 	//session_start();
    ob_start();
	require_once("connect.php");
?>

<?php

	$a=mysql_query("DELETE FROM `monhoc` WHERE CONVERT(`monhoc`.`MaLop` USING utf8) = '$_GET[ip_mh]' LIMIT 1");
	if($a){
		echo "<h1> xóa thành công</h1>";
		echo "<h3> <a href='index.php' class='btn'> quay lại</a></h3>";
	}
	else{
		echo "<h1> xóa ko thành công</h1>";
		echo "<h3> <a href='index.php' class='btn'> quay lại</a></h3>";

	}
?>
</body>
</html>