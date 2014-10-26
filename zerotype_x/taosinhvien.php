<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Quản Lý môn họct</title>
</head>

<body>
<?php 
//session_start();
    ob_start();
	require_once("connect.php");
	
	$Masinhvien=$_POST['Masinhvien'];
	$Ten=$_POST['Ten'];
	$Lop=$_POST['Lop'];
	$ngaysinh=$_POST['ngaysinh'];
	$sex=$_POST['sex'];
	$Malop=$_GET['ip_mh'];

	$a=mysql_query("INSERT INTO `sinhvien`(`MaLop`,`Masinhvien`,`Ten`,`Lop`,`Ngaysinh`, `sex`) 
							VALUES('".$Malop."','".$Masinhvien."','".$Ten."','".$Lop."','".$ngaysinh."','".$sex."')");
	if($a){
		echo "<h2> tạo mới thành công</h2>";
		echo "<h2> <a href='sinhvien.php?ip_mh=$Malop' class='btn'> quay lại</a></h2>";
	}
	else{
		echo "<h2> tạo mới ko thành công do trùng Mã lớp</h2>";
		echo "<h2> <a href='sinhvien.php?ip_mh=$Malop' class='btn'> quay lại</a></h2>";

	}
?>
</body>
</body>
</html>