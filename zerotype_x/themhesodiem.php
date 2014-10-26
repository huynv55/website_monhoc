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

	$thanhphan=$_POST['thanhphan'];
	$heso=$_POST['heso'];
	$Malop=$_GET[ip_mh];

	$a=mysql_query("INSERT INTO `hesodiem`(`MaLop`,`heso`, `thanhphan`) 
							VALUES('".$Malop."','".$heso."', '".$thanhphan."')");
	if($a){
			echo "<h1>thành công</h1>";
			
		}
		else {
			echo "<h1>ko thành công</h1>";

		}
		echo "<a href='hesodiem.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a>";
?>
</body> 