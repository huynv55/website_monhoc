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
			<h1>Điểm danh</h1>
			<ul class="news">
				<li>
					
						<?php 
						
						$sql1="SELECT DISTINCT  date FROM  diemdanh WHERE MaLop = '$_GET[ip_mh]' ORDER BY  date DESC LIMIT 3";
						$sql3 = "SELECT * FROM sinhvien WHERE MaLop='$_GET[ip_mh]'";
						$query1=mysql_query($sql1);
						
						$query3=mysql_query($sql3);

						$total=mysql_num_rows($query2);
						while($row3=mysql_fetch_array($query3)){
							$sql2 = "SELECT DISTINCT  date FROM  diemdanh WHERE MaLop = '$_GET[ip_mh]' ORDER BY  date DESC";
							$query2=mysql_query($sql2);
							$chuyencan = 0;
							while($row2 = mysql_fetch_array($query2)){
								$querycheck=mysql_query("SELECT * FROM diemdanh WHERE MaLop='$_GET[ip_mh]' AND date = '$row2[date]' AND Masinhvien = '$row3[Masinhvien]'");
								
								while($rowcheck = mysql_fetch_array($querycheck)){
									if($rowcheck[begin_dd] == 1 && $rowcheck[random_dd] == 1 && $rowcheck[end_dd] == 1)
												$chuyencan = $chuyencan + 1;

								}

							}
							
							$a = mysql_query("UPDATE `quanlymonhoc`.`sinhvien` SET `chuyencan` = '".$chuyencan."' WHERE `sinhvien`.`Masinhvien` = '$row3[Masinhvien]' AND `sinhvien`.`MaLop` = '$row3[MaLop]'");
						}
						while($row1=mysql_fetch_array($query1))
						{
							$dihoc=mysql_num_rows(mysql_query("SELECT Masinhvien FROM diemdanh WHERE date = '$row1[date]' AND MaLop = '$_GET[ip_mh]' AND begin_dd = '1'") );
							$nghihoc=mysql_num_rows(mysql_query("SELECT Masinhvien FROM diemdanh WHERE date = '$row1[date]' AND MaLop = '$_GET[ip_mh]' AND begin_dd = '0'") );
							
							echo "<h2> thống kê điểm danh ngày $row1[date]<span>Brian Ferry</span></h2>
						<p>
						số sinh viên đi học: $dihoc <br>
						số sinh viên nghỉ: $nghihoc <br>
					</p>";
					echo "<a href='chitiet_dd.php?ip_mh=$_GET[ip_mh]&date=$row1[date]' class='more'>chi tiết</a>";
						
					}
					?>
				</li>
				
			</ul>
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