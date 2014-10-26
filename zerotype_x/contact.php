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
				<li>
					<?php echo "<a href='news.php?ip_mh=$_GET[ip_mh]'>Điểm danh</a>";?>
				</li>
				<li>
					<?php echo "<a href='points.php?ip_mh=$_GET[ip_mh]'>Quản lý điểm</a>";?>
				</li>
				<li class="active">
					<?php echo "<a href='contact.php?ip_mh=$_GET[ip_mh]'> Thống kê</a>";?>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="section">
			<h1>Thống kê lớp môn học</h1>
			<p>
				bạn có thể download bảng điểm tổng kết về điểm, chuyên cần của sinh viên
			</p>
			<h2> Bảng theo dõi chuyên cần </h2>
			<a class="more" <?php echo "href='taobangchuyencan.php?ip_mh=$_GET[ip_mh]'"; ?> > Download </a> 
			<br>
			<br>
			<h2> Bảng điểm tổng kết </h2>
			<a class="more" <?php echo "href='taobangdiem.php?ip_mh=$_GET[ip_mh]'"; ?> > Download </a>
			
		</div>
		<div class="section contact">
			<p>
				Lớp môn học <span><?php echo "$_GET[ip_mh]";?></span>
			</p>
			<p>
				 <span><?php $a = mysql_query("SELECT * FROM monhoc WHERE MaLop = '$_GET[ip_mh]'");
				 				while($r=mysql_fetch_array($a)) echo "$r[Ten]";
				 		?>
				 </span>
			</p>
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