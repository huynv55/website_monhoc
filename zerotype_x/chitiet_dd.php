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
				<li>
					<?php echo "<a href='object.php?ip_mh=$_GET[ip_mh]'>Lớp môn học</a>";?>
				</li>
				<li class="active">
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
		<div class="main">
			<h1> chi tiết điểm danh ngày <?php echo "$_GET[date]"; ?> </h1>
						<table border="1" id="table" >
							<tr>
								<td>  Mã sinh viên</td>
								<td>  Tên </td>
								<td>  đầu giờ</td>
								<td>  giữa giờ</td>
								<td> cuối giờ </td>
							</tr>
						<?php 
						$sql="SELECT `sinhvien`.`Masinhvien`, `sinhvien`.`Ten`, `diemdanh`.`begin_dd`, `diemdanh`.`random_dd`, `diemdanh`.`end_dd` 
							FROM `sinhvien` JOIN `diemdanh` ON `sinhvien`.`Masinhvien` = `diemdanh`.`Masinhvien` WHERE `diemdanh`.`MaLop` = '$_GET[ip_mh]' AND `diemdanh`.`date` = '$_GET[date]' ";
						$query=mysql_query($sql);
						while($row=mysql_fetch_array($query))
						{
							
							echo "<tr>
											<td><b>$row[Masinhvien]</b></td>
							
											<td><b>$row[Ten]</b></td>
									
											<td><b>$row[begin_dd]</b></td>
											
											<td><b>$row[random_dd]</b></td>
											
											<td><b>$row[end_dd]</b></td>
									
											</tr>";
						
					}
					?>
				</table>
		</div>
		<div class="sidebar">

			<?php 
				$now=getdate();
				$date= $now["mday"]."/".$now["mon"]."/".$now["year"];
				echo "<h1> $date </h1>";

			?>
			<ul class="posts">
				<li>
					<h4 class="title">đầu giờ</h4>
					<p>
						điểm danh đầu buổi học tất cả sinh viên có mặt
					</p>
					<span><?php echo "<a href='begin_dd.php?ip_mh=$_GET[ip_mh]' class='more'>bắt đầu</a>"; ?></span>
				</li>
				<li>
					<h4 class="title">ngẫu nhiên</h4>
					<p>
						trong buổi học ngẫu nhiên điểm danh
					</p>
					<span><?php echo "<a href='random_dd.php?ip_mh=$_GET[ip_mh]' class='more'>bắt đầu</a>"; ?></span>
				</li>
				<li>
					<h4 class="title">cuối giờ</h4>
					<p>
						cuối buổi học điểm danh tất cả sinh vien có mặt
					</p>
					<span><?php echo "<a href='end_dd.php?ip_mh=$_GET[ip_mh]' class='more'>bắt đầu</a>"; ?></span>
				</li>
			</ul>
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