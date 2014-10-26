<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>quản lý môn học</title>
</head>

<body>
<?php
 ob_start();
	require_once("connect.php");
	$Masinhvien=$_POST['Masinhvien'];
	$Ten=$_POST['Ten'];
	$Lop=$_POST['Lop'];
	$ngaysinh=$_POST['ngaysinh'];
	$sex=$_POST['sex'];
	
	$a=mysql_query("UPDATE  `quanlymonhoc`.`sinhvien` SET  `Masinhvien` =  '".$Masinhvien."',
					`Ten` =  '".$Ten."',
					`Lop` =  '".$Lop."',
					`Ngaysinh` = '".$ngaysinh."',
					`sex` = '".$sex."'
					 WHERE CONVERT(  `sinhvien`.`MaLop` USING utf8 ) =  '$_GET[ip_mh]'
					 AND CONVERT(  `sinhvien`.`Masinhvien` USING utf8 ) =  '$_GET[ip_sinhvien]' LIMIT 1");

	if($a){
		echo "<h1> sửa thành công</h1>";
		echo "<h3> <a href='sinhvien.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại xem kết quả</a></h3>";
	}
	else{
		echo "<h1> sửa ko thành công do trùng Mã lớp</h1>";
		echo "<h3> <a href='sinhvien.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a></h3>";

	}
?>
</body>
</html>