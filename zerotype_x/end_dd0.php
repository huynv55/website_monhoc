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
$date=$_POST['date'];
$check = isset($_POST["check"])?$_POST["check"]:'';
if (!empty($check)){
    echo "Những sinh viên đã điểm danh: <strong>";
    foreach($check as $checkstuff){
    	$a=mysql_query("UPDATE  `quanlymonhoc`.`diemdanh` SET  `end_dd` =  '0' WHERE CONVERT(  `diemdanh`.`MaLop` USING utf8 ) =  '".$_GET[ip_mh]."' AND CONVERT(  `diemdanh`.`Masinhvien` USING utf8 ) =  '".htmlentities($checkstuff)."' AND `diemdanh`.`date` =  '".$date."' LIMIT 1 ;");
       echo '<br />- '.htmlentities($checkstuff);
    }
}
	
	//$sql="select * from  sinhvien where Malop='$_GET[ip_mh]'";
	//$query=mysql_query($sql);
	//while($row=mysql_fetch_array($query)){			
	//if( $_POST['".$row[Masinhvien]."'])
	//$a=mysql_query("INSERT INTO `diemdanh`(`MaLop`,`Masinhvien`,`date`, `begin_dd`) 
	//						VALUES('".$_GET[ip_mh]."','".$row[Masinhvien]."','".$date."','1')");
							
	//else  $a=mysql_query("INSERT INTO `diemdanh`(`MaLop`,`Masinhvien`,`date`, `begin_dd`) 
	//						VALUES('".$_GET[ip_mh]."','".$row[Masinhvien]."','".$date."','0')");
		
	//}
	echo "<h2> <a href='news.php?ip_mh=$_GET[ip_mh]' class='btn'> quay lại</a></h2>";
?>
</body>
</html>