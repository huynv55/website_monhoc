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
	$ip_diem=$_GET[ip_diem];
	$Malop=$_GET[ip_mh];
	$Masinhvien=$_GET[ip_sinhvien];
	$hesodiem=$_POST['thanhphan'];
	$diemso=$_POST['diemso'];

	$a=mysql_query("INSERT INTO `diem`(`id_diem`, `MaLop`,`Masinhvien`,`thanhphan`, `diemso`) 
							VALUES('".$ip_diem."', '".$Malop."','".$Masinhvien."','".$hesodiem."','".$diemso."')");
	while(!$a) {
		$ip_diem = $ip_diem + 1;
		$a=mysql_query("INSERT INTO `diem`(`id_diem`, `MaLop`,`Masinhvien`,`hesodiem`, `diemso`) 
							VALUES('".$ip_diem."', '".$Malop."','".$Masinhvien."','".$hesodiem."','".$diemso."')");
	}
		echo "<h2> tạo mới thành công</h2>";
		echo "<h2> <a href='points.php?ip_sinhvien=$_GET[ip_sinhvien]&ip_mh=$_GET[ip_mh]&check=1' class='btn'> quay lại</a></h2>";
?>
</body>
</html>