<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý môn học</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<?php
//session_start();
    ob_start();
	require_once("connect.php");
	$a=mysql_query("DELETE FROM `sinhvien` WHERE CONVERT(`sinhvien`.`MaLop` USING utf8) = '$_GET[ip_mh]' AND CONVERT(`sinhvien`.`Masinhvien` USING utf8) = '$_GET[ip_sinhvien]' LIMIT 1");
	if($a){
		echo "<h1> xóa thành công</h1>";
		echo "<h3> <a href='sinhvien.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a></h3>";
	}
	else{
		echo "<h1> xóa ko thành công</h1>";
		echo "<h3> <a href='sinhvien.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a></h3>";

	} 

?>
</body>
</html>