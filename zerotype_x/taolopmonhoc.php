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

	$a=mysql_query("INSERT INTO `monhoc`(`MaLop`,`Ten`,`soluongsinhvien`, `sotinchi`,`lichday`,`begin_date`,`end_date`) 
							VALUES('".$Malop."','".$Ten."','".$soluongsinhvien."','".$sotinchi."','".$lichday."','".$begin_date."','".$end_date."')");
	if($a){
		echo "<h2> tạo mới thành công</h2>";
		echo "<h2> <a href='index.php' class='btn'> quay lại</a></h2>";
	}
	else{
		echo "<h2> tạo mới ko thành công do trùng Mã lớp</h2>";
		echo "<h2> <a href='index.php' class='btn'> quay lại</a></h2>";

	}
?>
</body>
</html>