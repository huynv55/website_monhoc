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
 	//session_start();
    ob_start();
	require_once("connect.php");
	?>
	
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php">Quản lý</a>
			</div>
			<ul id="navigation">
				<li >
					<a href="index.php">Trang chủ</a>
				</li>
				<li class="active">
					<?php echo "<a href='object.php?ip_mh=$_GET[ip_mh]'>Lớp môn học</a>";?>
				</li>
				<li>
					<?php echo "<a href='news.php?ip_mh=$_GET[ip_mh]'>Điểm danh</a>";?>
				</li>
				<li>
					<?php echo "<a href='points.php?ip_mh=$_GET[ip_mh]'>Quản lý điểm</a>";?>
				</li>
				<li>
					<?php echo "<a href='contact.php?ip_mh=$_GET[ip_mh]'> Thống kê</a>";?>
				</li>
			</ul>
		</div>
	</div>


	<div id="contents">
		<div class="features">
			<h1>Thông tin lớp môn học : <?php echo "$_GET[ip_mh]"; ?></h1>
			<p>
				bạn có thể cập nhật thông tin của lớp môn học này
			</p>
			
			<div>
            <?php 
				echo "<a href='sualopmonhoc.php?ip_mh=$_GET[ip_mh]' class='more'> UPDATE</a>";
				echo "&nbsp;&nbsp;";
				echo "<a href='xoalopmonhoc.php?ip_mh=$_GET[ip_mh]' class='more'> DELETE</a>";
				echo "<br> <br>";

				$sql_sv = "select * from sinhvien where MaLop='$_GET[ip_mh]'";
				$query_sv = mysql_query($sql_sv);
				$slsv = mysql_num_rows($query_sv);
				$a = mysql_query("UPDATE `quanlymonhoc`.`monhoc` SET `slsvthamgia` = '$slsv' WHERE `monhoc`.`MaLop` = '$_GET[ip_mh]'");
			?>

				<table border="1" id="table">
					<?php
					
						$sql="select * from  monhoc where Malop='$_GET[ip_mh]'";
						$query=mysql_query($sql);
						
							 while($row=mysql_fetch_array($query))
								{
									echo "<tr>
											<td>Tên lớp môn học</td>
											<td><b>$row[Ten]</b></td>
											</tr>

											<tr>
											<td>số tín chỉ</td>
											<td><b>$row[sotinchi]</b></td>
											</tr>

											<tr>
											<td>số lượng sin viên max</td>
											<td><b>$row[soluongsinhvien]</b></td>
											</tr>

											<tr>
											<td>số lượng sinh viên đang tham gia</td>
											<td><b>$row[slsvthamgia]</b></td>
											</tr>

											<tr>
											<td>lịch giảng dạy</td>
											<td><b>$row[lichday]</b></td>
											</tr>

											<tr>
											<td>thời gian</td>
											<td><b>$row[begin_date] &rarr; $row[end_date] </b></td>
											</tr>";
								}
					?>

				</table>
                <?php 
				echo "<br>";
				echo "<h2><a href='sinhvien.php?ip_mh=$_GET[ip_mh]' class='more'>sinh viên</a></h2>";
				
				?>
			</div>
			<div>
				
				
				
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>