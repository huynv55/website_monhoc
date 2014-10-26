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
			<h1>Danh sách sinh viên tham gia Lớp: <?php echo "$_GET[ip_mh]"; ?></h1>
			<p>
				bạn có thể cập nhật danh sách sinh viên của lớp môn học này
			</p>
            <div>
				
				<form method="post" <?php echo "action='taosinhvien.php?ip_mh=$_GET[ip_mh]'";?> id="taosinhvien">
					
					<table>
						<tr>
						<td> Mã sinh viên</td>
						<td> Tên </td>
						<td> Lớp </td>
						<td> Ngày sinh </td>
						<td> Giới tính</td>
						</tr>
						<tr>
						<td> <input type="text" name="Masinhvien" id="Masinhvien"/></td>
						<td> <input type="text" name="Ten" id="Ten"/> </td>
						<td> <input type="text" name="Lop" id="Lop"/> </td>
						<td> <input type="date" name="ngaysinh" id="ngaysinh"/> </td>
						<td> <select name="sex" id="sex">
                        		<option selected> Nam </option>
                                <option> Nữ </option>
                        	</select></td>
						</tr>

					</table>
					<input type="submit" value="thêm" class="more"/>
					<input type="reset" value="nhập lại" class="more"/>
				</form>
			</div>
			<div>

				<table border="1" align="left" bordercolor="#000000"  id="table">
					<tr>
						<td><strong> Mã sinh viên</strong></td>
						<td><strong> Tên </strong></td>
						<td><strong> Lớp </strong></td>
						<td><strong> Ngày sinh </strong></td>
						<td><strong> Giới tính</strong></td>
						<td><strong>sửa</strong></td>
						<td><strong>xóa</strong></td>
						</tr>

					<?php
					
						$sql="select * from  sinhvien where Malop='$_GET[ip_mh]'";
						$query=mysql_query($sql);
						
							 while($row=mysql_fetch_array($query))
								{
									echo "<tr>
											<td>$row[Masinhvien]</td>
											<td>$row[Ten]</td>
											<td>$row[Lop]</td>
											<td>$row[Ngaysinh]</td>										
											<td>$row[sex]</td>
											<td> <a href='suasinhvien.php?ip_sinhvien=$row[Masinhvien]&ip_mh=$_GET[ip_mh]'><image src='images/b_edit.png'></a></td>
											<td> <a href='xoasinhvien.php?ip_sinhvien=$row[Masinhvien]&ip_mh=$_GET[ip_mh]'><image src='images/b_drop.png'></a></td>
											</tr>";
								}
					?>
				</table>
				
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