<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>quản lý môn học</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
ob_start();
	require_once("connect.php");
	$a=mysql_query("DELETE FROM `hesodiem` WHERE CONVERT(`hesodiem`.`MaLop` USING utf8) = '$_GET[ip_mh]'");
	if($a){
			echo "<h1>thành công</h1>";
			
		}
		else {
			echo "<h1>ko thành công</h1>";

		}
		echo "<a href='points.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a>";
?>
</body>