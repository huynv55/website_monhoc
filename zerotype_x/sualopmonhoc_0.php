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
	$Malop=$_POST['Malop'];
	$Ten=$_POST['Ten'];
	$soluongsinhvien=$_POST['soluongsinhvien'];
	$sotinchi=$_POST['sotinchi'];
	$lichday=$_POST['lichday'];
	$begin_date=$_POST['begin_date'];
	$end_date=$_POST['end_date'];
	
	$a=mysql_query("UPDATE  `quanlymonhoc`.`monhoc` SET  `MaLop` =  '".$Malop."',
					`Ten` =  '".$Ten."',
					`soluongsinhvien` =  '".$soluongsinhvien."',
					`sotinchi` = '".$sotinchi."',
					`lichday` = '".$lichday."',
					`begin_date` =  '".$begin_date."',
					`end_date` =  '".$end_date."' WHERE CONVERT(  `monhoc`.`MaLop` USING utf8 ) =  '$_GET[ip_mh]' LIMIT 1");

	if($a){
		echo "<h1> sửa thành công</h1>";
		echo "<h3> <a href='object.php?ip_mh=$Malop' class='btn'> quay lại xem kết quả</a></h3>";
	}
	else{
		echo "<h1> sửa ko thành công do trùng Mã lớp</h1>";
		echo "<h3> <a href='object.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a></h3>";

	}
?>
</body>
</html>